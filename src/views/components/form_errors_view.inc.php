<?php
declare(strict_types=1);

function check_form_error(string $label)
{

    if (isset($_SESSION['form_errors'][$label])) {
        echo '<span class="form-error">' .
            $_SESSION["form_errors"][$label]
            .
            '</span>';
    }

}