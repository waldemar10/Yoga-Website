<form class="form-registration__wrapper">
    <h3>Konto erstellen</h3>
    <p>
        Um sich für einen Kurs anmelden zu können, benötigst du ein Konto.
        Du hast schon ein Konto? <a>Melde dich an.</a>
    </p>
    <select class="form-registration__dropdown-gender" required>
        <option value="Male">Herr</option>
        <option value="Female">Frau</option>
        <option value="NotSpecified">Keine Angaben</option>
    </select>

    <div class="form-registration__name-container">
        <div class="form-registration__name-box">
            <label>Vorname</label>
            <input type="text" required>
        </div>
        <div class="form-registration__name-box">
            <label>Nachname</label>
            <input type="text" required>
        </div>
    </div>
    <div class="form-registration__input">
        <label>E-Mail</label>
        <input type="email" required>
    </div>
    <div class="form-registration__input">
        <label>Passwort</label>
        <input type="password" required>
    </div>
    <div class="form-registration__input">
        <label>Passwort wiederholen</label>
        <input type="password" required>
    </div>
    <div class="form-registration__price-box">
        <h4>Preis</h4>
        <h4>monatlich 20 €</h4>
    </div>
    <div class="form-registration__radio-container">
        <div class="form-registration__radio-box">
            <input type="radio" name="radio" value="Lastschrift" checked />
            <label>Lastschrift</label>
        </div>
        <div class="form-registration__radio-box">
            <input type="radio" name="radio" value="Paypal" />
            <label>Paypal</label>
        </div>
        <div class="form-registration__radio-box">
            <input type="radio" name="radio" value="Kreditkarte" />
            <label>Kreditkarte</label>
        </div>
    </div>

    <div class="form-registration__checkbox-box">
        <input type="checkbox" name="checkbox" required />
        <label>Bitte bestätige, dass du die <a>AGBs</a> gelesen hast.</label>
    </div>

    <button class="form-registration__button" type="submit">Absenden</button>
</form>