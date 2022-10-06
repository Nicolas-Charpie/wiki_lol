<?php include VIEW_PART_DIR.'header.php'?>
    <hr>
    <ul class="listchamp">
        <?php foreach ($datas as $r): ?>
            <li class="title-champ" id="<?= $r['id'] ?>">
                <figure class="<?= $r['id'] ?>">
                    <img src="<?php echo $r['icon']?>" alt="icon" height="100" width="100">
                </figure>
                <p class="title-champ"><?php echo $r['name']?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php include VIEW_PART_DIR.'footer.php'?>