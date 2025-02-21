<?php
require_once __DIR__ . '/../../../includes/config_session.inc.php';
include_once __DIR__ . '/../form_errors_view.inc.php';
?>

<form class="auth-form__wrapper" method="POST" action="/login">
    <h3>Anmelden</h3>
    <p>
        Um sich für einen Kurs anmelden zu können, benötigst du ein Konto.
        Du hast kein Konto? <a href="/auth?type=register">Erstelle ein Konto.</a>
    </p>

    <div class="auth-form__input">
        <label>E-Mail</label>
        <input type="email" name="email" required>
    </div>
    <div class="auth-form__input">
        <label>Passwort</label>
        <input type="password" name="password" required>
    </div>
    <?php check_form_error('wrong'); ?>
    <?php check_form_error('empty'); ?>
    <?php unset($_SESSION['login_errors']); ?>
    <button class="auth-form__button" type="submit">Absenden</button>
</form>