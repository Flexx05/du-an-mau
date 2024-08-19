<!DOCTYPE html>
<html lang="en-US">

<body>

    <h1>Thống kê hàng hóa</h1>

    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    // Load google charts
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Loại', 'Số Lượng'],
            <?php
                foreach ($thongke_hh as $hh) {
                    echo "['$hh->ten_loai', $hh->so_luong],";
                }
            ?>
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {
            'title': 'Bảng thống kê',
            'width': 550,
            'height': 400
        };

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
    </script>

</body>

</html>