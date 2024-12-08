<?php include 'components/head.php'; ?>
<body class="body-bg-darkmode">

    <?php include 'components/header.php'; ?>
    <!--Überschrift-->
    <h2 class="h2Kurse text-align_center margin-bottom20 margin-top_kursplan filter_blur" id="anker2">
        Yin Yoga
    </h2>
    <!--Responsive Article: Smartphone-->
    <article class=" text-align_left responsive_kurse_img align-vertical">

        <p class="text_kurse filter_blur">
            <br />
            Yin Yoga ist ein langsamer Yogastil mit einem hohen Stretchinganteil. 
            Passive Dehnübungen, die zum Teil bis zu zehn Minuten gehalten werden, stehen im Fokus. 
            In jeder Stunde werden vier bis sechs solcher Asanas geübt. Yin Yoga kräftigt und fördert deine Flexibilität.
            Die Yoga Art soll einen positiven Einfluss auf das Bindegewebe haben, die allgemeine Beweglichkeit steigern und den Geist beruhigen.
            <br />
            <br />
            <div class="flex align-items_center filter_blur">
                <p class="text_kurse"> <span class="font-color-anfänger">Dieser Kurs findet im Studio statt.</span></p>
            </div>
            <div class="flex align-items_center filter_blur">
            <img class="flex flex-grow1" src="images/stundenplan/yinStundenplan.webp" />
            
        </div>
     
        </p>
    </article>
   <!--Button Anmelden-->
   <div class="flex align-items_center">
    <button class="button-anfänger text-align_center margin-bottom20 filter_blur" id="b_1yin" onclick="anmelden()" type="button">Anmelden</button>
        <button class="bkurse_abmelden text-align_center margin-bottom20 filter_blur hidden display_none" id="b_2yin" 
        onclick="anmelden_abbrechen()" type="button">Abmelden</button>
    </div>
    
    <div class="flex responsive_kurse filter_blur">
        <div class="flex flex-grow1 align-vertical">
        <img class="height100 width100" src="images/yinyoga.png" />
        <article class="text-align_left">
            
            <h3 class="h3_kurse text-align_center"> <span class="font-color-anfänger">Besonderheiten und Wirkung von Yin Yoga </span></h3>
                <p class="text_kurse">
                    <br />
    
    
                    Yin Yoga ist eine meditative Annäherung an unser Innenleben mit gleichzeitigem Fokus auf die eigene Anatomie.
                    In der Yin-Yoga-Praxis schaut man ganz intensiv in sich hinein, man gibt sich seinen Emotionen hin,
                    wodurch man viel über sich selbst lernen kann. Die Asanas werden zwar in einer für den Körper relativ komfortablen Position gehalten,
                    allerdings kann das lange Halten, in der Regel zwischen drei bis fünfzehn Minuten, durchaus für viele Yogaschüler zu einer körperlichen Herausforderung werden.
                    <br />
                    <br />
                    Man sollte dabei immer gut auf seinen Körper hören und nicht von Anfang an an die eigenen Grenzen gehen.
                    Es ist, wie Stück für Stück in die Haltung zu sinken. Dadurch erhöht sich im Körper die Flexibilität der Muskeln und Faszien,
                    und es können zum Teil An- und Verspannungen gelindert und sogar komplett gelöst werden, wodurch der Fluss des Chi harmonisiert wird.
                    Durch das sanfte lange Ausharren in den Haltungen können aufgrund von Bewegungsmangel entstandene Degenerierungen und Fixationen – die
                    geradezu eine Epidemie in unserer sogenannten weiterentwickelten Kultur mit ihren an die Computer „geschweißten” und
                    sitzenden Menschen darstellen – wieder aufgelöst werden. Bei dieser ruhigen und meditativen Yoga-Praxis werden so viele Hilfsmittel wie nur
                    möglich eingesetzt – zum Beispiel Polster, Decken, Gurte, Klötze und Sandsäcke.
                    <br />
                    <br />
                    Im Yin Yoga sollte es darum gehen, den Körper zu erkunden und zu erspüren. Es geht bei diesem Yogastil allein um die reine energetische Arbeit mit dem Körper,
                    ohne Leistung erbringen zu müssen oder Anerkennung von anderen zu erlangen.
                    Dabei ist es wichtig, eine Achtsamkeit zu entwickeln und das „Hier und Jetzt” mehr zu spüren und sich dadurch seiner selbst
                    bewusster zu werden, ohne gedanklich in der Vergangenheit oder der Zukunft zu sein.
    
                    <br />
                    <br />
            </p>
             <!--Zeige Kursleiterin wenn Responsive = Smartphone-->
            <div class="responsive_kurse_img centerContent">
                <figure>
                    <figcaption class="text-align_center aFontKurseKlein margin-top_text">Kursleiterin Stephanie</figcaption>
                    <img class="flex flex-grow1" src="images/stephanie.png" />

                </figure>
            </div>
        </article>
        
    </div>
    <!--Responsive Article: Tablet und Desktop-->
        <article class=" text-align_left responsive_kurse_img_noDisplay">

            <p class="text_kurse">
                <br />
                Yin Yoga ist ein langsamer Yogastil mit einem hohen Stretchinganteil. 
            Passive Dehnübungen, die zum Teil bis zu zehn Minuten gehalten werden, stehen im Fokus. 
            In jeder Stunde werden vier bis sechs solcher Asanas geübt. Yin Yoga kräftigt und fördert deine Flexibilität.
            Die Yoga Art soll einen positiven Einfluss auf das Bindegewebe haben, die allgemeine Beweglichkeit steigern und den Geist beruhigen.
                <br />
                <br />
                <div class="flex align-items_center filter_blur">
                    <p class="text_kurse"> <span class="font-color-anfänger">Dieser Kurs findet im Studio statt.</span></p>
                </div>
                <div class="flex align-items_center filter_blur">
                <img class="flex flex-grow1" src="images/stundenplan/yinStundenplan.webp" />
                
            </div>
            </p>
             <!--Verstecke Kursleiterin wenn Responsive = Smartphone-->
            <figure class="responsive_kurse_img_noDisplay margin-top_text">
                <figcaption class="text-align_center aFontKurseKlein">Kursleiterin Stephanie</figcaption>
                <img class="flex flex-grow1" src="images/stephanie.png" />
        
            </figure>
        </article>
        
    </div>
    

        <!--Formular zur Anmeldung-->
        <div class="kurs_anmeldung">
            <h2>Kurs Anmeldung</h2>
        <form id="form" action="/" method="GET">
            <p class="abbrechen" onclick="abbrechen()"><i class="fas fa-times"></i></p>
            <div id="error_agb"></div>
            <div id="error_name"></div>
            <div id="error_email"></div>
            <div id="angemeldet"></div>
            <div>
            <label id="text_anmeldung_name" for="name">Name</label>
            <input id="name" name="name" type="text" placeholder="Vollständiger Name">
            </div>
            
            <label id="text_anmeldung_email" for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="Deine Email">
            <p id="text_anmeldung_bezahlmethode">Bezahlmethode</p>
            <input  type="radio" name="bezahlung" value="PAYPAL"id="r1" checked>
            <label id="text_anmeldung_r1" for="r1">Paypal</label>
            <input type="radio" name="bezahlung" value="BAR" id="r2">
            <label id="text_anmeldung_r2" for="r2">Bar</label>
            <p id="text_anmeldung_agb">AGB</p>
            <p id="text_anmeldung_checkagb"><input id="check_agb" type="Checkbox">gelesen</p>
            <button id="button_anmeldung1" type="submit" class="banmeldung centerContent" onclick="anmeldung()">Anmelden</button>
            <button id="button_anmeldung2" type="button" class="banmeldung centerContent hidden" onclick="abbrechen()" >Fertig</button>
            <p class="controll_email">Das ist keine Email</p>
        </form>
        </div>
        <?php include 'components/footer.php'; ?>
</body>
</html>