jQuery(function ($) {
  $(document).ready(function () {
    // ハンバーガーメニュー
    $(".l-header__hamburger-button").click(function () {
      $(this).toggleClass("active");
      $(".l-header__hamburger-menu").toggleClass("active");
      $(".swiper").toggleClass("active");
    });

    // サービスのスクロール監視
    var observer = new IntersectionObserver(
      function (entries, observer) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            $(entry.target).addClass("active");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.5 }
    );

    $(".p-service__contents-items:first-of-type").each(function () {
      observer.observe(this);
      $(this).addClass("slide-in-left");
    });

    $(".p-service__contents-items:nth-child(2)").each(function () {
      observer.observe(this);
      $(this).addClass("slide-in-right");
    });

    $(".p-service__contents-items:last-of-type").each(function () {
      observer.observe(this);
      $(this).addClass("slide-in-left");
    });
  });

  // オープニングアニメーション
  const firstContainer = $(".p-top-opening");
  const secondContainer = $(".p-top-second-opening");
  const finalContainer = $(".p-top-final-opening");
  let windowWidth = $(window).width();

  function delay(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
  }

  async function opening() {
    $(".p-top-opening").css('display', 'block');
    $(".bar-left").css("height", $(window).height());
    await delay(400);
    $(".bar-right").css("height", $(window).height());
  }

  async function slideText() {
    $(".p-top-opening__title span").each(function (index) {
      $(this)
        .delay(200 * index)
        .queue(function () {
          $(this).addClass("active").dequeue();
        });
    });
    await delay(400);
    $(".p-top-opening__title-shadow")
      .eq(0)
      .find("span")
      .each(function (index) {
        $(this)
          .delay(20 * index)
          .queue(function () {
            $(this).addClass("active").dequeue();
          });
      });
    $(".p-top-opening__title-shadow")
      .eq(1)
      .find("span")
      .each(function (index) {
        $(this)
          .delay(20 * index)
          .queue(function () {
            $(this).addClass("active").dequeue();
          });
      });
    $(".p-top-opening__title-shadow")
      .eq(2)
      .find("span")
      .each(function (index) {
        $(this)
          .delay(20 * index)
          .queue(function () {
            $(this).addClass("active").dequeue();
          });
      });
  }

  async function slideBottomContents() {
    $(".p-top-opening__contents img").addClass("active");
    $(".p-top-opening__images").addClass("active");
    await delay(800);
    $(".p-top-opening__contents p span").each(function (index) {
      $(this)
        .delay(100 * index)
        .queue(function () {
          $(this).addClass("active").dequeue();
        });
    });
  }

  async function firstAnimation() {
    await opening();
    await delay(1200);
    slideText();
    slideBottomContents();
  }

  async function lastAnimation() {
    secondContainer.css("animation", "slide-in 5s forwards");
    windowWidth > 767 ?  await delay(2800) : await delay(2000);
    firstContainer.remove();
    finalContainer.css("display", "flex");
    secondContainer.remove();
    await delay(50);
    $(".p-top-final-opening__text").css("opacity", "1");
    await delay(2500);
    $(".p-top-final-opening__text").css("opacity", "0");
    finalContainer.css("opacity", "0");
    $(".p-top__mv").css("animation", "contentScale 5s forwards");
  }

  async function run() {
    firstAnimation();
    await delay(4000);
    lastAnimation();
    await delay(10000);
    finalContainer.remove();
  }

  const keyName = "visited";
  const keyValue = true;

  if (!sessionStorage.getItem(keyName)) {
    sessionStorage.setItem(keyName, keyValue);
    run();
  }
});
