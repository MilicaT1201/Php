<?php

include 'Db.php';

$db = new Db();

$mesec = trim($_POST['mesec']);
$kupljeno = trim($_POST['kupljeno']);
$cena = trim($_POST['cena']);

if($db->unseiTrosak($mesec, $kupljeno, $cena)){
    echo "Uspesno unet trosak";
}else{
    echo "Doslo je do greske";
}