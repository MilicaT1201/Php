<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Vodjenje troskova</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Moji troskovi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#!">Svi troskovi kroz godine</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="scroll" style="padding-top: 40px">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Mesec i godina</h2>
                            <p>Unesi mesec i godinu, kao i ocekivana primanja</p>
                            <p id="mesecRezultat"></p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="p-5">
                            <label for="mesec">Mesec</label>
                            <select id="mesec" class="form-control">
                                <option value="Januar">Januar</option>
                                <option value="Februar">Februar</option>
                                <option value="Mart">Mart</option>
                                <option value="April">April</option>
                                <option value="Maj">Maj</option>
                                <option value="Jun">Jun</option>
                                <option value="Jul">Jul</option>
                                <option value="Avgust">Avgust</option>
                                <option value="Septembar">Septembar</option>
                                <option value="Oktobar">Oktobar</option>
                                <option value="Novembar">Novembar</option>
                                <option value="Decembar">Decembar</option>
                            </select>
                            <label for="godina">Godina</label>
                            <select id="godina" class="form-control">
                                <?php
                                    for ($i = 1980; $i < 2035; $i++){
                                        ?>
                                    <option value="<?= $i ?>" <?= $i== 2022 ? "selected='true''" : ''; ?> ><?= $i; ?> </option>
                                <?php
                                    }

                                ?>
                            </select>
                            <label for="ocekivanaPrimanja">Ocekivana primanja</label>
                            <input type="number" id="ocekivanaPrimanja" class="form-control">
                            <hr>
                            <button id="dugme" onclick="unesiMesec()" class="btn btn-primary">Unesi mesec</button>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section id="scroll" style="padding-top: 40px">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-md-3">
                        <label for="mesecPretraga">
                            Mesec
                        </label>
                        <select class="form-control" id="mesecPretraga">
                            <option value="Januar">Januar</option>
                            <option value="Februar">Februar</option>
                            <option value="Mart">Mart</option>
                            <option value="April">April</option>
                            <option value="Maj">Maj</option>
                            <option value="Jun">Jun</option>
                            <option value="Jul">Jul</option>
                            <option value="Avgust">Avgust</option>
                            <option value="Septembar">Septembar</option>
                            <option value="Oktobar">Oktobar</option>
                            <option value="Novembar">Novembar</option>
                            <option value="Decembar">Decembar</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="godinaPretraga">Godina</label>
                        <select id="godinaPretraga" class="form-control">
                            <?php
                            for ($i = 1980; $i < 2035; $i++){
                                ?>
                                <option value="<?= $i ?>" <?= $i== 2022 ? "selected='true''" : ''; ?> ><?= $i; ?> </option>
                                <?php
                            }

                            ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="sortiranje">Sortiranje</label>
                        <select class="form-control" id="sortiranje">
                            <option value="asc">Rastuce</option>
                            <option value="desc">Opadajuce</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="dugme">Pretrazi</label>
                        <button id="dugme" class="form-control btn-primary" onclick="pretrazi()">Pretrazi</button>
                    </div>


                    <div id="rezultatPretrage" class="col-md-12">

                    </div>
                </div>
            </div>
        </section>

        <section id="scroll" style="padding-top: 40px">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-md-12">
                        <h3 id="poruka"></h3>
                    </div>
                    <div class="col-md-4">
                        <h2>Forma za unos</h2>
                        <label for="mesecUnos">Mesec</label>
                        <select id="mesecUnos" class="form-control">

                        </select>
                        <label for="kupljeno">Kupljeno</label>
                        <textarea id="kupljeno" rows="5" class="form-control">

                        </textarea>
                        <label for="cena" >Cena</label>
                        <input type="number" class="form-control" id="cena">
                        <hr>
                        <button class="btn btn-primary" onclick="unesiTrosak()">Unesi trosak</button>
                    </div>
                    <div class="col-md-4">
                        <h2>Forma za izmenu mesecnih primanja</h2>
                        <label for="mesecIzmena">Mesec</label>
                        <select id="mesecIzmena" class="form-control">

                        </select>

                        <label for="primanja" >Cena</label>
                        <input type="number" class="form-control" id="primanja">
                        <hr>
                        <button class="btn btn-primary" onclick="izmeniMesec()">Izmeni primanja</button>
                    </div>

                    <div class="col-md-4">
                        <h2>Forma za brisanje troskova</h2>
                        <label for="trosakBrisanje">Trosak</label>
                        <select id="trosakBrisanje" class="form-control">

                        </select>
                        <hr>
                        <button class="btn btn-primary" onclick="obrisiTrosak()">Obrisi trosak</button>
                    </div>

                </div>
            </div>
        </section>

        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Troskovi 2021</p></div>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/scripts.js"></script>


        <script>
            function unesiMesec() {
                let mesec = $("#mesec").val();
                let godina = $("#godina").val();
                let ocekivanaPrimanja = $("#ocekivanaPrimanja").val();

                $.ajax({
                    url: 'unesiMesec.php',
                    type: 'post',
                    data: {
                        mesec : mesec,
                        godina : godina,
                        ocekivanaPrimanja : ocekivanaPrimanja
                    },
                    success: function (data) {
                        $("#mesecRezultat").html(data);
                        ucitajKomboMeseci();
                    }
                });
            }

            function pretrazi() {
                let mesec = $("#mesecPretraga").val();
                let godina = $("#godinaPretraga").val();
                let sortiranje = $("#sortiranje").val();

                $.ajax({
                    url: 'pretrazi.php',
                    type: 'post',
                    data: {
                        mesec : mesec,
                        godina : godina,
                        sortiranje : sortiranje
                    },
                    success: function (data) {
                        $("#rezultatPretrage").html(data);
                    }
                });
            }
            pretrazi();

            function ucitajKomboMeseci() {

                $.ajax({
                    url: 'ucitajKomboMeseci.php',
                    success: function (data) {
                        $("#mesecIzmena").html(data);
                        $("#mesecUnos").html(data);
                    }
                });
            }

            function ucitajKomboTroskova() {

                $.ajax({
                    url: 'ucitajKomboTroskova.php',
                    success: function (data) {
                        $("#trosakBrisanje").html(data);
                    }
                });
            }

            ucitajKomboMeseci();
            ucitajKomboTroskova();

            function unesiTrosak() {
                let mesec = $("#mesecUnos").val();
                let cena = $("#cena").val();
                let kupljeno = $("#kupljeno").val();

                $.ajax({
                    url: 'unesiTrosak.php',
                    type: 'post',
                    data: {
                        mesec : mesec,
                        cena : cena,
                        kupljeno : kupljeno
                    },
                    success: function (data) {
                        $("#poruka").html(data);
                        pretrazi();
                        ucitajKomboTroskova();
                    }
                });
            }

            function izmeniMesec() {
                let mesec = $("#mesecIzmena").val();
                let ocekivanaPrimanja = $("#primanja").val();

                $.ajax({
                    url: 'izmeniMesec.php',
                    type: 'post',
                    data: {
                        mesec : mesec,
                        ocekivanaPrimanja : ocekivanaPrimanja
                    },
                    success: function (data) {
                        $("#poruka").html(data);
                        ucitajKomboMeseci();
                        pretrazi();
                    }
                });
            }

            function obrisiTrosak() {
                let trosak = $("#trosakBrisanje").val();

                $.ajax({
                    url: 'obrisiTrosak.php',
                    type: 'post',
                    data: {
                        trosak : trosak,
                    },
                    success: function (data) {
                        $("#poruka").html(data);
                        pretrazi();
                        ucitajKomboTroskova();
                    }
                });
            }

        </script>
    </body>
</html>
