<?php
    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
    switch($alert) {
        case "test" :
            echo '<div class="alert alert-info mt-5" role="alert">
            Test success.
            </div>';
            header("Refresh: 3; ./index.php?content=startseite");
        break;
        case "email-invalid" :
            echo '<div class="alert alert-danger mt-5" role="alert">
            Die angegebene E-mail ist nicht richtig formatiert.
            </div>';
            header("Refresh: 3; ./index.php?content=contact");
        break;
        case "contactform-empty" :
            echo '<div class="alert alert-danger mt-5" role="alert">
            Sie haben ein oder mehrere benötigte felder nicht ausgefüllt, bitte versuchen sie es erneut.
            </div>';
            header("Refresh: 3; ./index.php?content=contact");
        break;
        case "contactform-success" :
            echo '<div class="alert alert-success mt-5" role="alert">
            Ihre nachricht wurde erfolgreich gesendet.
            </div>';
            header("Refresh: 3; ./index.php?content=contact");
        break;
        default:
            header("Location: ./index.php?content=home");   
        break;
    }
?>