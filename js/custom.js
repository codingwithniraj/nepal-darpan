$(document).ready(function ($) {
  //smooth scroll
  $("a.page-scroll").bind("click", function (event) {
    var $anchor = $(this);
    $("html, body")
      .stop()
      .animate({
          scrollTop: $($anchor.attr("href")).offset().top - 120
        },
        1500,
        "easeInOutExpo"
      );
    event.preventDefault();
  });

  //wow init
  new WOW().init();

  //tooltip init
  $('[data-toggle="tooltip"]').tooltip()

  //owl carousel init
  $(".pkghp-slider").owlCarousel({
    loop: false,
    margin: 40,
    nav: true,
    dots: false,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      767: {
        items: 2
      },
      991: {
        items: 3
      },
      1200: {
        items: 4
      }
    }
  });
  $(".newshp-slider").owlCarousel({
    loop: false,
    margin: 40,
    nav: true,
    dots: false,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      767: {
        items: 2
      },
      991: {
        items: 3
      }
    }
  });
  $(".itenary-article-gallery-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    autoplay: true,
    responsive: {
      0: {
        items: 2
      },
      767: {
        items: 2
      },
      991: {
        items: 3
      }
    }
  });

  //owl carousel init
  $(".review-slider").owlCarousel({
    loop: false,
    margin: 40,
    nav: true,
    dots: false,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      }
    }
  });

  // masonry init
  $(".grid").masonry({
    // options
    itemSelector: ".grid-item"
    // columnWidth: 200
  });

  //addClass formfield
  $(".formfield input, .formfield textarea, .formfield select").addClass(
    "form-control"
  );

  //carousel init
  $("#carousel1").carousel({
    interval: 12000
  });

  //heading appending span
  $(".heading-after").append("<span></span>");

  //wrapping with span
  $(".link-style-passby").wrapInner("<span></span>");

  //link active
  linkActive();

  //invoking select js
  $('.select-js').select2();

  //limit characters
  $("p").each(function () {
    "use strict";
    var maxLength = parseInt($(this).attr("data-maxlength"));
    var txt = $(this).text();
    if (txt.length > maxLength)
      $(this).text(txt.substring(0, maxLength) + ".....");
  });

  //navigation toggle in responsive / smaller devices
  $(".nav-toggle").click(function () {
    $(".nav-toggle").toggleClass("open");
    $("#menu").toggleClass("open");
    $(".has-submenu").removeClass("open");
  });

  //dropdown toggle
  $(".has-submenu").click(function () {
    "use strict";
    var $this = $(this);
    // $(".has-submenu").not(this).removeClass("open");
    $this.toggleClass("open");
  });

  $(".search-popup-toggle").click(function () {
    // $(".search-popup").addClass("active");

    if ($(".search-popup").hasClass("active")) {
      $(".search-popup").removeClass("open");
      setTimeout(function () {
        $(".search-popup").removeClass("active");
      }, 1000);
    } else {
      $(".search-popup").addClass("active");
      setTimeout(function () {
        $(".search-popup").addClass("open");
      }, 10);
    }
  });

  //delay animation looped for uniform difference between animation delay
  showDelay(".carousel-overlay-inner >*", "animation-delay", 400);
  showDelay(".section-head >*", "animation-delay", 300);
  showDelay(".servhp-slider .item", "animation-delay", 300);
  showDelay(".abouthp .section-cont>*", "animation-delay", 200);

  //required adding class
  $(".section-head>*").addClass("wow fadeInUp");
  $(
    ".carousel-overlay-wrapper h3,.carousel-overlay-wrapper p,.carousel-overlay-wrapper a"
  ).addClass("animated");
  $(".carousel-overlay-wrapper h3").addClass("fadeInDown");
  $(".carousel-overlay-wrapper p").addClass("fadeInLeft");
  $(".carousel-overlay-wrapper.text-center p")
    .addClass("fadeInUp")
    .removeClass("fadeInLeft");
  $(".carousel-overlay-wrapper.text-right p")
    .addClass("fadeInRight")
    .removeClass("fadeInLeft");
  $(".carousel-overlay-wrapper a").addClass("fadeInUp");

  //changing img to wrapped div's background
  imgToBg();

  //trigger when scrolling to given element
  // scrollDestination();

  // tourPlanNumber();

  scrollToClass(".header__main", ".header", "headerfixit", 0);

  if ($("body").hasClass("page-itenary")) {
    scrollToClass("#articleLink", "#articleLink", "fixed", 45);
  }
  //add start(*) to important input field's label
  importantLabel();

  //toggling guest addition
  // textExtraRemove();

  //remove selected section
  teamExtraAdd();
  teamExtraRemove();
  teamExtraRemoveRemover();
});

