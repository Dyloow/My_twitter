<?php
$host = '127.0.0.1';
$dbname = 'twitter_academy_db';
$username = 'dylow';
$password = 'root';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // gérer l'erreur de connexion à la base de données
}

$sql = "SELECT count(*) as nombre FROM tweet";
$query = $conn->prepare($sql);
$query->execute();
$nombre = $query->fetch();
echo $nombre['nombre']; // renvoyer le nombre total de tweets sous forme de chaîne de caractères
?>
