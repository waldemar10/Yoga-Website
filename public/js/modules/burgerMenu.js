function handleBurgerMenu() {
  const button = document.querySelector(".header__burger-menu");
  const burgerMenuLinks = document.querySelector(
    ".header__navbar-link-container-burger-menu"
  );
  const headerWrapper = document.querySelector("#header-wrapper");
  if (!burgerMenuLinks || !button) {
    return console.error("Elemente nicht gefunden");
  }

  const isOpen = button.getAttribute("data-state") === "open";
  if (isOpen) {
    if (window.scrollY === 0) {
      headerWrapper.classList.remove("header__background");
    }
    burgerMenuLinks.classList.remove("burger-menu-fade-in");
    burgerMenuLinks.classList.add("burger-menu-fade-out");
    button.setAttribute("data-state", "closed");
    burgerMenuLinks.addEventListener(
      "animationend",
      function handleAnimationEnd() {
        burgerMenuLinks.style.display = "none";

        burgerMenuLinks.classList.remove("burger-menu-fade-out");
        burgerMenuLinks.removeEventListener("animationend", handleAnimationEnd);
      }
    );
  } else {
    if (window.scrollY === 0) {
      headerWrapper.classList.add("header__background");
    }
    burgerMenuLinks.style.display = "flex";

    burgerMenuLinks.classList.remove("burger-menu-fade-out");
    burgerMenuLinks.classList.add("burger-menu-fade-in");
    button.setAttribute("data-state", "open");
  }
}

export function initializeBurgerMenu() {
  const button = document.querySelector(".header__burger-menu");
  if (!button) {
    return console.error("Element nicht gefunden");
  }

  button.addEventListener("click", handleBurgerMenu);
}
