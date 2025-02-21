export function initializeModal(messageType) {
    const modal = document.querySelector('.success-modal');
    const backdrop = document.querySelector('.success-modal__backdrop');
    const title = document.querySelector('.modal-title');
    const message = document.querySelector('.modal-message');
    if (messageType === 'login') {
        title.textContent = 'Du hast dich erfolgreich registriert.';
        message.textContent = 'Willkommen an Bord! Du kannst dich jetzt einloggen.';
    } else if (messageType === 'contact') {
        title.textContent = 'Nachricht erfolgreich gesendet!';
        message.textContent = 'Vielen Dank für deine Nachricht. Wir melden uns bald bei dir.';
    } else {
        title.textContent = 'Erfolg!';
        message.textContent = 'Die Aktion war erfolgreich.';
    }
  
    backdrop.addEventListener('click', function() {
        modal.style.display = 'none'; 
        backdrop.style.display = 'none';
    });
}
