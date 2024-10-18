<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <header>
            <a href="index.php">NEWS</a>
            <nav>
                <ul>
                    <?php foreach ($categories as $categorie) { ?>
                        <li>
                            <a href="index.php?page=categorie&cat=<?= $categorie['id_categorie'] ?>"><?= $categorie['nom'] ?></a>
                        </li>

                    <?php } ?>
                    <li>
                        <a href="index.php?page=inscription">inscription</a>
                    </li>
                    <li>
                        <a href="index.php?page=connexion">connexion</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>

