<?php
?>
<!DOCTYPE html>
<html lang="tr">
<div class="site-istatistikler">
    <div class="jumbotron">
        <div class="container">
            <br>
            <h2>İstatistikler</h2>
        </div>
    </div>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
              integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
              crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@500&display=swap"
              rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
              integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
              crossorigin="anonymous"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
        <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
        <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
        <script src="https://cdn.anychart.com/releases/v8/themes/pastel.min.js"></script>
        <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
        <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css"
              rel="stylesheet">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            html,
            body,
            #container {
                width: 100%;
                height: 600px;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>

    <body>
    <div class="statistic-main">

        <div class="statistic-platform">
            <div class="statistic-header"><span>
                    <div>Kulüp Seç</div>
                    <div>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02">
                                <option>Hepsini Göster</option>
                                <option value="1">Tiyatro Kulübü</option>
                                <option value="2">Informatix</option>
                                <option value="3">Fotoğrafçılık ve Edebiyat Kulübü</option>
                            </select>
                        </div>
                    </div>
                </span> <span>
                    <div>Dönem Seç</div>
                    <div>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02">
                                <option>Dönem Seç</option>
                                <option value="1">2020-2021</option>
                                <option value="2">2019-2020</option>
                                <option value="3">2018-2019</option>
                                <option value="3">2017-2018</option>
                                <option value="3">2016-2017</option>
                                <option value="3">2015-2016</option>
                            </select>
                        </div>
                    </div>
                </span><span>
                    <div><button type="button" class="btn btn-primary btn-sm">Sonuçları Getir</button></div>
                </span>
            </div>
            <hr>
            <div class="filter-platform">
                <button type="submit" class="btn m-btn--pill   btn-primary" href="#"><strong>Etkinlik
                        Türü</strong></button>

                <button type="submit" class="btn m-btn--pill    btn btn-outline-info"
                        onclick="location.href='istatistikler_1.php'">Etkinlik Sayısı
                </button>


                <button type="submit" class="btn m-btn--pill    btn btn-outline-info"
                        onclick="window.location='...'">Aktif Kulüp Sayısı
                </button>

            </div>
            <hr>
            <div class="tablo-platform">
                <div id="container"></div>
            </div>
        </div>
    </div>

    </body>
    <script>

        anychart.onDocumentReady(function () {
            // set chart theme
            anychart.theme('pastel');
            // create pie chart with passed data
            var chart = anychart.pie([
                ['Mesleki', 6371664],
                ['Kültürel', 7216301],
                ['Sosyal', 1486621]
            ]);

            // set chart title text settings
            chart
                .title('ACME Corp. apparel sales through different retail channels')
                // set chart radius
                .radius('43%')
                // create empty area in pie chart
                .innerRadius('30%');

            // set container id for the chart
            chart.container('container');
            // initiate chart drawing
            chart.draw();
        });

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

</html>

</div>