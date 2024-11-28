<?php

/**
 * Affichage de la page de monitoring
 */
?>

<h2>Monitoring du blog</h2>

<div>
    <table class="monitoringTable">
        <thead>
            <tr class="tableHeader">
                <th class="tableCase">Titre de l'article
                    <a href="index.php?action=monitoring&sort=article_title&order=asc">
                        <button title="Tri croissant">
                            <img src="../../icons/sort1.svg" class="icon" />
                        </button>
                    </a>
                    <a href="index.php?action=monitoring">
                        <button title="Aucun tri">
                            <img src="../../icons/stop.svg" class="icon" />
                        </button>
                    </a>
                    <a href="index.php?action=monitoring&sort=article_title&order=desc">
                        <button title="Tri décroissant">
                            <img src="../../icons/sort2.svg" class="icon" />
                        </button>
                    </a>
                </th>
                <th class="tableCase">Nombre de vues
                    <a href="index.php?action=monitoring&sort=article_views&order=asc">
                        <button title="Tri croissant">
                            <img src="../../icons/sort1.svg" class="icon" />
                        </button>
                    </a>
                    <a href="index.php?action=monitoring">
                        <button title="Aucun tri">
                            <img src="../../icons/stop.svg" class="icon" />
                        </button>
                    </a>
                    <a href="index.php?action=monitoring&sort=article_views&order=desc">
                        <button title="Tri décroissant">
                            <img src="../../icons/sort2.svg" class="icon" />
                        </button>
                    </a>
                </th>
                <th class="tableCase">Nombre de commentaires
                    <a href="index.php?action=monitoring&sort=comment_count&order=asc">
                        <button title="Tri croissant">
                            <img src="../../icons/sort1.svg" class="icon" />
                        </button>
                    </a>
                    <a href="index.php?action=monitoring">
                        <button title="Aucun tri">
                            <img src="../../icons/stop.svg" class="icon" />
                        </button>
                    </a>
                    <a href="index.php?action=monitoring&sort=comment_count&order=desc">
                        <button title="Tri décroissant">
                            <img src="../../icons/sort2.svg" class="icon" />
                        </button>
                    </a>
                </th>
                <th class="tableCase">Date de publication
                    <a href="index.php?action=monitoring&sort=article_date_creation&order=asc">
                        <button title="Tri croissant">
                            <img src="../../icons/sort1.svg" class="icon" />
                        </button>
                    </a>
                    <a href="index.php?action=monitoring">
                        <button title="Aucun tri">
                            <img src="../../icons/stop.svg" class="icon" />
                        </button>
                    </a>
                    <a href="index.php?action=monitoring&sort=article_date_creation&order=desc">
                        <button title="Tri décroissant">
                            <img src="../../icons/sort2.svg" class="icon" />
                        </button>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articleWithComments as $article) { ?>
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
        </tbody>
    </table>
</div>