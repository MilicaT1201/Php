<?php

include 'Db.php';

$db = new Db();

$mesec = trim($_POST['mesec']);
$ocekivanaPrimanja = trim($_POST['ocekivanaPrimanja']);

if($db->izmeniMesec($mesec, $ocekivanaPrimanja)){
    echo "Uspesno izmenjen iznos prihoda u mesecu";
}else{
    echo "Doslo je do greske";
}