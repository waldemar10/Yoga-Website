<form class="auth-form__wrapper" method="POST">
    <h3>Konto erstellen</h3>
    <select name="gender" class="auth-form__dropdown-gender" required>
        <option value="Male">Herr</option>
        <option value="Female">Frau</option>
        <option value="NotSpecified">Keine Angaben</option>
    </select>

    <div class="auth-form__name-container">
        <div class="auth-form__name-box">
            <label>Vorname</label>
            <input type="text" name="first_name" required>
        </div>
        <div class="auth-form__name-box">
            <label>Nachname</label>
            <input type="text" name="last_name" required>
        </div>
    </div>
    <div class="auth-form__input">
        <label>E-Mail</label>
        <input type="email" name="email" required>
    </div>
    <div class="auth-form__input">
        <label>Passwort</label>
        <input type="password" name="password" required>
    </div>
    <div class="auth-form__input">
        <label>Passwort wiederholen</label>
        <input type="password" name="password_repeat" required>
    </div>

    <button class="auth-form__button" type="submit">Absenden</button>
</form>
