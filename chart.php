<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="chartjs/dist/Chart.js"></script>
    <title>Document</title>
    <div class="chart-container" style="position: relative; height:20vh; width:40vw">
    <canvas id="myChart"></canvas>
</div>
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'scatter',
    data: {
        datasets: [{
            label: 'Scatter Dataset',
            pointBackgroundColor: ['yellow','blue','red','green'],
            data: [{
                x: -10,
                y: 0
            }, {
                x: 0,
                y: 10
            }, {
                x: 10,
                y: 5
            }, {
                x: 0,
                y: 10
            }]
        }]
    },
    options: {
        scales: {
            xAxes: [{
                type: 'linear',
                position: 'bottom'
            }]
        }
    }
});
</script>
</head>
<body>
    
</body>
</html>