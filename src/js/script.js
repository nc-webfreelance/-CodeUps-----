jQuery(function ($) {
  // ヘッダー
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
  $("main").css("margin-top", headerHeight);
  $('a[href^="#"]').click(function () {
    const speed = 1000;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top - headerHeight;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  // トップへ戻るボタン
  let topBtn = $(".to-top");
  topBtn.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
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

  // スワイパー
  const swiper = new Swiper(".js-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000,
    },
  });
  const blogSwiper = new Swiper(".js-blog-swiper", {
    loop: true,
    speed: 2000,
    slidesPerView: 1,
    centeredSlides: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    breakpoints: {
      768: {
        slidesPerView: 4,
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
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
      let index = $(this).index();
      $(".js-tab-content").hide().eq(index).fadeIn(300);
    });
    let urlParams = new URLSearchParams(window.location.search);
    let tabId = urlParams.get("tabId");
    if (tabId) {
      $(".is-active").removeClass("is-active");
      $('.js-tab[data-tab-id="'.concat(tabId, '"]')).addClass("is-active");
      let index = $('.js-tab[data-tab-id="'.concat(tabId, '"]')).index();
      $(".js-tab-content").hide().eq(index).fadeIn(300);
    }
  });

  // js-popUp
  gsap.utils.toArray(".js-popUp").forEach((target) => {
    gsap.fromTo(
      target,
      { scale: 0.9, autoAlpha: 0 },
      {
        scale: 1,
        autoAlpha: 1,
        ease: "back.out(1.7)",
        scrollTrigger: {
          trigger: target,
          start: "top 80%",
        },
      }
    );
  });

  // js-popUps
  gsap.utils.toArray(".js-popUps").forEach((element) => {
    let targets = element.querySelectorAll(":scope > *");
    gsap.fromTo(
      targets,
      { scale: 0.9, autoAlpha: 0 },
      {
        scale: 1,
        autoAlpha: 1,
        ease: "back.out(1.7)",
        scrollTrigger: {
          trigger: element,
          start: "top 80%",
        },
      }
    );
  });
});
