<?php

include 'Db.php';

$db = new Db();

$mesec = trim($_POST['mesec']);
$godina = trim($_POST['godina']);
$sortiranje = trim($_POST['sortiranje']);

$rezultati = $db->pretrazi($mesec, $godina, $sortiranje);

$ukupanTrosak= 0.00;
$mesecnaPrimanja = 0.00;

?>


<table class="table table-hover">
    <thead>
        <tr>
            <th>
                Mesec
            </th>
            <th>
                Godina
            </th>
            <th>
                Kupljeno
            </th>
            <th>
                Cena
            </th>

        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($rezultati as $trosak){

            $ukupanTrosak += $trosak->cena;
            $mesecnaPrimanja = $trosak->ocekivaniPrihod;

            ?>
            <tr>
                <td><?= $trosak->mesec ?></td>
                <td><?= $trosak->godina ?></td>
                <td><?= $trosak->kupljeno ?></td>
                <td><?= $trosak->cena ?></td>
            </tr>
    <?php
        }
    ?>

    </tbody>
    <tfoot>
    <tr>
        <td>Izvod:</td>
        <td>Ocekivana primanja: <?= $mesecnaPrimanja ?></td>
        <td>Potroseno: <?= $ukupanTrosak ?></td>
        <td>Usteda: <?= $mesecnaPrimanja - $ukupanTrosak ?></td>
    </tr>
    </tfoot>
</table>

