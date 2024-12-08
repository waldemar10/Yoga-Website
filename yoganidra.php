<?php include 'components/head.php'; ?>
<body class="body-bg-darkmode">

    <?php include 'components/header.php'; ?>
    <!--Überschrift-->
    <h2 class="h2Kurse text-align_center margin-bottom20 margin-top_kursplan filter_blur" id="anker2">
        Yoga Nidra
    </h2>
    <!--Responsive Article: Smartphone-->
    <article class=" text-align_left responsive_kurse_img align-vertical">

        <p class="text_kurse filter_blur">
            <br />
            Als Yoga Nidra wird die Methode und zugleich der Zustand zwischen Wachsein und Schlaf beschrieben, 
            die eine tiefgreifende, integrale Tiefenentspannung ermöglicht: 
            Vorstellbar ist Yoga Nidra als eine Form der Meditation, die Körper und Geist auf allen Ebenen hilft zu entspannen.
            <br />
            <br />
            <div class="flex align-items_center filter_blur">
                <p class="text_kurse"> <span class="font-color-zuhause">Dieser Kurs findet nur online statt.</span></p>
            </div>
            <div class="flex align-items_center filter_blur">
            <img class="flex flex-grow1" src="images/stundenplan/nidraStundenplan.webp" />
            
        </div>

        </p>
    </article>
   <!--Button Anmelden-->
    
   <div class="flex align-items_center">

    <button class="button-zuhause text-align_center margin-bottom20 filter_blur" id="b_1nidra" onclick="anmelden()" type="button">Anmelden</button>
        <button class="bkurse_abmelden text-align_center margin-bottom20 filter_blur hidden display_none" id="b_2nidra" 
        onclick="anmelden_abbrechen()" type="button">Abmelden</button>
</div>
    
    <div class="flex responsive_kurse filter_blur">

       


        <div class="flex flex-grow1 align-vertical">
        <img style="width: 100%;"  src="images/yogaNidra.png" />
        <article class="text-align_left">
            
            <h3 class="h3_kurse text-align_center"> <span class="font-color-zuhause">Die gesundheitliche Wirkung von Yoga Nidra </span></h3>
            <p class="text_kurse">
                <br />
                Die meisten meiner Kursteilnehmer berichten davon, 
                dass es vorrangig emotionale Blockaden und negative Gedankenmuster auflöst 
                und darüber hinaus auch zu einem besseren, erholsameren Schlaf verhilft. 
                Aber das ist längst nicht alles.
                <br>
                <br>
                Wer unter chronischen Schmerzen oder Suchterkrankungen leidet,
                 kann diese mit dieser Yogatechnik langfristig positiv beeinflussen. Und falls du gerade 
                 schwanger bist, ist es durchaus hilfreich zu wissen, dass dir Yoga Nidra zur Schmerzlinderung bei 
                 der Geburt oder in der Schwangerschaft verhilft. Darüber hinaus gibt es sogar noch weitere günstige Auswirkungen, 
                 die ich dir im Laufe des Artikels genauer vorstellen werde.
            </p>
             <!--Zeige Kursleiterin wenn Responsive = Smartphone-->
            <div class="responsive_kurse_img centerContent">
                <figure>
                    <figcaption class="text-align_center aFontKurseKlein margin-top_text">Kursleiterin Jasmin</figcaption>
                    <img class="flex flex-grow1" src="images/jasmin.png" />

                </figure>
            </div>
        </article>
        
    </div>

   

    <!--Responsive Article: Tablet und Desktop-->
        <article class=" text-align_left responsive_kurse_img_noDisplay">

            <p class="text_kurse">
                <br />
                Als Yoga Nidra wird die Methode und zugleich der Zustand zwischen Wachsein und Schlaf beschrieben, 
                die eine tiefgreifende, integrale Tiefenentspannung ermöglicht: 
                Vorstellbar ist Yoga Nidra als eine Form der Meditation, die Körper und Geist auf allen Ebenen hilft zu entspannen.
                <br />
                <br />
                <div class="flex align-items_center filter_blur">
                    <p class="text_kurse"> <span class="font-color-zuhause">Dieser Kurs findet nur online statt.</span></p>
                </div>
                <div class="flex align-items_center filter_blur">
                <img class="flex flex-grow1" src="images/stundenplan/nidraStundenplan.webp" />
                
            </div>
         
            </p>
             <!--Verstecke Kursleiterin wenn Responsive = Smartphone-->
            <figure class="responsive_kurse_img_noDisplay margin-top_text">
                <figcaption class="text-align_center aFontKurseKlein">Kursleiterin Jasmin</figcaption>
                <img class="flex flex-grow1" src="images/jasmin.png" />
        
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