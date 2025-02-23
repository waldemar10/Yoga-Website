<form class="auth-form__wrapper" method="POST" action="/updateProfileData">
    <h3>Dein Konto</h3>
    <select name="gender" class="auth-form__dropdown-gender" required>
        <option value="Male" <?= ($userData["gender"] ?? '') === "male" ? 'selected' : '' ?>>Herr</option>
        <option value="Female" <?= ($userData["gender"] ?? '') === "female" ? 'selected' : '' ?>>Frau</option>
        <option value="NotSpecified" <?= ($userData["gender"] ?? '') === "notSpecified" ? 'selected' : '' ?>>Keine Angaben
        </option>
    </select>
    <div class="auth-form__name-container">
        <div class="auth-form__name-box">
            <label>Vorname</label>
            <input type="text" name="first_name" value="<?= htmlspecialchars($userData["first_name"] ?? '') ?>"
                required>
        </div>
        <div class="auth-form__name-box">
            <label>Nachname</label>
            <input type="text" name="last_name" value="<?= htmlspecialchars($userData["last_name"] ?? '') ?>">
        </div>
    </div>
    <div class="auth-form__input">
        <label>E-Mail</label>
        <input type="email" name="email" value="<?= htmlspecialchars($userData["email"] ?? '') ?>">
    </div>
    <div class="auth-form__input">
        <label>Passwort ändern</label>
        <input type="password" name="password" autofill="off">
    </div>
    <div class="auth-form__input">
        <label>Passwort wiederholen</label>
        <input type="password" name="password_repeat" autofill="off">
    </div>

    <button class="auth-form__button" type="submit">Speichern</button>
</form>