<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Five for Health</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/e28828ba7c.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div>
            <img src="images/Five4health.png" alt="" class="logo" />
        </div>
    </header>
    <div class="background">
        <img src="images/chmurka(1).png" alt="" class="cloud firstcloud" />
        <img src="images/chmurka2.png" alt="" class="cloud secondcloud" />
        <img src="images/chmurka_3.png" alt="" class="cloud thirdcloud" />
        <img src="images/żabka.png" alt="" class="frog" />
        <img src="images/grass_bg.png" alt="" class="grass" />


        <div class="habits_list">
            <?php include 'server.php'; ?>
        </div>
    </div>

    <script src="index.js"></script>
</body>

</html>