<?php
$teachers = [
    [
        'name' => 'Anna',
        'image' => 'public/images/teachers/Anna.jpg',
    ],
    [
        'name' => 'Laura',
        'image' => 'public/images/teachers/Laura.jpg',
    ],
    [
        'name' => 'Katrin',
        'image' => 'public/images/teachers/Katrin.jpg',
    ],
];
?>

<div class="layout">

    <h1 class="headline">Über uns</h1>

    <div class="aboutus-text-wrapper">

        <div class="aboutus-text-box">
            <h2>Das Studio</h2>
            <br>
            Willkommen in unserem Yoga Studio – einem Ort, an dem du die Hektik des Alltags hinter dir lassen
            kannst. Unsere Mission ist es, dir einen Raum zu bieten, in dem Ruhe, Achtsamkeit und körperliches
            Wohlbefinden im Mittelpunkt stehen.
            </br>
            Wir glauben, dass Yoga weit mehr ist als nur körperliche Bewegung. Es ist eine Einladung,
            innezuhalten,
            tief durchzuatmen und die Verbindung zu dir selbst zu stärken. Unsere Kurse sind für alle geeignet –
            egal, ob du gerade erst mit Yoga beginnst oder bereits ein erfahrener Yogi bist.
            </br>
            Mit viel Leidenschaft und Erfahrung begleiten wir dich auf deinem Weg zu mehr Balance, Energie und
            Gelassenheit. Unser Studio ist ein Ort der Inspiration, des Loslassens und der Gemeinschaft, an dem
            du
            dich jederzeit willkommen und aufgehoben fühlen kannst.
            </br>
            Lass uns gemeinsam deine Yoga-Reise beginnen – wir freuen uns auf dich! 🙏
            </p>
        </div>
        <img loading="lazy" src="/public/images/aboutUs.png" />
    </div>


    <div class="teachers-wrapper">
        <h2>Unsere Yoga-Lehrer</h2>
        <div class="teachers-container">
            <?php foreach ($teachers as $teacher): ?>
                <div class="teachers-box">

                    <img loading="lazy" class="teachers-image" src="/<?= $teacher['image'] ?>"
                        alt="<?= $teacher['name'] ?>" />
                    <div class="teachers-text">
                        <h3><?= $teacher['name'] ?></h3>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
    </div>
    <div class="aboutus-text-wrapper">
        <div class="aboutus-text-box">
            <h2>
                Unsere Philosophie
            </h2>
            <p>
                In unserem Yoga Studio geht es nicht nur um Asanas – es geht um das
                Zusammenspiel von Körper, Geist und Seele. Wir glauben daran, dass Yoga
                mehr ist als eine körperliche Übung – es ist ein ganzheitlicher Weg, der
                uns zu mehr Achtsamkeit, Selbstakzeptanz und innerer Ruhe führt. Unsere
                Philosophie basiert auf Respekt, Achtsamkeit und der Erkenntnis, dass jeder
                Mensch in seinem eigenen Tempo wächst. Wir schaffen einen Raum, in dem sich
                jeder willkommen fühlt, unabhängig von Alter, Fitnesslevel oder Erfahrung. Hier
                kannst du dich entfalten, in deiner Praxis vertiefen und die wohltuende Wirkung
                von Yoga in allen Lebensbereichen erfahren.
                </br>
                </br>
                Unsere Yoga-Lehrer sind erfahrene und leidenschaftliche Praktizierende,
                die mit Hingabe und Achtsamkeit unterrichten. Jeder von ihnen bringt
                eine einzigartige Perspektive und Expertise in den Unterricht, sei es
                durch jahrelange Praxis, verschiedene Yogastile oder spezielle Ausbildungen.
                Ihr Ziel ist es, dich auf deiner Reise zu mehr Achtsamkeit, Flexibilität und
                innerer Ruhe zu unterstützen. Mit einer Kombination aus Fachwissen und Empathie
                schaffen sie eine respektvolle und unterstützende Atmosphäre, in der du dich sowohl
                körperlich als auch geistig entfalten kannst.</p>
        </div>
        <img loading="lazy" class="img" src="/public/images/motivation.jpg" />
    </div>


</div>