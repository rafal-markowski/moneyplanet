<?php
/*
Template Name: Strona główna
*/
get_header(); ?>
    <header class="header-homepage">
        <div class="container">
            <div class="row">
                <div class="header-homepage__left col-lg-6 pr-lg-0">
                    <div class="header-homepage__wrapper-form">
                        <div class="header-homepage__tab">
                            <div class="header-homepage__tab-item">Pożyczka</div>
                            <div class="header-homepage__tab-item">Ratalna</div>
                        </div>
                        <form class="form">
                            <div class="form__box form-group">
                                <label class="form__label" for="r1">Ile chcesz pożyczyć?</label>
                                <div class="form__range-box">
                                    <div>
                                        <input class="form__range" type="range" min="100" max="10000" value="5000" step="100" id="r1" name="r1"> 
                                    </div>
                                    <div class="form__value">
                                        <span id="r1-value">5000</span>
                                        zł
                                    </div>
                                </div>
                            </div>
                            <div class="form__box mb-2">
                                <label class="form__label" for="r2">Okres pożyczki?</label>
                                <div class="form__range-box">
                                    <div>
                                        <input class="form__range" type="range" min="1" max="72" value="36" step="1" id="r2" name="r2"> 
                                    </div>
                                    <div class="form__value">
                                        <span id="r2-value">36</span>
                                        mieś
                                    </div>
                                </div>
                            </div>
                            <div class="px-3">
                                <div class="form__group">
                                    <span class="form__span">Oprocentowanie</span> 10%
                                </div>
                                <div class="form__group">
                                    <span class="form__span">Odsetki od kwoty pożyczki</span> 162,56zł
                                </div>
                                <div class="form__group">
                                    <span class="form__span">RRSO</span> 107,20%
                                </div>
                                <div class="mb-4">
                                    <span class="form__span">Całkowita kwota do spłaty</span> 3394,54zł
                                </div>
                                <button class="mb-4 form__submit">ZŁÓŻ WNIOSEK</button>
                                <p class="form__p mb-0">Wyliczenia dokonane za pomocą powyższego kalkulatora mają charakter orientacyjny i przykładowy i służą wyłącznie celom informacyjnym i nie mogą być traktowane jako oferta lub zaproszenie do zawarcia umowy pożyczki. Ostateczna oferta pożyczki, w tym wysokość miesięcznej raty oraz całkowitych kosztów pożyczk, uzależniona będzie od indywidualnej oceny zdolności kredytowej pożyczkobiorcy</p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="header-homepage__item-2 col-lg-6 px-0 order-first order-lg-last">
                    <h1 class="header-homepage__h1">Pożyczki ON-LINE na raty</h1>
                </div>
            </div>
        </div>
    </header>
<?php get_footer(); ?>