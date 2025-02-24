export function initializeModal(messageType) {
  const modal = document.querySelector(".modal");
  const backdrop = document.querySelector(".modal__backdrop");
  const title = document.querySelector(".modal-title");
  const message = document.querySelector(".modal-message");
  if (messageType === "login") {
    title.textContent = "Du hast dich erfolgreich registriert.";
    message.textContent = "Willkommen an Bord! Du kannst dich jetzt einloggen.";
  } else if (messageType === "contact") {
    title.textContent = "Nachricht erfolgreich gesendet!";
    message.textContent =
      "Vielen Dank für deine Nachricht. Wir melden uns bald bei dir.";
  } else if (messageType === "booking") {
    title.textContent = "Erfolgreiche Buchung!";
    message.textContent = "Deine Buchung war erfolgreich. Viel Spaß!";
  } else if (messageType === "delete") {
    title.textContent = "Bist du sicher?";
    message.textContent =
      "Es wird keine Möglichkeit geben, die Aktion rückgängig zu machen.";
      const modalDelete = document.querySelector(".form__delete-profile");
    const btnCancel = document.querySelector(".button__cancel");
    btnCancel.addEventListener("click", function () {
      modal.style.display = "none";
      backdrop.style.display = "none";
    });
    const btnConfirm = document.querySelector(".button__confirm");
    btnConfirm.addEventListener("click", function () {
        modalDelete.submit();
    });
  } else {
    title.textContent = "Erfolg!";
    message.textContent = "Die Aktion war erfolgreich.";
  }

  window.history.replaceState({}, document.title, window.location.pathname);
  backdrop.addEventListener("click", function () {
    modal.style.display = "none";
    backdrop.style.display = "none";
  });
}
