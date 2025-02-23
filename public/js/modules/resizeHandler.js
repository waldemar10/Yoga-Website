export function setMarginTopForHighlightImage() {
  const wrapper = document
    .querySelector(".header__navbar-container")
    .getBoundingClientRect();
  const highlightImageMarginTop = document.querySelector(".layout");
  if (!highlightImageMarginTop || !wrapper) return;
  highlightImageMarginTop.style.marginTop = wrapper.height + "px";
}

export function initializeResizeHandler() {
  window.onresize = setMarginTopForHighlightImage;
  window.onload = setMarginTopForHighlightImage;
}
