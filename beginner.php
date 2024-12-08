<?php include 'components/head.php'; ?>
<body class="body-bg-darkmode">



    <?php include 'components/header.php'; ?>

    <div class="flex absolute start_text_kurs centerContent">
        <div class="text_kurs_startscreen">
            <h1>Yoga für Anfänger</h1>
        </div>
    </div>
   
   

    <!--Kurs: Yin-Yoga-->
    <div class="flex responsive_kurse">
        <img class="flex flex-grow1" src="images/yinyoga.png" />
        <article class="text-align_center">
            <div class="">
                <h2 class="h2Kurse" id="anker2">
                    <span class="font-color-anfänger">Yin Yoga</span>
                </h2>
                <p class="text_kurse ">
                    <br />
                    Yin Yoga ist ein langsamer Yogastil mit einem hohen Stretchinganteil.
                    Passive Dehnübungen, die zum Teil bis zu zehn Minuten gehalten werden, stehen im Fokus. 
                    In jeder Stunde werden vier bis sechs solcher Asanas geübt. 
                    Yin Yoga kräftigt und fördert deine Flexibilität. 
                    Die Yoga Art soll einen positiven Einfluss auf das Bindegewebe haben, die allgemeine Beweglichkeit steigern und den Geist beruhigen.
                    <br />
                    <br />
                </p>

                <button onclick="location.href='yinyangyoga.html';" class="bkurse" type="button">Mehr erfahren</button>
            </div>
        </article>
    </div>
    <!--Kurs: Hatha Yoga-->
    <div class="flex responsive_kurse margin-top_klein">
        <div class="responsive_kurse_img">
            <img class="flex flex-grow1" src="images/hathaYoga.png" />
        </div>
        <article class="text-align_center">
            <h2 class="h2Kurse margin-bottom20">
                <span class="font-color-anfänger"> Hatha-Yoga</span>
            </h2>
            <p class="text_kurse">
                
                <br />
                Hatha Yoga ist die älteste Yogarichtung. Sie wird bereits seit Jahrtausenden gelehrt und praktiziert. 
                Dabei stehen kräftigende Körperübungen (Asanas) in Verbindung mit einer bewussten Atmung im Vordergrund. 
                Zwischen den einzelnen Haltungen wird pausiert, so dass man ständig zwischen Anspannung und Entspannung wechselt. 
                Das soll sowohl körperliche als auch mental ausgleichend wirken. 
                Eine typische Hatha Yogastunde besteht aus Meditation, Atemübungen, verschiedenen Asanas und der abschließenden Tiefenentspannung.
                <br />
                <br />
            </p>
            <button onclick="location.href='hathayoga.html';" class="bkurse" type="button">Mehr erfahren</button>
        </article>

        <img class="flex flex-grow1 responsive_kurse_img_noDisplay margin-bottom20" src="images/hathaYoga.png" />

    </div>

<?php include 'components/footer.php'; ?>
</body>
</html>