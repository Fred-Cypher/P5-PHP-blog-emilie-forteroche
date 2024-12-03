<?php
/**
 * Ce template affiche un article et ses commentaires.
 * Il affiche également un formulaire pour ajouter un commentaire.
 */
?>

<article class="mainArticle">
    <h2> <?= Utils::format($article->getTitle()) ?> </h2>
    <span class="quotation">«</span>
    <p><?= Utils::format($article->getContent()) ?></p>

    <div class="footer">
        <span class="info"> Publié le <?= Utils::convertDateToFrenchFormat($article->getDateCreation()) ?></span>
        <?php if ($article->getDateUpdate() != null) { ?>
            <span class="info"> Modifié le <?= Utils::convertDateToFrenchFormat($article->getDateUpdate()) ?></span>
        <?php } ?>
    </div>
</article>

<div class="comments">
    <h2 class="commentsTitle">Vos Commentaires</h2>
    <?php
    if (empty($comments)) {
        echo '<p class="info">Aucun commentaire pour cet article.</p>';
    } else { ?>
        <form action="index.php?action=deleteSeveralComments" method="POST" class="commentsForm">
            <input type="hidden" name="idArticle" value="<?= $article->getId() ?>">
            <?php
            echo '<ul>';
            foreach ($comments as $comment) {
                echo '<li>';
                if (isset($_SESSION['user'])) {
            ?>
                    <input type="checkbox" name="commentIds[]" value="<?= $comment->getId() ?>">
                <?php }
                echo '  <div class="smiley">☻</div>';
                echo '  <div class="detailComment">';
                echo '      <h3 class="info">Le ' . Utils::convertDateToFrenchFormat($comment->getDateCreation()) . ", " . Utils::format($comment->getPseudo()) . ' a écrit :</h3>';
                echo '      <p class="content">' . Utils::format($comment->getContent()) . '</p>';
                echo '  </div>';
                echo '</li>';
                if (isset($_SESSION['user'])) {
                ?>
                    <div class="deleteOneComment">
                        <a href=" index.php?action=deleteComment&id=<?= $comment->getId() ?>">
                            <img src="../../icons/trash.svg" alt="Poubelle">
                            Supprimer ce commentaire
                        </a>
                    </div>
                <?php } ?>
            <?php
                echo '_______________';
            } ?>
            <div>
                <?php
                    if (isset($_SESSION['user'])) {
                ?>
                    <button type="submit" class="deleteComments">Supprimer les commentaires sélectionnés</button>
                <?php } ?>
            </div>
            <?php
            echo '</ul>';
            ?>
        </form>
    <?php
    }
    ?>

    <form action="index.php" method="post" class="foldedCorner">
        <h2>Commenter</h2>

        <div class="formComment formGrid">
            <label for="pseudo">Pseudonyme</label>
            <input type="text" name="pseudo" id="pseudo" required>

            <label for="content">Commentaire</label>
            <textarea name="content" id="content" required></textarea>

            <input type="hidden" name="action" value="addComment">
            <input type="hidden" name="idArticle" value="<?= $article->getId() ?>">

            <button class="submit">Ajouter un commentaire</button>
        </div>
    </form>
</div>