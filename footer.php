<footer class="grey__bg">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <a href="/#how-nourish-works__section" class="sm underline__item margin-right__spacing">How it works</a>
        <a href="/about-us/" class="sm underline__item margin-right__spacing">About</a>
        <a href="/#contact-cta__section" class="sm underline__item margin-right__spacing">FAQ</a>
        <a href="/#meet-nourish__section" class="sm underline__item margin-right__spacing">Nourishments</a>
<!--         <a href="#" class="sm underline__item margin-right__spacing">Blog</a> -->
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
</footer>
<?php wp_footer(); ?>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script src="/app/themes/frogspark/js/dist/mp-form.js"></script>
<script>
window.addEventListener("load", function(){
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
})});
</script>

<script>
  
  $(function() {
    
    $(".vitawheel__item").on({
      mouseenter: function () {
        //stuff to do on mouse enter
        $(this).click()
      },
      mouseleave: function () {
        //stuff to do on mouse leave
      }
    });
    
    
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
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

</body>
</html>