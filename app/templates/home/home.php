<section class="portfolio section-style-regular">
    <div class="portfolio-filter">
        <div class="portfolio-filter-wrapper">
            <h1>Filter:</h1>
            <ul>
                <li id="li_code" class="filter_item filter_active">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#191B27" class="bi bi-code-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0m2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0" />
                        </svg>
                    </p>
                </li>
                <li id="li_videos" class="filter_item">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#191B27" class="bi bi-film"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm4 0v6h8V1zm8 8H4v6h8zM1 1v2h2V1zm2 3H1v2h2zM1 7v2h2V7zm2 3H1v2h2zm-2 3v2h2v-2zM15 1h-2v2h2zm-2 3v2h2V4zm2 3h-2v2h2zm-2 3v2h2v-2zm2 3h-2v2h2z" />
                        </svg></p>
                </li>
                <li id="li_blender" class="filter_item">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#191B27" class="bi bi-box" viewBox="0 0 16 16">
                            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
                        </svg>
                    </p>
                </li>
                <li id="li_studyflix" class="filter_item">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
                            <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z"/>
                            <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z"/>
                        </svg>
                    </p>
                </li>
                <li id="li_audios" class="filter_item">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                            <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2"/>
                            <path fill-rule="evenodd" d="M12 3v10h-1V3z"/>
                            <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1z"/>
                            <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div id="videos" class="portfolio_cards_wrapper">
        <?php cardGenerator("videos");?>
    </div>
    <div id="audios" class="portfolio_cards_wrapper">
        <?php cardGenerator("audio");?>
    </div>
    <div id="blender" class="portfolio_cards_wrapper">
        <?php cardGenerator("blender");?>
    </div>
    <div id="studyflix" class="portfolio_cards_wrapper">
        <?php cardGenerator("studyflix");?>
    </div>
    <div id="code" class="portfolio_cards_wrapper pcw_active">
        <?php cardGenerator("code");?>
    </div>
</section>

<section id="section_quote">
    <div class="section_quote_wrapper section-style-regular">
        <div class="section_quote_flex_wrapper">
            <h1>"Ich habe keine besondere Begabung,
                <span class="text_highlight_color"> sondern bin nur leidenschaftlich neugierig."</span>
                <span class="citation"> Albert Einstein</span>
            </h1>
            <p class="text_justify">Dieses Zitat bringt sehr gut auf den Punkt, was mich antreibt: Ich bin von Natur aus neugierig und interessiere mich für vielfältige Themen – von Weltgeschehen und Politik über Tier- und Klimaschutz sowie Medien, Marketing und Public Relations bis hin zur Informatik. Dabei möchte ich Zusammenhänge verstehen, mich schnell in Neues einarbeiten und meine Erkenntnisse gezielt in die Praxis übertragen.</p>
        </div>
        <img style="width: 250px; margin: 10px 0px 10px 100px;" src="assets/img/me.jpg" alt="A Picture of Me">
    </div>
</section>

<section id="section_techstack" class="section-style-regular">
    <h1 class="text_primary_color">Mein Haupt-Techstack:</h1>
    <div id="techstack">
        <div style="flex: 1;">
            <a href="https://www.cakephp.org/" style="margin:auto;" target="_blank">
                <img src="https://www.cakephp.org/img/flags/I-bake-with-CakePHP.png" alt="CakePHP-Logo">
            </a>
        </div>
        <div style="flex: 1;">
            <a href="https://www.php.net/" style="margin:auto;" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="PHP-Logo">
            </a>
        </div>
        <div style="flex: 1;">
            <a href="https://www.mysql.com/" style="margin:auto;" target="_blank">
                <img src="https://labs.mysql.com/common/logos/mysql-logo.svg" alt="MySQL-Logo">
            </a>
        </div>
        <div style="flex: 1;">
            <a href="https://dotnet.microsoft.com/" style="margin:auto;" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7d/Microsoft_.NET_logo.svg" alt=".NET-Logo">
            </a>
        </div>
    </div>
    <p style="text-align: center; color: darkgrey">Außerdem vertraut mit HTML, JS, CSS, Python, Laravel, Vue, SOAP,
        RESTful,
        MVC-Architektur & OOP, etc. Erfahrungen variieren.</p>
</section>

<section id="trained_in"
    style="font-weight: 100; margin-top: 20px; padding: 15px 0px; padding: 30px 0px; background-color: #191B27; color: white;">
    <div class="section-style-regular">

        <!-- <h1 style="margin-bottom: 20px;">Ausgebildeter: </h1> -->
        <div class="trained_wrapper">
            <div>
                <h2 class="mt-0">Medientechniker (B.Eng)</h2>
                <p class="text_justify">
                    Zu Beginn meines Studiums wurde schnell deutlich, was hinter einem Medientechniker steht: Der
                    Medientechniker ist Ingenieur – und arbeitet als vielseitig ausgebildete Schnittstelle, die Probleme
                    effizient sowohl innerhalb als auch zwischen verschiedenen Abteilungen löst. Dabei reicht das
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
                    Produkte nicht nur umzusetzen, sondern zielgerichtet weiterzuentwickeln.
                </p>
                <br>
                <p class="text_justify">
                    Das Studium habe ich parallel zum Beginn meiner neuen FiAE-Ausbildung im Dezember 2024
                    mit einer Gesamtnote von 1.9 abgeschlossen. In meiner Bachelorarbeit habe ich mich mit Fullstack-
                    Webanwendungen mit dem MEVN-Stack befasst.
                </p>

            </div>
            <div class="fiae">
                <h2 class="mt-0">Fachinformatiker (FiAE)</h2>
                <p class="text_justify">Während meines Studiums merkte ich, dass mir die Programmierung
                    besonders viel Freude bereitet und ich mich in diesem Bereich weiterentwickeln möchte. Genau
                    deshalb habe ich danach die
                    FiAE-Ausbildung begonnen – bewusst ohne weiteres Studium. Mit der Ausbildung wollte ich die
                    Praxisnähe und den Betrieb unmittelbar im
                    Unternehmen erleben. Ich wollte nicht nur Software “sehen” oder Code von Udemy-Kursen
                    copy-pasten,
                    sondern aktiv daran mitarbeiten – in realen Projekten, im Team und mit echtem Einsatz.</p>
                <br>
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