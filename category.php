<?php include 'components/head.php'; ?>
<body class="body-bg-darkmode">



<?php include 'components/header.php'; ?>

    <div class="flex absolute start_text_kurs centerContent">
        <div class="text_kurs_startscreen">
            <h1>Unsere Yoga-Kurse</h1>
        </div>
    </div>
    <div class="flex absolute start_text2 centerContent">
        <div class="flex width100 centerContent margin-top_responsive">
            <p class="drop-shadow-black font-size30 color-white"></p>
        </div>
    </div>
   

    <!--Kategorie: Anfänger-->
    <div class="flex responsive_kurse">
        <img class="flex flex-grow1" src="images/beginnerYoga.png" />
        <article class="text-align_center">
            <div class="">
                <h2 class="h2Kurse" id="anker2">
                    <span class="font-color-anfänger">Yoga für Anfänger</span>
                </h2>
                <p class="text_kurse ">
                    <br />
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    <br />
                    <br />
                </p>

                <button id="bt_anfänger" onclick="location.href='anfänger.html';" class="bkurse" type="button">Mehr erfahren</button>
            </div>
        </article>
    </div>
    <!--Kategorie: Fortgeschritten-->
    <div class="flex responsive_kurse margin-top_kurse">
        <div class="responsive_kurse_img">
            <img class="flex flex-grow1" src="images/fortgeschrittenYoga.png" />
        </div>
        <article class="text-align_center">
            <h2 class="h2Kurse margin-bottom20">
                <span class="font-color-fortgeschritten">Yoga für Forgeschrittene</span>
            </h2>
            <p class="text_kurse ">
                <br />
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                no sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                no sea takimata sanctus est Lorem ipsum dolor sit amet.
                <br />
                <br />
            </p>
            <button id="bt_fortgeschritten" onclick="location.href='fortgeschritten.html';" class="bkurse" type="button">Mehr erfahren</button>
        </article>

        <img class="flex flex-grow1 responsive_kurse_img_noDisplay" src="images/fortgeschrittenYoga.png" />

    </div>
    
    <!--Kategorie: Zuhause-->
    <div class="flex responsive_kurse margin-top_kurse">
        <div class="responsive_kurse_img">
            <img class="flex flex-grow1" src="images/yogaZuhause.png" />
        </div>
        <img class="flex flex-grow1 responsive_kurse_img_noDisplay margin-bottom20 img_spiegeln" src="images/yogaZuhause.png" />
        <article class="text-align_center">
            <h2 class="h2Kurse margin-bottom20">
                <span class="font-color-zuhause">Yoga für zu Hause</span>
            </h2>
            <p class="text_kurse">
                <br />
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                no sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                no sea takimata sanctus est Lorem ipsum dolor sit amet.
                <br />
                <br />
            </p>
            <button id="bt_zuhause" onclick="location.href='zuhause.html';" class="bkurse margin-bottom20" type="button">Mehr erfahren</button>
        </article>

        

    </div>


    <?php include 'components/footer.php'; ?>
</body>
</html>