<?php include '../includes/header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . '/../../config/db.php';

    $nom = $_POST['nom'];
    $maison_d_edition = $_POST['maison_d_edition'];
    $image_url = $_FILES['image']['name'];
    $note = $_POST['note'];
    $date_de_la_note = date('Y-m-d');

    $stmt = $pdo->prepare('INSERT INTO jeux (nom, maison_d_edition, image_url, note, date_de_la_note) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$nom, $maison_d_edition, $image_url, $note, $date_de_la_note]);

    // Assurez-vous que le dossier img existe et a les permissions correctes
    if (!is_dir('../../assets/img')) {
        mkdir('../../assets/img', 0777, true);
    }
    move_uploaded_file($_FILES['image']['tmp_name'], "../../assets/img/$image_url");

    header('Location: ../pages/index.php');
    exit();
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
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" required>

            <label for="maison_d_edition">Maison d'Edition:</label>
            <input type="text" name="maison_d_edition" id="maison_d_edition" required>

            <label for="image">Image:</label>
            <input type="file" name="image" id="image" required>

            <label for="note">Note:</label>
            <input type="number" name="note" id="note" min="0" max="10" required>

            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>
