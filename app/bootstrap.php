<?php
// app/bootstrap.php ist (in deinem Setup) die Datei, die du als erstes einbindest, 
// damit deine Anwendung für die aktuelle Anfrage “bereit” ist. Sie sorgt dafür, 
// dass alles, was danach gebraucht wird, schon verfügbar ist.

//Requires
require __DIR__ ."/lib/home/cardGenerator.php";

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
