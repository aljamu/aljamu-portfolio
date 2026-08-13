<?php
function loadJson(string $fileName, bool $asArray = false){
    $content = file_get_contents(DATA_ROOT . "/$fileName.json");
    return json_decode($content, $asArray);
}