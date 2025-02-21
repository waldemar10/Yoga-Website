<?php

$type = $_GET['type'] ?? 'login';


$title = $type === 'register' ? 'Registrierung' : 'Login';
$imageSrc = $type === 'register' ? '/public/images/stones.jpg' : '/public/images/stoneWater.png';
$formPath = $type === 'register' ? __DIR__ . '/../components/forms/registration_form.php'
    : __DIR__ . '/../components/forms/login_form.php';
?>

<?php if (isset($_GET['success']) && $_GET['success'] === 'true'):
    include_once __DIR__ . '/../components/success_modal.php';
endif; ?>

<div class="layout">

    <h1 class="headline">
        <?= htmlspecialchars($title) ?>
    </h1>
    <div class="auth__wrapper">

        <img class="auth__image" loading="lazy" src="<?= htmlspecialchars($imageSrc) ?>" />
        <?php include_once $formPath; ?>

    </div>

</div>