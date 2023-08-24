<?php


/*
|--------------------------------------------------------------------------
| Callbacks 
|--------------------------------------------------------------------------
|
| Qui andiamo ad effettuare alcuni test per callbacks anche utilizzando
| classi e soluzioni simili a funzioni anonime come in JS. 
| Proviamo anche a utilizzare strutture Fibonacci e Fattoriale
|
*/


function give_link($link){

    return '<a href="pagina.php?parametro=' . urldecode($link) . '">' . $link . '</a>';

}


function mia_callback($oggetto){

    return strlen($oggetto);

}

function change_color($length){

    if ($length <= 3) {
        return "color: red;";
    } elseif  ($length <= 6) {
        return "color: blue;";


    } else {
        return "color: grey;";
    }


}

$elenco = ["php","js","git","node","python","css","html5"];
$dimensione = array_map("mia_callback", $elenco);
print_r($dimensione); 


echo '<ul>';
foreach($elenco as $index => $oggetto) {
    $style = change_color($dimensione[$index]);
    $linked = give_link($link);
    echo '<li style="' . $style . '">' . $linked . '</li>';
}
echo '</ul>';






?>