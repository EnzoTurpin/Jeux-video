<?php include '../includes/header.php'; 
$path = __DIR__ . '/../../config/db.php';
if (file_exists($path)) {
    require($path);
} else {
    die('Database configuration file not found.');
}

$stmt = $pdo->query('SELECT * FROM jeux');
$games = $stmt->fetchAll();
?>
<body>
    <div class="header">
        <div class="buttons">
            <a href="index.php">Jeux</a>
            <a href="add_game.php">Nouveau</a>
        </div>
    </div>
    <h1>Video Games List</h1>
    <div class="table">
        <div class="row header">
            <div class="cell">ID</div>
            <div class="cell">Nom</div>
            <div class="cell">Maison d'édition</div>
            <div class="cell">Image</div>
            <div class="cell">Note</div>
            <div class="cell">Date de la note</div>
            <div class="cell">Actions</div>
        </div>
        <?php foreach ($games as $game): ?>
            <div class="row">
                <div class="cell"><?php echo htmlspecialchars($game['id']); ?></div>
                <div class="cell"><?php echo htmlspecialchars($game['nom']); ?></div>
                <div class="cell"><?php echo htmlspecialchars($game['maison_d_edition']); ?></div>
                <div class="cell"><img src="../../assets/img/<?php echo htmlspecialchars($game['image_url']); ?>" alt="<?php echo htmlspecialchars($game['nom']); ?>"></div>
                <div class="cell"><?php echo htmlspecialchars($game['note']); ?>/10</div>
                <div class="cell"><?php echo date('d/m/Y', strtotime($game['date_de_la_note'])); ?></div>
                <div class="cell">
                    <a href="../actions/edit_game.php?id=<?php echo $game['id']; ?>">Edit</a> - 
                    <a href="../actions/delete_game.php?id=<?php echo $game['id']; ?>">Delete</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
