window.ExcelFormulas = {

  PVIF: function(rate, nper) {
    return Math.pow(1 + rate, nper);
  },

  FVIFA: function(rate, nper) {
    return rate == 0 ? nper : (this.PVIF(rate, nper) - 1) / rate;
  },

  PMT: function(rate, nper, pv, fv, type) {
    if (!fv) fv = 0;
    if (!type) type = 0;

    if (rate == 0) return -(pv + fv) / nper;

    var pvif = Math.pow(1 + rate, nper);
    var pmt = rate / (pvif - 1) * -(pv * pvif + fv);

    if (type == 1) {
      pmt /= (1 + rate);
    };

    return pmt;
  },

  IPMT: function(pv, pmt, rate, per) {
    var tmp = Math.pow(1 + rate, per);
    return 0 - (pv * tmp * rate + pmt * (tmp - 1));
  },

  PPMT: function(rate, per, nper, pv, fv, type) {
    if (per < 1 || (per >= nper + 1)) return null;
    var pmt = this.PMT(rate, nper, pv, fv, type);
    var ipmt = this.IPMT(pv, pmt, rate, per - 1);
    return pmt - ipmt;
  },

  DaysBetween: function(date1, date2) {
    var oneDay = 24 * 60 * 60 * 1000;
    return Math.round(Math.abs((date1.getTime() - date2.getTime()) / oneDay));
  },

  // Change Date and Flow to date and value fields you use
  XNPV: function(rate, values) {
    var xnpv = 0.0;
    var firstDate = new Date(values[0].Date);
    for (var key in values) {
      var tmp = values[key];
      var value = tmp.Flow;
      var date = new Date(tmp.Date);
      xnpv += value / Math.pow(1 + rate, this.DaysBetween(firstDate, date) / 365);
    };
    return xnpv;
  },

  XIRR: function(values, guess) {
    if (!guess) guess = 0.1;

    var x1 = 0.0;
    var x2 = guess;
    var f1 = this.XNPV(x1, values);
    var f2 = this.XNPV(x2, values);

    for (var i = 0; i < 100; i++) {
      if ((f1 * f2) < 0.0) break;
      if (Math.abs(f1) < Math.abs(f2)) {
        f1 = this.XNPV(x1 += 1.6 * (x1 - x2), values);
      } else {
        f2 = this.XNPV(x2 += 1.6 * (x2 - x1), values);
      }
    };

    if ((f1 * f2) > 0.0) return null;

    var f = this.XNPV(x1, values);
    if (f < 0.0) {
      var rtb = x1;
      var dx = x2 - x1;
    } else {
      var rtb = x2;
      var dx = x1 - x2;
    };

    for (var i = 0; i < 100; i++) {
      dx *= 0.5;
      var x_mid = rtb + dx;
      var f_mid = this.XNPV(x_mid, values);
      if (f_mid <= 0.0) rtb = x_mid;
      if ((Math.abs(f_mid) < 1.0e-6) || (Math.abs(dx) < 1.0e-6)) return x_mid;
    };

    return null;
  }

};


