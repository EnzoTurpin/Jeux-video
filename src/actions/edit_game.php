<?php include '../includes/header.php'; 
require '../..//config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $maison_d_edition = $_POST['maison_d_edition'];
    $image_url = $_FILES['image']['name'];
    $note = $_POST['note'];
    $date_de_la_note = date('Y-m-d');

    if ($image_url) {
        $stmt = $pdo->prepare('UPDATE jeux SET nom = ?, maison_d_edition = ?, image_url = ?, note = ?, date_de_la_note = ? WHERE id = ?');
        $stmt->execute([$nom, $maison_d_edition, $image_url, $note, $date_de_la_note, $id]);

        move_uploaded_file($_FILES['image']['tmp_name'], "../../assets/img/$image_url");
    } else {
        $stmt = $pdo->prepare('UPDATE jeux SET nom = ?, maison_d_edition = ?, note = ?, date_de_la_note = ? WHERE id = ?');
        $stmt->execute([$nom, $maison_d_edition, $note, $date_de_la_note, $id]);
    }

    header('Location: ../pages/index.php');
    exit();
} else {
    $id = $_GET['id'];
    $stmt = $pdo->prepare('SELECT * FROM jeux WHERE id = ?');
    $stmt->execute([$id]);
    $game = $stmt->fetch();
}
?>

<body>
    <div class="header">
        <div class="buttons">
            <a href="../pages/index.php">Jeux</a>
            <a href="../pages/add_game.php">Nouveau</a>
        </div>
    </div>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($game['id']); ?>">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($game['nom']); ?>" required>

            <label for="maison_d_edition">Maison d'édition:</label>
            <input type="text" name="maison_d_edition" id="maison_d_edition" value="<?php echo htmlspecialchars($game['maison_d_edition']); ?>" required>

            <label for="image">Image:</label>
            <input type="file" name="image" id="image">

            <label for="note">Note:</label>
            <input type="number" name="note" id="note" value="<?php echo htmlspecialchars($game['note']); ?>" required>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
