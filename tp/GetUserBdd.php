<?php
include("connexion.php");

echo "<br>";

$sql1 = "SELECT * FROM utilisateurs";
$res1 = $conn->query($sql1);
$rowsUser = [];
if ($res1 !== FALSE) { 
    //echo "Requête SELECT exécutée avec succès";
    
    while ($row = $res1->fetch_assoc()) {
        $rowsUser[] = $row; 
        
        //echo "<br>ID: " . $row["id"] . "   Nom: " . $row["nom"] . "   Email: " . $row["email"];
    }
} else {
    echo "Erreur : " . $conn->error;
}
$conn->close();



?>
