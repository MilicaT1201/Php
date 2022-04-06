<?php

include 'Db.php';

$db = new Db();

$trosak = trim($_POST['trosak']);

if($db->obrisiTrosak($trosak)){
    echo "Uspesno obrisan trosak";
}else{
    echo "Doslo je do greske";
}