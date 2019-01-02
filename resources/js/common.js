
Cookie = {
  get: function(name) {
    var cookie = " " + document.cookie;
    var search = " " + name + "=";
    var setStr = null;
    var offset = 0;
    var end = 0;
    if (cookie.length > 0) {
      offset = cookie.indexOf(search);
      if (offset != -1) {
        offset += search.length;
        end = cookie.indexOf(";", offset);
        if (end == -1) {
          end = cookie.length;
        }
        setStr = unescape(cookie.substring(offset, end));
      }
    }
    return (setStr);
  },
  set: function(name, value, expires, path, domain, secure) {
    document.cookie = name + "=" + escape(value) + ((expires) ? "; expires=" + expires : "") + ((path) ? "; path=" + path : "") + ((domain) ? "; domain=" + domain : "") + ((secure) ? "; secure" : "");
  }
};

UserLanguage = {
  setLang:function(lang){
    var date = new Date;
    date.setDate( date.getDate() + 30 );
    Cookie.set('user_language', lang, date.toUTCString(), '/');
  }
};

function getRandomInt(min, max)
{
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

var giveRand = getRandomInt(1,3);

var $headBlock = $('.head');

switch (giveRand){
  case 1:
    $headBlock.addClass('slide1');
    break;
  case 2:
    $headBlock.addClass('slide2');
    break;
  case 3:
    $headBlock.addClass('slide4');
    break;
  default:
    $headBlock.addClass('slide1');
}



// For comments
var changeComment = function() {

  var stepFunc = function OneStep(step) {
    var heightBlock = $('.one-comment_js').height();
    var calcAllComments = $('.one-comment_js .one-comment').length;

    if(step < calcAllComments){
      $('.one-comment_js__wrap').delay(3000).animate(
          {top: -heightBlock * step},
          1000,
          function () {
            step++;
            OneStep(step);
          });
    } else{
      step = 1;
      $('.one-comment_js__wrap').delay(3000).animate(
          {top: 0},
          1000,
          function () {
            OneStep(step);
          });
    }

  };
  stepFunc(1);
};

changeComment();

//	check hash pricing

  if(location.hash === '#agency') {
    document.getElementById('pricing-smb').removeAttribute('checked');
    document.getElementById('pricing-agency').setAttribute('checked', 'checked');
    document.querySelector('.pricing-tab--smb').classList.remove('active');
    document.querySelector('.pricing-tab--agency').classList.add('active');
  }

//	end check hash pricing



$(document).ready(function() {


//	sticky menu

window.addEventListener('scroll', addStickyClass);

function addStickyClass() {
  var
    navbar = $(".main-header"),
    spacer = $(".header-spacer"),
    timeout = null,
    animationDuration = 400,
    scrollTop = $(window).scrollTop();

  // clearTimeout(timeout);

  var stickyClear = function() {
    spacer.css("display", "none");
    navbar.removeClass("sticky-menu-animated");
    navbar.removeClass("sticky-menu");
  };


  if (scrollTop < navbar.height()) {
    navbar.removeClass("sticky-menu-drop");
    stickyClear();
  } else if (scrollTop >= $(window).height()) {
    spacer.css("display", "block");
    navbar.addClass("sticky-menu");
    navbar.height();
    navbar.addClass("sticky-menu-animated");
    navbar.addClass("sticky-menu-drop");
  } else {
    navbar.removeClass("sticky-menu-drop");
    timeout = setTimeout(stickyClear, animationDuration);
  }

  clearTimeout(timeout);
}

//	sticky menu end



// mobile menu

var $mainNav = $('.main-nav');
function mobileViewUpdate() {

  var viewportWidth = $(window).width();

  if (viewportWidth <= 991) {
    $mainNav.addClass('-mobile');
  } else {
    $mainNav.removeClass('-mobile');
  }
}

mobileViewUpdate();

$(window).on('load', mobileViewUpdate);
$(window).on('resize', mobileViewUpdate);


var $burgerMenu = $('.main-header__ham-menu');
var $mobileNav = $('.main-nav.-mobile');
$burgerMenu.on('click', function() {
  $mobileNav.slideToggle(function() {
    $burgerMenu.toggleClass('-active');
  });
});

$(window).scroll(function() {
  $mobileNav.slideUp();
  $burgerMenu.removeClass('-active');
});

// End mobile menu

// Toggle products submenu

$('.main-nav__item.sub-menu-container > span').on('click', function() {
  var $subMenuContainer = $(".sub-menu-container");
  var $innerList = $(".inner-list-container");

  if ($innerList.css("opacity") == 0) {
    $subMenuContainer.addClass("inner-active");
  } else {
    $subMenuContainer.removeClass("inner-active");
  }

  $('html').click(function(e) {
    if( !$(e.target).parent().hasClass('sub-menu-container') ) {
      $subMenuContainer.removeClass("inner-active");
    }
  });
});

// End Toggle products submenu



// Toggle pricing switcher

$('.switcher-container label').on('click', togglePricingSwitcher);


  function togglePricingSwitcher(e) {
    var target = e.target,
      tabs = document.querySelectorAll('.pricing-tab'),
      smbTab = document.querySelector('.pricing-tab--smb'),
      agencyTab = document.querySelector('.pricing-tab--agency');

    for (var i = 0; i < tabs.length; i++) {
      tabs[i].classList.remove('active');
    }
    if (target.getAttribute('for') === 'pricing-smb') {
      smbTab.classList.add('active');
      location.hash = '';
    }

    if (target.getAttribute('for') === 'pricing-agency') {
      agencyTab.classList.add('active');
      // add #agency to url
      if(history.pushState) {
        history.pushState(null, null, '#agency');
      }
      else {
        location.hash = '#agency';
      }
    }
  }

// End Toggle pricing switcher




// Agency popup video

$('.js-popup-video-btn').on('click', function(ev) {
  var $iframeSrc = $(this).attr('data-iframe-src'),
      $iframe = $('.js-popup iframe');

  // Start playing video on popup open
  $iframe.attr('src', $iframeSrc);

  ev.preventDefault();

  // show popup
  $('.js-popup').css({
    'display': 'flex',
    'z-index': 99999
  });
});


$('.close-agency-popup').on('click', function() {
  const $iframe = $('.js-popup iframe');

  // hide popup on button click
  $('.js-popup').css({
    'display': 'none',
    'z-index': -1
  });

  // stop video on popup close
  $iframe.attr('src', '');
});

// End Agency popup video



// Features popup images

$('.features-list__view').on('click', function() {
  var $popup = $('.features-popup'),
      img = $('.features-popup__container > img'),
      imgSrc = $(this).attr('data-src');

  img.attr('src', imgSrc);

  // Show popup
  $popup.css({
    'display': 'flex',
    'z-index': 99999
  });
});

// Hide popup on button click
$('.close-features-popup').on('click', function() {
  $('.features-popup').css({
    'display': 'none',
    'z-index': -1
  });
});

// End Features popup images


// Close popups

$(document).click(function(event) {
  // hide popup if click not on image
  if (!!$(event.target).closest(".popup").length) {
    $('.popup').css({
      'display': 'none',
      'z-index': -1
    });

    // stop video on popup close
    const $iframe = $('.js-popup iframe');
    if($iframe) {
      $iframe.attr('src', '');
    }
  }
});

  // if click on image not close popup
$('.popup-container').click( function(e) {
  e.stopPropagation();
});

  $(document).keyup(function(e) {
    // hide popup if put ESC button
    if (e.keyCode == 27) {
      $('.popup').css({
        'display': 'none',
        'z-index': -1
      });
    }

    // stop video on popup close
    const $iframe = $('.js-popup iframe');
    if ($iframe) {
      $iframe.attr('src', '');
    }

  });

// Close popups

});