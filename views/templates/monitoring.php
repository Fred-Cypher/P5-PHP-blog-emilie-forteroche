<?php

/**
 * Affichage de la page de monitoring
 */
    $currentSort = $_GET['sort'] ?? null;
    $currentOrder = $_GET['order'] ?? null;
?>

<h2>Monitoring du blog</h2>

<table class="monitoringTable">
    <thead class="partTable">
        <tr class="tableHeader">
            <th class="tableCase">
                <div class="case">
                    <div>Titre de l'article</div>
                    <div class="sortButtons">
                        <?php if (!($currentSort === 'article_title' && $currentOrder === 'asc')): ?>
                            <a href="index.php?action=monitoring&sort=article_title&order=asc">
                                <img src="../../icons/sort1.svg" class="icon" title="Tri croissant" />
                            </a>
                        <?php endif; ?>
                        <a href="index.php?action=monitoring">
                            <img src="../../icons/stop.svg" class="icon" title="Aucun tri" />
                        </a>
                        <?php if (!($currentSort === 'article_title' && $currentOrder === 'desc')): ?>
                            <a href="index.php?action=monitoring&sort=article_title&order=desc">
                                <img src="../../icons/sort2.svg" class="icon" title="Tri décroissant" />
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </th>
            <th class="tableCase">
                <div class="case">
                    <div>Nombre de vues</div>
                    <div class="sortButtons">
                        <?php if (!($currentSort === 'article_views' && $currentOrder === 'asc')): ?>
                        <a href="index.php?action=monitoring&sort=article_views&order=asc">
                            <img src="../../icons/sort1.svg" class="icon" title="Tri croissant" />
                        </a>
                        <?php endif; ?>
                        <a href="index.php?action=monitoring">
                            <img src="../../icons/stop.svg" class="icon" title="Aucun tri" />
                        </a>
                        <?php if (!($currentSort === 'article_views' && $currentOrder === 'desc')): ?>
                        <a href="index.php?action=monitoring&sort=article_views&order=desc">
                            <img src="../../icons/sort2.svg" class="icon" title="Tri décroissant" />
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </th>
            <th class="tableCase">
                <div class="case">
                    <div>Nombre de commentaires</div>
                    <div class="sortButtons">
                        <?php if (!($currentSort === 'comment_count' && $currentOrder === 'asc')): ?>
                        <a href="index.php?action=monitoring&sort=comment_count&order=asc">
                            <img src="../../icons/sort1.svg" class="icon" title="Tri croissant" />
                        </a>
                        <?php endif; ?>
                        <a href="index.php?action=monitoring">
                            <img src="../../icons/stop.svg" class="icon" title="Aucun tri" />
                        </a>
                        <?php if (!($currentSort === 'comment_count' && $currentOrder === 'desc')): ?>
                        <a href="index.php?action=monitoring&sort=comment_count&order=desc">
                            <img src="../../icons/sort2.svg" class="icon" title="Tri décroissant" />
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

            </th>
            <th class="tableCase">
                <div class="case">
                    <div>Date de publication</div>
                    <div class="sortButtons">
                        <?php if (!($currentSort === 'article_date_creation' && $currentOrder === 'asc')): ?>
                        <a href="index.php?action=monitoring&sort=article_date_creation&order=asc">
                            <img src="../../icons/sort1.svg" class="icon" title="Tri croissant" />
                        </a>
                        <?php endif; ?>
                        <a href="index.php?action=monitoring">
                            <img src="../../icons/stop.svg" class="icon" title="Aucun tri" />
                        </a>
                        <?php if (!($currentSort === 'article_date_creation' && $currentOrder === 'desc')): ?>
                        <a href="index.php?action=monitoring&sort=article_date_creation&order=desc">
                            <img src="../../icons/sort2.svg" class="icon" title="Tri décroissant" />
                        </a>
                        <?php endif; ?>
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