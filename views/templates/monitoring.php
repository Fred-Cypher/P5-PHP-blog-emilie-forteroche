<?php

/**
 * Affichage de la page de monitoring
 */
?>

<h2>Monitoring du blog</h2>

<table class="monitoringTable">
    <thead class="partTable">
        <tr class="tableHeader">
            <th class="tableCase">
                <div class="case">
                    <div>Titre de l'article</div>
                    <div class="sortButtons">
                        <a href="index.php?action=monitoring&sort=article_title&order=asc">
                            <img src="../../icons/sort1.svg" class="icon" title="Tri croissant" />
                        </a>
                        <a href="index.php?action=monitoring">
                            <img src="../../icons/stop.svg" class="icon" title="Aucun tri" />
                        </a>
                        <a href="index.php?action=monitoring&sort=article_title&order=desc">
                            <img src="../../icons/sort2.svg" class="icon" title="Tri décroissant" />
                        </a>
                    </div>
                </div>
            </th>
            <th class="tableCase">
                <div class="case">
                    <div>Nombre de vues</div>
                    <div class="sortButtons">
                        <a href="index.php?action=monitoring&sort=article_views&order=asc">
                            <img src="../../icons/sort1.svg" class="icon" title="Tri croissant" />
                        </a>
                        <a href="index.php?action=monitoring">
                            <img src="../../icons/stop.svg" class="icon" title="Aucun tri" />
                        </a>
                        <a href="index.php?action=monitoring&sort=article_views&order=desc">
                            <img src="../../icons/sort2.svg" class="icon" title="Tri décroissant" />
                        </a>
                    </div>
                </div>
            </th>
            <th class="tableCase">
                <div class="case">
                    <div>Nombre de commentaires</div>
                    <div class="sortButtons">
                        <a href="index.php?action=monitoring&sort=comment_count&order=asc">
                            <img src="../../icons/sort1.svg" class="icon" title="Tri croissant" />
                        </a>
                        <a href="index.php?action=monitoring">
                            <img src="../../icons/stop.svg" class="icon" title="Aucun tri" />
                        </a>
                        <a href="index.php?action=monitoring&sort=comment_count&order=desc">
                            <img src="../../icons/sort2.svg" class="icon" title="Tri décroissant" />
                        </a>
                    </div>
                </div>

            </th>
            <th class="tableCase">
                <div class="case">
                    <div>Date de publication</div>
                    <div class="sortButtons">
                        <a href="index.php?action=monitoring&sort=article_date_creation&order=asc">
                            <img src="../../icons/sort1.svg" class="icon" title="Tri croissant" />
                        </a>
                        <a href="index.php?action=monitoring">
                            <img src="../../icons/stop.svg" class="icon" title="Aucun tri" />
                        </a>
                        <a href="index.php?action=monitoring&sort=article_date_creation&order=desc">
                            <img src="../../icons/sort2.svg" class="icon" title="Tri décroissant" />
                        </a>
                    </div>
                </div>
            </th>
        </tr>
    </thead>
    <tbody class="partTable">
        <?php foreach ($articleWithComments as $article) { ?>
            <tr>
                <td class="tableCase">
                    <?= $article['article_title'] ?>
                </td>
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
    </tbody>
</table>