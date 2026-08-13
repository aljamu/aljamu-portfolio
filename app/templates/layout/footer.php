<?php
/**
 * @var string $title
 */

$goto = "<a href='/impressum.php'>Impressum</a>";
if($title == "Impressum"){
    $goto = "<a href='/index.php'>Zur Startseite</a>";
}
echo $goto . "<p>Copyright &copy; 2026-" . date("Y") . " Alexander Jannes Müller-Uri</p>";
?>