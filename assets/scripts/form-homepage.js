(function($) {
    $(function() {
        const $body = $('body');
        const $firstTab = $('.header-homepage .header-homepage__tab-item:first-child');
        const $secondTab = $('.header-homepage .header-homepage__tab-item:last-child');

        $firstTab.on('click', function() {
            $body.addClass('first-tab');
            $body.removeClass('second-tab');
        });

        $secondTab.on('click', function() {
            $body.addClass('second-tab');
            $body.removeClass('first-tab');
        });

        //

        const $r1 = $('#r1');
        const $r1V = $('#r1-value');

        const $r2 = $('#r2');
        const $r2V = $('#r2-value');

        $r1.on('input', function() {
            $r1V.text($r1.val());
        });

        $r2.on('input', function() {
            $r2V.text($r2.val());
        });

    });
})(jQuery);