function teamExtraAdd() {
  $(".team-extra-add").click(function () {
    $(".team-extra-body").append("<div class='team-extra-list'> <div class='row'> <div class='formfield col-6'> <input class='form-control' type='text' name='frmExtraGuestsName[]'> </div><div class='formfield col-6'> <input class='form-control' type='email' name='frmExtraGuestsEmail[]'> </div><div class='team-extra-list-btn' data-toggle='tooltip' data-placement='bottom' title='Remove this section!'></div></div></div>");

    teamExtraRemove();
    teamExtraRemoveRemover();
  });
}

function teamExtraRemove() {
  $('.team-extra-list').on('click', '.team-extra-list-btn', function () {
    $(this).parents(".team-extra-list").remove();
    teamExtraRemoveRemover();
  });
}

function teamExtraRemoveRemover() {
  $(".team-extra-list:first-child .team-extra-list-btn").remove();
}

function importantLabel() {
  if ($(".formfield")[0]) {
    $(".formfield").find("input , select, textarea").each(function () {
      if ($(this).prop('required')) {

        if ($(this).is(':radio')) {
          var labelPath = $(this).parents(".formfield").find(">label");
          labelPath.append("*");

          var doubleStarsRemove = labelPath.text().replace('**', '*');
          labelPath.text(doubleStarsRemove);

          return;
        }

        $(this).siblings("label").append("*");
      }
    });
  }
}

//animation or transition delay automate
function showDelay(classList, delayType, plusValue) {
  "use strict";
  var unList = String(classList);
  var num = $(unList).length;

  var listAdd = 150;
  for (let i = 1; i <= num; i++) {
    $(unList + ":nth-child(" + i + ")").css(delayType, "" + listAdd + "ms");
    listAdd = listAdd + plusValue;
  }
}

function scrollToClass(classTarget, classToReceive, classToAdd, extraDistance) {
  var distance = $(classTarget).offset().top;
  var $window = $(window);

  $(window).scroll(function () {
    if ($window.scrollTop() + extraDistance >= distance) {
      // Your div has reached the top
      $(classToReceive).addClass(classToAdd);
    } else {
      $(classToReceive).removeClass(classToAdd);
    }
  });
}

function tourPlanNumber() {
  $(".itenary-article-plan").each(function (i) {
    $(this)
      .find(".itenary-article-plan-num")
      .prepend(i + 1 + ". ");
  });
}

// if the target of the click isn't the container nor a descendant of the container
$(document).mouseup(function (e) {
  var container = $(".class");

  if (!container.is(e.target) && container.has(e.target).length === 0) {
    $(".class").removeClass("toggled");
  }
});

// Make nav links active
function linkActive() {
  var loc = window.location.pathname;
  var page = location.pathname.split("/").pop();
  console.log("page is:", page);

  if (page === "") {
    $(".navul >li:nth-child(1)").addClass("active");
  } else {
    $('a[href="./' + page + '"]')
      .parent("li")
      .addClass("active");
    $('a[href="' + page + '"]')
      .parent("li")
      .addClass("active");
  }
}

//setting overlay outer height
$(document).ready(overlayHeight);
$(window).resize(overlayHeight);

function overlayHeight() {
  $(".square").each(function () {
    "use strict";
    var $this = $(this);
    var widthValue = $this.width();
    $this.css("height", widthValue);
  });
}

//copy img to background
function imgToBg() {
  "use strict";
  var $classForBg = $(".imgtobg-img");
  $classForBg.addClass("imgtobg");
  $(".imgtobg").each(function () {
    "use strict";
    var $this = $(this);
    var thissrc = $(this).attr("src");
    $this.wrap(
      '<div class="imgtobg-o" style="background-image:url(' +
      thissrc +
      ')"></div>'
    );
    $this.hide();
  });

  var $classForBgSm = $(".imgtobg-img-sm");
  $classForBgSm.addClass("imgtobg-sm");
  $(".imgtobg-sm").each(function () {
    "use strict";
    var $this = $(this);
    var thissrc = $(this).attr("src");
    $this.wrap(
      '<div class="imgtobg-o-sm app-xs" style="background-image:url(' +
      thissrc +
      ')"></div>'
    );
    $this.hide();
  });
}

//counter onscroll
function move1() {
  $(".counter-value").each(function () {
    var $this = $(this);
    jQuery({
      Counter: 0
    }).animate({
      Counter: $this.text()
    }, {
      duration: 4000,
      easing: "swing",
      step: function () {
        $this.text(Math.ceil(this.Counter));
      }
    });
  });
}

function scrollDestination() {
  var $section = $("#counter");
  $(document).bind("scroll", function () {
    var scrollOffset = $(document).scrollTop();
    var containerOffset = $section.offset().top - window.innerHeight;
    if (scrollOffset > containerOffset) {
      console.log("reached counter div");
      setTimeout(function () {
        move1();
      }, 500);
      // unbind event not to load scrolsl again
      $(document).unbind("scroll");
    }
  });
}

