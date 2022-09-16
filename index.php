<?php
/*
 * Author: Nicolas Charpié
 * Date: 01/06/2022
 */

require './inc/utils.php';
// accès au modèle
require_once MODEL_DIR . 'lol-champ.php';

const URL = 'css/style.css';

//récupére champion
$datas = chargerChampion();

include VIEW_DIR . 'accueil_view.php';

?>

