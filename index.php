<?php include "components/head.php"; ?>

<body class="body-bg-darkmode">
<div>
    <img id="imgStart" src="images/yogaStartscreen.jpg" />
    </div>
    <!-- <div class="layout"> -->


    <?php include 'components/header.php'; ?>
    
    <div class="flex absolute start_text">
        <div class="divAbstandL"></div>
        <h1 class="text_startscreen_first text-align-right">
            Erlebe Yoga<br />

        </h1>
        <div class="divAbstandR"></div>
    </div>
    <div class="flex absolute start_text">
        <div class="divAbstandL"></div>
        <div class="flex-1-1-0">
            <button type="button" onclick="location.href='zuhause.html';" class="margin-top_buttonStart buttonStart display_smartphone_none">
                Entdecken
            </button>
        </div>
        <div class="divAbstandR"></div>
    </div>
    <div class="flex absolute start_text responsive">
        <div class="divAbstandL"></div>
        <div class="flex centerContent">
            <button type="button" onclick="location.href='zuhause.html';" class="margin-top buttonStart responsive">
                Entdecken
            </button>
        </div>
        <div class="divAbstandR"></div>
    </div>

    <div class="flex relative">
        <h2 class="h2_yoga_start" style="top:0vw;left:7.8vw;"> Yoga</h2>
        <p class="text_yoga_start" style="top:8vw;left:13vw;">stärkt den Geist</p>
        <p class="text_yoga_start" style="top:14vw;left:19.5vw;">reduziert Stress</p>
        <p class="text_yoga_start" style="top:20vw;left:26vw;">dehnt die Muskulatur</p>
        <p class="text_yoga_start" style="top:26vw;left:32.5vw;">verbessert dein<br />Selbstbewusstsein</p>
        <p class="text_yoga_start" style="top:34vw;left:39vw;">und es löst </p>
        <p class="text_yoga_start" style="top:40vw;left:45.5vw;">deine Blockaden</p>
        <p class="text_yoga_start" style="top:46vw;left:47.5vw;">und entfaltet</p>
        <p class="text_yoga_start" style="top:52vw;left:47.5vw;">dein wahres</p>
        <p class="text_yoga_start" style="top:58vw;left:44.2vw;">Potenzial</p>
        <!--Responsive Text-->
        <h2 class="h2_yoga_start_responsive">Yoga </h2>
        <p class="text_yoga_start_responsive" style="top:12vw;">stärkt den Geist</p>
        <p class="text_yoga_start_responsive" style="top:18vw">reduziert Stress</p>
        <p class="text_yoga_start_responsive" style="top:24vw">dehnt die Muskulatur</p>
        <p class="text_yoga_start_responsive" style="top:30vw">verbessert dein<br />Selbstbewusstsein</p>
        <p class="text_yoga_start_responsive" style="top:42vw;left:60vw;">und es löst </p>
        <p class="text_yoga_start_responsive" style="top:48vw;left:65vw;">deine Blockaden</p>
        <p class="text_yoga_start_responsive" style="top:54vw;left:68vw;">und entfaltet</p>
        <p class="text_yoga_start_responsive" style="top:60vw;left:71vw;">dein wahres</p>
        <p class="text_yoga_start_responsive" style="top:66vw;left:71vw;">Potenzial</p>
    </div>
    <img id="imgYoga1" src="images/yogaStart1.png" />

    <img id="imgYoga2" src="images/yogaStart2.png" />
    <img id="imgChakra" src="images/chakras.svg" />
    <!--Text über den 3 Cards-->
    <h2 >
        Probier es mit einem unserer Kurse selber aus.
    </h2>

    <div class="yoga-showcase-container">
        <div class="yoga-showcase-box">
            <img id="img_hathayoga" class="imgKursStart" onclick="location.href='hathaYoga.php';"
                src="images/hathaYoga.png" />
            <button class="btn-yoga-showcase bg-hathaYoga" onclick="location.href='hathaYoga.php';"
                type="button">Hatha Yoga</button>
        </div>
        <div class="yoga-showcase-box">
            <img id="img_vinyasayoga" class="imgKursStart" onclick="location.href='vinyasaYoga.php';"
                src="images/vinyasaYoga.png" />
            <button class="btn-yoga-showcase bg-vinyasaYoga" onclick="location.href='vinyasaYoga.php';"
                type="button">Vinyasa Yoga</button>
        </div>
        <div class="yoga-showcase-box">
            <img id="img_gutenmorgenyoga" class="imgKursStart" onclick="location.href='goodMorningYoga.php';"
                src="images/gutenMorgenYoga.png" />
            <button class="btn-yoga-showcase bg-goodMorningYoga" onclick="location.href='goodMorningYoga.php';"
                 type="button">Guten Morgen Yoga</button>
        </div>
    </div>

    <!--Flex Content responsive-->
    <div class="flex_Normal_responsive">
        <img class="imgKursStart_responsive" src="images/hathaYoga.png" />

    </div>
    <div class="flex_Normal_responsive">
        <button onclick="location.href='hathayoga.html';" class="bkursStart_responsive" type="button">Hatha Yoga</button>
    </div>
    <div class="flex_Normal_responsive">
        <img class="imgKursStart_responsive" src="images/vinyasaYoga.png" />

    </div>
    <div class="flex_Normal_responsive">
        <button onclick="location.href='vinyasayoga.html';" class="bkursStart_responsive" type="button">Vinyasa Yoga</button>
    </div>
    <div class="flex_Normal_responsive">
        <img class="imgKursStart_responsive" src="images/gutenMorgenYoga.png" />

    </div>
    <div class="flex_Normal_responsive">
        <button onclick="location.href='gutenmorgenyoga.html';" class="bkursStart_responsive" type="button">Guten Morgen Yoga</button>
    </div>
    <!--Text unter den 3 Cards-->
    <p class="aKurse" style="text-align:center;margin-top:20px;">
        Und noch mehr <a href="kategorie.html" class="color_light"><u>hier</u></a> zu finden.
    </p>

    <?php include 'components/footer.php'; ?>
    <!-- </div> -->
</body>

</html>