//photoswipe init
var initPhotoSwipeFromDOM = function (gallerySelector) {
  // parse slide data (url, title, size ...) from DOM elements
  // (children of gallerySelector)
  var parseThumbnailElements = function (el) {
    var thumbElements = el.childNodes,
      numNodes = thumbElements.length,
      items = [],
      figureEl,
      linkEl,
      size,
      item;

    for (var i = 0; i < numNodes; i++) {
      figureEl = thumbElements[i]; // <figure> element

      // include only element nodes
      if (figureEl.nodeType !== 1) {
        continue;
      }

      linkEl = figureEl.children[0]; // <a> element

      size = linkEl.getAttribute("data-size").split("x");

      // create slide object
      item = {
        src: linkEl.getAttribute("href"),
        w: parseInt(size[0], 10),
        h: parseInt(size[1], 10)
      };

      if (figureEl.children.length > 1) {
        // <figcaption> content
        item.title = figureEl.children[1].innerHTML;
      }

      if (linkEl.children.length > 0) {
        // <img> thumbnail element, retrieving thumbnail url
        item.msrc = linkEl.children[0].getAttribute("src");
      }

      item.el = figureEl; // save link to element for getThumbBoundsFn
      items.push(item);
    }

    return items;
  };

  // find nearest parent element
  var closest = function closest(el, fn) {
    return el && (fn(el) ? el : closest(el.parentNode, fn));
  };

  // triggers when user clicks on thumbnail
  var onThumbnailsClick = function (e) {
    e = e || window.event;
    e.preventDefault ? e.preventDefault() : (e.returnValue = false);

    var eTarget = e.target || e.srcElement;

    // find root element of slide
    var clickedListItem = closest(eTarget, function (el) {
      return el.tagName && el.tagName.toUpperCase() === "FIGURE";
    });

    if (!clickedListItem) {
      return;
    }

    // find index of clicked item by looping through all child nodes
    // alternatively, you may define index via data- attribute
    var clickedGallery = clickedListItem.parentNode,
      childNodes = clickedListItem.parentNode.childNodes,
      numChildNodes = childNodes.length,
      nodeIndex = 0,
      index;

    for (var i = 0; i < numChildNodes; i++) {
      if (childNodes[i].nodeType !== 1) {
        continue;
      }

      if (childNodes[i] === clickedListItem) {
        index = nodeIndex;
        break;
      }
      nodeIndex++;
    }

    if (index >= 0) {
      // open PhotoSwipe if valid index found
      openPhotoSwipe(index, clickedGallery);
    }
    return false;
  };

  // parse picture index and gallery index from URL (#&pid=1&gid=2)
  var photoswipeParseHash = function () {
    var hash = window.location.hash.substring(1),
      params = {};

    if (hash.length < 5) {
      return params;
    }

    var vars = hash.split("&");
    for (var i = 0; i < vars.length; i++) {
      if (!vars[i]) {
        continue;
      }
      var pair = vars[i].split("=");
      if (pair.length < 2) {
        continue;
      }
      params[pair[0]] = pair[1];
    }

    if (params.gid) {
      params.gid = parseInt(params.gid, 10);
    }

    return params;
  };

  var openPhotoSwipe = function (
    index,
    galleryElement,
    disableAnimation,
    fromURL
  ) {
    var pswpElement = document.querySelectorAll(".pswp")[0],
      gallery,
      options,
      items;

    items = parseThumbnailElements(galleryElement);

    // define options (if needed)
    options = {
      // define gallery index (for URL)
      galleryUID: galleryElement.getAttribute("data-pswp-uid"),

      getThumbBoundsFn: function (index) {
        // See Options -> getThumbBoundsFn section of documentation for more info
        var thumbnail = items[index].el.getElementsByTagName("img")[0], // find thumbnail
          pageYScroll =
          window.pageYOffset || document.documentElement.scrollTop,
          rect = thumbnail.getBoundingClientRect();

        return {
          x: rect.left,
          y: rect.top + pageYScroll,
          w: rect.width
        };
      }
    };

    // PhotoSwipe opened from URL
    if (fromURL) {
      if (options.galleryPIDs) {
        // parse real index when custom PIDs are used
        // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
        for (var j = 0; j < items.length; j++) {
          if (items[j].pid == index) {
            options.index = j;
            break;
          }
        }
      } else {
        // in URL indexes start from 1
        options.index = parseInt(index, 10) - 1;
      }
    } else {
      options.index = parseInt(index, 10);
    }

    // exit if index not found
    if (isNaN(options.index)) {
      return;
    }

    if (disableAnimation) {
      options.showAnimationDuration = 0;
    }

    // Pass data to PhotoSwipe and initialize it
    gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
    gallery.init();
  };

  // loop through all gallery elements and bind events
  var galleryElements = document.querySelectorAll(gallerySelector);

  for (var i = 0, l = galleryElements.length; i < l; i++) {
    galleryElements[i].setAttribute("data-pswp-uid", i + 1);
    galleryElements[i].onclick = onThumbnailsClick;
  }

  // Parse URL and open gallery if it contains #&pid=3&gid=1
  var hashData = photoswipeParseHash();
  if (hashData.pid && hashData.gid) {
    openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
  }
};

// execute above function
initPhotoSwipeFromDOM(".my-gallery");