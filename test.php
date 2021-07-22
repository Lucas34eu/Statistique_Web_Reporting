<link href="style.css" rel="stylesheet">
<?php


$fichier = file("donnees.txt");

foreach ($fichier as $index) {
}

// 3 tableau pour ces données
$InscritToday = $fichier[0];
$Inscrit1daysAgo = $fichier[1];
$Inscrit2daysAgo = $fichier[2];
$Inscrit3daysAgo = $fichier[3];
$Inscrit4daysAgo = $fichier[4];
$Inscrit5daysAgo = $fichier[5];
$Inscrit6daysAgo = $fichier[6];
$Inscrit7daysAgo = $fichier[7];
$Inscrit8daysAgo = $fichier[8];
$Inscrit9daysAgo = $fichier[9];


$InscritWeek = $fichier[10];
$Inscrit1WeekAgo = $fichier[11];
$Inscrit2WeekAgo = $fichier[12];
$Inscrit3WeekAgo = $fichier[13];
$Inscrit4WeekAgo = $fichier[14];
$Inscrit5WeekAgo = $fichier[15];
$Inscrit6WeekAgo = $fichier[16];
$Inscrit7WeekAgo = $fichier[17];
$Inscrit8WeekAgo = $fichier[18];
$Inscrit9WeekAgo = $fichier[19];

$InscritMonth = $fichier[20];
$Inscrit1MonthAgo = $fichier[21];
$Inscrit2MonthAgo = $fichier[22];
$Inscrit3MonthAgo = $fichier[23];
$Inscrit4MonthAgo = $fichier[24];
$Inscrit5MonthAgo = $fichier[25];
$Inscrit6MonthAgo = $fichier[26];
$Inscrit7MonthAgo = $fichier[27];
$Inscrit8MonthAgo = $fichier[28];
$Inscrit9MonthAgo = $fichier[29];


$CommandeToday = $fichier[30];
$Commande1daysAgo = $fichier[31];
$Commande2daysAgo = $fichier[32];
$Commande3daysAgo = $fichier[33];
$Commande4daysAgo = $fichier[34];
$Commande5daysAgo = $fichier[35];
$Commande6daysAgo = $fichier[36];
$Commande7daysAgo = $fichier[37];
$Commande8daysAgo = $fichier[38];
$Commande9daysAgo = $fichier[39];

$CommandeWeek = $fichier[40];
$Commande1WeekAgo = $fichier[41];
$Commande2WeekAgo = $fichier[42];
$Commande3WeekAgo = $fichier[43];
$Commande4WeekAgo = $fichier[44];
$Commande5WeekAgo = $fichier[45];
$Commande6WeekAgo = $fichier[46];
$Commande7WeekAgo = $fichier[47];
$Commande8WeekAgo = $fichier[48];
$Commande9WeekAgo = $fichier[49];

$CommandeMonth = $fichier[50];
$Commande1MonthAgo = $fichier[51];
$Commande2MonthAgo = $fichier[52];
$Commande3MonthAgo = $fichier[53];
$Commande4MonthAgo = $fichier[54];
$Commande5MonthAgo = $fichier[55];
$Commande6MonthAgo = $fichier[56];
$Commande7MonthAgo = $fichier[57];
$Commande8MonthAgo = $fichier[58];
$Commande9MonthAgo = $fichier[59];








?>
<div class="graphiques">

    <div style="width:500px;margin: 0 auto;text-align: center;background-color: rgba(20, 100, 100  , 0.1);">
        <canvas id="myChart" width="500" height="400"></canvas>
    </div>

    <div style="max-width:500px;margin: 0 auto;text-align: center;background-color: rgba(20, 100, 100  , 0.1);">
        <canvas id="myChart2" width="500" height="400"></canvas>
    </div>

    <div style="max-width:500px;margin: 0 auto;text-align: center;background-color: rgba(20, 100, 100  , 0.1);">
        <canvas id="myChart3" width="500" height="400"></canvas>
    </div>





