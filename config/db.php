<?php
$hostname = 'localhost';  // Adresse IP de votre serveur de base de données local
$port = '3306';  // Port MySQL par défaut
$dbname = 'jeux_video';  // Nom de la base de données importée
$dbuser = 'root';  // Nom d'utilisateur par défaut pour MySQL local
$dbpass = '';  // Mot de passe par défaut pour MySQL local (laissez vide si vous n'avez pas configuré de mot de passe)
$charset = 'utf8mb4';

$dsn = "mysql:host=$hostname;port=$port;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
