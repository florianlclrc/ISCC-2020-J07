<?php
    $produits = array(
        "T-shirt rouge" => "15.50",
        "T-shirt vert" => "15.50",
        "T-shirt argent" => "16.50",
        "Short bleu" => "19.99",
        "Short vert" => "19.99",
        "Veste argent" => "35.00"
    );

    function afficher_produits($produits) {
         echo "<html><table>
            <tr>
                <th>Produits</th>
                <th>Prix</th>
            </tr>";
         foreach ($produits as $key => $value) {
         echo "<tr>
                    <td>" . $key . "</td>
                    <td>" . $value . "</td>
                </tr>";
    }
 echo "</table></html>";
 }

    afficher_produits($produits)
?>