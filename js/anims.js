var templateUrl = object_name.templateUrl;
console.log(templateUrl);
/**
 * Tippy script
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
 * Typing effect settings
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
 */
particlesJS.load('honeycomb', templateUrl+'/js/nes-particles.json');

/** jQuery Encapsulation */
(function($){
  //console.log("Custom jQuery Loaded.");
  
  /**
   * Mobile Detection
   */
  var md = new MobileDetect(window.navigator.userAgent);
  var offsetValue = (md.mobile()) ? 100 : 500;
  console.log(offsetValue);
  
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
  var menuInit = false;
  $('#openmenu').on('click', function(e){
    e.preventDefault();

    if(!menuInit){
      menuInit = true;
      $('.fa-bars').animate({opacity: 0});
      $('#nes-canvas').animate({right: '14rem'}, 500);
    } else {
      menuInit = false;
      $('.fa-bars').animate({opacity: 1});
      $('#nes-canvas').animate({right: '0rem'}, 500);
    }
  });

  /**
   * Smooth Scroll from Request Demo button
   */
  $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
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
          // Callback after animation
          // Must change focus!
          /*
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
          */
        });
      }
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