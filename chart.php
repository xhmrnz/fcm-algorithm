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

            label: 'Cluster 1',
            pointBackgroundColor: '#f87979',
            data: [{
                x: 0,
                y: 1
            },{
                x: 1,
                y: 0
            },{
                x: 0.45417813986653,
                y: 0.45417813986653
            }, {
                x: 0.46944644595648,
                y: 0.46944644595648
            },{
                x: 0.46123540917257,
                y: 0.46123540917257
            }, {
                x: 0.46900954581026,
                y: 0.46900954581026
            }]
        },
        {
            label: 'Cluster 2',
            pointBackgroundColor: '#a4e0d5',
            data: [{
                x: 1,
                y: 1
            },{
                x: 0,
                y: 0
            },{
                x: 0.59802930682048,
                y: 0.59802930682048
            }, {
                x: 0.55844084692353,
                y: 0.55844084692353
            },{
                x: 0.579409170243,
                y: 0.579409170243
            }, {
                x: 0.62693014207539,
                y: 0.62693014207539
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