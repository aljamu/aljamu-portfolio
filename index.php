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

    <div id="overlay" style="display: none;">
        <div id="overlay_card">
        </div>
    </div>

    <header>
        <?php include "components/header.php" ?>;
    </header>

    <section class="portfolio section-style-regular">
        <div class="portfolio-filter">
            <div class="portfolio-filter-wrapper">
                <h1>Filter:</h1>
                <ul>
                    <li id="li_videos" class="filter_item filter_active">
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#191B27"
                                class="bi bi-film" viewBox="0 0 16 16">
                                <path
                                    d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm4 0v6h8V1zm8 8H4v6h8zM1 1v2h2V1zm2 3H1v2h2zM1 7v2h2V7zm2 3H1v2h2zm-2 3v2h2v-2zM15 1h-2v2h2zm-2 3v2h2V4zm2 3h-2v2h2zm-2 3v2h2v-2zm2 3h-2v2h2z" />
                            </svg></p>
                    </li>
                    <li id="li_audios" class="filter_item">
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#191B27"
                                class="bi bi-mic" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
                                <path
                                    d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3" />
                            </svg></p>
                    </li>
                    <li id="li_blender" class="filter_item">
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#191B27"
                                class="bi bi-box" viewBox="0 0 16 16">
                                <path
                                    d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
                            </svg></p>
                    </li>
                    <li id="li_code" class="filter_item">
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#191B27"
                                class="bi bi-code-square" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                <path
                                    d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0m2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0" />
                            </svg></p>
                    </li>
                </ul>
            </div>
        </div>
        <div id="videos" class="portfolio_cards_wrapper pcw_active">
            <?php
            $videos = json_decode(file_get_contents(__DIR__ . "/data/videos.json"));
            #cardGenerator($videos);
            cardGeneratorFull($videos);
            ?>
        </div>
        <div id="audios" class="portfolio_cards_wrapper">
            <?php
            $audios = json_decode(file_get_contents(__DIR__ . "/data/audio.json"));
            cardGenerator($audios);
            ?>
        </div>
        <div id="blender" class="portfolio_cards_wrapper">
            <?php
            $blender = json_decode(file_get_contents(__DIR__ . "/data/blender.json"));
            cardGenerator($blender);
            ?>
        </div>
        <div id="code" class="portfolio_cards_wrapper">
            <h1 style="margin: 0px 0px 10px 0px;">So fing alles an..</h1>
            <canvas id="anzeige" width="950" height="250" style="border:2px solid #000000;background:#f0f0f0"></canvas>
        </div>
    </section>

    <section id="hero" style="background-color: #191B27; color: white; min-height: 100px;">
        <div class="section-style-regular" style="display: flex;">
            <div style="height: inherit; display: flex; justify-content: center; flex-direction: column;">
                <h1>"Ich habe keine besondere Begabung,<span class="text_highlight_color"> sondern bin nur
                        leidenschaftlich neugierig."</span><span style="font-size: small; font-weight: lighter;"> Albert
                        Einstein</span></h1>
                <p class="text_justify">Dieses Zitat passt sehr gut zu dem, was mich antreibt. Ich bin von Natur aus
                    sehr neugierig und habe einen
                    ausgeprägten Wissensdrang in verschiedenste Themenfelder – von Weltgeschehen und Politik über
                    Medien, Marketing und Public Relations bis hin zu Informatik. Mein Anspruch ist es, Zusammenhänge zu
                    verstehen, Neues schnell zu lernen und Erkenntnisse gezielt anzuwenden.</p>
            </div>
            <img style="width: 250px; margin: 10px 0px 10px 100px;" src="img/me.jpg" alt="A Picture of Me">
        </div>
    </section>

    <section class="section-style-regular">
        <h1 class="text_primary_color">I work with:</h1>
        <img src="img/techstack_icons.png" alt="techstack">
        <p style="text-align: right;">Außerdem vertraut mit HTML, JS, CSS, Python, Laravel, Vue,
            MVC-Architektur & OOP, etc. Erfahrungen variieren.</p>
    </section>

    <section id="trained_in"
        style="margin-top: 20px; padding: 15px 0px; padding: 30px 0px; background-color: #191B27; color: white;">
        <div class="section-style-regular">

            <!-- <h1 style="margin-bottom: 20px;">Ausgebildeter: </h1> -->
            <div class="trained_wrapper">
                <div style="max-width: 480px;">
                    <h2 class="mt-0">Medientechniker (B. Eng)</h2>
                    <p class="text_justify">
                        Zu Beginn meines Studiums wurde schnell deutlich, was hinter einem Medientechniker steht: Der
                        Medientechniker ist
                        Ingenieur – und arbeitet als vielseitig ausgebildete Schnittstelle, die Probleme effizient
                        sowohl innerhalb als auch zwischen verschiedenen Abteilungen löst. Dabei reicht das
                        Zusammenspiel von journalistischen und redaktionellen Tätigkeiten sowie Content Creation über
                        Marketing, Instruktion und Kommunikation bis hin zu UX/UI-Design und Informatik.
                    </p>
                    <br>
                    <p class="text_justify">
                        Als Medientechniker bringt man dafür vor allem bestimmte Voraussetzungen mit, die über
                        Teamfähigkeit, Kommunikation und Lösungsorientierung hinausgehen. Dazu zählen eine strukturierte
                        und selbstständige Arbeitsweise, analytisches Denken und ein gutes Verständnis für komplexe
                        Abläufe. Ebenso wichtig ist technisches Interesse bzw. die Bereitschaft, sich schnell in neue
                        Tools, Systeme und Formate einzuarbeiten. Kreativität und Gestaltungswille helfen, Inhalte und
                        Produkte nicht nur umzusetzen, sondern zielgerichtet weiterzuentwickeln. Außerdem sind ein gutes
                        Gespür für Zielgruppen und Inhalte sowie Qualitätsbewusstsein entscheidend, um Ergebnisse
                        konsistent, verständlich und nutzbar zu liefern. </p>

                </div>
                <div style="max-width: 480px;">
                    <h2 class="mt-0">Fachinformatiker (FiAE)</h2>
                    <p class="text_justify">Während meines Studiums merkte ich, dass mir die Programmierung
                        besonders viel Freude bereitet und ich mich in diesem Bereich weiterentwickeln möchte. Genau
                        deshalb habe ich danach die
                        FiAE-Ausbildung begonnen – bewusst ohne weiteres Studium. Mit der Ausbildung wollte ich die
                        Praxisnähe und den Betrieb unmittelbar im
                        Unternehmen erleben. Ich wollte nicht nur Software “sehen” oder Code von Udemy-Kursen
                        copy-pasten,
                        sondern aktiv daran mitarbeiten – in realen Projekten, im Team und mit echtem Einsatz.</p>
                    <br \>
                    <p class="text_justify">Dadurch kann ich Software nicht nur schreiben, sondern auch verstehen, wie
                        sie im Alltag funktioniert: wie Anforderungen in Code übersetzt werden, wie Schnittstellen
                        zusammenpassen und wo Probleme entstehen, wenn Nutzer, Daten und Medien-Workflows wirklich
                        ineinandergreifen. Statt mich in Einzelaufgaben zu verlieren, arbeite ich konsequent an der
                        Software selbst weiter – beobachte Verhalten, verbessere Abläufe und mache Anpassungen so, dass
                        sie langfristig wartbar bleiben.
                    </p>
                    <br>
                    <p>Meine Kenntnisse aus der Ausbildung konnte ich dabei immer wieder direkt ins Unternehmen
                        einbringen, indem ich mein Wissen aktiv in Projekten und Verbesserungen genutzt habe—schnell,
                        pragmatisch und mit Blick darauf, dass die Software im Alltag wirklich besser wird.</p>
                </div>
            </div>
    </section>

    <!-- <section class="section-style-regular">
        <h1>So fing alles an..</h1>
        <canvas id="anzeige" width="950" height="250" style="border:2px solid #000000;background:#f0f0f0"></canvas>
        <h4>Ein Canvas - Fläche für Pixelart, 8-Bit-Uhr oder Spielfläche</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, officiis ut, quis esse excepturi quibusdam
            suscipit quam doloribus minima nisi temporibus ducimus reiciendis mollitia nam quas unde aspernatur
            voluptate et.</p>

    </section> -->

    <footer>
        <?php include 'components/footer.php'; ?>
    </footer>

    <script src="script.js"></script>
    <script>initCanvas();</script>
</body>

</html>