<?php
require_once __DIR__ . '/../../../includes/config_session.inc.php';
include_once __DIR__ . '/../form_errors_view.inc.php';
?>
<form class="auth-form__wrapper" method="POST" action="/register">
    <h3>Konto erstellen</h3>
    <p>
        Um sich für einen Kurs anmelden zu können, benötigst du ein Konto.
        Du hast schon ein Konto? <a href="/auth?type=login">Melde dich an.</a>
    </p>
    <select class="auth-form__dropdown-gender" name="gender" required>
        <option value="Male">Herr</option>
        <option value="Female">Frau</option>
        <option value="NotSpecified">Keine Angaben</option>
    </select>

    <div class="auth-form__name-container">
        <div class="auth-form__name-box">
            <label>Vorname</label>
            <input type="text" name="first_name">
            <?php check_form_error('firstname'); ?>
        </div>
        <div class="auth-form__name-box">
            <label>Nachname</label>
            <input type="text" name="last_name" >
            <?php check_form_error('lastname'); ?>
        </div>
    </div>
    <div class="auth-form__input">
        <label>E-Mail</label>
        <input type="email" name="email">
        <?php check_form_error('email'); ?>
    </div>
    <div class="auth-form__input">
        <label>Passwort</label>
        <input type="password" name="password">
        <?php check_form_error('passworde'); ?>
    </div>
    <div class="auth-form__input">
        <label>Passwort wiederholen</label>
        <input type="password" name="password_repeat" >
        <?php check_form_error('password_repeat'); ?>
        <?php check_form_error('password_wrong_repeat'); ?>
    </div>
    <div class="auth-form__price-box">
        <h4>Preis: monatlich 20 €</h4>
    </div>
    <div class="auth-form__radio-container">
        <?php check_form_error('payment_method'); ?>
        <div class="auth-form__radio-box">
            <input type="radio" name="payment_method" value="Lastschrift" />
            <label>Lastschrift</label>
        </div>
        <div class="auth-form__radio-box">
            <input type="radio" name="payment_method" value="Paypal" />
            <label>Paypal</label>
        </div>
        <div class="auth-form__radio-box">
            <input type="radio" name="payment_method" value="Kreditkarte" />
            <label>Kreditkarte</label>
        </div>
    </div>

    <div class="auth-form__checkbox-box">
        <input type="checkbox" name="terms" />
        <label>Bitte bestätige, dass du die <a>AGBs</a> gelesen hast.</label>
        
    </div>
    <?php check_form_error('agb'); ?>
    <?php unset($_SESSION['register_errors']); ?>
    <button class="button__primary" type="submit">Registrieren</button>
</form>