<?php

/**
 * Affichage de la page de monitoring
 */
?>

<h2>Monitoring du blog</h2>

<div>
    <table class="monitoringTable">
        <tr class="tableHeader">
            <th class="tableCase">Titre de l'article</th>
            <th class="tableCase">Nombre de vues</th>
            <th class="tableCase">Nombre de commentaires</th>
            <th class="tableCase">Date de publication</th>
        </tr>

        <?php foreach ($articleWithcomments as $article) { ?>
            <tr>
                <td class="tableCase"> <?= $article['article_title'] ?> </td>
                <td class="tableCase tablecenter"> 
                    <?= $article['article_views'] ?> 
                </td>
                <td class="tableCase tablecenter"> 
                    <?= $article['comment_count'] ?>
                </td>
                <td class="tableCase tablecenter"> 
                    <?= ucfirst(Utils::convertDateToFrenchFormat(new DateTime($article['article_date_creation']))) ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>