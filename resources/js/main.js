function getRandomInt(e, t) {
  return Math.floor(Math.random() * (t - e + 1)) + e
}
function addStickyClass() {
  var e = $(".main-header")
    , t = $(".header-spacer")
    , n = null
    , i = $(window).scrollTop()
    , a = function() {
    t.css("display", "none"),
      e.removeClass("sticky-menu-animated"),
      e.removeClass("sticky-menu")
  };
  i < e.height() ? (e.removeClass("sticky-menu-drop"),
    a()) : i >= $(window).height() ? (t.css("display", "block"),
    e.addClass("sticky-menu"),
    e.height(),
    e.addClass("sticky-menu-animated"),
    e.addClass("sticky-menu-drop")) : (e.removeClass("sticky-menu-drop"),
    n = setTimeout(a, 400)),
    clearTimeout(n)
}
function toggleProductsMenu() {
  var e = $(".sub-menu-container");
  0 == $(".inner-list-container").css("opacity") ? e.addClass("inner-active") : e.removeClass("inner-active"),
    $("html").click(function(t) {
      $(t.target).parent().hasClass("sub-menu-container") || e.removeClass("inner-active")
    })
}
function togglePricingSwitcher(e) {
  for (var t = e.target, n = document.querySelectorAll(".pricing-tab"), i = document.querySelector(".pricing-tab--smb"), a = document.querySelector(".pricing-tab--agency"), o = 0; o < n.length; o++)
    n[o].classList.remove("active");
  "pricing-smb" === t.getAttribute("for") && (i.classList.add("active"),
    location.hash = ""),
  "pricing-agency" === t.getAttribute("for") && (a.classList.add("active"),
    history.pushState ? history.pushState(null, null, "#agency") : location.hash = "#agency")
}
window.Symbol || function(e) {
  "use strict";
  function t(e) {
    if (!(this instanceof t))
      return new t(e);
    var n = i + a++;
    this._symbol = n
  }
  var n = Object.defineProperty
    , i = "__symbol-" + Math.ceil(1e9 * Math.random()) + "-"
    , a = 0;
  n(t.prototype, "toString", {
    enumerable: !1,
    configurable: !1,
    writable: !1,
    value: function() {
      return this._symbol
    }
  }),
    e.Symbol = t
}(this),
  function(e) {
    "function" == typeof define && define.amd ? define([], e) : "undefined" != typeof module && null !== module && module.exports ? module.exports = e : e()
  }(function() {
    function e(e) {
      return new CustomEvent(e,R)
    }
    function t(e) {
      return e[B] || (e[B] = {})
    }
    function n(e, n, i, a, o) {
      function s(e) {
        i(e, a)
      }
      n = n.split(D);
      var r, c, u = t(e);
      for (c in n)
        r = u[c] || (u[c] = []),
          r.push([i, s]),
          e.addEventListener(c, s)
    }
    function i(e, n, i, a) {
      n = n.split(D);
      var o, s, r, c = t(e);
      if (c)
        for (o in n)
          if (s = c[o])
            for (r = s.length; r--; )
              s[r][0] === i && (e.removeEventListener(o, s[r][1]),
                s.splice(r, 1))
    }
    function a(t, n, i) {
      var a = e(n);
      i && Q(a, i),
        t.dispatchEvent(a)
    }
    function o(e) {
      function t(e) {
        i ? (n(),
          E(t),
          a = !0,
          i = !1) : a = !1
      }
      var n = e
        , i = !1
        , a = !1;
      this.kick = function(e) {
        i = !0,
        a || t()
      }
        ,
        this.end = function(e) {
          var t = n;
          e && (a ? (n = i ? function() {
              t(),
                e()
            }
            : e,
            i = !0) : e())
        }
    }
    function s() {}
    function r(e) {
      e.preventDefault()
    }
    function c(e) {
      return !!F[e.target.tagName.toLowerCase()]
    }
    function u(e) {
      return 1 === e.which && !e.ctrlKey && !e.altKey
    }
    function l(e, t) {
      var n, i;
      if (e.identifiedTouch)
        return e.identifiedTouch(t);
      for (n = -1,
             i = e.length; ++n < i; )
        if (e[n].identifier === t)
          return e[n]
    }
    function d(e, t) {
      var n = l(e.changedTouches, t.identifier);
      if (n && (n.pageX !== t.pageX || n.pageY !== t.pageY))
        return n
    }
    function v(e) {
      u(e) && (c(e) || (n(document, I.move, f, e),
        n(document, I.cancel, p, e)))
    }
    function f(e, t) {
      $(e, t, e, m)
    }
    function p(e, t) {
      m()
    }
    function m() {
      i(document, I.move, f),
        i(document, I.cancel, p)
    }
    function h(e) {
      if (!F[e.target.tagName.toLowerCase()]) {
        var t = e.changedTouches[0]
          , i = {
          target: t.target,
          pageX: t.pageX,
          pageY: t.pageY,
          identifier: t.identifier,
          touchmove: function(e, t) {
            g(e, t)
          },
          touchend: function(e, t) {
            y(e, t)
          }
        };
        n(document, K.move, i.touchmove, i),
          n(document, K.cancel, i.touchend, i)
      }
    }
    function g(e, t) {
      var n = d(e, t);
      n && $(e, t, n, w)
    }
    function y(e, t) {
      l(e.changedTouches, t.identifier) && w(t)
    }
    function w(e) {
      i(document, K.move, e.touchmove),
        i(document, K.cancel, e.touchend)
    }
    function $(e, t, n, i) {
      var a = n.pageX - t.pageX
        , o = n.pageY - t.pageY;
      a * a + o * o < z * z || _(e, t, n, a, o, i)
    }
    function _(e, t, n, i, o, r) {
      var c = e.targetTouches
        , u = e.timeStamp - t.timeStamp
        , l = {
        altKey: e.altKey,
        ctrlKey: e.ctrlKey,
        shiftKey: e.shiftKey,
        startX: t.pageX,
        startY: t.pageY,
        distX: i,
        distY: o,
        deltaX: i,
        deltaY: o,
        pageX: n.pageX,
        pageY: n.pageY,
        velocityX: i / u,
        velocityY: o / u,
        identifier: t.identifier,
        targetTouches: c,
        finger: c ? c.length : 1,
        enableMove: function() {
          this.moveEnabled = !0,
            this.enableMove = s,
            e.preventDefault()
        }
      };
      a(t.target, "movestart", l),
        r(t)
    }
    function b(e, t) {
      var n = t.timer;
      t.touch = e,
        t.timeStamp = e.timeStamp,
        n.kick()
    }
    function x(e, t) {
      var n = t.target
        , a = t.event
        , o = t.timer;
      C(),
        T(n, a, o, function() {
          setTimeout(function() {
            i(n, "click", r)
          }, 0)
        })
    }
    function C() {
      i(document, I.move, b),
        i(document, I.end, x)
    }
    function k(e, t) {
      var n = t.event
        , i = t.timer
        , a = d(e, n);
      a && (e.preventDefault(),
        n.targetTouches = e.targetTouches,
        t.touch = a,
        t.timeStamp = e.timeStamp,
        i.kick())
    }
    function X(e, t) {
      var n = t.target
        , i = t.event
        , a = t.timer;
      l(e.changedTouches, i.identifier) && (Y(t),
        T(n, i, a))
    }
    function Y(e) {
      i(document, K.move, e.activeTouchmove),
        i(document, K.end, e.activeTouchend)
    }
    function S(e, t, n) {
      var i = n - e.timeStamp;
      e.distX = t.pageX - e.startX,
        e.distY = t.pageY - e.startY,
        e.deltaX = t.pageX - e.pageX,
        e.deltaY = t.pageY - e.pageY,
        e.velocityX = .3 * e.velocityX + .7 * e.deltaX / i,
        e.velocityY = .3 * e.velocityY + .7 * e.deltaY / i,
        e.pageX = t.pageX,
        e.pageY = t.pageY
    }
    function T(e, t, n, i) {
      n.end(function() {
        return a(e, "moveend", t),
        i && i()
      })
    }
    function j(e) {
      function t(e) {
        S(i, s.touch, s.timeStamp),
          a(s.target, "move", i)
      }
      if (!e.defaultPrevented && e.moveEnabled) {
        var i = {
          startX: e.startX,
          startY: e.startY,
          pageX: e.pageX,
          pageY: e.pageY,
          distX: e.distX,
          distY: e.distY,
          deltaX: e.deltaX,
          deltaY: e.deltaY,
          velocityX: e.velocityX,
          velocityY: e.velocityY,
          identifier: e.identifier,
          targetTouches: e.targetTouches,
          finger: e.finger
        }
          , s = {
          target: e.target,
          event: i,
          timer: new o(t),
          touch: void 0,
          timeStamp: e.timeStamp
        };
        void 0 === e.identifier ? (n(e.target, "click", r),
          n(document, I.move, b, s),
          n(document, I.end, x, s)) : (s.activeTouchmove = function(e, t) {
          k(e, t)
        }
          ,
          s.activeTouchend = function(e, t) {
            X(e, t)
          }
          ,
          n(document, K.move, s.activeTouchmove, s),
          n(document, K.end, s.activeTouchend, s))
      }
    }
    function q(e) {
      e.enableMove()
    }
    function L(e) {
      e.enableMove()
    }
    function A(e) {
      e.enableMove()
    }
    function M(e) {
      var t = e.handler;
      e.handler = function(e) {
        var n;
        for (n in H)
          e[n] = e.originalEvent[n];
        t.apply(this, arguments)
      }
    }
    var Q = Object.assign || window.jQuery && jQuery.extend
      , z = 8
      , E = function() {
      return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(e, t) {
        return window.setTimeout(function() {
          e()
        }, 25)
      }
    }()
      , F = {
      textarea: !0,
      input: !0,
      select: !0,
      button: !0
    }
      , I = {
      move: "mousemove",
      cancel: "mouseup dragstart",
      end: "mouseup"
    }
      , K = {
      move: "touchmove",
      cancel: "touchend",
      end: "touchend"
    }
      , D = /\s+/
      , R = {
      bubbles: !0,
      cancelable: !0
    }
      , B = Symbol("events");
    if (n(document, "mousedown", v),
        n(document, "touchstart", h),
        n(document, "movestart", j),
        window.jQuery) {
      var H = "startX startY pageX pageY distX distY deltaX deltaY velocityX velocityY".split(" ");
      jQuery.event.special.movestart = {
        setup: function() {
          return n(this, "movestart", q),
            !1
        },
        teardown: function() {
          return i(this, "movestart", q),
            !1
        },
        add: M
      },
        jQuery.event.special.move = {
          setup: function() {
            return n(this, "movestart", L),
              !1
          },
          teardown: function() {
            return i(this, "movestart", L),
              !1
          },
          add: M
        },
        jQuery.event.special.moveend = {
          setup: function() {
            return n(this, "movestart", A),
              !1
          },
          teardown: function() {
            return i(this, "movestart", A),
              !1
          },
          add: M
        }
    }
  }),
  function(e) {
    "function" == typeof define && define.amd ? define(["jquery"], e) : e(jQuery)
  }(function(e, t) {
    function n(e) {
      var t, n, i;
      t = e.target.offsetWidth,
        n = e.target.offsetHeight,
        i = {
          distX: e.distX,
          distY: e.distY,
          velocityX: e.velocityX,
          velocityY: e.velocityY,
          finger: e.finger
        },
        e.distX > e.distY ? e.distX > -e.distY ? (e.distX / t > r.threshold || e.velocityX * e.distX / t * r.sensitivity > 1) && (i.type = "swiperight",
          s(e.currentTarget, i)) : (-e.distY / n > r.threshold || e.velocityY * e.distY / t * r.sensitivity > 1) && (i.type = "swipeup",
          s(e.currentTarget, i)) : e.distX > -e.distY ? (e.distY / n > r.threshold || e.velocityY * e.distY / t * r.sensitivity > 1) && (i.type = "swipedown",
          s(e.currentTarget, i)) : (-e.distX / t > r.threshold || e.velocityX * e.distX / t * r.sensitivity > 1) && (i.type = "swipeleft",
          s(e.currentTarget, i))
    }
    function i(t) {
      var n = e.data(t, "event_swipe");
      return n || (n = {
        count: 0
      },
        e.data(t, "event_swipe", n)),
        n
    }
    var a = e.event.add
      , o = e.event.remove
      , s = function(t, n, i) {
      e.event.trigger(n, i, t)
    }
      , r = {
      threshold: .4,
      sensitivity: 6
    };
    e.event.special.swipe = e.event.special.swipeleft = e.event.special.swiperight = e.event.special.swipeup = e.event.special.swipedown = {
      setup: function(e, t, o) {
        if (!(i(this).count++ > 0))
          return a(this, "moveend", n),
            !0
      },
      teardown: function() {
        if (!(--i(this).count > 0))
          return o(this, "moveend", n),
            !0
      },
      settings: r
    }
  }),
  Cookie = {
    get: function(e) {
      var t = " " + document.cookie
        , n = " " + e + "="
        , i = null
        , a = 0
        , o = 0;
      return t.length > 0 && -1 != (a = t.indexOf(n)) && (a += n.length,
        o = t.indexOf(";", a),
      -1 == o && (o = t.length),
        i = unescape(t.substring(a, o))),
        i
    },
    set: function(e, t, n, i, a, o) {
      document.cookie = e + "=" + escape(t) + (n ? "; expires=" + n : "") + (i ? "; path=" + i : "") + (a ? "; domain=" + a : "") + (o ? "; secure" : "")
    }
  },
  UserLanguage = {
    setLang: function(e) {
      var t = new Date;
      t.setDate(t.getDate() + 30),
        Cookie.set("user_language", e, t.toUTCString(), "/")
    }
  };
