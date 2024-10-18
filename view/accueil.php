<h1>accueil</h1>

<?php foreach ($articles as $article) { ?>

    <h2><?= $article['titre'] ?></h2>
    <div>
        <img
        src="<?= $article['image'] ?>">


        <?= $article['contenue'] ?>
        <br>
        <small>
            <?= $article['date_ajout'] ?>
        </small>
        <hr>

    </div>
<?php } ?>