</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
    /******************************************************  Commande et Inscrit jour fait ******************************************************/
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['9 Days Ago', 'Today -8', 'Today -7', 'Today -6', 'Today -5', 'Today -4', 'Today -3', 'Today -2', 'Today -1', 'Today'],
            datasets: [{

                    data: [
                        <?= $Inscrit9daysAgo; ?>,
                        <?= $Inscrit8daysAgo; ?>,
                        <?= $Inscrit7daysAgo; ?>,
                        <?= $Inscrit6daysAgo; ?>,
                        <?= $Inscrit5daysAgo; ?>,
                        <?= $Inscrit4daysAgo; ?>,
                        <?= $Inscrit3daysAgo; ?>,
                        <?= $Inscrit2daysAgo; ?>,
                        <?= $Inscrit1daysAgo; ?>,
                        <?= $InscritToday; ?>,


                    ],


                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',


                    ],
                    label: "Inscrit",
                    borderColor: [

                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132,1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132,1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132,1)',

                    ],
                    borderWidth: 1
                },
                {

                    data: [
                        <?= $Inscrit9daysAgo; ?>,
                        <?= $Commande8daysAgo; ?>,
                        <?= $Commande7daysAgo; ?>,
                        <?= $Commande6daysAgo; ?>,
                        <?= $Commande5daysAgo; ?>,
                        <?= $Commande4daysAgo; ?>,
                        <?= $Commande3daysAgo; ?>,
                        <?= $Commande2daysAgo; ?>,
                        <?= $Commande1daysAgo; ?>,
                        <?= $CommandeToday; ?>,

                    ],


                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',

                    ],
                    label: "Commande",
                    borderColor: [

                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',

                    ],
                    borderWidth: 1
                }
            ],


        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script>
    /******************************************************  Commande et Inscrit Semaine fait ******************************************************/
    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Week -9', 'Week -8', 'Week -7', 'Week -6', 'Week -5', 'Week -4', 'Week -3', 'Week -2', 'Week -1', 'This Week'],
            datasets: [{

                    data: [
                        <?= $Inscrit9WeekAgo; ?>,
                        <?= $Inscrit8WeekAgo; ?>,
                        <?= $Inscrit7WeekAgo; ?>,
                        <?= $Inscrit6WeekAgo; ?>,
                        <?= $Inscrit5WeekAgo; ?>,
                        <?= $Inscrit4WeekAgo; ?>,
                        <?= $Inscrit3WeekAgo; ?>,
                        <?= $Inscrit2WeekAgo; ?>,
                        <?= $Inscrit1WeekAgo; ?>,
                        <?= $InscritWeek; ?>,


                    ],


                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',


                    ],
                    label: "Inscrit",
                    borderColor: [

                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132,1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132,1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132,1)',

                    ],
                    borderWidth: 1
                },
                {

                    data: [
                        <?= $Inscrit9WeekAgo; ?>,
                        <?= $Commande8WeekAgo; ?>,
                        <?= $Commande7WeekAgo; ?>,
                        <?= $Commande6WeekAgo; ?>,
                        <?= $Commande5WeekAgo; ?>,
                        <?= $Commande4WeekAgo; ?>,
                        <?= $Commande3WeekAgo; ?>,
                        <?= $Commande2WeekAgo; ?>,
                        <?= $Commande1WeekAgo; ?>,
                        <?= $CommandeWeek; ?>,

                    ],


                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',

                    ],
                    label: "Commande",
                    borderColor: [

                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',

                    ],
                    borderWidth: 1
                }
            ],


        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script>
    /******************************************************  Commande et Inscrit Mois fait ******************************************************/
    var ctx = document.getElementById('myChart3').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Month -9', 'Month -8', 'Month -7', 'Month -6', 'Month -5', 'Month -4', 'Month -3', 'Month -2', 'Month -1', 'This Month'],
            datasets: [{

                    data: [
                        <?= $Inscrit9MonthAgo; ?>,
                        <?= $Inscrit8MonthAgo; ?>,
                        <?= $Inscrit7MonthAgo; ?>,
                        <?= $Inscrit6MonthAgo; ?>,
                        <?= $Inscrit5MonthAgo; ?>,
                        <?= $Inscrit4MonthAgo; ?>,
                        <?= $Inscrit3MonthAgo; ?>,
                        <?= $Inscrit2MonthAgo; ?>,
                        <?= $Inscrit1MonthAgo; ?>,
                        <?= $InscritMonth; ?>,


                    ],


                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',


                    ],
                    label: "Inscrit",
                    borderColor: [

                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132,1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132,1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 99, 132,1)',

                    ],
                    borderWidth: 1
                },
                {

                    data: [
                        <?= $Inscrit9MonthAgo; ?>,
                        <?= $Commande8MonthAgo; ?>,
                        <?= $Commande7MonthAgo; ?>,
                        <?= $Commande6MonthAgo; ?>,
                        <?= $Commande5MonthAgo; ?>,
                        <?= $Commande4MonthAgo; ?>,
                        <?= $Commande3MonthAgo; ?>,
                        <?= $Commande2MonthAgo; ?>,
                        <?= $Commande1MonthAgo; ?>,
                        <?= $CommandeMonth; ?>,

                    ],


                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',

                    ],
                    label: "Commande",
                    borderColor: [

                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',

                    ],
                    borderWidth: 1
                }
            ],


        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>