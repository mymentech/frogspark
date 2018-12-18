import $ from 'jquery';
import slick from 'slick-carousel';
import AOS from 'aos';

$('document').ready(() => {
  // Initializing AOS.
  AOS.init({
    duration: 800,
    once: true,
  });
  $(window).scroll(function(){
    AOS.init({
      duration: 800,
      once: true,
    });
  });

  // Sticky navigation bar.
  window.onscroll = function() {myFunction()};
  var navbar = document.getElementById('nav-wrapper');
  var sticky = navbar.offsetTop;
  function myFunction() {
    if (window.pageYOffset > sticky) {
      navbar.classList.add('shadow__item');
      navbar.classList.add('active__nav');
    } else {
      navbar.classList.remove('shadow__item');
      navbar.classList.remove('active__nav');
    }
  }

  // Trigger mobile menu.
  $('.hamburger__wrapper').click(function(){
    $(this).toggleClass('is-active');
    $('#navbar').toggleClass('is-active');
    $('body').toggleClass('body-active-nav');
    $('html').toggleClass('sticky-nav-html');
  });

  // Meet your VitaMY3D slider.
  if($('.carousel__wrapper').length) {
    $('.carousel__wrapper').slick({
      autoplay: false,
      autoplaySpeed: 3000,
      dots: true,
      nextArrow: '<button type="button" class="slick slick-arrow slick-next"><i class="fas fa-chevron-right"></i></button>',
      prevArrow: '<button type="button" class="slick slick-arrow slick-prev"><i class="fas fa-chevron-left"></i></button>',
      responsive: [
        {
          breakpoint: 767,
          settings: {
            arrows: false,
          }
        }
      ]
    });
  }

  if($('.team-carousel__wrapper').length) {
    $('.team-carousel__wrapper').slick({
      autoplay: false,
      autoplaySpeed: 3000,
      infinite: true,
      nextArrow: '<button type="button" class="slick slick-arrow slick-next"><i class="black fas fa-chevron-right"></i></button>',
      prevArrow: '<button type="button" class="slick slick-arrow slick-prev"><i class="black fas fa-chevron-left"></i></button>',
      slidesToScroll: 1,
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 1,
          }
        }
      ]
    });
  }

  if($('.team-carousel__wrapper').length) {
    $('.team-carousel__wrapper .carousel__item').click(function(){
      var ref = $(this).attr('data-ref');
      $('.vitateam-bio__background').addClass('active');
      $('.vitateam-bio__wrapper .vitateam__bio').each(function(){
        var refbio = $(this).attr('data-ref');
        if(ref == refbio) {
          $(this).addClass('active');
        }
      });
    });

    $('.close__bio').click(function(){
      $('.vitateam-bio__background').removeClass('active');
      var bio = $(this).parent('.vitateam__bio').removeClass('active');
    });
  }

  // FAQs.
  $('.faq__item').click(function(){
    $(this).toggleClass('faq__active');
    $(this).children('.faq__content').slideToggle();
    $('.faq__active').not(this).children('.faq__content').slideToggle();
    $('.faq__item').not(this).removeClass('faq__active');
  });

  // Rotate logo wheel.
  $(window).on('scroll', function(){
    var offset = $(window).scrollTop();
    $('.rotate__wheel').css({ transform: 'rotate(' + offset + 'deg)' });
  });

  // var wheel = $('.rotate__wheel'),
  // body = $(document.body),
  // bodyHeight = $body.height();

  // $(window).scroll(function () {
  //   wheel.css({
  //     'transform': 'rotate(' + (body.scrollTop() / bodyHeight * 360) + 'deg)'
  //   });
  // });

  // Vitawheel.
  $(document).ready(function() {   
    var div = 360 / 31;
    var radius = 250;
    var parentdiv = document.getElementById('vitawheel__wrapper');
    var offsetToParentCenter = parseInt(parentdiv.offsetWidth / 2); //assumes parent is square
    var offsetToChildCenter = 20;

    var rotate = 90;

    var   bgArray = ["/app/themes/frogspark/img/gems/gem__8.png"];
          bgArray[1] = "/app/themes/frogspark/img/gems/gem__9.png";
          bgArray[2] = "/app/themes/frogspark/img/gems/gem__10.png";
          bgArray[3] = "/app/themes/frogspark/img/gems/gem__11.png";
          bgArray[4] = "/app/themes/frogspark/img/gems/gem__12.png";
          bgArray[5] = "/app/themes/frogspark/img/gems/gem__13.png";
          bgArray[6] = "/app/themes/frogspark/img/gems/gem__14.png";
          bgArray[7] = "/app/themes/frogspark/img/gems/gem__15.png";
          bgArray[8] = "/app/themes/frogspark/img/gems/gem__16.png";
          bgArray[9] = "/app/themes/frogspark/img/gems/gem__17.png";
          bgArray[10] = "/app/themes/frogspark/img/gems/gem__18.png";
          bgArray[11] = "/app/themes/frogspark/img/gems/gem__19.png";
          bgArray[12] = "/app/themes/frogspark/img/gems/gem__20.png";
          bgArray[13] = "/app/themes/frogspark/img/gems/gem__21.png";
          bgArray[14] = "/app/themes/frogspark/img/gems/gem__22.png";
          bgArray[15] = "/app/themes/frogspark/img/gems/gem__23.png";
          bgArray[16] = "/app/themes/frogspark/img/gems/gem__24.png";
          bgArray[17] = "/app/themes/frogspark/img/gems/gem__25.png";
          bgArray[18] = "/app/themes/frogspark/img/gems/gem__26.png";
          bgArray[19] = "/app/themes/frogspark/img/gems/gem__27.png";
          bgArray[20] = "/app/themes/frogspark/img/gems/gem__28.png";
          bgArray[21] = "/app/themes/frogspark/img/gems/gem__29.png";
          bgArray[22] = "/app/themes/frogspark/img/gems/gem__30.png";
          bgArray[23] = "/app/themes/frogspark/img/gems/gem__31.png";
          bgArray[24] = "/app/themes/frogspark/img/gems/gem__1.png"; // Top of circle.
          bgArray[25] = "/app/themes/frogspark/img/gems/gem__2.png";
          bgArray[26] = "/app/themes/frogspark/img/gems/gem__3.png";
          bgArray[27] = "/app/themes/frogspark/img/gems/gem__4.png";
          bgArray[28] = "/app/themes/frogspark/img/gems/gem__5.png";
          bgArray[29] = "/app/themes/frogspark/img/gems/gem__6.png";
          bgArray[30] = "/app/themes/frogspark/img/gems/gem__7.png";

    var titleArray = ["Vitamin E"];
        titleArray[1] = "Algae";
        titleArray[2] = "Green Tea Extract";
        titleArray[3] = "CoQ10";
        titleArray[4] = "Vita K2";
        titleArray[5] = "Vitamin C";
        titleArray[6] = "Black Pepper Extract";
        titleArray[7] = "Tumeric";
        titleArray[8] = "Omega 3-6-9";
        titleArray[9] = "Ginger";
        titleArray[10] = "Beetroot Powder";
        titleArray[11] = "Vitamin A";
        titleArray[12] = "Iron";
        titleArray[13] = "Tart Cherry";
        titleArray[14] = "Calcium";
        titleArray[15] = "Chromium";
        titleArray[16] = "Vitamin D3";
        titleArray[17] = "Magnesium";
        titleArray[18] = "VitaAmino Blend";
        titleArray[19] = "Vitamin D2";
        titleArray[20] = "Pomegranate Extract";
        titleArray[21] = "Vita Immunity Blend";
        titleArray[22] = "Probiotic";
        titleArray[23] = "Marine Collagen";
        titleArray[24] = "Zinc"; // Top of circle.
        titleArray[25] = "Glocousimne";
        titleArray[26] = "Cordyceps";
        titleArray[27] = "Folic Acid";
        titleArray[28] = "VitaB Blend";
        titleArray[29] = "Vitazymes";
        titleArray[30] = "CLA";

    var contentArray = ["Vitamin E helps maintain healthy skin and eyes, and strengthen the body&#39;s natural defence..."];
        contentArray[1] = "Wildcrafted microalgae (AFA) from Oregon, USA, boosts immune system function; enhances physical...";
        contentArray[2] = "Green tea extract is an antioxidant that is rich in polyphenols, flavonoids and catechins...";
        contentArray[3] = "CoQ10 is a powerful antioxidant--numerous studies have been conducted on the benefits...";
        contentArray[4] = "Naturally sourced from fermented soybeans (natto), or from soy-free sources. K2 helps...";
        contentArray[5] = "Sourced from Camu camu. Vitamin C is essential to many body functions: It helps maintain...";
        contentArray[6] = "Provides stress management support; weight management support; digestive support; and...";
        contentArray[7] = "Helps ease arthritis associated inflammation and joint pain; and provides heart/stroke...";
        contentArray[8] = "Sourced from Ahiflower oil. Omega 3, 6, 9 fatty acids help reduce the risk of heart...";
        contentArray[9] = "Ginger has been used since ancient times in cooking and healing and is given...";
        contentArray[10] = "Helps the body with blood flow; energy; good for menstruating women; and helps athletic...";
        contentArray[11] = "Vitamin A, also known as retinol, has several important functions. These include helping your...";
        contentArray[12] = "Iron is important in making red blood cells, which carry oxygen around the body...";
        contentArray[13] = "Tart cherry is an antioxidant rich in anthocyanins and proanthocyanidins; contains quercetin...";
        contentArray[14] = "Calcium is necessary for keeping teeth and bones strong; a key substance in multiple body...";
        contentArray[15] = "Chromium is involved in making glucose available for energy and contributes to the maintenance...";
        contentArray[16] = "Sourced from lanolin. – It is estimated that globally, approximately one billion people are...";
        contentArray[17] = "Magnesium is necessary for proper muscle contraction, nerve function/transmission, energy...";
        contentArray[18] = "Building and maintaining muscle tissue requires protein, which is made from amino acids...";
        contentArray[19] = "Our Vegan D - Helps the body absorb calcium and phosphorus. Helps strengthen bones. Helps...";
        contentArray[20] = "Pomegranate powder enhances immune function; cardiovascular benefits; and may help regulate...";
        contentArray[21] = "Combines 6 extensively researched mushrooms, plus a powerful botanical, astragalus root...";
        contentArray[22] = "Coming from GANADEN ACTIVE STRAINS with the best and most researched absorption rates of any...";
        contentArray[23] = "Sourced from Marine Algae’s - Collagen is a constituent in tendons, ligaments, joints, bones...";
        contentArray[24] = "Zinc helps maintain the bodies ability to make new cells and enzymes and processing carbohydrate..."; // Top of circle.
        contentArray[25] = "Glucosamine in your body helps keep up the health of your cartilage -- the rubbery tissue that...";
        contentArray[26] = "To Improve stamina and performance. Adenosine, a type of nucleic acid, is found in Cordyceps...";
        contentArray[27] = "Folic acid, known as folate in its natural form, helps the body form healthy red blood cells...";
        contentArray[28] = "VitaB Blend is a combination of the following essential B vitamins to keep you at your best...";
        contentArray[29] = "Enzymes are the primary building block of healthy digestion . In addition to helping digest...";
        contentArray[30] = "Sourced from Flax Seeds - Conjugated linoleic acid, or CLA, refers to a group of chemicals...";
    
    var totalOffset = offsetToParentCenter - offsetToChildCenter;
    for (var i = 0; i <= 30; ++i) {
      var childdiv = document.createElement('div');
      childdiv.className = 'vitawheel__item';
      childdiv.style.position = 'absolute';
      childdiv.style.transform = 'rotate('+(rotate + (div * i))+'deg)';
      childdiv.setAttribute('data-rotate', 'rotate('+(rotate + (div * i))+'deg)');
      childdiv.setAttribute('data-title', titleArray[i]);
      childdiv.setAttribute('data-content', contentArray[i]);
      childdiv.style.backgroundImage = "url("+bgArray[i]+")";
      var y = Math.sin((div * i) * (Math.PI / 180)) * radius;
      var x = Math.cos((div * i) * (Math.PI / 180)) * radius;
      
      childdiv.style.top = (y + totalOffset).toString() + "px";
      childdiv.style.left = (x + totalOffset).toString() + "px";
      parentdiv.appendChild(childdiv);
    }

    $('.vitawheel__item').hover(function(){
      var rotate = $(this).attr('data-rotate');
      $(this).css('transform', ''+rotate+' scale(1.5)');
    }, function(){
      if($(this).hasClass('vitawheel__active')) {
      } else {
        var rotate = $(this).attr('data-rotate');
        $(this).css('transform', ''+rotate+' scale(1)');
      }
    });

    $('.vitawheel__item').click(function(){
      var rotate = $(this).attr('data-rotate');
      $('.vitawheel__item').not(this).removeClass('vitawheel__active');
      $(this).addClass('vitawheel__active');

      if($(this).hasClass('vitawheel__active')) {
        $(this).css('transform', ''+rotate+' scale(1.5)');
      } else {
        $(this).css('transform', ''+rotate+' scale(1)');
      }

      $('.vitawheel__item:not(.vitawheel__active)').each(function(){
        var rotate = $(this).attr('data-rotate');
        $(this).css('transform', ''+rotate+' scale(1)');
      });
      
      var title = $(this).attr('data-title');
      var content = $(this).attr('data-content');

      $('.vitawheel__content').fadeOut('fast', function(){
        setTimeout(function(){
          $('.vitawheel__content').find('h3').text(title);
          $('.vitawheel__content').find('p').text(content);
        }, 250);
      });
      
      setTimeout(function() {
        $('.vitawheel__content').fadeIn('fast', function(){});
      }, 500);

      return false;
    });

  });

});
