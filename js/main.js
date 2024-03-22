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

    $(".p-service__contents-items:first-of-type").each(function (){
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
  const countUpContainer = $(".p-top-count-up__container");
  const messageContainer = $(".p-top-message__container");

  function delay(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
  }

  function countAnimation(prev, next) {
    $(prev).css("display", "none");
    $(next).css("display", "block");
    $(next).addClass("fade-in-animation");
  }

  async function countUp() {
    countUpContainer.css("display", "flex");
    $(".count-up-01").css("display", "block");
    $(".count-up-01").addClass("fade-in-animation");
    await delay(600);
    countAnimation(".count-up-01", ".count-up-02");
    await delay(600);
    countAnimation(".count-up-02", ".count-up-03");
    await delay(500);
    countAnimation(".count-up-03", ".count-up-04");
    await delay(300);
    countAnimation(".count-up-04", ".count-up-05");
    await delay(300);
    countAnimation(".count-up-05", ".count-up-06");
    await delay(300);
    countAnimation(".count-up-06", ".count-up-07");
    await delay(300);
    countAnimation(".count-up-07", ".count-up-08");
    await delay(300);
    countAnimation(".count-up-08", ".count-up-09");
    await delay(300);
    countAnimation(".count-up-09", ".count-up-10");
    await delay(600);
  }

  async function displayMessage() {
    messageContainer.css("display", "flex");
    messageContainer.find("p").css("display", "block");
    countUpContainer.remove();
    messageContainer.find("p").addClass("fade-in-animation");
    await delay(1200);
    messageContainer.addClass("background-animation");
    await delay(1000);
    messageContainer.remove();
  }

  async function run() {
    await countUp();
    displayMessage();
  }

  const keyName = "visited";
  const keyValue = true;

  // if (!sessionStorage.getItem(keyName)) {
  //   sessionStorage.setItem(keyName, keyValue);
  //   run();
  // }
});
