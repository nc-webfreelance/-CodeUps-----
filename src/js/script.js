jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  var topBtn = $(".to-top");
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });



  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on("click", 'a[href*="#"]', function () {
    let time = 400;
    let header = $("header").innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $("html,body").animate({ scrollTop: targetY }, time, "swing");
    return false;
  });

  $(".js-hamburger,.js-sp-nav,.js-drawer a").click(function () {
    if ($(".js-hamburger").hasClass("is-active")) {
      $(".js-hamburger").removeClass("is-active");
      $("body").removeClass("no-scroll");
      $(".header").removeClass("is-active");
      $(".js-sp-nav").fadeOut(500);
      // $(".mv__header").fadeIn(500);
    } else {
      $(".js-hamburger").addClass("is-active");
      $("body").addClass("no-scroll");
      $(".header").addClass("is-active");
      $(".js-sp-nav").fadeIn(500);
      // $(".mv__header").fadeOut(500);
    }
  });


  // ヘッダークラス名付与
  let header = $(".js-header");
  let headerHeight = $(".js-header").height();
  let height = $(".js-mv-height").height();

  $(window).scroll(function () {
    if ($(this).scrollTop() > height - headerHeight) {
      header.addClass("is-color");
    } else {
      header.removeClass("is-color");
    }
  });

  // ヘッダーの高さ分だけコンテンツを下げる
  $("main").css("margin-top", headerHeight);

  // ヘッダーの高さ取得
  $('a[href^="#"]').click(function () {
    const speed = 1000;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    // ヘッダーの高さ分下げる
    let position = target.offset().top - headerHeight;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  const swiper = new Swiper(".js-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000,
    },
  });
  
  const campaignSwiper = new Swiper(".js-campaign-slider", {
    loop: true,
    slidesPerView: "auto",
    centeredSlides: true,
    // cssMode: true,
    KeyboardEvent:true,
    spaceBetween: 24,
    breakpoints: {
      768: {
    spaceBetween: 40,
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


  //要素の取得とスピードの設定
  var box = $(".information__image,.wide-card__image,.price__image"),
    speed = 700;

  //.colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="img-color"></div>');
    var color = $(this).find($(".img-color")),
      image = $(this).find("img");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this)
          .delay(200)
          .animate({ width: "100%" }, speed, function () {
            image.css("opacity", "1");
            $(this).css({ left: "0", right: "auto" });
            $(this).animate({ width: "0%" }, speed);
          });
        counter = 1;
      }
    });
  });

//   jQuery(function ($) {
//     $('.js-faq-question').on('click', function () {
//         $(this).next().slideToggle();
//         $(this).toggleClass('is-open');
//     });
// });

$(function () {
  $(".js-faq-question").addClass("is-open");
  $(".js-faq-question").on("click", function () {
    $(this).toggleClass("is-open");
    $(this).next().slideToggle(300);
  });
});


$(function(){
  $(".gallery-list__item img").click(function() {
    $("#gallery__modal-image").html($(this).prop('outerHTML'));
    $("#gallery__modal-image").fadeIn(100);
    $("body").addClass("no-scroll");
  });
  $("#gallery__modal-image, #gallery__modal-image img").click(function() {
    $("#gallery__modal-image").fadeOut(100);
    $("body").removeClass("no-scroll");
  });
});

jQuery(function ($) {
  $('.js-tab-menu').on('click', function () {
      $('.js-tab-menu').removeClass('tab-active');
      $('.js-tab-content').removeClass('tab-active');
      $(this).addClass('tab-active');
      var number = $(this).data("number");
      $('#' + number).addClass('tab-active');
  });
});



});
