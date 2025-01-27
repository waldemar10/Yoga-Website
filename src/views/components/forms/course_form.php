<?php
/* require_once __DIR__ . '/../config_session.inc.php';
include_once __DIR__ . '/../form_errors_view.inc.php'; */
?>
<!-- 
// * TODO: 
// * DB connection
// * Error handling
// * Login form & registration form
-->

<div class="course-sale-form-wrapper">
    <h3>Für den Kurs anmelden</h3>
    <form>
        <label>Name</label>
        <input class="course-sale-form-input" type="text" required>
        <label>E-Mail</label>
        <input class="course-sale-form-input" type="email" required>
        <div class="course-sale-price-box">
            <h4>Bezahlmethoden</h4>
            <div>
                <h4>Preis</h4>
                <h4>monatlich 4,99 €</h4>
            </div>
        </div>
        <div class="course-sale-radio-container">
            <div class="course-sale-radio-box">
                <input type="radio" name="radio" value="Lastschrift" checked />
                <label>Lastschrift</label>
            </div>
            <div class="course-sale-radio-box">
                <input type="radio" name="radio" value="Paypal" />
                <label>Paypal</label>
            </div>
            <div class="course-sale-radio-box">
                <input type="radio" name="radio" value="Kreditkarte" />
                <label>Kreditkarte</label>
            </div>
        </div>
        <h4>Rechtliches</h4>
        <div class="course-sale-checkbox-container">
            <div class="course-sale-checkbox-box">
                <input type="checkbox" name="checkbox" required />
                <label>Verbindliche Anmeldung zum Kurs</label>
            </div>
            <div class="course-sale-checkbox-box">
                <input type="checkbox" name="checkbox" required />
                <label>Bitte bestätige, dass du die <a>AGBs</a> gelesen hast</label>
            </div>
        </div>
        <div class="form-response-box">
            <p>Derzeit funktioniert die Anmeldung für unsere Kurse nicht.</p>
        </div>
        <button class="course-sale-button" disabled>Absenden</button>
    </form>
</div>