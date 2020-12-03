<?php
//TODO
?>
<h2>İstatistikler</h2>
<hr class="mt-0">
<html>
<head>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/themes/light_blue.min.js"></script>
    <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
    <style type="text/css"></style>
</head>
<body>
<table>
    <tr>
        <td>
        <th>
            <div id="chart_div" style="width: 500px; height: 500px; "></div>
        </th>
        </td>
        <td>
        <th width="40%">
            <div id="chart2_div" style="width: 500px; height: 500px;"></div>
        </th>
        </td>
    </tr>
    <table>
        <hr class="mt-0">
        <hr class="mt-0">
        <table>
            <tr>
                <td>
                <th
                <div id="chart3_div" style="width: 500px; height: 500px;"></div>
                </th>
                </td>

            </tr>
        </table>


        <script>

            anychart.onDocumentReady(function () {
                // set chart theme
                anychart.theme('lightBlue');
                // create column chart
                var chart = anychart.column();

                // turn on chart animation
                chart.animation(true);

                // set chart title text settings
                chart.title('Aylara Göre Etkinlik Sayısı');

                // create area series with passed data
                var series = chart.column([
                    ['Eylül', '3'],
                    ['Ekim', '3'],
                    ['Kasım', '5'],
                    ['Aralık', '1'],
                    ['Ocak', '0'],
                    ['Şubat', '0'],
                    ['Mart', '0'],
                    ['Nisan', '0'],
                    ['Mayıs', '0'],
                    ['Haziran', '0'],
                    ['Temmuz', '0'],
                    ['Ağustos', '0']
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
                chart.container('chart_div');

                // initiate chart drawing
                chart.draw();
            });
            anychart.onDocumentReady(function () {
                // set chart theme
                anychart.theme('lightBlue');
                // create pie chart with passed data
                var chart = anychart.pie([
                    ['Mesleki', 5],
                    ['Bilimsel', 5],
                    ['Kültürel', 6],
                    ['Sanatsal', 2],
                    ['Sportif', 4],
                    ['Sosyal', 6]
                ]);

                // set chart title text settings
                chart
                    .title('Faaliyet Alanı')
                    // set chart radius
                    .radius('43%')
                    // create empty area in pie chart
                    .innerRadius('30%');

                // set container id for the chart
                chart.container('chart2_div');
                // initiate chart drawing
                chart.draw();

            });

            anychart.onDocumentReady(function () {
                // create data set on our data
                var dataSet = anychart.data.set(getData());

                // map data for the first series, take x from the zero column and value from the first column of data set
                var firstSeriesData = dataSet.mapAs({x: 0, value: 1});

                // map data for the second series, take x from the zero column and value from the second column of data set
                var secondSeriesData = dataSet.mapAs({x: 0, value: 2});

                // map data for the third series, take x from the zero column and value from the third column of data set
                var thirdSeriesData = dataSet.mapAs({x: 0, value: 3});

                // create line chart
                var chart = anychart.line();

                // turn on chart animation
                chart.animation(true);

                // set chart padding
                chart.padding([10, 20, 5, 20]);

                // turn on the crosshair
                chart.crosshair().enabled(true).yLabel(false).yStroke(null);

                // set tooltip mode to point
                chart.tooltip().positionMode('point');

                // set chart title text settings
                chart.title(
                    'Üye Artışı'
                );

                // set yAxis title
                chart.yAxis().title('Üye Sayısı');
                chart.xAxis().labels().padding(5);

                // create first series with mapped data
                var firstSeries = chart.line(firstSeriesData);
                firstSeries.name('Üye');
                firstSeries.hovered().markers().enabled(true).type('circle').size(4);
                firstSeries
                    .tooltip()
                    .position('right')
                    .anchor('left-center')
                    .offsetX(5)
                    .offsetY(5);


                // turn the legend on
                chart.legend().enabled(true).fontSize(13).padding([0, 0, 10, 0]);

                // set container id for the chart
                chart.container('chart3_div');
                // initiate chart drawing
                chart.draw();
            });

            function getData() {
                return [
                    ['Açılış Tarihi:2017-2018', 20],
                    ['2018-2019', 75],
                    ['2019-20120', 70],
                    ['2020-2021', 74]

                ];
            }

        </script>
</body>
</html>