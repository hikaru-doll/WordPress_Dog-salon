document.addEventListener("DOMContentLoaded", function () {
  const body = document.body;
  const ham = document.querySelector(".ham");
  const menu = document.querySelector(".main-navigation");
  function closeMenu() {
    body.classList.remove("open");
    ham.setAttribute("aria-expanded", "false");
    ham.setAttribute("aria-label", "メニューを開く");
    ham.focus();
  }
  function openMenu() {
    body.classList.add("open");
    ham.setAttribute("aria-expanded", "true");
    ham.setAttribute("aria-label", "メニューを閉じる");
  }
  function toggleMenu() {
    body.classList.contains("open") ? closeMenu() : openMenu();
  }

  // ハンバーガーメニューの開閉とaria属性の切り替え
  ham.addEventListener("click", toggleMenu);

  // 開いたmenuのクリック時でメニューの閉会とaria属性の切り替え
  menu.addEventListener("click", closeMenu);

  // ESCキーでメニューを閉じる
  // 視覚上の状態だけでなくaria-expandedも同期する
  const handleKeydown = (e) => {
    if (e.key === "Escape") {
      closeMenu();
    }
  };
  document.addEventListener("keydown", handleKeydown);

  // ハンバーガーメニューOPEN時に、フォーカスが外れないようにする
  const focusTrap = document.getElementById("js-focus-trap");
  focusTrap.addEventListener("focus", (e) => {
    ham.focus();
  });

  // コピーライトの西暦を動的に出力する
  const year = document.getElementById("year");
  if (year) {
    year.textContent = new Date().getFullYear();
  }
});
