<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styleArt.css">
    <title>Maquette</title>
</head>
<body>
    <?php include "templates/header.php";?>
    <main>
        <?php 
        include "controllers/show.php";
        if (isset($_GET['id'])) {
            displayOneArticle($_GET['id']);
        }
        else {
            displayOneArticle(0);
        }
        ?> 
        <?php include "templates/aside.php"?>
    </main>
    <?php include "templates/footer.php" ?>
</body>
</html>