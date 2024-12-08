<?php include 'components/head.php'; ?>
<body class="body-bg-darkmode" >

    <?php include 'components/header.php'; ?>
    <!--Überschrift-->
    <h2 class="h2Kurse text-align_center margin-bottom20 margin-top_kursplan filter_blur" id="anker2">
        Hatha Yoga
    </h2>
    <!--Responsive Article: Smartphone-->
    <article class=" text-align_left responsive_kurse_img align-vertical">

        <p class="text_kurse filter_blur">
            <br />
            Hatha Yoga ist die älteste Yogarichtung. Sie wird bereits seit Jahrtausenden gelehrt und praktiziert. 
            Dabei stehen kräftigende Körperübungen (Asanas) in Verbindung mit einer bewussten Atmung im Vordergrund. 
            Zwischen den einzelnen Haltungen wird pausiert, so dass man ständig zwischen Anspannung und Entspannung wechselt.
             Das soll sowohl körperliche als auch mental ausgleichend wirken. Eine typische Hatha Yogastunde besteht aus Meditation, 
             Atemübungen, verschiedenen Asanas und der abschließenden Tiefenentspannung.
            <br />
            <br />
            <div class="flex align-items_center filter_blur">
                <p class="text_kurse"> <span class="font-color-anfänger">Dieser Kurs findet im Studio statt.</span></p>
            </div>
            <div class="flex align-items_center filter_blur">
            <img class="flex flex-grow1" src="images/stundenplan/hathaStundenplan.webp" />
            
        </div>
       
   
        </p>
    </article>
 <!--Button Anmelden-->
    
 <div class="flex align-items_center">
    <button class="button-anfänger text-align_center margin-bottom20 filter_blur" id="b_1" onclick="anmelden()" type="button">Anmelden</button>
        <button class="bkurse_abmelden text-align_center margin-bottom20 filter_blur hidden display_none" id="b_2" 
        onclick="anmelden_abbrechen()" type="button">Abmelden</button>
</div>
    
    <div class="flex responsive_kurse filter_blur">
        <div class="flex flex-grow1 align-vertical">
        <img class=" width100" style="padding: 40px;" src="images/hathaYoga.png" />
        <article class="text-align_left">
            
            <h3 class="h3_kurse text-align_center"> <span class="font-color-anfänger">Die fünf Säulen des Hatha Yoga</span></h3>
            <p class="text_kurse">
                <br />

                Hatha Yoga basiert auf dem Glauben, dass jeder Mensch einzigartig ist. Daher bedeuten diese Säulen für jeden von uns etwas anderes.
                Sie manifestieren sich auf unterschiedliche Weise und definieren sich durch: Er ist ein Weg für ganzheitliche Gesundheit und besteht aus insgesamt fünf Säulen:
                
                <br />
                <br />
                1. Asana (Körperübungen) – Richtige Bewegung
                <br />
                <br />
                2. Richtige Ernährung
                <br />
                <br />
                3. Pranayama (Atembewusstheit) – Richtig Atmen
                <br />
                <br />
                4. Richtige Entspannung
                <br />
                <br />
                5. Meditation/positives Denken – Richtige Absicht
                <br />
                <br />
                    
                Im Sinne von Hatha fördern diese fünf Grundsätze Achtsamkeit, Herzlichkeit und Seelenfülle – eine Harmonie von Geist, Körper und Seele.

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
                Hatha Yoga ist die älteste Yogarichtung. Sie wird bereits seit Jahrtausenden gelehrt und praktiziert. 
            Dabei stehen kräftigende Körperübungen (Asanas) in Verbindung mit einer bewussten Atmung im Vordergrund. 
            Zwischen den einzelnen Haltungen wird pausiert, so dass man ständig zwischen Anspannung und Entspannung wechselt.
             Das soll sowohl körperliche als auch mental ausgleichend wirken. Eine typische Hatha Yogastunde besteht aus Meditation, 
             Atemübungen, verschiedenen Asanas und der abschließenden Tiefenentspannung.
                <br />
                <br />
                <div class="flex align-items_center filter_blur">
                    <p class="text_kurse"> <span class="font-color-anfänger">Dieser Kurs findet im Studio statt.</span></p>
                </div>
                <div class="flex align-items_center filter_blur">
                <img class="flex flex-grow1" src="images/stundenplan/hathaStundenplan.webp" />
                
            </div>
           
            </p>
             <!--Verstecke Kursleiterin wenn Responsive = Smartphone-->
            <figure class="responsive_kurse_img_noDisplay margin-top_text">
                <figcaption class="text-align_center aFontKurseKlein">Kursleiterin Stephanie</figcaption>
                <img class="flex flex-grow1" src="images/stephanie.png" />
        
            </figure>
        </article>
        
    </div>
    
    
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