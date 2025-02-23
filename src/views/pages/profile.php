<?php
require_once __DIR__ . '/../../includes/config_session.inc.php';
include_once __DIR__ . '/../components/form_errors_view.inc.php';
?>
<?php if (isset($_GET['success']) && $_GET['success'] === 'true'):
    include_once __DIR__ . '/../components/success_modal.php';
endif; ?>
<div class="layout">
    <h1 class="headline">
        Hallo <?= htmlspecialchars($userData['first_name'] ?? 'User') ?>!
    </h1>
    <p class="profile__text">
        Hier findest du alle Informationen zu deinem Profil. Du kannst deine
        Kontodaten ändern und deine abonnierten Kurse verwalten.
    </p>

    <?php include_once __DIR__ . "/../components/all_courses.php" ?>

    <div class="profile">

        <div class="profile__container">
            <h3>Deine Kontodaten</h3>
            <?php include_once __DIR__ . "/../components/forms/profile_form.php" ?>
        </div>

        <div class="profile__container">
        <h3>Deine Kurse</h3>
            <form class="profile__courses" method="POST" action="/subscription">
            <h4>Abonnierte Kurse</h4>
                <?php
                if (is_array($bookedCourses)) {
                    foreach ($bookedCourses as $course) {
                        $courseName = strtolower(str_replace(' ', '_', $course['name']));
                        echo "<div class='profile__course'>
                            <p>{$course['name']}</p>
                            <label class='switch'>
                                <input type='checkbox' name='{$courseName}' checked>
                                <span class='slider round'></span>
                            </label>
                        </div>";
                    }
                }
                if ($bookedCourses == null) {
                    echo "<p class='profile__course'>Du hast noch keine Kurse abonniert.</p>";
                }
                ?>
                <div class="profile__line"></div>
                <h4>Nicht abonnierte Kurse</h4>
                <?php
                if (is_array($notBookedCourses)) {
                    foreach ($notBookedCourses as $course) {
                        $courseName = strtolower(str_replace(' ', '_', $course['name']));
                        echo "<div class='profile__course'>
                            <p>{$course['name']}</p>
                            <label class='switch'>
                                <input type='checkbox' name='{$courseName}'>
                                <span class='slider round'></span>
                            </label>
                        </div>";
                    }
                }

                if ($notBookedCourses == null) {
                    echo "<p class='profile__course'>Du hast alle Kurse abonniert.</p>";
                }

                ?>
                <div class="profile__line"></div>
                <div class="notice">
                    <p>
                        Du kannst einmal im Monat deine abonnierten Kurse ändern. Der zu
                        zahlende Beitrag passt sich automatisch an und wird für die nächste
                        Abbuchung berücksichtigt. Rückerstattungen sind ausgeschlossen.
                    </p>
                </div>
                <div class="profile__checkbox">
                    <?php check_form_error('agb'); ?>
                    <div class="auth-form__checkbox-box">
                        <input type="checkbox" name="agbs" />
                        <label>Bitte bestätige, dass du die <a>AGBs</a> gelesen hast.</label>

                    </div>
                    <?php check_form_error('booking_confirmation'); ?>
                    <div class="auth-form__checkbox-box">

                        <input type="checkbox" name="booking_confirmation" />
                        <label>Ich melde mich verbindlich an bzw. melde mich verbindlich ab.

                        </label>

                    </div>

                    <button class="button__primary" type="submit">Jetzt ändern</button>
                </div>
        </div>
        </form>
        <div class="profile__container">
        <h3>Deine Kosten</h3>
            <div class="profile__invoices">
            
                <?php
                $totalPrice = 0;
                if (is_array($bookedCourses)) {
                    foreach ($bookedCourses as $course) {
                        $totalPrice += $course['price'];
                        echo "<div class='profile__invoice'>
                            <p>{$course['name']}</p>
                            <p>{$course['price']} €</p>
                        </div>";
                    }
                }
                if ($notBookedCourses == null) {
                    echo "<p class='profile__course'>Du hast alle Kurse abonniert.</p>";
                }
                echo "<div class='profile__invoice'>
                    <p>Insgesamt:</p>
                    <p>{$totalPrice} €</p>
                </div>";
                ?>
            </div>

            
            <form class="auth-form__wrapper" method="POST" action="/payment">
            <h3>Bezahlmethode</h3>
                <p>Du kannst jederzeit deine Bezahlmethode ändern.</p>
                <select name="payment" class="auth-form__dropdown auth-form__dropdown" required>
                    <option value="lastschrift" <?= ($userData["payment_method"] ?? '') === "Lastschrift" ? 'selected' : '' ?>>
                        Lastschrift
                    </option>
                    <option value="paypal" <?= ($userData["payment_method"] ?? '') === "Paypal" ? 'selected' : '' ?>>
                        Paypal
                    </option>
                    <option value="kreditkarte" <?= ($userData["payment_method"] ?? '') === "Kreditkarte" ? 'selected' : '' ?>>
                        Kreditkarte
                    </option>
                </select>

                <button class="button__primary" type="submit">Speichern</button>

            </form>
        </div>
    </div>
</div>

<?php unset($_SESSION['booking_errors']); ?>