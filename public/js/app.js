import { initializeBurgerMenu } from "./modules/burgerMenu.js";
import { initializeResizeHandler } from "./modules/resizeHandler.js";
import { initializeHeader } from "./pages/header.js";

export function startApp() {
  initializeHeader();
  initializeResizeHandler();
  initializeBurgerMenu();
}
