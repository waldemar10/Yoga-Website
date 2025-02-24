<?php
$menuItems = [
    "Kurse" => "/category",
    "Kursplan" => "/courseSchedule",
    "Kontakt" => "/contact",
    "Über uns" => "/aboutUs",
];

$contactDetails = [
    'email' => 'info@purebalanceyoga.com',
    'phone' => '+49 176 826040',
    'address' => 'Kastanienweg 102, Lippstadt 59555',
];

$socialLinks = [
    'instagram' => '#instagram',
    'facebook' => '#facebook',
];
?>

<div class="footer__wrapper">
    <div class="footer__container">
        <div class="footer__social-icons-container">
            <?php foreach ($socialLinks as $platform => $link): ?>
                <a href="<?= $link ?>"><i class="fab fa-<?= $platform ?> footer__social-icon"></i></a>
            <?php endforeach; ?>
        </div>
        <div class="footer__navigation-container">
            <?php foreach ($menuItems as $name => $link): ?>
                <a href="<?= $link ?>"><?= $name ?></a>

            <?php endforeach; ?>
        </div>
        <div class="footer__contact-container">
            <?php foreach ($contactDetails as $type => $detail): ?>
                <div class="footer__contact-<?= $type ?>">
                    <svg class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                        <?php
                        switch ($type) {
                            case 'email':
                                echo '<rect x="5.5" y="21" width="53" height="34" rx="2" ry="2" />';
                                echo '<polyline points="58 21 32 42 6 21" />';
                                break;
                            case 'phone':
                                echo '<path d="M22.56,10.92c-3.1-1.38-9.08,6.25-9.61,9.61-1.5,9.46,18.72,28.69,28.01,32.41,3.19,1.28,10.39-5.86,10.15-9.29-.19-2.78-4.58-8.47-7.36-8.36-.81.03-2.03,1.19-3,2.28-.85.96-2.35.93-3.17-.05l-11.9-12.58c-.76-.91-.61-2.26.32-2.99,1.3-1.02,2.84-2.42,2.89-3.37.12-2.48-3.89-6.57-6.33-7.65Z" />';
                                break;
                            case 'address':
                                echo '<circle cx="32.3" cy="27.5" r="7.71" />';
                                echo '<path d="M16.57,35.09c-5.52-11.16,1.97-24.67,14.4-25.3.32-.02.63-.02.95-.02,1.28,0,2.54.13,3.75.38,10.97,2.26,16.67,14.45,11.93,24.59-3.59,7.67-9.96,19.44-15.29,19.5-5.33.05-11.92-11.43-15.74-19.14Z" />';
                                break;
                        }
                        ?>
                    </svg>
                    <p><?= $detail ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="footer__legal-container">
            <p class="footer__legal-info">Copyright © 2020-2024 PureBalance Yoga</p>
            <div class="footer__legal-links">
                <a href="#impressum">Impressum</a>
                <a href="#datenschutz">Datenschutz</a>
            </div>
            <p class="footer__info">Es handelt sich um ein fiktives Unternehmen.</p>
        </div>
    </div>

    <div class="footer__container-mobile">
        
    <?php include __DIR__ . '/../components/footer_mobile.php'; ?>
    </div>
</div>