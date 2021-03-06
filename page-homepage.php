<?php
/*
Template Name: Strona główna
*/
get_header(); ?>
    <header class="header">
        <?php echo get_template_part('partials/header') ?>
    </header>
    <div class="container">
        <section class="must-have">
            <header>
                <h2 class="must-have__h2">Kto otrzyma pożyczkę</h2>
            </header>
            <div class="must-have__wrapper">
                <div class="must-have__border">
                    <h3 class="must-have__h3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/checked.png" alt=""> 
                        <span class="mt-1 ml-2 ml-lg-4">Żeby otrzymać pożyczkę, należy mieć</span>
                    </h3>
                    <ul class="must-have__list mt-4 pl-lg-4 pr-4">
                        <li class="must-have__list-item">
                            <span class="must-have__list-style mr-3 mr-lg-4">1</span>
                            20 lat
                        </li>
                        <li class="must-have__list-item">
                            <span class="must-have__list-style mr-3 mr-lg-4">2</span>
                            dowód osobisty
                        </li>
                        <li class="must-have__list-item">
                            <span class="must-have__list-style mr-3 mr-lg-4">3</span>
                            stały dochód
                        </li>
                        <li class="must-have__list-item">
                            <span class="must-have__list-style mr-3 mr-lg-4">4</span>
                            telefon komórkowy
                        </li>
                        <li class="must-have__list-item">
                            <span class="must-have__list-style mr-3 mr-lg-4">5</span>
                            konto w banku
                        </li>
                    </ul>
                </div>
                <div class="must-have__img"></div>
                <div class="must-have__color"></div>
            </div>
        </section>
        <section class="references">
            <header class="mb-4 mb-lg-5">
                <h2 class="references__h2">Sprawdź opinie o pożyczce bez zaświadczeń!</h2>
            </header>
            <div class="row">
                <article class="col-lg-4 col-sm-6 d-flex flex-column mb-4 mb-lg-0">
                    <img class="references__mobile-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/milena-mobile.png" alt="">
                    <img class="references__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/milena.png" alt="">
                    <div class="references__content pt-5 px-3 px-lg-4 pb-1">
                        <header class="references__header mb-2">
                            <h3 class="references__h3 mb-0">Kazik, 39</h3>
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                            </div>
                        </header>
                        <p>Remont łazienki nie mógł już dłużej czekać, ale kompletnie nie miałem na niego pieniędzy. Na szczęście znalazłem ofertę MoneyPlanet. Wziąłem pożyczkę i teraz mam świetną łazienkę i spłacam raty tak lekkie, że nawet ich nie odczuwam. MoneyPlanet spisało się na medal.</p>
                    </div>
                </article>
                <article class="col-lg-4 col-sm-6 d-flex flex-column mb-4 mb-lg-0">
                    <img class="references__mobile-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/milena-mobile.png" alt="">
                    <img class="references__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/milena.png" alt="">
                    <div class="references__content pt-5 px-3 px-lg-4 pb-1">
                        <header class="references__header mb-2">
                            <h3 class="references__h3 mb-0">Milenia, 22</h3>
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                            </div>
                        </header>
                        <p>Koszty na studiach potrafią być wysokie. Jako studentka nie potrafiłabym spłacić pożyczki na raz, zaczęłam więc szukać pożyczki na raty, która pomogłaby mi w moich problemach. MoneyPlanet odpowiedziało od razu. Dawno nie byłam tak zadowolona z obsługi klienta!</p>
                    </div>
                </article>
                <article class="col-lg-4 col-sm-6 d-flex flex-column">
                <img class="references__mobile-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/milena-mobile.png" alt="">
                    <img class="references__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/milena.png" alt="">
                    <div class="references__content pt-5 px-3 px-lg-4 pb-1">
                        <header class="references__header mb-2">
                            <h3 class="references__h3 mb-0">Kasia, 56</h3>
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                            </div>
                        </header>
                        <p>Moja córka potrzebowała wsparcia finansowego, a ja niestety nie miałam potrzebnych środków. Ale przecież nie zostawię dziecka w potrzebie! Z pomocą przyszła mi oferta MoneyPlanet. Bardzo polecam tę firmę, bo pomogli nam w dużych problemach finansowych.</p>
                    </div>
                </article>
            </div>
        </section>
        <section class="inference">
            <header class="mb-4 mb-lg-5">
                <h2 class="inference__h2 mb-0">Proces wnioskowania o pożyczkę chwilówkę</h2>
            </header>
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
                                Zweryfikuj się za pomocą swojego konta bankowego
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
                                Sprawdź konto, na którym szybko pojawią się pieniądze
                            </h3>
                            <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/inference-4.png" alt="">
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>
<?php get_footer(); ?>