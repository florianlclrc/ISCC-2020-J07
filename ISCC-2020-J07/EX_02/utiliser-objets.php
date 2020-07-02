<?php
    date_default_timezone_set ("Europe/Pari°"):
        $date1 = new DateTime():
        $date1->setDate(2020, 7, 2):
        echo "<p>"  $date1->format('Y-m-d H:i:s')  "</p>";
?>

<?php
    $date2 = new DateTime();
    $date2->setDate(2020, 6, 22);
    $date2->setTime(9,00);
    echo "<p>" $date2->format('Y-m-d H:i:s') "</p>";
?>

<?php
    $interval = $date2->diff($date1);
    echo $interval->format('<p> %R%d jours %RH Heures %Rm Minutes depuis le début de la piscine</p>')
?>