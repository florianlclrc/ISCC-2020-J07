<!DOCTYPE>
<html>
<meta charset="utf-8">
        <?php
    $historique_commandes = array ('5.49', '9.99', '5.49', '15.99', '25');
    foreach ($historique_commandes as $prix) {
        echo $prix . "<br/>";
    }

    function afficher_commandes($historique_commandes) {
        $historique_commandes = array (5.49, 9.99, 5.49, 15.99, 25);
        foreach ($historique_commandes as $prix){
            echo "<p>Une commande de " . $prix .  "euros a été reçue.</p>";
        }
            echo "<p>Le total des commandes est de " . array_sum($historique_commandes);
            echo " euros.</p>";
    }

    afficher_commande($historique_commandes);


        ?>
</html>