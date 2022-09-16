<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="<?php echo URL ?>">

</head>
<header>
    <div id="search">

        <!-- recherche le champion avec autocompletion -->
            <label for="schchamp"></label>
            <select id="schchamp" name="schchamp" onchange="getComboA(this)">
                <option selected disabled hidden value="0">Champion à choisir</option>
                <?php foreach ($datas as $r): ?>
                    <option value="<?= $r['id'] ?>"><?= $r['name'] ?></option>
                <?php endforeach; ?>
            </select>
    </div>
    <script>
        function getComboA(selectObject) {
            let value = selectObject.value.toLowerCase();
            <!-- se rend à lancre de l'id du champion -->
            //document.location.href="#"+value;

            const liSelect = document.getElementById(value);
            liSelect.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
            liSelect.style.backgroundColor = "#03224C";
            setTimeout(() => {  liSelect.style.backgroundColor = "#000"; }, 1000);
        }
    </script>
</header>
<body>