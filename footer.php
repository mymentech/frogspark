<!-- Footer Start-->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" data-aos="fade-down">
                <div class="footer-logo">
                    <a href="<?php bloginfo('url') ?>"><img src="<?php echo get_template_directory_uri() ?>/img/footer-logo.png" alt="logo"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12">
                <?php
                wp_nav_menu(array(
                    'menu'            => 'footer-menu',
                    'container_class' => 'footer-pages text-center',
                    'menu_class'      => 'list-unstled list-inline',
                ));
                ?>
                <p class="copy-right-text text-center">These statements have not been evaluted by the Food and Drug
                    Administration. This product is not intended to diagnose, treat, cure or prevent any disease.</p>
            </div>
            <div class="col-md-2 co-sm-12">
                <div class="social-icons">
                    <ul class="list-unstyled list-inline">
                        <li><a href="//www.instagram.com/iamnourish3d/" target="_blank"><img
                                        src="<?php echo get_template_directory_uri() ?>/img/instagram-icon.png"
                                        alt="instagram"></a></li>
                        <li><a href="//twitter.com/IamNourish3d" target="_blank"><img
                                        src="<?php echo get_template_directory_uri() ?>/img/twitter-icon.png"
                                        alt="twitter"></a></li>
                        <li><a href="//www.facebook.com/Nourish3d-578632799204607/" target="_blank"><img
                                        src="<?php echo get_template_directory_uri() ?>/img/facebook-icon.png"
                                        alt="facebook"></a></li>
                    </ul>
                    <small>Website by Artisan</small>
                </div>
            </div>
        </div>

    </div>
</footer>

<!-- nourished-vitamin-area  end-->

<!-- <footer class="grey__bg">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <a href="/#how-nourish-works__section" class="sm underline__item margin-right__spacing">How it works</a>
        <a href="/about-us/" class="sm underline__item margin-right__spacing">About</a>
        <a href="/#contact-cta__section" class="sm underline__item margin-right__spacing">FAQ</a>
        <a href="/#meet-nourish__section" class="sm underline__item margin-right__spacing">Nourishments</a>

        <a href="/#contact-cta__section" class="sm underline__item margin-right__spacing">Contact</a>
      </div>
      <div class="col-md-2 right">
        <a href="https://www.instagram.com/iamnourish3d/" target="_blank" class="sm underline__item margin-left__spacing"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/IamNourish3d" target="_blank" class="sm underline__item margin-left__spacing"><i class="fab fa-twitter"></i></a>
        <a href="https://www.facebook.com/Nourish3d-578632799204607/" target="_blank" class="sm underline__item margin-left__spacing"><i class="fab fa-facebook"></i></a>
      </div>
    </div>
    <div class="splitter"></div>
    <div class="row">
      <div class="col-md-12">
        <a href="/order/" class="green sm underline__item margin-right__spacing">Get Started</a>
        <a href="/account/" class="purple sm underline__item margin-right__spacing">Your Account</a>
      </div>
    </div>
    <div class="row footer__note">
      <div class="col-md-5">
        <p class="xs black__light no__margin">These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease.</p>
      </div>
      <div class="col-md-7">
        <p class="xs right black__light no__margin">Website by Frogspark</p>
      </div>
    </div>
  </div>
</footer> -->
<?php wp_footer(); ?>

<link rel="stylesheet" type="text/css"
      href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script src="https://use.fontawesome.com/f4ad562077.js"></script>
<script>
    window.addEventListener("load", function () {
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#1c4a6e"
                },
                "button": {
                    "background": "#ffffff",
                    "text": "#1c4a6e"
                }
            },
            "position": "bottom-left",
            "content": {
                "href": "http://vitamyne.frogspark.agency/cookie-policy/"
            }
        })
    });
</script>


<script>
    var catcount = document.getElementsByClassName("accordion-cat");
    var i;

    for (i = 0; i < catcount.length; i++) {
        catcount[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>


<script>

    $(function () {

        $(".vitawheel__item").on({
            mouseenter: function () {
                //stuff to do on mouse enter
                $(this).click()
            },
            mouseleave: function () {
                //stuff to do on mouse leave
            }
        });


        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 80
                    }, 1000);

                    $("#navbar").removeClass("is-active");
                    $(".hamburger__wrapper").removeClass("is-active");
                    $("html").removeClass("sticky-nav-html");
                    $("body").removeClass("body-active-nav");

                    return false;
                }
            }
        });
    });

</script>
<script type="text/javascript">
    $(".accordion li h5").click(function () {
        var current_li = $(this).parent();
        $(".accordion li div").each(function (i, el) {
            if ($(el).parent().is(current_li)) {
                $(el).prev().toggleClass("plus");
                $(el).slideToggle();
            } else {
                $(el).prev().removeClass("plus");
                $(el).slideUp();
            }
        });
    });
    $('.accordion li > div').hide();
    $('.accordion li h5').first().addClass("plus");
    $('.accordion li > div').first().show().addClass("plus");
</script>


</body>
</html>