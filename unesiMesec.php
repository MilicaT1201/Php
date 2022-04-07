<?php

include 'Db.php';

$db = new Db();

$mesec = trim($_POST['mesec']);
$godina = trim($_POST['godina']);
$ocekivanaPrimanja = trim($_POST['ocekivanaPrimanja']);

if($db->unseiMesec($mesec, $godina, $ocekivanaPrimanja)){
    echo "Uspesno unet mesec";
}else{
    echo "Doslo je do greske";
}