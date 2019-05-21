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
    <section class="must-have">
        <div class="must-have__wrapper container">
            <div class="must-have__border">
                <h2 class="must-have__h2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/checked.png" alt=""> 
                    <span class="mt-1 ml-2 ml-lg-4">Żeby uzyskać pożyczkę nalęży mieć</span>
                </h2>
                <ul class="must-have__list mt-4 pl-lg-4 pr-4">
                    <li class="must-have__list-item">
                        <span class="must-have__list-style mr-3 mr-lg-4">1</span>
                        20 lat
                    </li>
                    <li class="must-have__list-item">
                        <span class="must-have__list-style mr-3 mr-lg-4">2</span>
                        Pesel
                    </li>
                    <li class="must-have__list-item">
                        <span class="must-have__list-style mr-3 mr-lg-4">3</span>
                        Telefon komórkowy
                    </li>
                    <li class="must-have__list-item">
                        <span class="must-have__list-style mr-3 mr-lg-4">4</span>
                        Stały dochód
                    </li>
                </ul>
            </div>
            <div class="must-have__img"></div>
            <div class="must-have__color"></div>
        </div>
    </section>
    <section class="references">
        <div class="container">
            <h2 class="references__h2 mb-4 mb-lg-5">Zaufało nam już ponad <span class="references__big mx-2">20000</span> Polaków</h2>
            <div class="row no-gutters">
                <article class="col-lg-4 col-sm-6 mb-3 mb-lg-0">
                    <div class="mr-sm-2 mx-lg-2">
                        <div class="references__img"></div>
                        <div class="references__content pt-5 px-3 px-lg-4 pb-1">
                            <header class="references__header mb-2">
                                <h3 class="references__h3 mb-0">Amelia, 23</h3>
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                </div>
                            </header>
                            <p>Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-sm-6 mb-3 mb-lg-0">
                    <div class="mr-sm-2 mx-lg-2">
                        <div class="references__img"></div>
                        <div class="references__content pt-5 px-3 px-lg-4 pb-1">
                            <header class="references__header mb-2">
                                <h3 class="references__h3 mb-0">Amelia, 23</h3>
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                </div>
                            </header>
                            <p>Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-sm-6">
                    <div class="mr-sm-2 mx-sm-2">
                        <div class="references__img"></div>
                        <div class="references__content pt-5 px-3 px-lg-4 pb-1">
                            <header class="references__header mb-2">
                                <h3 class="references__h3 mb-0">Amelia, 23</h3>
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                </div>
                            </header>
                            <p>Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później zaczął być używany przemyśle elektronicznym.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="inference">
        <div class="container">
            <h2 class="inference__h2 mb-4 mb-lg-5">Proces wnioskowania o pożyczkę</h2>
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                    <article class="inference__item mr-md-2">
                        <div>
                            <h3 class="inference__h3 mb-4">
                                <span class="inference__number">1.</span>
                                Wybierz kwotę i okres pożyczki
                            </h3>
                            <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/inference-1.png" alt="">
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                    <article class="inference__item mr-lg-2">
                        <div>
                            <h3 class="inference__h3 mb-4">
                                <span class="inference__number">2.</span>
                                Wypełnij formularz online
                            </h3>
                            <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/inference-2.png" alt="">
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 mb-md-0">
                    <article class="inference__item mr-md-2">
                        <div>
                            <h3 class="inference__h3 mb-4">
                                <span class="inference__number">3.</span>
                                Zweryfikuj się online lub umów z kurierem
                            </h3>
                            <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/inference-3.png" alt="">
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="inference__item">
                        <div>
                            <h3 class="inference__h3 mb-4">
                                <span class="inference__number">4.</span>
                                Otrzymaj pieniądze na konto lub odbierz je na poczcie
                            </h3>
                            <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/inference-4.png" alt="">
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>