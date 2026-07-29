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
    }
    ;
};
?>