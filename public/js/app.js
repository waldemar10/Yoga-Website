import { initializeBurgerMenu } from "./modules/burgerMenu.js";
import { initializeResizeHandler } from "./modules/resizeHandler.js";
import { initializeHeader } from "./pages/header.js";
import { initializeModal } from "./modules/modal.js";

export function startApp() {

  initializeHeader();
  initializeResizeHandler();
  initializeBurgerMenu();
  const urlParams = new URLSearchParams(window.location.search);
  const success = urlParams.get('success');
  const type = urlParams.get('type');

  if (success === 'true' && type) {
    initializeModal(type);
  }
}
