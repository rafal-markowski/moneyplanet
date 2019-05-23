(function($) {
    $(function() {
        $('body').delegate('.load','click', function(e){
            e.preventDefault();
            var $body = $('body');
            var link = $(this).attr("href");

            if($body.hasClass('first-tab')) {
                $body.addClass('second-tab').removeClass('first-tab');
            } else if($body.hasClass('second-tab')) {
                $body.addClass('first-tab').removeClass('second-tab');
            }
            
            if(link!=window.location){
                window.history.pushState({path:link},'',link);
                // dataLayer.push({ event: 'pageview', page: { path: link} });
            }

            loadPage(link);
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
                    var form = response.filter('.header-homepage').find('.header-homepage__wrapper-form');
                    var titlepage = response.filter('title');
                    
                    $('title').replaceWith(titlepage);
                    $('.header-homepage__wrapper-form').replaceWith(form);
                }
            });
		}	
    });
})(jQuery);