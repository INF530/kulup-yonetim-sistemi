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
                    <div><button type="button" class="btn btn-secondary ">Sonuçları Getir</button></div>
                </span>
            </div>
            <hr>
            <div class="filter-platform">
                <button type="submit" class="btn m-btn--pill    btn btn-outline-info"
                        onclick="window.location='istatistikler.php'">Etkinlik Türü
                </button>
                <button type="submit" class="btn m-btn--pill    btn btn-outline-info"
                        onclick="window.location='istatistikler_1.php'">Aylara Göre Etkinlik Sayıları
                </button>
                <button type="submit" class="btn m-btn--pill    btn btn-info"><strong>Aktif Kulüp Sayısı</strong>
                </button>
            </div>
            <hr>
            <div class="tablo-platform">
                <div class="alert alert" role="alert">
                    Aktif Kulüp Sayısı: 29
                </div>
                <table id="example-table" class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 2%;"></th>
                        <th style="width: 10%;">Logo</th>
                        <th style="width: 30%;">Kulüp Adı</th>
                        <th style="width: 25%;">Danışman ve Danışman Yardımcısı</th>
                        <th style="width: 25%;">Başkanı</th>
                        <th style="width: 7%;text-align: center;">Üye Sayısı</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td style="text-align: center;"><a href="#"><img class="img-circle" title="Informatix"
                                                                         src="kuluplogolar/1.jpg" height="50"
                                                                         width="50"></a></td>
                        <td><strong><a href="#" id="kulupisim" style="color: BLACK">Informatix</a></strong><br>Lorem
                            ipsum dolor sit amet
                        </td>
                        <td><strong><a href="#" id="danisman" style="color: BLACK">Dr. Öğr. Üyesi Canan
                                    YILDIZ</a></strong></td>
                        <td><strong><a href="#" id="baskan" style="color: BLACK">Deniz Mert Tecimer</a></strong></td>
                        <td style="text-align: center;"><strong>23</strong></td>
                    <tr>
                        <td>2</td>
                        <td style="text-align: center;"><a href="#"><img class="img-circle" title="Taü Gönüllüleri"
                                                                         src="kuluplogolar/gonulluler.jpg" height="50"
                                                                         width="50"></a></td>
                        <td><strong><a href="#" id="kulupisim" style="color: BLACK">Taü Gönüllüleri</a></strong><br>Lorem
                            ipsum dolor sit amet
                        </td>
                        <td><strong><a href="#" id="danisman" style="color: BLACK">Dr. Öğr. Üyesi Neşe ARAL</a></strong>
                        </td>
                        <td><strong><a href="#" id="baskan" style="color: BLACK">Bicem Bülbün</a></strong></td>
                        <td style="text-align: center;"><strong>23</strong></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td style="text-align: center;"><a href="#"><img class="img-circle" title="Lorem ipsum"
                                                                         src="kuluplogolar/probonohukuk.png" height="50"
                                                                         width="50"></a></td>
                        <td><strong><a href="#" id="kulupisim" style="color: BLACK">Pro Bono Hukuk</a></strong><br>Lorem
                            ipsum dolor sit amet
                        </td>
                        <td><strong><a href="#" id="danisman" style="color: BLACK">Dr. Öğr. Üyesi Efe
                                    DIRENİSA</a></strong></td>
                        <td><strong><a href="#" id="baskan" style="color: BLACK">Merve Balta</a></strong></td>
                        <td style="text-align: center;"><strong>23</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </body>

</html>