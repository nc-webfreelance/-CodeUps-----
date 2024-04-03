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
  var campaignSwiper = new Swiper(".js-campaign-swiper", {
    loop: true,
    speed: 1500,
    autoplay: {
      delay: 1500,
      disableOnInteraction: false
    },
    slidesPerView: "auto",
    spaceBetween: 24,
    breakpoints: {
      768: {
        spaceBetween: 40
      }
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  // 画像を出現するアニメーション
  var box = $(".information__image,.wide-card__image,.price__image"),
    speed = 700;
  box.each(function () {
    $(this).append('<div class="img-color"></div>');
    var color = $(this).find($(".img-color")),
      image = $(this).find("img");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");
    color.on("inview", function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          width: "100%"
        }, speed, function () {
          image.css("opacity", "1");
          $(this).css({
            left: "0",
            right: "auto"
          });
          $(this).animate({
            width: "0%"
          }, speed);
        });
        counter = 1;
      }
    });
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

  // Gallery
  $(function () {
    $(".gallery-list__item img").click(function () {
      $("#gallery__modal-image").html($(this).prop("outerHTML"));
      $("#gallery__modal-image").fadeIn(100);
      $("body").addClass("no-scroll");
    });
    $("#gallery__modal-image, #gallery__modal-image img").click(function () {
      $("#gallery__modal-image").fadeOut(100);
      $("body").removeClass("no-scroll");
    });
  });

  // タブ切り替え
  // $(function () {
  //   $(".js-tab").on("click", function () {
  //     $(".js-tab").removeClass("tab-active");
  //     $(".js-tab-content").removeClass("tab-active");
  //     $(this).addClass("tab-active");
  //     let number = $(this).data("number");
  //     $("#" + number).addClass("tab-active");
  //   });
  // });

  $(function () {
    $(".js-tab").on("click", function () {
      $(".js-tab").removeClass("tab-active");
      $(".js-tab-content").removeClass("tab-active");
      $(this).addClass("tab-active");
      var index = $(this).index();
      $(".js-tab-content").hide().eq(index).fadeIn(300);
    });
    var urlParams = new URLSearchParams(window.location.search);
    var tabId = urlParams.get("tabId");
    if (tabId) {
      $(".tab-active").removeClass("tab-active");
      // タブがクエリパラメーターで指定された場合、該当のタブにtab-activeクラスを付与
      $(".js-tab[data-tab-id=\"".concat(tabId, "\"]")).addClass("tab-active");
      var index = $(".js-tab[data-tab-id=\"".concat(tabId, "\"]")).index();
      $(".js-tab-content").hide().eq(index).fadeIn(300);
    }
  });
});