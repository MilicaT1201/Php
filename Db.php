<?php

class Db{
    private $konekcija;

    public function __construct()
    {
        $this->konekcija = new Mysqli('localhost','root','','troskovi');
        $this->konekcija->set_charset("utf8");
    }

    public function unseiMesec($mesec, $godina, $ocekivanaPrimanja)
    {
        return $this->konekcija->query("INSERT INTO mesec VALUES (null,'$mesec',$godina,$ocekivanaPrimanja)");
    }

    public function pretrazi($mesec, $godina, $sortiranje)
    {
        $query = "SELECT * FROM troskovi t join mesec m on m.id = t.mesecID where m.mesec = '$mesec' and m.godina=$godina order by t.cena $sortiranje";

        $rezultujucaTabela = $this->konekcija->query($query);

        $troskovi = [];

        while ($trosak = $rezultujucaTabela->fetch_object()){
            $troskovi[] = $trosak;
        }

        return $troskovi;
    }

    public function vratiMesece()
    {
        $query = "SELECT * FROM  mesec";

        $rezultujucaTabela = $this->konekcija->query($query);

        $meseci = [];

        while ($mesec = $rezultujucaTabela->fetch_object()){
            $meseci[] = $mesec;
        }

        return $meseci;
    }

    public function vratiSveTroskove()
    {
        $query = "SELECT * FROM troskovi t join mesec m on m.id = t.mesecID";

        $rezultujucaTabela = $this->konekcija->query($query);

        $troskovi = [];

        while ($trosak = $rezultujucaTabela->fetch_object()){
            $troskovi[] = $trosak;
        }

        return $troskovi;
    }

    public function unseiTrosak($mesec, $kupljeno, $cena)
    {
        return $this->konekcija->query("INSERT INTO troskovi VALUES (null,'$kupljeno',$cena,$mesec)");
    }

    public function izmeniMesec($mesec, $ukupniPrihod)
    {
        return $this->konekcija->query("UPDATE mesec SET ocekivaniPrihod = $ukupniPrihod WHERE id = $mesec");
    }

    public function obrisiTrosak($trosakID)
    {
        return $this->konekcija->query("DELETE FROM troskovi WHERE troskoviID = $trosakID");
    }
}