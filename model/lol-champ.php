<?php

//charger champion depuis fichier JSON
function chargerChampion(){
    $t= file_get_contents(MODEL_DIR . 'champions.json');
    $tj = json_decode($t,true);
    return $tj;
}
