<?php
// Définit le chemin du dossier des articles
$dossierArticles = '/blog/articles/';

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère le titre et le contenu de l'article
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    
    // Génère un nom de fichier aléatoire avec l'extension .php
    $nomFichier = uniqid() . '.php';
    
    // Crée le chemin complet du fichier dans le dossier des articles
    $cheminFichier = $_SERVER['DOCUMENT_ROOT'] . $dossierArticles . $nomFichier;
    
    // Crée le contenu du fichier HTML avec le titre et le contenu de l'article
    $contenuFichier = <<<EOT
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <meta name="description" content="$titre">
    <title>$titre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            margin-top: 0;
        }
        .article-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <nav id="nav">
        <h3>PoluxSuperShark</h3>
        <ul>
            <li>
                <a href="#">Accueil</a>
            </li>
            <li>
                <a href="#">Boutique</a>
            </li>
            <li>
                <a href="$dossierArticles$nomFichier">Blog</a>
            </li>
        </ul>
        <div id="icons"></div>
    </nav>
    <div class="article-container">
        <h1>$titre</h1>
        <p>$contenu</p>
    </div>
</body>
</html>
EOT;

    // Écrit le contenu dans le fichier
    file_put_contents($cheminFichier, $contenuFichier);
    
    // Redirige vers l'article nouvellement créé
    header("Location: $dossierArticles$nomFichier");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Rédiger un article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            margin-top: 0;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<nav id="nav">
        <h3>PoluxSuperShark</h3>
        <ul>
            <li>
                <a href="#">Accueil</a>
            </li>
            <li>
                <a href="#">Boutique</a>
            </li>
            <li>
                <a href="<?php echo '../blog/'; ?>">Blog</a>
            </li>
        </ul>
        <div id="icons"></div>
    </nav>
    <br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Rédiger un article</h1>
        <label for="titre">Titre de l'article :</label><br>
        <input type="text" id="titre" name="titre" required><br><br>
        <label for="contenu">Contenu de l'article :</label><br>
        <textarea id="contenu" name="contenu" rows="5" required></textarea><br><br>
        <input type="submit" value="Publier">
    </form>
</body>
</html>
