<?php
function cardGenerator($data)
{
    foreach ($data as $key => $val) {
        $filepath = "img/" . $val;
        echo
        "<div class=\"portfolio-card\">
            <img src='$filepath' alt='$key'>
            <h3>" . ucwords($key) . "</h3>
            <h4>Tag</h4>
            </div>";
    };
};

function cardGeneratorFull(object $data)
{
    foreach($data as $d){
        $filepath = "img/" . $d->img_path;
        echo
        "<div id='$d->id' class='portfolio-card'>
            <img src='$filepath' alt='$d->name'>
            <h3>" . ucwords($d->name) . "</h3>
            <h4>" . ucwords($d->tag) . "</h4>
            <p class='description hidden_value'>$d->description</p>
            <p class='link hidden_value'>$d->link</p>
            </div>
        ";
    }
};

#$("#brz .p_hidden").text() for hidden p text