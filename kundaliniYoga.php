<?php include 'components/head.php'; ?>
<body class="body-bg-darkmode">

    <?php include 'components/header.php'; ?>
    <!--Überschrift-->
    <h2 class="h2Kurse text-align_center margin-bottom20 margin-top_kursplan filter_blur" id="anker2">
        Kundalini Yoga
    </h2>
     <!--Responsive Article: Smartphone-->
     <article class=" text-align_left responsive_kurse_img align-vertical">

        <p class="text_kurse filter_blur">
            <br />
            Kundalini Yoga verbindet verschiedene körperliche und meditative Techniken, welche die Lebensenergie, 
            auch Kundalini genannt, wecken sollen. Man geht davon aus, dass der Mensch mehrere Energiezentren besitzt, 
            die sogenannten Chakren. Diese können durch innere und äußere Einflüsse blockieren. Durch Meditation, 
            Atemtechniken, spezielle Handhaltungen (Mudras), Chanting und feste Abfolgen von statischen und 
            dynamischen Asanas soll die Energie wieder frei fließen können. Eine weitere Besonderheit dieser 
            Yogarichtung: Traditionell tragen Kundalini Yogis weiße Kleidung und einen Turban. 
            <br />
            <br />
            <div class="flex align-items_center filter_blur">
                <p class="text_kurse"> <span class="font-color-fortgeschritten">Dieser Kurs findet im Studio statt.</span></p>
            </div>
            <div class="flex align-items_center filter_blur">
            <img class="flex flex-grow1" src="images/stundenplan/kundaliniStundenplan.webp" />
            
        </div>
        </p>
    </article>
<!--Button Anmelden-->
    
<div class="flex align-items_center">

    <button class="button-fortgeschritten text-align_center margin-bottom20 filter_blur" id="b_1kundalini" onclick="anmelden()" type="button">Anmelden</button>
        <button class="bkurse_abmelden text-align_center margin-bottom20 filter_blur hidden display_none" id="b_2kundalini" 
        onclick="anmelden_abbrechen()" type="button">Abmelden</button>
</div>
    
    <div class="flex responsive_kurse filter_blur">
        <div class="flex flex-grow1 align-vertical">
        <img class=" width100" src="images/kundaliniYoga.png" />
        <article class="text-align_left">
            
            <h3 class="h3_kurse text-align_center"><span class="font-color-fortgeschritten">Mantras und Meditation im Kundalini Yoga</span></h3>
            <p class="text_kurse">
                <br />
                Die spirituelle Ebene ist beim Kundalini Yoga unverzichtbar. 
                Jede Kundalini-Praxis zielt auf einen bestimmten Bereich ab: So gibt es Yoga-Einheiten zu verschiedenen Themen wie zum Beispiel Stress, 
                Angst und innerer Reichtum. Denn je nachdem, welches Chakra angesprochen werden soll, wird eine andere Übungsreihe angewendet.
                <br>
                <br>
                Den Kern der Meditation bildet meist „sat nam“. 
                Durch Konzentration auf diese Silbe oder auch auf die Abwandlung „sa-ta-na-ma“ (Geburt – Leben – Tod – Wiedergeburt) 
                soll Schicht für Schicht alles abgetragen werden, was wir in der Gesellschaft gelernt und erfahren haben.
                <br />
                <br />
            </p>
             <!--Zeige Kursleiterin wenn Responsive = Smartphone-->
            <div class="responsive_kurse_img centerContent">
                <figure>
                    <figcaption class="text-align_center aFontKurseKlein margin-top_text">Kursleiterin Katarina</figcaption>
                    <img class="flex flex-grow1" style="padding: 50px;"  src="images/katarina.png" />

                </figure>
            </div>
        </article>
        
    </div>
    <!--Responsive Article: Tablet und Desktop-->
        <article class=" text-align_left responsive_kurse_img_noDisplay">

            <p class="text_kurse">
                <br />
                Kundalini Yoga verbindet verschiedene körperliche und meditative Techniken, welche die Lebensenergie, 
                auch Kundalini genannt, wecken sollen. Man geht davon aus, dass der Mensch mehrere Energiezentren besitzt, 
                die sogenannten Chakren. Diese können durch innere und äußere Einflüsse blockieren. Durch Meditation, 
                Atemtechniken, spezielle Handhaltungen (Mudras), Chanting und feste Abfolgen von statischen und 
                dynamischen Asanas soll die Energie wieder frei fließen können. Eine weitere Besonderheit dieser 
                Yogarichtung: Traditionell tragen Kundalini Yogis weiße Kleidung und einen Turban. 
                <br />
                <br />
                <div class="flex align-items_center filter_blur">
                    <p class="text_kurse"> <span class="font-color-fortgeschritten">Dieser Kurs findet im Studio statt.</span></p>
                </div>
                <div class="flex align-items_center filter_blur">
                <img class="flex flex-grow1" src="images/stundenplan/kundaliniStundenplan.webp" />
                
            </div>
            
            </p>
             <!--Verstecke Kursleiterin wenn Responsive = Smartphone-->
            <figure class="responsive_kurse_img_noDisplay margin-top_text">
                <figcaption class="text-align_center aFontKurseKlein">Kursleiterin Katarina</figcaption>
                <img class="flex flex-grow1" style="padding: 50px;"  src="images/katarina.png" />
        
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