<?php
function cardGenerator(string $name) : void
{
    $data = loadJson($name);
    foreach($data as $d){
        $filepath = "assets/img/" . $d->img_path;
        echo
        "<div id='$d->id' class='portfolio-card'>
            <img src='$filepath' alt='$d->name'>
            <div style='display: flex; justify-content: space-between; margin-top:34px;'>
                <div>
                    <h3>" . ucwords($d->name) . "</h3>
                    <h4>" . ucwords($d->tag) . "</h4>
                </div>
                <i class='fa fa-arrows-alt' aria-hidden='true'></i>
            </div>
            <p class='description hidden_value'>$d->description</p>
            <p class='additional_info hidden_value'>$d->additional_info</p>
            <p class='link hidden_value'>$d->link</p>
        </div>";
    }
};