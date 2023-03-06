<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/public/assets/css/main.css">
        <title>PilotKalkylatorn - <?= $content['title']; ?></title>
    </head>
    <body>
        <header>
            <div class="navbar">
                <div class="leftNav">
                    <div class="logo">
                        <a href="/"><img src="../public/assets/img/Logo.png" alt=""></a>
                    </div>
                    <div class="links">
                        <a href="/weather.php">Väder</a>
                    </div>
                </div>
                <div class="rightNav">
                    <div class="rightLink">
                        <!-- <a href="#">Logga In</a> -->
                    </div>
                </div>
            </div>
        </header>

        <?php require("$url.view.php"); ?>

        <div class="footer">
            <p>info@pilotkalkylatorn.se</p>
        </div>
    </body>
</html>