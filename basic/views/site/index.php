<?php

/* @var $this yii\web\View */


$this->title = 'TAÜ KULÜP YONETİM SİSTEMİ';

?>


<div class="site-index">
    <div class="container mt-5">


        <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
                  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
                  crossorigin="anonymous">

            <title>deneme</title>
        </head>
        <body>
        <style>
            .carousel-item {
                height: 32rem;
                background: #777;
                color: cyan;
                position: relative;
            }

            .container {
                position: relative;
                bottom: 0;
                left: 0;
                right: 0;
            }

            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="https://www.hediyesepeti.com/blog/wp-content/uploads/2016/10/atat%C3%BCrk-ve-%C3%B6%C4%9Fretmenler-g%C3%BCn%C3%BC.jpg"
                         class="d-block w-100" alt="...">


                </div>
                <div class="carousel-item">
                    <img src="data:image/jpeg;base64,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"
                         class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5J2lWzHPys1t3guA75xrXLG3_Tr9chq-C-A&usqp=CAU"
                         class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr class="featurette-divider">

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                crossorigin="anonymous"></script>

        <!-- Marketing messaging and featurettes
         ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->


        <?php

        /* @var $this yii\web\View */


        $this->title = 'TAÜ KULÜP YONETİM SİSTEMİ';
        //Default Yii2 index page
        ?>


        <div class="site-index">
            <div class="container mt-5">

                <!-- <div class="col-xl-4">
                                                    begin:: Widgets/Daily Sales-->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="m-widget14">

                            <!--begin:: Widgets/Audit Log-->
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_widget4_tab1_content">
                                    <div class="m-scrollable">
                                        <div class="m-list-timeline m-list-timeline--skin-light">
                                            <div class="m-list-timeline__items">
                                                <h3 class="m-widget14__title">
                                                    <strong> Haber/Duyuru </strong>
                                                </h3>
                                                <div class="alert alert-success">
                                                    <strong>Koyu Renkli Yazı</strong> İSTEDİĞİNİZ DUYURU
                                                </div>

                                                <div class="alert alert-info">
                                                    <strong>Koyu Renkli Yazı</strong> İSTEDİĞİNİZ DUYURU
                                                </div>


                                                <div class="alert alert-warning">
                                                    <strong>Koyu Renkli Yazı</strong>İSTEDİĞİNİZ DUYURU
                                                </div>

                                                <div class="alert alert-dark">
                                                    <strong>Koyu Renkli Yazı</strong> İSTEDİĞİNİZ DUYURU
                                                </div>

                                                <div class="alert alert-danger">
                                                    <strong>Koyu Renkli Yazı</strong> İSTEDİĞİNİZ DUYURU
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">

                        <!DOCTYPE HTML>
                        <html>
                        <head>
                            <script>
                                window.onload = function () {

                                    var chart = new CanvasJS.Chart("chartContainer", {
                                        animationEnabled: true,
                                        title: {
                                            text: "Kulüp İstatistikleri",
                                            horizontalAlign: "center"
                                        },
                                        data: [{
                                            type: "doughnut",
                                            startAngle: 60,
                                            //innerRadius: 60,
                                            indexLabelFontSize: 17,
                                            indexLabel: "{label} - #percent%",
                                            toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                                            dataPoints: [
                                                {y: 6, label: "Sosyal"},
                                                {y: 2, label: "Archives"},
                                                {y: 1, label: "Labels"},

                                            ]
                                        }]
                                    });
                                    chart.render();

                                }
                            </script>
                        </head>
                        <body>
                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                        </body>
                        </html>

                        <!--end:: Widgets/Profit Share-->
                    </div>
                    <div class="col-sm-4">
                        <h3 class="m-widget14__title">
                            <strong> ETKİNLİK TAKVİMİ </strong>
                        </h3>
                        <?php
                        $aylar = array("Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık");
                        if (!isset($_REQUEST["ay"])) $_REQUEST["ay"] = date("n");
                        if (!isset($_REQUEST["yil"])) $_REQUEST["yil"] = date("Y");
                        $ay = $_REQUEST["ay"];
                        $yil = $_REQUEST["yil"];
                        $onceki_yil = $yil;
                        $sonraki_yil = $yil;
                        $onceki_ay = $ay - 1;
                        $sonraki_ay = $ay + 1;
                        if ($onceki_ay == 0) {
                            $onceki_ay = 12;
                            $onceki_yil = $yil - 1;
                        }
                        if ($sonraki_ay == 13) {
                            $sonraki_ay = 1;
                            $sonraki_yil = $yil + 1;
                        }
                        ?>
                        <table width="300">
                            <tr>
                                <td align="center">
                                    <table width="100%" border="0" cellpadding="2" cellspacing="2">
                                        <tr align="center">
                                            <td colspan="7" bgcolor="#999999">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td width="20%" align="left">&nbsp;&nbsp;<a
                                                                    href="<?php echo $_SERVER["PHP_SELF"] . "?ay=" . $onceki_ay . "&yil=" . $onceki_yil; ?>"
                                                                    style="color:#FFFFFF"><<</a></a></a></td>
                                                        <td align="center" style="color:#FFFFFF">
                                                            <strong><?php echo $aylar[$ay - 1] . ' ' . $yil; ?></strong>
                                                        </td>
                                                        <td width="20%" align="right"><a
                                                                    href="<?php echo $_SERVER["PHP_SELF"] . "?ay=" . $sonraki_ay . "&yil=" . $sonraki_yil; ?>"
                                                                    style="color:#FFFFFF">>></a>&nbsp;&nbsp;
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" bgcolor="#999999" style="color:#FFFFFF">
                                                <strong>Pa</strong></td>
                                            <td align="center" bgcolor="#999999" style="color:#FFFFFF">
                                                <strong>Pt</strong></td>
                                            <td align="center" bgcolor="#999999" style="color:#FFFFFF">
                                                <strong>Sa</strong></td>
                                            <td align="center" bgcolor="#999999" style="color:#FFFFFF">
                                                <strong>Ça</strong></td>
                                            <td align="center" bgcolor="#999999" style="color:#FFFFFF">
                                                <strong>Pe</strong></td>
                                            <td align="center" bgcolor="#999999" style="color:#FFFFFF">
                                                <strong>Cu</strong></td>
                                            <td align="center" bgcolor="#999999" style="color:#FFFFFF">
                                                <strong>Ct</strong></td>
                                        </tr>
                                        <?php
                                        $zaman = mktime(0, 0, 0, $ay, 1, $yil);
                                        $maxgun = date("t", $zaman);
                                        $buay = getdate($zaman);
                                        $ilkgun = $buay['wday'];

                                        for ($i = 0; $i < ($maxgun + $ilkgun); $i++) {
                                            if (($i % 7) == 0) echo "<tr>\n";
                                            if ($i < $ilkgun) echo "<td style=\"color:#FFFFFF\"></td>\n";
                                            else echo "<td align='center' valign='middle' height='20px' style=\"color:#000\">" . ($i - $ilkgun + 1) . "</td>\n";
                                            if (($i % 7) == 6) echo "</tr>\n";
                                        }
                                        ?>
                                    </table>
                                </td>
                            </tr>
                        </table>


                    </div>
                </div>
            </div>
            <!-- START THE FEATURETTES -->


            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->

        <main role="main">
            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <img src="https://lh6.googleusercontent.com/sdbt6Z1SGIb1K7mp_CQpo8Sc_d04Gsusj8x7zp2p7caYyHt3hCNoDC5970XAohtglX8XpRiPToAffXEIDSHHj5F-sWD3yHV3lhEhPBkMygSk5zXGjI0=w1280"
                                         alt="" class="img-fluid">
                                    <p class="card-text">İŞTE BU YÜZYILIN EN BÜYÜK BULUŞMASI.Arda Turan Tuğba Öğünçmert
                                        kavuşmasından görüntüler. keşke shop bileydim ne güzel yaparıdım şimdi neyse to
                                        do//arda-tugba fotosu dhfngfddfg</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted"> </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <img src="https://lh5.googleusercontent.com/Gpl9xH44mX__LwOZMnXCVbvQ7QIAuI3d4AZsFXNCawg-wxu3AnctQsxnqBs1e6euLr2_Iw"
                                         alt="" class="img-fluid">
                                    <p class="card-text"> İngiltere Kraliçesiyle 5 Çayı</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted"> </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="https://lh6.googleusercontent.com/4AVlZgAQH6MyFLaftIfXQHQA-fUGwHPHu4wII_NXtYaCebIhVStXHrYoI8Ko4kj6wu4pIw"
                                     alt="" class="img-fluid">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted"> </small>
                                    </div>
                                </div>
                            </div>
                        </div>


        </main>
        </body>
        </html>