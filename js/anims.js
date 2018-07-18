var templateUrl = object_name.templateUrl;
/**
 * Tippy script
 * Passively looks for elements with 'tipped' class
 */
tippy('.tipped', {
  delay: 100,
  arrow: true,
  arrowType: 'round',
  size: 'large',
  duration: 500,
  placement: 'bottom',
  animation: 'shift-toward'
});

/**
 * Typing effect init and settings
 * Requires element with 'typing' ID
 */

if(document.getElementById('typing')){
  var typeOptions = {
    strings: ["Lead Intelligence.", "Regulatory Compliance.", "Lead Scoring.", "Proof of Submission.", "Lead Archiving.", "Fraud Prevention."],
    typeSpeed: 50,
    backSpeed: 25,
    backDelay: 3000,
    loop: true
  }
  var typed = new Typed('#typing', typeOptions);
}

/**
 * Particles init
 * Requires element with 'honeycomb' ID
 */
if(document.getElementById('honeycomb')){
  particlesJS.load('honeycomb', templateUrl+'/js/nes-particles.json');
}

/** jQuery Encapsulation */
(function($){

  /**
   * Mobile Detection
   */
  var md = new MobileDetect(window.navigator.userAgent);
  var offsetValue = (md.mobile()) ? 100 : 500;
  $('#nes-canvas').addClass('ismobile');
  
  /**
   * Animate on Scroll settings
   */
  AOS.init({
    offset: offsetValue,
    duration: 750
  });

  /**
   * Slide Menu animation
   */
  if($('#toggle-platform-menu')){
    
    var active = false;
    $('#toggle-platform-menu').click('on', function(e){
      
      e.preventDefault();
      $(this).toggleClass('is-active');
        
      if ( !active ) {

        $('#platform-menu').css('display', 'block');
        $('#platform-menu').transition({
          opacity: 1,
          scale: 1
        }, 250);

        active = true;

      } else {
        
        $('#platform-menu').transition({
            opacity: 0,
            scale: 0.95
          }, 250, function(){
          $('#platform-menu').css('display', 'none');
        });

        active = false;

      }

      $(document).click(function(event) {
        //if you click on anything except the modal itself or the "open modal" link, close the modal
        if (!$(event.target).closest("#platform-menu,#toggle-platform-menu").length) {

          $('#toggle-platform-menu').removeClass('is-active');
          $('#platform-menu').transition({
              opacity: 0,
              scale: 0.95
            }, 250, function(){
            $('#platform-menu').css('display', 'none');
          });

          active = false;
        }
      });

    });
  }

  /**
   * Smooth Scroll from Request Demo button
   */
  $('a[href="#formblock"]').click(function(event) {
    // On-page links
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({scrollTop: target.offset().top}, 2000, 'easeInOutExpo', function() {
        });
      }
    }
  });

  /**
   * Scroll functions
   */
  $(window).on("scroll", function() {

    /**
     * Hide McAfee Badge at bottom of screen
     */
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
      $('#mfesecure-ts-image').addClass('make-disappear');
    } else {
      $('#mfesecure-ts-image').removeClass('make-disappear');
    }

  });

})(jQuery);

/*
{
  const programmingLanguages = document.getElementById("programming-languages");

  const languages = [
    "clojure",
    "erlang",
    "fsharp",
    "go",
    "haskell",
    "javascript",
    "php",
    "python",
    "r",
    "ruby",
    "rust",
    "scala",
    "scheme",
    "swift"
  ];

  const getRandomLanguage = () =>
    languages[getRandomInt(0, languages.length)];

  const getRandomY = (x, min, max) => {
    if (Math.abs(x) > min) return	getRandomInt(-max, max);
    const minY = Math.sqrt(Math.pow(min, 2) - Math.pow(x, 2));
    const randomSign = Math.round(Math.random()) * 2 - 1;
    return randomSign * getRandomInt(minY, max);
  };

  const createIcon = language => {
    const icon = document.createElement("img");
    icon.alt = language;
    icon.src = `/img/v3/home/programming-languages/${language}.svg`;
    programmingLanguages.appendChild(icon);
    icon.setAttribute('aria-hidden', true);
    return icon;
  };

  const animateIcon = icon => {
    const time = { total: 12000 };
    const maxDistance = 120;
    const maxRotation = 800;
    const transform = {};
    define(transform, "translateX", getRandomInt(-maxDistance, maxDistance));
    define(transform, "translateY", getRandomY(transform.translateX, 60, maxDistance));
    define(transform, "rotate", getRandomInt(-maxRotation, maxRotation));

    const tick = now => {
      if (time.start == null) define(time, "start", now);
      define(time, "elapsed", now - time.start);
      const progress = easeOutQuart(time.elapsed, 0, 1, time.total);

      icon.style.opacity = Math.abs(1 - progress);
      icon.style.transform = Object.keys(transform).map(key => {
        const value = transform[key] * progress;
        const unit = /rotate/.test(key) ? "deg" : "px";
        return `${key}(${value}${unit})`;
      }).join(" ");

      time.elapsed < time.total
      ? requestAnimationFrame(tick)
      : programmingLanguages.removeChild(icon);
    };

    requestAnimationFrame(tick);
  };

  interval(pipe(getRandomLanguage, createIcon, animateIcon), 500);
}
*/