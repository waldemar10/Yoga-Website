<form class="auth-form__wrapper">
    <h3>Konto erstellen</h3>
    <p>
        Um sich für einen Kurs anmelden zu können, benötigst du ein Konto.
        Du hast schon ein Konto? <a href="/login">Melde dich an.</a>
    </p>
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
    <div class="auth-form__input">
        <label>E-Mail</label>
        <input type="email" required>
    </div>
    <div class="auth-form__input">
        <label>Passwort</label>
        <input type="password" required>
    </div>
    <div class="auth-form__input">
        <label>Passwort wiederholen</label>
        <input type="password" required>
    </div>
    <div class="auth-form__price-box">
        <h4>Preis: monatlich 20 €</h4>
    </div>
    <div class="auth-form__radio-container">
        <div class="auth-form__radio-box">
            <input type="radio" name="radio" value="Lastschrift" checked />
            <label>Lastschrift</label>
        </div>
        <div class="auth-form__radio-box">
            <input type="radio" name="radio" value="Paypal" />
            <label>Paypal</label>
        </div>
        <div class="auth-form__radio-box">
            <input type="radio" name="radio" value="Kreditkarte" />
            <label>Kreditkarte</label>
        </div>
    </div>

    <div class="auth-form__checkbox-box">
        <input type="checkbox" name="checkbox" required />
        <label>Bitte bestätige, dass du die <a>AGBs</a> gelesen hast.</label>
    </div>

    <button class="auth-form__button" type="submit">Absenden</button>
</form>