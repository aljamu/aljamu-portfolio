<?php
//Code, der die feste Projekt-Umgebung aufbaut, also Pfade, Loader und Funktionen bereitstellt.

//Paths
define('PROJECT_ROOT', dirname(__DIR__));
define('APP_ROOT', __DIR__);
define('DATA_ROOT', __DIR__ . '/data');
define('LIB_ROOT', __DIR__ . '/lib');
define('TEMPLATES_ROOT', __DIR__ . '/templates');

//Load
require LIB_ROOT . "/helper.php";
require LIB_ROOT . "/cardGenerator.php";


//Functions
function render_page(string $template, array $vars = []): void
{
    $title = $vars['title'] ?? 'Startseite';
    $content = render($template, $vars);

    require __DIR__ . '/templates/layout/layout.php';
}

function render(string $name, array $vars = []): string
{
    extract($vars);
    
    $path = __DIR__ . '/templates/' . $name . '.php';
    if (!file_exists($path)) {
        http_response_code(404);
        return 'Template nicht gefunden';
    }
     
    ob_start();
    require $path;
    return ob_get_clean();
}
