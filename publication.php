
<?php
include_once __DIR__ . '/partial/head.inc.php';
?>

<body>
<?php
include_once __DIR__ . '/partial/header.inc.php';
?>



<main>
    <?php 
    include_once __DIR__ . '/controller/controllerArticle.php';

    ?>

<div class="table-primary" role="region" aria-labelledby="table">
                <table id="table">
                    <caption>
                        Classement des articles
                    </caption>
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Référence</th>
                          
                        </tr>
                    </thead>
                    <tbody>

                    
                      <?php foreach($articles as $value): ?>
                        <tr>
                            <td><?= $value["titre"] ?></td>
                            <td><?= $value["description"] ?></td>
                            <td>
                                <a href="<?= $value["url"]?>" target="blank">
                                    <?= $value["link"] ?> &raquo;</a>
                                </td>
                           
                        </tr>

                    <?php endforeach ?>

                    </tbody>

                    <tfoot>
                        <tr>
                        <tr>
                        <th>Titre</th>
                            <th>Description</th>
                            <th>Référence</th>
                        
                        </tr>
                        </tr> 
                        </tr>
                    </tfoot>

                </table>
         </div>
<!-- content -->
</main>

<?php
      include_once __DIR__ . '/partial/footer.inc.php';
    ?>

</body>
</html>