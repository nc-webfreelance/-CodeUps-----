"use strict";

jQuery(function ($) {
  // ヘッダー
  var header = $(".js-header");
  var headerHeight = $(".js-header").height();
  var height = $(".js-mv-height").height();
  $(window).scroll(function () {
    if ($(this).scrollTop() > height - headerHeight) {
      header.addClass("is-color");
    } else {
      header.removeClass("is-color");
    }
  });
  $("main").css("margin-top", headerHeight);
  $('a[href^="#"]').click(function () {
    var speed = 1000;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - headerHeight;
    $("body,html").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });

  // トップへ戻るボタン
  var topBtn = $(".to-top");
  topBtn.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
  topBtn.click(function () {
    $("body,html").animate({
      scrollTop: 0
    }, 300, "swing");
    return false;
  });

  // スワイパー
  var swiper = new Swiper(".js-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000
    }
  });
  var blogSwiper = new Swiper(".js-blog-swiper", {
    loop: true,
    speed: 2000,
    slidesPerView: 1,
    centeredSlides: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    },
    breakpoints: {
      768: {
        slidesPerView: 4
      }
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  // ハンバーガー,ドロワー
  $(".js-hamburger,.js-sp-nav,.js-drawer a").click(function () {
    if ($(".js-hamburger").hasClass("is-active")) {
      $(".js-hamburger").removeClass("is-active");
      $("body").removeClass("no-scroll");
      $(".header").removeClass("is-active");
      $(".js-sp-nav").fadeOut(500);
    } else {
      $(".js-hamburger").addClass("is-active");
      $("body").addClass("no-scroll");
      $(".header").addClass("is-active");
      $(".js-sp-nav").fadeIn(500);
    }
  });

  // FAQ
  $(function () {
    $(".js-faq-question").addClass("is-open");
    $(".js-faq-question").on("click", function () {
      $(this).toggleClass("is-open");
      $(this).next().slideToggle(300);
    });
  });

  // sidebarアーカイブの開閉
  $(function () {
    $(".js-archive").addClass("is-open");
    $(".js-archive").on("click", function () {
      $(this).toggleClass("is-open");
      $(this).next().slideToggle(300);
    });
  });

  // Serviceタブ
  $(function () {
    $(".js-tab").on("click", function () {
      $(".js-tab").removeClass("is-active");
      $(".js-tab-content").removeClass("is-active");
      $(this).addClass("is-active");
      var index = $(this).index();
      $(".js-tab-content").hide().eq(index).fadeIn(300);
    });
    var urlParams = new URLSearchParams(window.location.search);
    var tabId = urlParams.get("tabId");
    if (tabId) {
      $(".is-active").removeClass("is-active");
      $('.js-tab[data-tab-id="'.concat(tabId, '"]')).addClass("is-active");
      var index = $('.js-tab[data-tab-id="'.concat(tabId, '"]')).index();
      $(".js-tab-content").hide().eq(index).fadeIn(300);
    }
  });

  // js-popUp
  gsap.utils.toArray(".js-popUp").forEach(function (target) {
    gsap.fromTo(target, {
      scale: 0.9,
      autoAlpha: 0
    }, {
      scale: 1,
      autoAlpha: 1,
      ease: "back.out(1.7)",
      scrollTrigger: {
        trigger: target,
        start: "top 80%"
      }
    });
  });

  // js-popUps
  gsap.utils.toArray(".js-popUps").forEach(function (element) {
    var targets = element.querySelectorAll(":scope > *");
    gsap.fromTo(targets, {
      scale: 0.9,
      autoAlpha: 0
    }, {
      scale: 1,
      autoAlpha: 1,
      ease: "back.out(1.7)",
      scrollTrigger: {
        trigger: element,
        start: "top 80%"
      }
    });
  });
});