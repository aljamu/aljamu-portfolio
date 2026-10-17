<?php 
/** @var string $title, $content 
 *  @var string $content 
*/
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Rubik:ital,wght@0,300..900;1,300..900&family=Truculenta:opsz,wght@12..72,100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/img/JainzPixelArt.png">
    <script src="https://cdn.jsdelivr.net/npm/jquery@4.0.0/dist/jquery.min.js"></script>
    <script src="assets/js/game.js"></script>
    <title>Aljamu<?= $title ? htmlspecialchars(" - " . $title) : "" ?></title>
</head>
<div id="loader" style="min-width: 100vw; min-height: 100vh; position: fixed; background-color: black;">
    <div class="loader_wrapper" style="width: 100%; padding-top: 250px;  text-align: center; color: white;">
        <img class="logo" src="assets/img/JainzPixelArt.png" alt="Logo" width="150px" style="margin: auto;">
        <h1>Alexander Jannes Müller-Uri</h1>
        <h2>Seite wird geladen</h2>
        <div class="custom-loader" style="margin: auto;"></div>
    </div>
</div>

<body>
    <div id="overlay" style="display: none;">
        <div id="overlay_card">
        </div>
    </div>
    <header>
        <?php require __DIR__ . "/header.php" ?>;
    </header>

    <?= $content ?>

    <footer>
        <?php require __DIR__ . "/footer.php" ?>
    </footer>

    <script src="assets/js/script.js"></script>
    <!--<script>initCanvas();</script>-->
</body>

</html>