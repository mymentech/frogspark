;(function ($) {



//jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $("#msform .next").click(function () {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50) + "%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale(' + scale + ')',
                    'position': 'absolute'
                });
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $("#msform .previous").click(function () {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1 - now) * 50) + "%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'transform': 'scale(' + scale + ')', 'opacity': opacity});
            },
            duration: 800,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $("#msform .submit").click(function () {
        return false;
    });

    $(document).ready(function () {
        $('#blog_load_more').on('click', function (e) {
            e.preventDefault();
            $(this).text('Loading...');
            var nonce = $(this).data('nonce');
            wpfurls.max_page = $(this).data('total');
            wpfurls.max_page = parseInt(wpfurls.max_page);


            $.post(wpfurls.ajaxurl, {
                "action": "frogspark_loadmore_posts",
                "load_more_nonce": nonce,
                "page": wpfurls.current_page,
            }, function (data) {
                if (data) {
                    $('#blog_load_more').text('Load More Posts');
                    wpfurls.current_page++;
                    $("#our-world-posts-container").append(data);
                    /**
                     * Hide button for last page.
                     */
                    if (wpfurls.current_page === wpfurls.max_page) {
                        $('#blog_load_more').remove();
                    }
                } else {
                    $(this).remove();
                }
            });
        });
        $('.simple_mailchimp_form').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        });


        //mailchimp ajax connection
        $(".smf-submit-button").on('click submit', function (e) {
            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test( $email );
            }
            e.preventDefault();
            $(this).text('Sending...');
            var email = $(this).prev().val();
            if(!email || !validateEmail(email)){
                $(this).prev().attr('placeholder','Enter correct email');
                $(this).prev().val('');
                return false;
            }
            var nonce = $(this).data('smf_s');

            $.post(wpfurls.ajaxurl, {
                action: "mailchimp_connect",
                smf_email:email,
                smf_s:nonce
            }, function (data) {
                data = parseInt(data);
                console.log(data);
                if(200===data){
                    $('.simple_mailchimp_form').html('<p class="text-success">Your E-mail address has been received, thanks</p>');
                }else{
                    alert('Something went wront, please try again later');
                    return false;
                }
            });

            return false;
        });


    });


    $(document).ready(function(){
        $("a.fs-collapse-handle").on('click', function(e){
            e.preventDefault();
            link = $(this).attr('href');
            if($(link).hasClass('fs-collapse')){
                $(link).removeClass('fs-collapse')
            }else{
                $(link).addClass('fs-collapse')
            }

        });
    });


})(jQuery);