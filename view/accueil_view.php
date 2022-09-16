<?php include VIEW_PART_DIR.'header.php'?>
    <hr>
    <ul class="listchamp">
        <?php foreach ($datas as $r): ?>
            <li class="title-champ">
                <figure id="<?= $r['id'] ?>">
                    <img src="<?php echo $r['gif']?>" alt="icon" height="362" width="287">
                    <figcaption <?php echo $r['name'].'-'.$r['title']?>>
                        <p class="title-champ"><?php echo $r['name'].'-'.$r['title']?></p>
                    </figcaption>
                </figure>
            </li>
        <?php endforeach; ?>
    </ul>
<?php include VIEW_PART_DIR.'footer.php'?>