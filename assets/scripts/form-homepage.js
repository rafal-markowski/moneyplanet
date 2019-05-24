(function($) {
    $(function() {
        $('body').delegate('.load','click', function(e){
            e.preventDefault();
            var $body = $('body');
            var link = $(this).attr("href");
            var pathname = window.location.pathname;

            if($body.hasClass('first-tab')) {
                $body.addClass('second-tab').removeClass('first-tab');
            } else if($body.hasClass('second-tab')) {
                $body.addClass('first-tab').removeClass('second-tab');
            }

            var hrefs = ['/moneyplanet/', '/moneyplanet/pozyczka-ratalna/', '/moneyplanet', '/moneyplanet/pozyczka-ratalna'];
            var condition = hrefs.some(function(i) {
                return i === pathname;
            });

            if(condition){
                window.history.pushState({path:link},'',link);
                loadPage(link);
            } else {
                loadPage2(link);
            }
        });

        $(window).on("popstate", function(e) {
            loadPage(e.originalEvent.state != null ? e.originalEvent.state.path : '/');
        });

        function loadPage(link) {
            $.ajax({
                type: 'POST',
                url: link,
                dataType: 'html',
                success: function (data) {
                    var response = $(data);
                    var header = response.filter('.header');
                    var form = header.find('.header__wrapper-form');
                    var headerH1 = header.find('.header__h1');
                    var references = response.filter('.references');
                    var inferenceH1 = response.filter('.inference').find('h2');
                    var titlepage = response.filter('title');

                    $('title').replaceWith(titlepage);
                    $('.header__wrapper-form').replaceWith(form);
                    $('.header__h1').text(headerH1.text());
                    $('.references').replaceWith(references);
                    $('.inference__h2').text(inferenceH1.text());
                }
            });
		}	
        
        function loadPage2(link) {
            $.ajax({
                type: 'POST',
                url: link,
                dataType: 'html',
                success: function (data) {
                    var response = $(data);
                    var form =  response.filter('.header').find('.header__wrapper-form');

                    $('.header__wrapper-form').replaceWith(form);
                }
            });
		}	
    });
})(jQuery);