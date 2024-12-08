<?php include 'components/head.php'; ?>
<body class="body-bg-darkmode">

    <?php include 'components/header.php'; ?>
    <!--Überschrift-->
    <h2 class="h2Kurse text-align_center margin-bottom20 margin-top_kursplan filter_blur" id="anker2">
        Vinyasa Yoga
    </h2>
    <!--Responsive Article: Smartphone-->
    <article class=" text-align_left responsive_kurse_img align-vertical">

        <p class="text_kurse filter_blur">
            <br />
            Vinyasa Yoga ist eine Weiterentwicklung des traditionellen Hatha Yoga. 
            Im Unterschied dazu werden die einzelnen Körperhaltungen durch fließende Übergänge miteinander verknüpft. 
            Beim dynamischen Vinyasa Yoga steht jede Stunde unter einem anderen Motto, das der Yogalehrer vorgibt. 
            Die sogenannten Flows sind kreativ und unterschiedlich intensiv. In einer Vinyasa Yogastunde wird meistens auch meditiert. 
            Außerdem erfährst du praktische Lebensweisheiten. 
            <br />
            <br />
            <div class="flex align-items_center filter_blur">
                <p class="text_kurse"> <span class="font-color-fortgeschritten">Dieser Kurs findet im Studio statt.</span></p>
            </div>
            <div class="flex align-items_center filter_blur">
            <img class="flex flex-grow1" src="images/stundenplan/vinyasaStundenplan.webp" />
            
        </div>
        </p>
    </article>
<!--Button Anmelden-->
    
<div class="flex align-items_center">

    <button class="button-fortgeschritten text-align_center margin-bottom20 filter_blur" id="b_1vinyasa" onclick="anmelden()" type="button">Anmelden</button>
        <button class="bkurse_abmelden text-align_center margin-bottom20 filter_blur hidden display_none" id="b_2vinyasa" 
        onclick="anmelden_abbrechen()" type="button">Abmelden</button>
</div>
    
    <div class="flex responsive_kurse filter_blur">
        <div class="flex flex-grow1 align-vertical">
        <img class=" width100 " src="images/vinyasaYoga.png" />
        <article class="text-align_left">
            
            <h3 class="h3_kurse text-align_center"> <span class="font-color-fortgeschritten">Die Besonderheiten des Vinyasa Yoga</span></h3>
            <p class="text_kurse">
                <br />

                Die eigentliche Besonderheit des Vinyasa Yoga liegt nämlich in der fließenden Verbindung von Bewegung und Atem. 
                Und die braucht Übung. Obwohl ich regelmäßig Vinyasa Yoga praktiziere und unterrichte, hört das Lernen nie auf.

                Deine Bewegungen sind im Vinyasa Yoga mit einer kontrollierten Atemtechnik synchronisiert. 
                Entscheidend ist der Grundgedanke, dass deine Bewegung deiner Atmung folgt und nicht umgekehrt. 
                Vielleicht beobachtest du zu Beginn, dass es durchaus herausfordernd ist, die Aufmerksamkeit auf die Atmung zu legen und die Bewegung kommen zu lassen. 
            <br>
            <br>
                
                Dein Ein- und Ausatmen wird dadurch ein bewusster und kein automatischer Vorgang. Mit der Zeit lernst du, 
                deinen Atem zu regulieren, das heißt die Länge der Atmung anzupassen, sodass sie über die Dauer der Bewegung erfolgt.
                 Lass dir Zeit und verzweifle nicht, wenn das nicht sofort klappt.
                  Alles folgt der Magie, dass deine Atmung die Brücke bildet zwischen Körper und Geist. 
                  Beobachte, wie die Atmung deine Bewegung begünstigt (zum Beispiel mit der Ausatmung in der Vorbeuge).
            </p>
            </p>
             <!--Zeige Kursleiterin wenn Responsive = Smartphone-->
            <div class="responsive_kurse_img centerContent">
                <figure>
                    <figcaption class="text-align_center aFontKurseKlein margin-top_text">Kursleiterin Katarina</figcaption>
                    <div class="flex flex-grow1" >
                    <img style="width: 60%;" src="images/katarina.png" />
                </div>
                </figure>
            </div>
        </article>
        
    </div>
    <!--Responsive Article: Tablet und Desktop-->
        <article class=" text-align_left responsive_kurse_img_noDisplay">

            <p class="text_kurse">
                <br />
                Vinyasa Yoga ist eine Weiterentwicklung des traditionellen Hatha Yoga. 
            Im Unterschied dazu werden die einzelnen Körperhaltungen durch fließende Übergänge miteinander verknüpft. 
            Beim dynamischen Vinyasa Yoga steht jede Stunde unter einem anderen Motto, das der Yogalehrer vorgibt. 
            Die sogenannten Flows sind kreativ und unterschiedlich intensiv. In einer Vinyasa Yogastunde wird meistens auch meditiert. 
            Außerdem erfährst du praktische Lebensweisheiten. 
                <br />
                <br />
                <div class="flex align-items_center filter_blur">
                    <p class="text_kurse"> <span class="font-color-fortgeschritten">Dieser Kurs findet im Studio statt.</span></p>
                </div>
                <div class="flex align-items_center filter_blur">
                <img class="flex flex-grow1" src="images/stundenplan/vinyasaStundenplan.webp" />
                
            </div>
            
            </p>
             <!--Verstecke Kursleiterin wenn Responsive = Smartphone-->
            <figure class="responsive_kurse_img_noDisplay margin-top_text">
                <figcaption class="text-align_center aFontKurseKlein">Kursleiterin Katarina</figcaption>
                <div class="flex flex-grow1" style="justify-content: center;"> 
                <img style="width: 70%;" src="images/katarina.png" />
            </div>
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