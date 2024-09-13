<?php
// Connexion à la base de données
$servername = "localhost"; // Serveur de base de données, généralement "localhost"
$username = "ik"; // Nom d'utilisateur de la base de données
$password = "azerty"; // Mot de passe de la base de données
$dbname = "TP"; // Nom de la base de données

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

?>