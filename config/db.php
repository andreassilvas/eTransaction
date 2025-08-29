<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "eTransaction_app";

// Créer connexion à la base de données
$conn = new mysqli($host, $user, $password, $dbname);

// Vérifier connexion à la base de données
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données";
}