window.AasaCalculator = {
		  matrix: (function () {
		    return [
		      [1000,1499,390,0,0.1,6],
		      [1500,1999,590,15,0.1,12],
		      [2000,2499,890,15,0.1,12],
		      [2500,2999,1090,25,0.1,13],
		      [3000,3499,1390,25,0.1,13],
		      [3500,3999,1590,25,0.1,13],
		      [4000,4999,1790,25,0.1,13],
		      [5000,5999,2490,25,0.1,13],
		      [6000,6999,2990,35,0.1,13],
		      [7000,7999,3490,35,0.1,13],
		      [8000,8999,3990,35,0.1,13],
		      [9000,9999,4490,35,0.1,13],
		      [10000,10000,5990,35,0.1,18]
		    ];
		  })(),
		  loanAmount: {min: 1000, max: 10000, step: 100, selected: 5000},
		  loanPeriodInMonths: function (amount) {
		    var minPeriod = 10;
		    for (var i in this.matrix) {
		      if (amount >= this.matrix[i][0]) {
		        minPeriod = this.matrix[i][5];
		      } else {
		        break;
		      }
		    }
		    return {min: minPeriod, max: 24, step: 1, selected: 24};
		  },
		  monthlyFeeAdminFee: function (amount) {
		    var m_fee = 0;
		    var admin_fee = 0;
		    for (var i in this.matrix) {
		      if (amount >= this.matrix[i][0]) {
		        m_fee = this.matrix[i][3];
		        admin_fee = this.matrix[i][2];
		      } else {
		        break;
		      }
		    }
		    return {monthly_fee: m_fee, admin_fee: admin_fee};
		  },
		  calculate: function (amount, period) {
		    var m_fee = 0,
		        int = 0.1,
		        int_tot = 0,
		        tot = 0,
		        first_row = 0,
		        admin_fee, loan_left, cap_row, int_row, admin_fee_row, admin_fee_last, xirr, d, d1, m, y;
		    /* var ret = []; */

		    var loanFees = AasaCalculator.monthlyFeeAdminFee(amount);
		    m_fee = loanFees.monthly_fee;
		    admin_fee = loanFees.admin_fee;

		    var from_date = new Date();
		    from_date.setHours(0);
		    from_date.setMinutes(0);
		    from_date.setSeconds(0);
		    var due_date = new Date();
		    due_date.setHours(0);
		    due_date.setMinutes(0);
		    due_date.setSeconds(0);
		    due_date.setMonth(due_date.getMonth() + 1);
		    //due_date.setDate(due_date.getDate() + 1);
		    d = d1 = due_date.getDate();
		    m = due_date.getMonth();
		    y = due_date.getFullYear();
		    if (d > 28) {
		      if (m == 2) {
		        if (y % 4) {
		          d1 = 28;
		        } else {
		          d1 = 29;
		        }
		      } else {
		        if (d == 31 && (m == 4 || m == 6 || m == 9 || m == 11)) {
		          d1 = 30;
		        }
		      }
		    }
		    loan_left = amount;
		    admin_fee_row = admin_fee / period;
		    admin_fee_row = Math.round(admin_fee_row * 100) / 100;
		    admin_fee_last = admin_fee - (admin_fee_row * (period - 1));
		    admin_fee_last = Math.round(admin_fee_last * 100) / 100;
		    cap_row = Math.round((amount / period) * 100) / 100;
		    var am = -1 * amount;
		    var values = Array({
		      Flow: am,
		      Date: from_date.toDateString()
		    });
		    for (var i = 1; i <= period; ++i == true) {
		      var days = Math.round((due_date.getTime() - from_date.getTime()) / (86400 * 1000));
		      int_row = ((loan_left * int) / 365) * days;
		      int_row = Math.round(int_row * 100) / 100;
		      if (i == period) {
		        admin_fee_row = admin_fee_last;
		        cap_row = loan_left;
		      }
		      var row = cap_row + int_row + admin_fee_row + m_fee;
		      row = Math.round(row * 100) / 100;
		      if (1 == i) {
		        first_row = row;
		      }
		      int_tot += int_row;
		      tot += row;
		      loan_left -= cap_row;
		      ++m;
		      if (m == 13) {
		        ++y;
		        m = 1;
		      }
		      from_date = due_date;
		      due_date = new Date(y, m, d1, 0, 0, 0, 0);
		      values.push({
		        Flow: row,
		        Date: from_date.toDateString()
		      });
		    }
		    xirr = ExcelFormulas.XIRR(values);
		    return {
		      firstPayment: first_row.toFixed(2),
		      totalToBePaid: tot.toFixed(2),
		      APR: (xirr * 100).toFixed(2),
		      intTotal: int_tot.toFixed(2),
		      adminFee: admin_fee,
		      interest: int * 100,
		      monthlyFee: m_fee.toFixed(2)
		    };
		  }
		};



