<?php
declare(strict_types=1);

function check_form_error(string $label)
{

    if (isset($_SESSION['form_errors'][$label])) {
        echo '<span class="form__error">' .
            $_SESSION["form_errors"][$label]
            .
            '</span>';
    }
    if(isset($_SESSION['register_errors'][$label])) {
        echo '<span class="form__error">' .
            $_SESSION["register_errors"][$label]
            .
            '</span>';
    }
    if(isset($_SESSION['login_errors'][$label])) {
        echo '<span class="form__error">' .
            $_SESSION["login_errors"][$label]
            .
            '</span>';
    }
}