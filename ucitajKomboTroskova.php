<?php

include 'Db.php';

$db = new Db();

$rezultati = $db->vratiSveTroskove();

        foreach ($rezultati as $trosak){


            ?>
            <option value="<?= $trosak->troskoviID ?>"><?= $trosak->kupljeno .  "(".$trosak->mesec . " - " . $trosak->godina .")" ?></option>
    <?php
        }
    ?>

