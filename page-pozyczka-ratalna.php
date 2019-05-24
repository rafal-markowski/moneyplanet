<?php
/*
Template Name: Strona główna - pożyczka ratalna
*/
get_header(); ?>
    <header class="header-homepage">
        <div class="container">
            <div class="row">
                <div class="header-homepage__left col-lg-6 pr-lg-0">
                    <div class="header-homepage__wrapper-form">
                        <div class="header-homepage__tab">
                            <a href="<?php echo get_site_url(); ?>" class="header-homepage__tab-item load">Pożyczka</a>
                            <a class="header-homepage__tab-item">Ratalna</a>
                        </div>
                        <?php echo get_template_part('partials/form-pozyczka-ratalna'); ?>
                    </div>
                </div>
                <div class="header-homepage__item-2 col-lg-6 px-0 order-first order-lg-last">
                    <h1 class="header-homepage__h1">Pożyczki przez internet na raty bez zaświadczeń</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="must-have">
        <div class="container">
            <header>
                <h2 class="must-have__h2">Kto otrzyma pożyczkę ratalną</h2>
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
        </div>
    </section>
    <section class="references">
        <div class="container">
            <h2 class="references__h2 mb-4 mb-lg-5">Opinie</h2>
            <div class="row">
                <article class="col-lg-4 col-sm-6 d-flex flex-column mb-4 mb-lg-0">
                    <img class="references__mobile-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/milena-mobile.png" alt="">
                    <img class="references__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/milena.png" alt="">
                    <div class="references__content pt-5 px-3 px-lg-4 pb-1">
                        <header class="references__header mb-2">
                            <h3 class="references__h3 mb-0">Radosław, 23</h3>
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                            </div>
                        </header>
                        <p>Pożyczka z MoneyPlanet jest świetna. Potrzebowałem szybkiego zastrzyku gotówki, a oni zaproponowali mi najlepsze rozwiązanie. Gorąca polecam</p>
                    </div>
                </article>
                <article class="col-lg-4 col-sm-6 d-flex flex-column mb-4 mb-lg-0">
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
                        <p>Wyjazd na wakacje był zagrożony, bo musiałam wydać oszczędności na inne, niespodziewane rzeczy. Nie chciałam jednak rezygnować z wakacji życia. MoneyPlanet mi pomogło. U nich pożycza się łatwo, szybko i przyjemnie.</p>
                    </div>
                </article>
                <article class="col-lg-4 col-sm-6 d-flex flex-column">
                    <img class="references__mobile-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/milena-mobile.png" alt="">
                    <img class="references__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/milena.png" alt="">
                    <div class="references__content pt-5 px-3 px-lg-4 pb-1">
                        <header class="references__header mb-2">
                            <h3 class="references__h3 mb-0">Karol, 20</h3>
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star.png" alt="">
                            </div>
                        </header>
                        <p>W MoneyPlanet wziąłem swoja pierwszą pożyczkę. Mili konsultanci chętnie wyjaśnili mi, co i jak. Dzięki tej firmie mam naprawdę miłe wspomnienia z pożyczania i wiem już, jaką ofertę będę polecać wszystkim moim znajomym.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="inference">
        <div class="container">
            <h2 class="inference__h2 mb-4 mb-lg-5">Proces wnioskowania o pożyczkę ratalną</h2>
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
        </div>
    </section>
<?php get_footer(); ?>