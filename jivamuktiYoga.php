<?php include 'components/head.php'; ?>
<body class="body-bg-darkmode">

    <?php include 'components/header.php'; ?>
    <!--Überschrift-->
    <h2 class="h2Kurse text-align_center margin-bottom20 margin-top_kursplan filter_blur" id="anker2">
        Jivamukti Yoga
    </h2>
    <!--Responsive Article: Smartphone-->
    <article class=" text-align_left responsive_kurse_img align-vertical">

        <p class="text_kurse filter_blur">
            <br />
            Jivamukti Yoga steht für einen ganzheitlichen Lebensstil, der über die Yogamatte hinausgeht. 
            Die körperliche Praxis erinnert durch ihre dynamischen Flows an Vinyasa Yoga. 
            Hinzu kommen eine Reihe von spirituellen Elementen wie das Rezitieren heiliger Schriften, 
            Meditation und Chanting. Wer den Weg der Jivamukti Lehre geht, setzt sich für ein gewaltfreies 
            Leben in Mitgefühl und Freiheit ein.
            <br />
            <br />
            <div class="flex align-items_center filter_blur">
                <p class="text_kurse"> <span class="font-color-fortgeschritten">Dieser Kurs findet im Studio statt.</span></p>
            </div>
            <div class="flex align-items_center filter_blur">
            <img class="flex flex-grow1" src="images/stundenplan/jivamuktiStundenplan.webp" />
            
        </div>
        </p>
    </article>
<!--Button Anmelden-->
    
<div class="flex align-items_center">

    <button class="button-fortgeschritten text-align_center margin-bottom20 filter_blur" id="b_1jivamukti" onclick="anmelden()" type="button">Anmelden</button>
        <button class="bkurse_abmelden text-align_center margin-bottom20 filter_blur hidden display_none" id="b_2jivamukti" 
        onclick="anmelden_abbrechen()" type="button">Abmelden</button>
</div>
    
    <div class="flex responsive_kurse filter_blur">
        <div class="flex flex-grow1 align-vertical">
        <img class=" width100" style="padding: 50px;"  src="images/jivamuktiYoga.png" />
        <article class="text-align_left">
            
            <h3 class="h3_kurse text-align_center"><span class="font-color-fortgeschritten">Die 5 Säulen des Jivamukti Yoga </span></h3>
            <p class="text_kurse">
                <br />

                Hatha Yoga basiert auf dem Glauben, dass jeder Mensch einzigartig ist. Daher bedeuten diese Säulen für jeden von uns etwas anderes.
                Sie manifestieren sich auf unterschiedliche Weise und definieren sich durch: Er ist ein Weg für ganzheitliche Gesundheit und
                 besteht aus insgesamt fünf Säulen:
                
                <br />
                <br />
                1. ahimsa = Gewaltlosigkeit, ethischer Veganismus 
                <br />
                <br />
                2. bhakti = Hingabe, jede Praxis erhält eine Intention, auch Singen als Ausdruck von Lebensfreude und Demut
                <br />
                <br />
                3. nadam = intensives Hören nach innen und außen, geübt wird in den Stunden zu besonders ausgesuchter Musik
                <br />
                <br />
                4. shastra = Studium der klassischen Texte wie Patanjalis Yoga Sutra, der Bhagavad Gita oder Hatha Yoga Pradipika
                <br />
                <br />
                5. dhyana = Meditation und Verbindung zu einer spirituellen Einheit
                <br />
                <br />
                    
                Jivamukti Yoga ist mehr als ein Yogastil. 
                Es geht darum, wie man leben soll. Mehr als bei anderen Stilen ist das Ziel, auch jenseits der Matte ein Milieu zu kultivieren,
                 das den Einzelnen integriert und ihm Orientierung gibt in Zeiten von Klimawandel und einer Gesellschaft, 
                 die die Natur in jeder Hinsicht  ausbeutet. Was das mit Yoga zu tun hat? Eine Menge, aber zurück zum Anfang.

                <br />
                <br />
            </p>
             <!--Zeige Kursleiterin wenn Responsive = Smartphone-->
            <div class="responsive_kurse_img centerContent">
                <figure>
                    <figcaption class="text-align_center aFontKurseKlein margin-top_text">Kursleiterin Katarina</figcaption>
                    <img class="flex flex-grow1" src="images/katarina.png" />

                </figure>
            </div>
        </article>
        
    </div>
    <!--Responsive Article: Tablet und Desktop-->
        <article class=" text-align_left responsive_kurse_img_noDisplay">

            <p class="text_kurse">
                <br />
                Jivamukti Yoga steht für einen ganzheitlichen Lebensstil, der über die Yogamatte hinausgeht. 
            Die körperliche Praxis erinnert durch ihre dynamischen Flows an Vinyasa Yoga. 
            Hinzu kommen eine Reihe von spirituellen Elementen wie das Rezitieren heiliger Schriften, 
            Meditation und Chanting. Wer den Weg der Jivamukti Lehre geht, setzt sich für ein gewaltfreies 
            Leben in Mitgefühl und Freiheit ein.
                <br />
                <br />
                <div class="flex align-items_center filter_blur">
                    <p class="text_kurse"> <span class="font-color-fortgeschritten">Dieser Kurs findet im Studio statt.</span></p>
                </div>
                <div class="flex align-items_center filter_blur">
                <img class="flex flex-grow1" src="images/stundenplan/jivamuktiStundenplan.webp" />
                
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