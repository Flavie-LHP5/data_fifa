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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon_1.png" />
</head>

<body class="">
    <header>

        <nav class="navbar navbar-light" id="Navbar">
            <a class="navbar-brand" href="#">
                <img id="Logonavbar" src="assets/img/fifa.png" class="d-inline-block align-top" alt="Logo FIFA">
            </a>
            <a class="navbar-brand" href="#">
                <i class="text-white text-uppercase ">Gallerie</i>
            </a>
        </nav>

        <div class="p-5 text-center bg-light text-uppercase font-weight-bold">
            <h1>Tableau Fifa</h1>
            <p class="lead mt-4"></p>
        </div>
    </header>

    <div class="container">

        <div class="bg-light mt-4 text-center">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <?php
                        foreach ($fifa_data as $keys => $value) {  ?>
                        <th>
                            <img src="<?= $fifa_data[$keys]['picture'] ?>" width="35" height="26">
                        </th>
                        <th>
                            <?= $fifa_data[$keys]['name'] ?>
                        </th>
                        <th>
                            <button id="btninfos" type="button" class="btn font-weight-bold text-uppercase text-white"
                                data-toggle="modal" data-target="#modal<?= $keys ?>"> + d'info</button>
                        </th>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


        <?php foreach ($fifa_data as $keys => $value) { ?>
        <div class="modal fade" id="modal<?= $keys ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger font-weight-bold text-white text-center">

                        <h5 class="modal-title text-uppercase" id="exampleModalLabel">Information joueur</h5>

                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center">
                            <img src="<?= $fifa_data[$keys]['picture'] ?>" width="300" height="200">
                        </div>
                        <ul class="list-group list-group-flush p-4">
                            <li class="list-group-item">
                                <?= $fifa_data[$keys]['name'] ?>
                            </li>
                            <li class="list-group-item">
                                <?= $fifa_data[$keys]['team'] ?>
                            </li>
                            <li class="list-group-item">
                                <?= $fifa_data[$keys]['nationality'] ?>
                            </li>
                            <li class="list-group-item">
                                <?= $fifa_data[$keys]['number'] ?>
                            </li>
                            <li class="list-group-item">
                                <?= $fifa_data[$keys]['position'] ?>
                            </li>
                            <li class="list-group-item">
                                <?= $fifa_data[$keys]['age'] ?>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer  justify-content-center">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermez</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>