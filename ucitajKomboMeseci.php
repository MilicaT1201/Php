<?php

include 'Db.php';

$db = new Db();

$rezultati = $db->vratiMesece();
foreach ($rezultati as $mesec){
 ?>
    <option value="<?= $mesec->id ?>"><?= $mesec->mesec . " - " . $mesec->godina ?></option>
<?php
    }
?>

