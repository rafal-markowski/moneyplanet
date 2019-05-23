    <section class="regulations">
        <div class="container">
            <p>Wskazane parametry oferty mają charakter informacyjny, są oparte o wyliczenia na podstawie informacji publicznie dostępnych na stronie należącej do Aasa Polska S.A.. Money Beat Sp. z o.o. nie ponosi odpowiedzialności za treść powyższej oferty.</p>
            <p>
                Reprezentatywny przykład pożyczki
                <br>
                Poniżej prezentujemy ważną informację na moment wygenerowania z naszego systemu danych o całkowitym koszcie kredytu konsumpcyjnego (pożyczki) ponoszonym przez konsumenta wyrażonym jako wartość procentowa całkowitej kwoty kredytu w stosunku rocznym. Wartość ta może ulec nieznacznym zmianom (z uwagi na zmianę parametrów pożyczki) w stosunku do informacji wygenerowanej w innym czasie na wydruku oferty umowy pożyczki, którą Pożyczkodawca będzie Pani / Panu udostępniał jako ofertę zawarcia umowy. Prosimy o uważne sprawdzenie lub porównanie tychże informacji.</p>
            <p>Warunkiem udzielenia pożyczki jest pozytywny wynik oceny zdolności kredytowej. Rzeczywista roczna stopa oprocentowania dla reprezentatywnego przykładu pożyczki w wysokości 7000 zł na okres 24 miesięcy wynosi 75,94%. Rata miesięczna 499,52 zł. Roczna stopa oprocentowania (stopa stała) 10%, odsetki od kwoty pożyczki – 755,73 zł, opłata przygotowawcza 300 zł, prowizja 3 934 zł. Całkowita kwota do zapłaty przez konsumenta to 11 989,73 zł (stan na dzień 01.03.2019 r.).</p>
            <p>Pożyczkodawcą jest Aasa Polska S.A., ul. Hrubieszowska 2, 01-209 Warszawa. NIP: 5252528111, Regon 146017266 zarejestrowana w Sądzie Rejonowym dla m.st. Warszawy w Warszawie XII Wydział Gospodarczy Krajowego Rejestru Sądowego pod numerem KRS 0000411939 Kapitał zakładowy 42 000 000 zł (wpłacony w całości).</p> 
            <p>Administratorem danych osobowych jest Money Beat Sp. z o.o. z siedzibą przy ul. Prosta 68, 00-838 Warszawa; Odnaol Sp. z o.o., KRS: 0000624003, z siedzibą przy ul. Prosta 68, 00-838; SilkLead Sp. z o.o., KRS: 0000716541, z siedzibą przy ul. Marka Kotańskiego 8/3, 10-166 Olsztyn. Dane osobowe są przekazane dobrowolnie i będą przetwarzane w celach marketingowych Money Beat Sp. z o.o., Odnaol Sp. z o.o., SilkLead Sp. z o.o. W razie wyrażenia zgody, dane osobowe mogą być, przetwarzane w celach marketingowych związanych z przedstawieniem oferty, udostępnianie podmiotom współpracującym z Money Beat Sp. z o.o., Odnaol Sp. z o.o., SilkLead Sp. z o.o.. Dane osobowe mogą być również udostępniane podmiotom upoważnionym na podstawie przepisów prawa. Posiada Pani/Pan prawo dostępu do treści swoich danych oraz ich poprawiania.</p>
            <p>Money Beat Sp. z o.o. (właściciel portalu Ratka.pl) z siedzibą w Warszawie, KRS 0000577778 o kapitale zakładowym 6000 zł informuje, iż nie pobiera wynagrodzenia bezpośrednio od kredytobiorców, współpracuje bezpośrednio lub za pośrednictwem, za wynagrodzeniem, z Aasa Polska S.A.</p>
            <p>Ta strona używa ciasteczek (COOKIE). Dowiedz się więcej o celu ich używania i zmianie ustawień cookie w przeglądarce odwiedzając nową Politykę Poufności. Korzystając ze strony wyrażasz zgodę na używanie cookie, zgodnie z aktualnymi ustawieniami przeglądarki.<p>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__logo">
            <a href="<?php echo get_site_url(); ?>" class="logo-big">
                <span class="logo__span">Money</span>
                Planet
            </a>
        </div>
        <div class="container">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => 'ul',
                    'menu_class' => 'footer__menu'
                ));
            ?>
            <a class="footer__submit form__submit" href="<?php echo get_site_url(); ?>">WEŹ POŻYCZKĘ</a>
        </div>
    </footer>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <?php if(is_page_template('page-homepage.php') || is_page_template('page-pozyczka-ratalna.php')): ?>
        <script src="<?php echo get_template_directory_uri();?>/assets/scripts/rangeslider.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/scripts/form-homepage.js"></script>
    <?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>