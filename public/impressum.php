<?php include "php/cardGenerator.php" ?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex's Portfolio</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Truculenta:opsz,wght@12..72,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Rubik:ital,wght@0,300..900;1,300..900&family=Truculenta:opsz,wght@12..72,100..900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@4.0.0/dist/jquery.min.js"></script>
    <script src="js/game.js"></script>
</head>

<body>
    <header>
        <?php include "components/header.php" ?>;
    </header>

    <section class="section-style-regular">
        <p>Da es sich bei meinem Portfolio um eine private, unkommerzielle Darstellung handelt, besteht in der Regel
            keine Verpflichtung,
            ein Impressum vorzuhalten. Es werden keine geschäftsmäßigen Inhalte wie ein Leistungsangebot oder eine
            unternehmerische Vermarktung veröffentlicht,
            sondern lediglich Inhalte zu meiner Person und meinen Arbeiten. Um Datenschutz und Spamschutz zu wahren,
            nenne ich zudem keine zusätzlichen persönlichen
            Angaben über die bereits auf der Seite vorhandenen Informationen hinaus und halte die veröffentlichten Daten
            bewusst auf das notwendige Minimum.
        </p>
        <br>    
        <p>Da meine Seite keine Cookies verwendet und auch keine Tracking- oder Drittanbieter-Skripte einbindet, wird beim Besuch der Seite nichts gespeichert,
             was einen Cookie-Banner erforderlich machen würde. Entsprechend gibt es auf der Seite auch keinen Cookie-Banner, weil keine Cookies im Sinne der typischen Cookie-Einwilligungs-Pflichten gesetzt oder genutzt werden.
        </p>
    </section>

    <footer>
        <?php include 'components/footer.php'; ?>
    </footer>
</body>

</html>