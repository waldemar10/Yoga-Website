<?php
require_once __DIR__ . '/../../../includes/config_session.inc.php';
include_once __DIR__ . '/../form_errors_view.inc.php';

?>

<div class="contact__form-wrapper">
    <h3>Kontaktformular</h3>
    <form name="form" id="form" class="form" action="/contact/submit" method="post">
        <label for="name">Name</label>
        <?php check_form_error("name") ?>
        <input id="name" type="text" name="name">

        <label for="email">E-Mail</label>
        <?php check_form_error("email") ?>
        <input id="email" type="text" name="email">

        <label for="message">Nachricht</label>
        <?php check_form_error("message") ?>
        <textarea id="message" name="message" minlength="16"></textarea>
        <?php check_form_error("general") ?>
        <?php unset($_SESSION['form_errors']);
        ; ?>

        <?php if (isset($_GET['success']) && $_GET['success'] === 'true'): ?>
            <div class="auth-form__response-box">
                <p>Vielen Dank für Ihre Nachricht!</p>
            </div>
        <?php endif; ?>

        <button id="contact-button" class="button__secondary" type="submit">
            Abschicken
        </button>
    </form>
</div>