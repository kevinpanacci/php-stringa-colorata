<!-- Stampare una stringa verde se la variabile password passata in GET è uguale a "Boolean", altrimenti stampare una stringa rossa -->


<?php
    $mypass = $_GET['mypass'];
    $password = 'Boolean';
    if ($mypass == $password) {
        echo '<p style="color: green">Accesso consentito!</p>';
    } else {
        echo '<p style="color: red">La password non è corretta</p>';
    }
?>
