<?php
$menuItems = [
    "Kurse" => "category.php",
    "Kursplan" => "courseSchedule.php",
    "Kontakt" => "contact.php",
    "Über uns" => "aboutUs.php",
];
?>

<header>
    <div id="header-wrapper" class="header-wrapper">
        <div class="header-navbar-container">
            <a class="header-logo" href="index.php">
                <svg id="Abstraktes_Logo" class="logo filter_blur logo_fill" data-name="Abstraktes Logo" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 170.0 300.0">
                    <path id="logo_rechts"
                        d="M171,85c0-.9-.12-3.07-.32-5.17-.26-2.63-.66-5.16-.66-5.16v.78s.07,1.79.07,2.69A51.57,51.57,0,0,1,119.5,129.7a8.27,8.27,0,0,1-1,.12c-9.68.52-20.16,1.22-30.94,10.32-6.84,5.77-15.45,14.15-19,28.44-.41,1.65-.88,4.09-1.14,5.91A42.68,42.68,0,0,0,67,179.4a34.09,34.09,0,0,1,9-6.53,40.34,40.34,0,0,1,6.84-2.27,24.61,24.61,0,0,1,5.41-.63c7.81-.22,14.61.57,31.55-6.3,11.81-4.78,28-15.43,38.25-31.74A87.71,87.71,0,0,0,166.71,114a88.69,88.69,0,0,0,3.45-14.28A71.11,71.11,0,0,0,171,85Z" transform="translate(-28.93 -16.77)" />
                    <path id="logo_unten" d="M82.87,181.4c-25.76,8.27-39.24,38.06-30.11,66.54,5.44,16.94,17.65,29.6,32.09,35.34A32.11,32.11,0,0,1,68.67,264.5c-5.66-17.63,7.82-37.72,26.81-43.81A20.63,20.63,0,1,0,82.87,181.4Z" transform="translate(-28.93 -16.77)" />
                    <path id="logo_links" d="M57,161.08c.26-1.81.73-4.26,1.15-5.9,3.58-14.3,12.18-22.68,19-28.45A40,40,0,0,1,94.76,118a51.57,51.57,0,0,1,2-100.69l.83-.54C74.59,19,58.22,32.33,48.23,44.59A84,84,0,0,0,35.62,65.43c-1.1,2.87-2.17,5.65-3,8.36A82.44,82.44,0,0,0,29.91,86c-2.86,19.37,1.42,33,1.42,33a89.86,89.86,0,0,0,2.6,8.81,81.28,81.28,0,0,0,23,34.15A3.86,3.86,0,0,0,57,161.08Z" transform="translate(-28.93 -16.77)" />
                    <circle id="logo_kopf" cx="78.7" cy="73.57" r="20.63" />
                </svg>
            </a>
            <div class="header-navbar-link-container">
                <?php foreach ($menuItems as $name => $link): ?>
                    <div class="header-navbar-link">
                        <a class="" href="<?= $link ?>"><?= $name ?></a>
                    </div>
                <?php endforeach; ?>
            </div>


            <button class="header-burger-menu" onclick="handleBurgerMenu()" data-state="closed">


                <svg class="burger-menu-icon" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z" />
                </svg>
                <svg class="close-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path id="Vector" d="M18 18L12 12M12 12L6 6M12 12L18 6M12 12L6 18"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
            </button>


        </div>
        <div class="header-navbar-link-container-burger-menu">
            <?php foreach ($menuItems as $name => $link): ?>
                <a href="<?= $link ?>"><?= $name ?></a>

            <?php endforeach; ?>
        </div>
    </div>
</header>