<?php
require '../../config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare('DELETE FROM jeux WHERE id = ?');
    $stmt->execute([$id]);
    
    header('Location: ../pages/index.php');
    exit();
}
?>
