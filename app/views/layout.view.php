<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= ROOT ?>/assets/css/main.css">
        <title>PilotKalkylatorn - <?= $data['title']; ?></title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg fixed-top bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= ROOT ?>">
                    <img src="<?= ROOT ?>/assets/img/Logo.png" alt="Bootstrap" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link t-s" href="<?= ROOT ?>/weather">Väder</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle t-s" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Kalkylator
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item t-s" href="<?= ROOT ?>/calculate/convert">Konvertera</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    -->
                </div>
            </div>
        </nav>

        <div class="container" style="margin-top: 6rem; padding-bottom: 4rem">
            <?php require($data['view'].".view.php"); ?>
        </div>


        <script src="<?= ROOT ?>/assets/js/main.js"></script>
        <script src="<?= ROOT ?>/assets/js/convert.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
