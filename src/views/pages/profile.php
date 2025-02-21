<div class="layout">
    <h1 class="headline">
        Hallo User!
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
            <h3>Abonnierte Kurse</h3>
            <div class="profile__courses">
                <div class="profile__course">
                    <p>Hatha Yoga</p>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="profile__course">
                    <p>Jivamukti Yoga</p>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="profile__course">
                    <p>Yoga Nidra</p>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>

            </div>
            <h3>Nicht abonnierte Kurse</h3>
            <div class="profile__courses">
                <div class="profile__course">
                    <p>Hatha Yoga</p>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="profile__course">
                    <p>Jivamukti Yoga</p>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="profile__course">
                    <p>Yoga Nidra</p>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="notice">
                <p>
                    Du kannst einmal im Monat deine abonnierten Kurse ändern. Der zu
                    zahlende Beitrag passt sich automatisch an und wird für die nächste
                    Abbuchung berücksichtigt. Rückerstattungen sind ausgeschlossen.
                </p>
            </div>
            <div class="profile__checkbox">
                <div class="auth-form__checkbox-box">
                    <input type="checkbox" name="checkbox" required />
                    <label>Bitte bestätige, dass du die <a>AGBs</a> gelesen hast.</label>
                </div>
                <div class="auth-form__checkbox-box">
                    <input type="checkbox" name="checkbox" required />
                    <label>Ich melde mich verbindlich an bzw. melde ich verbindlich ab.</label>
                </div>
                <button class="profile__button" type="submit">Abonnierte Kurse ändern</button>
            </div>
        </div>
        <div class="profile__container">
                <h3>Deine Rechnungen im Überblick</h3>
                <div class="profile__invoices">
                    <div class="profile__invoice">
                        <p>Hatha Yoga</p>
                        <p>20€</p>
                    </div>
                    <div class="profile__invoice">
                        <p>Jivamukti Yoga</p>
                        <p>20€</p>
                    </div>
                    <div class="profile__invoice">
                        <p>Yoga Nidra</p>
                        <p>20€</p>
                    </div>
                    <div class="profile__invoice">
                        <p>Insgesamt:</p>
                        <p>60€</p>
                    </div>
                </div>

                <h3>Bezahlmethode</h3>
                <div class="profile__payment-method">
                    <p>Paypal</p>
                    <button class="profile__button" type="submit">Bezahlmethode ändern</button>
                </div>

            </div>
    </div>
</div>