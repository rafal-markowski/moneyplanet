
var generateTable;
jQuery(document).ready(function($) {

	var calculate = function(){
		
		amount = $('#amount').val();
		amount = amount.substr(amount.lastIndexOf(" ")+1);
		
		period = $('#period').val();
		period = period.substr(amount.lastIndexOf(" ")+1);
		
		amount2 = parseFloat($('#amount').val());
		period2 = parseFloat($('#period').val());
		
		$('#calc-amount').html(amount);
		$('#calc-period').html(period);
		
		result = AasaCalculator.calculate(parseInt(amount), parseInt(period));
		
		$('#calc-first_row').html(result.firstPayment );
		$('#calc-tot').html(result.totalToBePaid );
		$('#calc-int').html(result.intTotal );
		$('#calc-admin_fee').html(result.adminFee );
		$('#calc-apr').html(result.APR + '%');
		$('#calc-percent').html(result.interest + '%');
		$('#calc-fee').html(result.adminFee );
		$('.calc-amount').html(amount);
		$('.calc-period').html(period);
	};
			var loanTermMonths = $('<input />').attr({
				type:'hidden',
				step:'1',
				min: $('#period option:first').val(),
				max: $('#period option:last').val(),
				value:$('#period option:selected').val()});				
			
			$('#period').before(loanTermMonths).change(function(){
				loanTermMonths.val($(this).val()).change();
				calculate();
			});	
			
			$('#period, #amount').change(calculate);
			
			calculate();		

		 
	generateTable = function(){

		data = '';
		for(amount=1000;amount<=10000;amount+=100) {
			
			for(time=8;time<=24;time++) {
				
				result = calcMonthly(amount, time);

				total = result[1];
				interest = result[3];
				apr = result[2];
				percent = result[5];
				fee = result[6];
				row = result[0];
				cost = total - amount;
//				firm_id 		    amount,        time,         time_type,     percent,        fees,       interest,        apr,        installment,cost
				data += '2' + ';' + amount + ';' + time + ';' + 'month' + ';' + percent + ';' + fee + ';' + interest + ';' + apr + ';' + row + ';' + cost + "\n";
			}
			
			
			
		}
		return data;
	};	
		
});