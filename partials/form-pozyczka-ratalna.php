<div class="header__wrapper-form">
    <div class="header__tab">
        <a href="<?php echo get_site_url(); ?>" class="header__tab-item load">Pożyczka</a>
        <a class="header__tab-item">Ratalna</a>
    </div>
    <form class="form" method="GET">
        <div class="form__box form-group">
            <label class="form__label" for="amount">Ile chcesz pożyczyć?</label>
            <div class="form__range-box">
                <div>
                    <input class="form__range" type="range" min="100" max="10000" value="2500" step="100" id="amount" name="amount"> 
                </div>
                <div class="form__value">
                    <span id="calc-amount">5000</span>
                    zł
                </div>
            </div>
        </div>
        <div class="form__box mb-2">
            <label class="form__label" for="period">Okres pożyczki?</label>
            <div class="form__range-box">
                <div>
                    <input class="form__range" type="range" min="1" max="72" value="18" step="1" id="period" name="period"> 
                </div>
                <div class="form__value">
                    <span id="calc-period">18</span>
                    mieś
                </div>
            </div>
        </div>
        <div class="px-1 px-sm-3">
            <div class="form__group">
                <span class="form__span">Oprocentowanie</span> 
                <span class="form__value-2" id="calc-percent">10%</span>
            </div>
            <div class="form__group">
                <span class="form__span">Odsetki od kwoty pożyczki</span> 
                <span class="form__value-2" id="calc-int">198.86</span>
                zł
            </div>
            <div class="form__group">
                <span class="form__span">RRSO</span> 
                <span class="form__value-2" id="calc-apr">109.08%</span>
            </div>
            <div class="mb-4">
                <span class="form__span">Całkowita kwota do spłaty </span>
                <span class="form__value-2" id="calc-tot">4238.36</span>
                zł
            </div>
            <button class="mb-4 form__submit">ZŁÓŻ WNIOSEK</button>
            <p class="form__p mb-0">Wyliczenia dokonane za pomocą powyższego kalkulatora mają charakter orientacyjny i przykładowy i służą wyłącznie celom informacyjnym i nie mogą być traktowane jako oferta lub zaproszenie do zawarcia umowy pożyczki. Ostateczna oferta pożyczki, w tym wysokość miesięcznej raty oraz całkowitych kosztów pożyczk, uzależniona będzie od indywidualnej oceny zdolności kredytowej pożyczkobiorcy</p>
        </div>
    </form>
</div>
