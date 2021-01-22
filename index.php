<?php
require_once('controller/index_controller.php');
?>



<!doctype html>
<html lang="fr">

<head>
    <title>Tableau FIFA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1 class="display-5">Bienvenu !</h1>

            <hr class="my-4">
            <p class="lead">Tableau de Fifa</p>

        </div>
        <table class="table table-hover text-center">
            <thead>

            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($fifa_data as $keys => $value) {  ?>

                        <th scope="col"><img src="<?= $fifa_data[$keys]['picture'] ?>" width="35" height="26"></th>
                        <th scope="col"><?= $fifa_data[$keys]['name'] ?></th>
                        <th>
                            <button type="button" class="btn btn-warning font-weight-bold text-white" data-toggle="modal" data-target="#modal<?= $keys ?>"> + d'info</button>
                        </th>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <?php foreach ($fifa_data as $keys => $value) {  ?>
            <div class="modal fade" id="modal<?= $keys ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h5 class="modal-title text-center" id="exampleModalLabel">Joueur</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div><img src="<?= $fifa_data[$keys]['picture'] ?>" width="300" height="200"></div>
                            <ul>
                                <li>
                                    <?= $fifa_data[$keys]['name'] ?>
                                </li>
                                <li>
                                    <?= $fifa_data[$keys]['team'] ?>
                                </li>
                                <li>
                                    <?= $fifa_data[$keys]['nationality'] ?>
                                </li>
                                <li>
                                    <?= $fifa_data[$keys]['number'] ?>
                                </li>
                                <li>
                                    <?= $fifa_data[$keys]['position'] ?>
                                </li>
                                <li>
                                    <?= $fifa_data[$keys]['age'] ?>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermez</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>