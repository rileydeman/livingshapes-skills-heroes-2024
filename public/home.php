<?php
//including the config file
include_once("app/config/config.php");

//including the db connection file
include_once("app/db/db-conn.php");
?>

<!doctype html>
<html lang="en-AU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/x-icon" href="<?= BASEURL ?>favicon.png">

    <title>HOME | LivingShapes</title>

    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/style.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/header.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?= BASEURL ?>public/assets/css/home.css?v=<?= time() ?>">

    <script defer src="<?= BASEURL ?>public/assets/js/app.js"></script>
</head>
<body>

<header>
    <?php include_once("public/core/header.php"); ?>
</header>

<main>
    <div id="projects-repeater">
        <?php
        $orderTypes = ["title ASC", "title DESC", "id ASC", "id DESC"];
        $order = $orderTypes[array_rand($orderTypes, 1)];

        $sqliQuery = "SELECT title, city_location, image_main, image_second FROM projects ORDER BY {$order}";

        $projects = $db_conn->prepare($sqliQuery);
        $projects->bind_result($title, $city_location, $image_main, $image_second);
        $projects->execute();
        while ($projects->fetch()) { ?>
        <article class="pRepItem">
            <div class="pRepItemBackground">
                <figure>
                    <img src="<?= BASEURL_CDN ?>img/<?= $image_main ?>" alt="">
                    <img src="<?= BASEURL_CDN ?>img/<?= $image_second ?>" alt="">
                </figure>
            </div>
            <figcaption class="figcaption">
                <p class="title"><?= $title ?></p>
                <p class="location"><?= $city_location ?></p>
            </figcaption>
        </article>
        <?php } ?>
    </div>
</main>

<footer>
    <?php include_once("public/core/footer.php"); ?>
</footer>

</body>
</html>