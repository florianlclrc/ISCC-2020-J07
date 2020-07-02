<?php   
    $panier = array(
        array("T-shirt rouge", 15.50, 5),
        array("T-shirt vert", 15.50, 6),
        array("T-shirt argent", 15.50, 8),
        array("Short bleu", 16.50, 5),
        array("Short vert", 19.99, 5),
        array("Veste argnt", 19.99, 10),
        array("Veste argent", 35.00, 3)
    );

    function afficher_panier($panier) {
        foreach($panier as $key => $value) {
            echo "<ul>";
            echo "<li>" . $value[0]. "</li>";
            echo "<li>" . $value[1]. "</li>";
            echo "<li>" . $value[2]. "</li<";
            echo "</ul>";
             
        } echo "<br>";
    }

        afficher_panier($panier)
?>