var giveRand = getRandomInt(1, 3)
  , $headBlock = $(".head");
switch (giveRand) {
  case 1:
    $headBlock.addClass("slide1");
    break;
  case 2:
    $headBlock.addClass("slide2");
    break;
  case 3:
    $headBlock.addClass("slide4");
    break;
  default:
    $headBlock.addClass("slide1")
}
var changeComment = function() {
  !function e(t) {
    var n = $(".one-comment_js").height()
      , i = $(".one-comment_js .one-comment").length;
    t < i ? $(".one-comment_js__wrap").delay(3e3).animate({
      top: -n * t
    }, 1e3, function() {
      t++,
        e(t)
    }) : (t = 1,
      $(".one-comment_js__wrap").delay(3e3).animate({
        top: 0
      }, 1e3, function() {
        e(t)
      }))
  }(1)
};
changeComment(),
"#agency" === location.hash && (document.getElementById("pricing-smb").removeAttribute("checked"),
  document.getElementById("pricing-agency").setAttribute("checked", "checked"),
  document.querySelector(".pricing-tab--smb").classList.remove("active"),
  document.querySelector(".pricing-tab--agency").classList.add("active")),
  window.addEventListener("scroll", addStickyClass),
  $(".js-popup-video-btn").on("click", function(e) {
    var t = $(this).attr("data-iframe-src");
    $(".js-popup iframe").attr("src", t),
      e.preventDefault(),
      $(".js-popup").css({
        display: "flex",
        "z-index": 99999
      })
  }),
  $(".close-agency-popup").on("click", function() {
    const e = $(".js-popup iframe");
    $(".js-popup").css({
      display: "none",
      "z-index": -1
    }),
      e.attr("src", "")
  }),
  $(".features-list__view").on("click", function() {
    var e = $(".features-popup")
      , t = $(".features-popup__container > img")
      , n = $(this).attr("data-src");
    t.attr("src", n),
      e.css({
        display: "flex",
        "z-index": 99999
      })
  }),
  $(".close-features-popup").on("click", function() {
    $(".features-popup").css({
      display: "none",
      "z-index": -1
    })
  }),
  $(document).click(function(e) {
    if ($(e.target).closest(".popup").length) {
      $(".popup").css({
        display: "none",
        "z-index": -1
      });
      const t = $(".js-popup iframe");
      t && t.attr("src", "")
    }
  }),
  $(".popup-container").click(function(e) {
    e.stopPropagation()
  }),
  $(document).keyup(function(e) {
    27 == e.keyCode && $(".popup").css({
      display: "none",
      "z-index": -1
    });
    const t = $(".js-popup iframe");
    t && t.attr("src", "")
  }),
  $(document).ready(function() {
    $("#newsletter-signup").submit(function() {
      if ("submitting" !== $(this).data("formstatus")) {
        var e = $(this)
          , t = e.serialize()
          , n = e.attr("action")
          , i = e.attr("method")
          , a = $("#signup-response");
        e.data("formstatus", "submitting"),
          a.hide().addClass("response-waiting").text(". . .").fadeIn(200),
          $.ajax({
            url: n,
            type: i,
            data: t,
            dataType: "json",
            success: function(t) {
              var n = t
                , i = "";
              switch (n.status) {
                case "error":
                  i = "response-error";
                  break;
                case "success":
                  i = "response-success",
                    ga("send", "pageview", "/virtual/subscribition"),
                    mixpanel.track("Action button Request a guru")
              }
              a.fadeOut(200, function() {
                $(this).removeClass("response-waiting").addClass(i).text(n.message).fadeIn(200, function() {
                  setTimeout(function() {
                    a.fadeOut(200, function() {
                      $(this).removeClass(i),
                        e.data("formstatus", "idle")
                    })
                  }, 3e3)
                })
              })
            }
          })
      }
      return !1
    })
  }),
  function(e) {
    e ? (e.Unslider = function(t, n) {
        var i = this;
        return i._ = "unslider",
          i.defaults = {
            autoplay: !1,
            delay: 3e3,
            speed: 750,
            easing: "swing",
            keys: {
              prev: 37,
              next: 39
            },
            nav: !0,
            arrows: {
              prev: '<a class="' + i._ + '-arrow prev">Prev</a>',
              next: '<a class="' + i._ + '-arrow next">Next</a>'
            },
            animation: "horizontal",
            selectors: {
              container: "ul:first",
              slides: "li"
            },
            animateHeight: !1,
            activeClass: i._ + "-active",
            swipe: !0,
            swipeThreshold: .2
          },
          i.$context = t,
          i.options = {},
          i.$parent = null,
          i.$container = null,
          i.$slides = null,
          i.$nav = null,
          i.$arrows = [],
          i.total = 0,
          i.current = 0,
          i.prefix = i._ + "-",
          i.eventSuffix = "." + i.prefix + ~~(2e3 * Math.random()),
          i.interval = null,
          i.init = function(t) {
            return i.options = e.extend({}, i.defaults, t),
              i.$container = i.$context.find(i.options.selectors.container).addClass(i.prefix + "wrap"),
              i.$slides = i.$container.children(i.options.selectors.slides),
              i.setup(),
              e.each(["nav", "arrows", "keys", "infinite"], function(t, n) {
                i.options[n] && i["init" + e._ucfirst(n)]()
              }),
            jQuery.event.special.swipe && i.options.swipe && i.initSwipe(),
            i.options.autoplay && i.start(),
              i.calculateSlides(),
              i.$context.trigger(i._ + ".ready"),
              i.animate(i.options.index || i.current, "init")
          }
          ,
          i.setup = function() {
            i.$context.addClass(i.prefix + i.options.animation).wrap('<div class="' + i._ + '" />'),
              i.$parent = i.$context.parent("." + i._),
            "static" === i.$context.css("position") && i.$context.css("position", "relative"),
              i.$context.css("overflow", "hidden")
          }
          ,
          i.calculateSlides = function() {
            if (i.total = i.$slides.length,
              "fade" !== i.options.animation) {
              var e = "width";
              "vertical" === i.options.animation && (e = "height"),
                i.$container.css(e, 100 * i.total + "%").addClass(i.prefix + "carousel"),
                i.$slides.css(e, 100 / i.total + "%")
            }
          }
          ,
          i.start = function() {
            return i.interval = setTimeout(function() {
              i.next()
            }, i.options.delay),
              i
          }
          ,
          i.stop = function() {
            return clearTimeout(i.interval),
              i
          }
          ,
          i.initNav = function() {
            var t = e('<nav class="' + i.prefix + 'nav"><ol /></nav>');
            i.$slides.each(function(n) {
              var a = this.getAttribute("data-nav") || n + 1;
              e.isFunction(i.options.nav) && (a = i.options.nav.call(i.$slides.eq(n), n, a)),
                t.children("ol").append('<li data-slide="' + n + '">' + a + "</li>")
            }),
              i.$nav = t.insertAfter(i.$context),
              i.$nav.find("li").on("click" + i.eventSuffix, function() {
                var t = e(this).addClass(i.options.activeClass);
                t.siblings().removeClass(i.options.activeClass),
                  i.animate(t.attr("data-slide"))
              })
          }
          ,
          i.initArrows = function() {
            !0 === i.options.arrows && (i.options.arrows = i.defaults.arrows),
              e.each(i.options.arrows, function(t, n) {
                i.$arrows.push(e(n).insertAfter(i.$context).on("click" + i.eventSuffix, i[t]))
              })
          }
          ,
          i.initKeys = function() {
            !0 === i.options.keys && (i.options.keys = i.defaults.keys),
              e(document).on("keyup" + i.eventSuffix, function(t) {
                e.each(i.options.keys, function(n, a) {
                  t.which === a && e.isFunction(i[n]) && i[n].call(i)
                })
              })
          }
          ,
          i.initSwipe = function() {
            var e = i.$slides.width();
            "fade" !== i.options.animation && i.$container.on({
              movestart: function(e) {
                return e.distX > e.distY && e.distX < -e.distY || e.distX < e.distY && e.distX > -e.distY ? !!e.preventDefault() : void i.$container.css("position", "relative")
              },
              move: function(t) {
                i.$container.css("left", -100 * i.current + 100 * t.distX / e + "%")
              },
              moveend: function(t) {
                Math.abs(t.distX) / e > i.options.swipeThreshold ? i[t.distX < 0 ? "next" : "prev"]() : i.$container.animate({
                  left: -100 * i.current + "%"
                }, i.options.speed / 2)
              }
            })
          }
          ,
          i.initInfinite = function() {
            var t = ["first", "last"];
            e.each(t, function(e, n) {
              i.$slides.push.apply(i.$slides, i.$slides.filter(':not(".' + i._ + '-clone")')[n]().clone().addClass(i._ + "-clone")["insert" + (0 === e ? "After" : "Before")](i.$slides[t[~~!e]]()))
            })
          }
          ,
          i.destroyArrows = function() {
            e.each(i.$arrows, function(e, t) {
              t.remove()
            })
          }
          ,
          i.destroySwipe = function() {
            i.$container.off("movestart move moveend")
          }
          ,
          i.destroyKeys = function() {
            e(document).off("keyup" + i.eventSuffix)
          }
          ,
          i.setIndex = function(e) {
            return 0 > e && (e = i.total - 1),
              i.current = Math.min(Math.max(0, e), i.total - 1),
            i.options.nav && i.$nav.find('[data-slide="' + i.current + '"]')._active(i.options.activeClass),
              i.$slides.eq(i.current)._active(i.options.activeClass),
              i
          }
          ,
          i.animate = function(t, n) {
            if ("first" === t && (t = 0),
              "last" === t && (t = i.total),
                isNaN(t))
              return i;
            i.options.autoplay && i.stop().start(),
              i.setIndex(t),
              i.$context.trigger(i._ + ".change", [t, i.$slides.eq(t)]);
            var a = "animate" + e._ucfirst(i.options.animation);
            return e.isFunction(i[a]) && i[a](i.current, n),
              i
          }
          ,
          i.next = function() {
            var e = i.current + 1;
            return e >= i.total && (e = 0),
              i.animate(e, "next")
          }
          ,
          i.prev = function() {
            return i.animate(i.current - 1, "prev")
          }
          ,
          i.animateHorizontal = function(e) {
            var t = "left";
            return "rtl" === i.$context.attr("dir") && (t = "right"),
            i.options.infinite && i.$container.css("margin-" + t, "-100%"),
              i.slide(t, e)
          }
          ,
          i.animateVertical = function(e) {
            return i.options.animateHeight = !0,
            i.options.infinite && i.$container.css("margin-top", -i.$slides.outerHeight()),
              i.slide("top", e)
          }
          ,
          i.slide = function(e, t) {
            if (i.options.animateHeight && i._move(i.$context, {
                height: i.$slides.eq(t).outerHeight()
              }, !1),
                i.options.infinite) {
              var n;
              t === i.total - 1 && (n = i.total - 3,
                t = -1),
              t === i.total - 2 && (n = 0,
                t = i.total - 2),
              "number" == typeof n && (i.setIndex(n),
                i.$context.on(i._ + ".moved", function() {
                  i.current === n && i.$container.css(e, -100 * n + "%").off(i._ + ".moved")
                }))
            }
            var a = {};
            return a[e] = -100 * t + "%",
              i._move(i.$container, a)
          }
          ,
          i.animateFade = function(e) {
            var t = i.$slides.eq(e).addClass(i.options.activeClass);
            i._move(t.siblings().removeClass(i.options.activeClass), {
              opacity: 0
            }),
              i._move(t, {
                opacity: 1
              }, !1)
          }
          ,
          i._move = function(e, t, n, a) {
            return !1 !== n && (n = function() {
                i.$context.trigger(i._ + ".moved")
              }
            ),
              e._move(t, a || i.options.speed, i.options.easing, n)
          }
          ,
          i.init(n)
      }
        ,
        e.fn._active = function(e) {
          return this.addClass(e).siblings().removeClass(e)
        }
        ,
        e._ucfirst = function(e) {
          return (e + "").toLowerCase().replace(/^./, function(e) {
            return e.toUpperCase()
          })
        }
        ,
        e.fn._move = function() {
          return this.stop(!0, !0),
            e.fn[e.fn.velocity ? "velocity" : "animate"].apply(this, arguments)
        }
        ,
        e.fn.unslider = function(t) {
          return this.each(function() {
            var n = e(this);
            if ("string" == typeof t && n.data("unslider")) {
              t = t.split(":");
              var i = n.data("unslider")[t[0]];
              if (e.isFunction(i))
                return i.apply(n, t[1] ? t[1].split(",") : null)
            }
            return n.data("unslider", new e.Unslider(n,t))
          })
        }
    ) : console.warn("Unslider needs jQuery")
  }(window.jQuery),
  function(e) {
    "use strict";
    var t = e(".layer-slider__body").unslider({
      arrows: {
        prev: '<div class="layer-slider__chevron-wrap -left"><a class="layer-slider__chevron -left"><i class="icon-chevron"></i></a></div>',
        next: '<div class="layer-slider__chevron-wrap -right"><a class="layer-slider__chevron -right"><i class="icon-chevron"></i></a></div>'
      },
      nav: !1,
      autoplay: !0,
      delay: 15e3
    })
      , n = e(".layer-slider__nav-item")
      , i = e(".layer-slider__slide.unslider-active").index();
    n.eq(i).addClass("-active"),
      t.on("unslider.change", function(e, t, i) {
        n.removeClass("-active"),
          n.eq(t).addClass("-active")
      }),
      n.on("click", function() {
        var n = e(this);
        t.unslider("animate:" + n.index())
      });
    var a = (e(".say-slider").unslider({
      arrows: {
        prev: '<div class="say-slider__chevron-wrap"><a class="say-slider__chevron -left -about"><i class="icon-chevron"></i></a></div>',
        next: '<div class="say-slider__chevron-wrap -right"><a class="say-slider__chevron -right -about"><i class="icon-chevron"></i></a></div>'
      },
      nav: !1
    }),
      e(".btn-pricing-period-select"));
    a.on("click", function() {
      e(".pricing-table-new.active").hide().removeClass("active"),
        a.siblings().removeClass("active");
      var t = e(this).attr("data-period");
      e("#" + t).show().addClass("active"),
        e(this).addClass("active")
    })
  }(jQuery),
  function(e) {
    "use strict";
    function t() {
      e(window).width() <= 991 ? s.addClass("-mobile") : s.removeClass("-mobile")
    }
    var n = (e(".say-slider").unslider({
      arrows: {
        prev: '<div class="say-slider__chevron-wrap"><a class="say-slider__chevron -left"><i class="icon-chevron"></i></a></div>',
        next: '<div class="say-slider__chevron-wrap -right"><a class="say-slider__chevron -right"><i class="icon-chevron"></i></a></div>'
      },
      nav: !1
    }),
      e(".tools__slider").unslider({
        arrows: {
          prev: '<div class="tools__chevron-wrap -left"><a class="tools__chevron -left"><i class="icon-chevron"></i></a></div>',
          next: '<div class="tools__chevron-wrap -right"><a class="tools__chevron"><i class="icon-chevron"></i></a></div>'
        },
        autoplay: !0,
        delay: 15e3
      }))
      , i = e(".tools__item")
      , a = e(".tools__slider-item.unslider-active").index();
    i.eq(a).addClass("-active"),
      n.on("unslider.change", function(e, t, n) {
        i.removeClass("-active"),
          i.eq(t).addClass("-active")
      }),
      i.on("click", function() {
        var t = e(this);
        n.unslider("animate:" + t.index())
      });
    var o = function(e) {
      var t = document.querySelector(e.el)
        , n = t.querySelectorAll(e.tabNavigationLinks)
        , i = t.querySelectorAll(e.tabContentContainers)
        , a = 0
        , o = !1
        , s = function() {
        if (!o) {
          o = !0,
            t.classList.remove("no-js");
          for (var e = 0; e < n.length; e++) {
            var i = n[e];
            r(i, e)
          }
        }
      }
        , r = function(e, t) {
        e.addEventListener("click", function(e) {
          e.preventDefault(),
            c(t)
        })
      }
        , c = function(e) {
        e !== a && e >= 0 && e <= n.length && (n[a].classList.remove("-active"),
          n[e].classList.add("-active"),
          i[a].classList.remove("-active"),
          i[e].classList.add("-active"),
          a = e)
      };
      return {
        init: s,
        goToTab: c
      }
    };
    window.tabs = o;
    var s = e(".main-nav");
    t(),
      e(window).on("load", t),
      e(window).on("resize", t);
    var r = e(".main-header__ham-menu")
      , c = e(".main-nav.-mobile");
    r.on("click", function() {
      c.slideToggle(function() {
        r.toggleClass("-active")
      })
    }),
      e(window).scroll(function() {
        c.slideUp(),
          r.removeClass("-active")
      })
  }(jQuery);