function calcMonthly(amount, period) {
    var m_fee = 0,
        int = 0.1,
        int_tot = 0,
        tot = 0,
        first_row = 0,
        admin_fee, loan_left, cap_row, int_row, admin_fee_row, xirr, d, d1, m, y;
    var ret = Array();

    if (amount >= 1000 && amount < 1500) {
        admin_fee = 490;
        /* m_fee = 0; */
    }

    if (amount >= 1500 && amount < 2000) {
        admin_fee = 1090;
        /* m_fee = 15; */
    }

    if (amount >= 2000 && amount < 2500) {
        admin_fee = 1490;
        /* m_fee = 15; */
    }

    if (amount >= 2500 && amount < 3000) {
        admin_fee = 1990;
        /* m_fee = 25; */
    }

    if (amount >= 3000 && amount < 3500) {
        admin_fee = 2090;
        /* m_fee = 25; */
    }

    if (amount >= 3500 && amount < 4000) {
        admin_fee = 2390;
        /* m_fee = 25; */
    }

    if (amount >= 4000 && amount < 5000) {
        admin_fee = 2790;
        /* m_fee = 25; */
    }

    if (amount >= 5000 && amount < 6000) {
        admin_fee = 3390;
        /* m_fee = 25; */
    }

    if (amount >= 6000 && amount < 7000) {
        admin_fee = 4090;
        /* m_fee = 35; */
    }

    if (amount >= 7000 && amount < 8000) {
        admin_fee = 4790;
        /* m_fee = 35; */
    }

    if (amount >= 8000 && amount < 9000) {
        admin_fee = 5490;
        /* m_fee = 35; */
    }

    if (amount >= 9000 && amount < 10000) {
        admin_fee = 6090;
        /* m_fee = 35; */
    }

    if (amount >= 10000) {
        admin_fee = 6790;
        /* m_fee = 35; */
    }

    var from_date = new Date();
    from_date.setHours(0);
    from_date.setMinutes(0);
    from_date.setSeconds(0);
    var due_date = new Date();
    due_date.setHours(0);
    due_date.setMinutes(0);
    due_date.setSeconds(0);
    due_date.setMonth(due_date.getMonth() + 1);
    //due_date.setDate(due_date.getDate() + 1);
    d = d1 = due_date.getDate();
    m = due_date.getMonth();
    y = due_date.getFullYear();

    if (d > 28)
    {
      if (m == 2)
      {
        if (y % 4) d1 = 28;
        else d1 = 29;
      }
      else
      {
        if (d == 31 && (m == 4 || m == 6 || m == 9 || m == 11)) d1 = 30;
      }
    }

    loan_left = amount;

    admin_fee_row = admin_fee / period;
    admin_fee_row = Math.round(admin_fee_row * 100) / 100;
    admin_fee_last = admin_fee - (admin_fee_row * (period - 1));
    admin_fee_last = Math.round(admin_fee_last * 100) / 100;

    cap_row = Math.round((amount / period) * 100) / 100;

    var am = -1 * amount;

    var values = Array(
            { Flow: am, Date: from_date.toDateString() }
    );

    for (var i = 1; i <= period; ++i == true) {
        var days = Math.round((due_date.getTime() - from_date.getTime()) / (86400 * 1000));

        int_row = ((loan_left * int) / 365) * days;
        int_row = Math.round(int_row * 100) / 100;

        if (i == period) {
            admin_fee_row = admin_fee_last
        }

        if (i == period) {
            cap_row = loan_left
        }

        var row = cap_row + int_row + admin_fee_row + m_fee;
        row = Math.round(row * 100) / 100;

        if (i == 1) {
            first_row = row
        }

        int_tot += int_row;
        tot += row;

        loan_left -= cap_row;
        ++m;
        if (m == 13) {
          ++y;
          m = 1;
        }
        from_date = due_date;
        due_date = new Date(y, m, d1, 0, 0, 0, 0);
        values.push({Flow: row, Date: from_date.toDateString()});

    }
    xirr = ExcelFormulas.XIRR(values);

    var avg_row = tot / period; // Average montlhy payment
    ret[0] = first_row; // First payment
    ret[1] = tot;       // Total to be paid
    ret[2] = xirr*100;  // APR
    ret[3] = int_tot;   // Int total
    ret[4] = admin_fee; // adm fee
    ret[5] = int*100;   // interest
    ret[6] = m_fee;     // Monthly fee

    return ret;
}
