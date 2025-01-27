export function initializeHeader() {
  const headerWrapper = document.querySelector("#header-wrapper");
  const button = document.querySelector(".header-burger-menu");
  if (!headerWrapper || !button) return;

  window.addEventListener("scroll", () => {
    const isOpen = button.getAttribute("data-state") === "open";
    if (isOpen) return; // do not change background color if burger menu is open
    if (window.scrollY > 0) {
      headerWrapper.classList.add("header-background");
    } else {
      headerWrapper.classList.remove("header-background");
    }
  });
}
