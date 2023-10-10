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

  $(".js-hamburger,.js-sp-nav,.sp-nav__menu a,.header__logo").click(function () {
    if ($(".js-hamburger").hasClass("is-active")) {
      $(".js-hamburger").removeClass("is-active");
      $(".js-sp-nav").fadeOut(500);
      $(".mv__header").fadeIn(500);
    } else {
      $(".js-hamburger").addClass("is-active");
      $(".js-sp-nav").fadeIn(500);
      $(".mv__header").fadeOut(500);
    }
  });

  // ヘッダークラス名付与
  let header = $(".js-header");
  let headerHeight = $(".js-header").height();
  let height = $(".js-mv-height").height();

  console.log('ヘッダー高さ' + headerHeight);
  console.log('メインビュー高さ' + height);

  $(window).scroll(function () {
    if ($(this).scrollTop() > height - headerHeight) {
      header.addClass("is-color");
    } else {
      header.removeClass("is-color");
    }
  });

    // ヘッダーの高さ分だけコンテンツを下げる
    // const height = $(".js-header").height();
    $("main").css("margin-top", headerHeight);

    // ヘッダーの高さ取得
    // const headerHeight = $(".js-header").height();
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

  var campaignSwiper = new Swiper(".js-campaign-slider", {
    slidesPerView: "auto",
    centeredSlides: true,
    // spaceBetween: 40,
  });

  $(".swiper-button-prev").click(function () {
    $(
      ".swiper.js-campaign-slider.swiper-initialized.swiper-horizontal.swiper-android.swiper-backface-hidden"
    ).animate(
      {
        scrollLeft:
          $(
            ".swiper.js-campaign-slider.swiper-initialized.swiper-horizontal.swiper-android.swiper-backface-hidden"
          ).scrollLeft() - 700, //〇〇px左にスクロールする
      },
      300
    ); //スクロールにかかる時間
  });
  $(".swiper-button-next").click(function () {
    $(
      ".swiper.js-campaign-slider.swiper-initialized.swiper-horizontal.swiper-android.swiper-backface-hidden"
    ).animate(
      {
        scrollLeft:
          $(
            ".swiper.js-campaign-slider.swiper-initialized.swiper-horizontal.swiper-android.swiper-backface-hidden"
          ).scrollLeft() + 700, //〇〇px右にスクロールする
      },
      300
    ); //スクロールにかかる時間
  });

  //要素の取得とスピードの設定
  var box = $(".information__image,.voiceCard__image,.price__image"),
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


});
