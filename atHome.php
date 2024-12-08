<?php include 'components/head.php'; ?>

<body class="body-bg-darkmode">

    <?php include 'components/header.php'; ?>

    <div class="flex absolute start_text_kurs centerContent">
        <div class="text_kurs_startscreen">
            <h1>Yoga zu Hause</h1>
        </div>
    </div>

    <!--Kurs: Bikram Yoga-->
    <div class="flex responsive_kurse">
        <img class="flex flex-grow1" src="images/gutenMorgenYoga.png" />
        <article class="text-align_center">
            <div class="">
                <h2 class="h2Kurse" id="anker2">
                    <span class="font-color-zuhause">
                        Guten Morgen Yoga
                    </span>
                </h2>
                <p class="text_kurse">
                    <br />
                    Mit einer kompakten Yoga-Einheit in den Tag starten.
                    Energetisiert und doch in Balance kannst
                    du dich nun den Herausforderungen des Tages widmen.
                    Mit dem Fokus auf die Sonnengrüße werden diese 60 Minuten deinen Körper ebenso aktivieren wie flexibilisieren.
                    Für den Mindset wird dich eine neue Lebensweisheit in den Tag begleiten.
                    <br />
                    <br />
                </p>

                <button onclick="location.href='gutenmorgenyoga.html';" class="button-zuhause" type="button">Mehr erfahren</button>
            </div>
        </article>
    </div>
    <!--Kurs: yoga nidra-->
    <div class="flex responsive_kurse margin-top_klein">
        <div class="responsive_kurse_img">
            <img class="flex flex-grow1" src="images/yogaNidra.png" />
        </div>
        <article class="text-align_center">
            <h2 class="h2Kurse margin-bottom20">
                <span class="font-color-zuhause">
                    Yoga Nidra
                </span>
            </h2>
            <p class="text_kurse">
                <br />
                Als Yoga Nidra wird die Methode und zugleich der Zustand zwischen Wachsein und Schlaf beschrieben,
                die eine tiefgreifende, integrale Tiefenentspannung ermöglicht:
                Vorstellbar ist Yoga Nidra als eine Form der Meditation, die Körper und Geist auf allen Ebenen hilft zu entspannen.
                <br />
                <br />
            </p>
            <button onclick="location.href='yoganidra.html';" class="button-zuhause" type="button">Mehr erfahren</button>
        </article>
        <div class="flex flex-grow1 responsive_kurse_img_noDisplay">
            <img style=" width: 80%;" src="images/yogaNidra.png" />
        </div>
    </div>


    <?php include 'components/footer.php'; ?>
</body>

</html>