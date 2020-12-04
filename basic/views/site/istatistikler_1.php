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
        <script src="https://cdn.anychart.com/releases/v8/themes/sea.min.js"></script>
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
                        <div class="input-group">
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
                    <div><button type="button" class="btn btn-light ">Sonuçları Getir</button></div>
                </span>
            </div>
            <hr>
            <div class="filter-platform">
                <button type="submit" class="btn m-btn--pill    btn btn-outline-info"
                        onclick="window.location='istatistikler.php'">Etkinlik Türü
                </button>
                <button type="submit" class="btn m-btn--pill    btn btn-primary"><strong>Aylara Göre Etkinlik
                        Sayıları</strong></button>
                <button type="submit" class="btn m-btn--pill    btn btn-outline-info"
                        onclick="window.location='istatistikler_2.php'">Aktif Kulüp Sayısı
                </button>
            </div>
            <hr>
            <div class="tablo-platform">
                <div class="alert alert-cyan" role="alert">
                    Toplam Kayıt Sayısı: 38
                </div>
                <div id="container"></div>
            </div>
        </div>
    </div>

    </body>
    <script>

        anychart.onDocumentReady(function () {

            // set chart theme
            anychart.theme('sea');
            // create column chart
            var chart = anychart.column();

            // turn on chart animation
            chart.animation(true);

            // set chart title text settings
            chart.title('Aylara Göre Öğrenci Kulüpleri Etkinlik Sayısı(Genel)');

            // create area series with passed data
            var series = chart.column([
                ['Eyl', '0'],
                ['Ekm', '7'],
                ['Kas', '13'],
                ['Ara', '10'],
                ['Oca', '8'],
                ['Şub', '0'],
                ['Mar', '0'],
                ['Nis', '0'],
                ['May', '0']
            ]);

            // set series tooltip settings
            series.tooltip().titleFormat('{%X}');

            series
                .tooltip()
                .position('center-top')
                .anchor('center-bottom')
                .offsetX(0)
                .offsetY(5)
                .format('{%Value}{groupsSeparator: }');

            // set scale minimum
            chart.yScale().minimum(0);

            // set yAxis labels formatter
            chart.yAxis().labels().format('{%Value}{groupsSeparator: }');

            // tooltips position and interactivity settings
            chart.tooltip().positionMode('point');
            chart.interactivity().hoverMode('by-x');

            // axes titles
            chart.xAxis().title('Aylar');
            chart.yAxis().title('Etkinlik Sayısı');

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