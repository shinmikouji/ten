jQuery(function ($) {
  $(document).ready(function () {
    // ハンバーガーメニュー
    $(".l-header__hamburger-button").click(function () {
      $(this).toggleClass("active");
      $(".l-header__hamburger-menu").toggleClass("active");
      $(".swiper").toggleClass("active");
      // $("body").toggleClass("menu-open");
    });

    // ヘッダーのスクロール監視
    var mvElement = $(".p-top__mv")[0];
    var mvAlternativeElement = $(".c-mv")[0];

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) {
            $(".l-header").addClass("active");
          } else {
            $(".l-header").removeClass("active");
          }
        });
      },
      { threshold: 0 }
    );

    if (mvElement) {
      observer.observe(mvElement);
    } else if (mvAlternativeElement) {
      observer.observe(mvAlternativeElement);
    }
  });

  const keyName = "visited";
  const keyValue = true;

  if (!sessionStorage.getItem(keyName)) {
  }
  sessionStorage.setItem(keyName, keyValue);
  // カウントアップアニメーション
  const countUpElement = $(".p-top-countup");
  countUpElement.css("display", "flex");
  let count = 1;
  const countInterval = setInterval(() => {
    countUpElement.text(count.toString().padStart(2, "0"));
    count++;
    if (count > 11) {
      clearInterval(countInterval);
      // メッセージ表示アニメーション開始
      showMessageAnimation();
      countUpElement.remove();
    }
  }, 200);

  // メッセージ表示アニメーション
  function showMessageAnimation() {
    const messageElement = $(".p-top-message");
    messageElement.css("display", "flex");
    const message = messageElement.text();
    messageElement.text("");
    let index = 0;
    const messageInterval = setInterval(() => {
      messageElement.text(messageElement.text() + message[index++]);
      if (index >= message.length) {
        clearInterval(messageInterval);
        // アニメーション終了後に要素を削除
        setTimeout(() => {
          removeAnimationContainer();
          messageElement.remove();
        }, 300);
      }
    }, 100);
  }

  function removeAnimationContainer() {
    const mvElement = $(".p-top__mv");
    setTimeout(() => {
      mvElement.css("animation", "contentScale 2s forwards");
    });
  }
});
