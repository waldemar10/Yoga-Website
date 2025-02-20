<form class="auth-form__wrapper">
   
    <select class="auth-form__dropdown-gender" required>
        <option value="Male">Herr</option>
        <option value="Female">Frau</option>
        <option value="NotSpecified">Keine Angaben</option>
    </select>
    <div class="auth-form__name-container">
        <div class="auth-form__name-box">
            <label>Vorname</label>
            <input type="text" required>
        </div>
        <div class="auth-form__name-box">
            <label>Nachname</label>
            <input type="text" required>
        </div>
    </div>

    <div class="auth-form__input profile-form">
        <label>E-Mail</label>
        <input type="email" required>
    </div>
    <div class="auth-form__input">
        <label>Passwort ändern</label>
        <input type="password" required>
    </div>
    <div class="auth-form__input">
        <label>Passwort wiederholen</label>
        <input type="password" required>
    </div>

    <div class="profile__button-container">
    <button class="profile__button" type="submit">Speichern</button>
    <button class="profile__button profile__button--delete" type="submit">Konto Löschen</button>
    </div>
</form>