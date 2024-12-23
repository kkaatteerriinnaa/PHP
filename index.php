<?php
$title = "Bread";
$price = 20;
echo "<b>Title:$title</b>, <br/> Price:$price";
if($price>10){
    echo "<h2>Ціна мандарин більше $price</h2>";
}
switch($price){
    case 30:
        echo "<h2>Ціна мандарин 30</h2>";
    case 20:
        echo "<h2>Ціна мандарин 20</h2>";
    case 10:
        echo "<h2>Ціна мандарин 10</h2>";
}

define("PI", 3.14);
echo "<div>" . PI . "</div>";
