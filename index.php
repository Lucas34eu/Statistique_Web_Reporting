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



// 3 tableau pour ces données
$CommandeEXPToday = $fichier[60];
$CommandeEXP1daysAgo = $fichier[61];
$CommandeEXP2daysAgo = $fichier[62];
$CommandeEXP3daysAgo = $fichier[63];
$CommandeEXP4daysAgo = $fichier[64];
$CommandeEXP5daysAgo = $fichier[65];
$CommandeEXP6daysAgo = $fichier[66];
$CommandeEXP7daysAgo = $fichier[67];
$CommandeEXP8daysAgo = $fichier[68];
$CommandeEXP9daysAgo = $fichier[69];

$CommandeEXPPToday = $fichier[70];
$CommandeEXPP1daysAgo = $fichier[71];
$CommandeEXPP2daysAgo = $fichier[72];
$CommandeEXPP3daysAgo = $fichier[73];
$CommandeEXPP4daysAgo = $fichier[74];
$CommandeEXPP5daysAgo = $fichier[75];
$CommandeEXPP6daysAgo = $fichier[76];
$CommandeEXPP7daysAgo = $fichier[77];
$CommandeEXPP8daysAgo = $fichier[78];
$CommandeEXPP9daysAgo = $fichier[79];



$CommandeEXPWeek = $fichier[80];
$CommandeEXP1WeekAgo = $fichier[81];
$CommandeEXP2WeekAgo = $fichier[82];
$CommandeEXP3WeekAgo = $fichier[83];
$CommandeEXP4WeekAgo = $fichier[84];
$CommandeEXP5WeekAgo = $fichier[85];
$CommandeEXP6WeekAgo = $fichier[86];
$CommandeEXP7WeekAgo = $fichier[88];
$CommandeEXP8WeekAgo = $fichier[88];
$CommandeEXP9WeekAgo = $fichier[89];

$CommandeEXPPWeek = $fichier[90];
$CommandeEXPP1WeekAgo = $fichier[91];
$CommandeEXPP2WeekAgo = $fichier[92];
$CommandeEXPP3WeekAgo = $fichier[93];
$CommandeEXPP4WeekAgo = $fichier[94];
$CommandeEXPP5WeekAgo = $fichier[95];
$CommandeEXPP6WeekAgo = $fichier[96];
$CommandeEXPP7WeekAgo = $fichier[97];
$CommandeEXPP8WeekAgo = $fichier[98];
$CommandeEXPP9WeekAgo = $fichier[99];



$CommandeEXPMonth = $fichier[100];
$CommandeEXP1MonthAgo = $fichier[101];
$CommandeEXP2MonthAgo = $fichier[102];
$CommandeEXP3MonthAgo = $fichier[103];
$CommandeEXP4MonthAgo = $fichier[104];
$CommandeEXP5MonthAgo = $fichier[105];
$CommandeEXP6MonthAgo = $fichier[106];
$CommandeEXP7MonthAgo = $fichier[107];
$CommandeEXP8MonthAgo = $fichier[108];
$CommandeEXP9MonthAgo = $fichier[109];

$CommandeEXPPMonth = $fichier[110];
$CommandeEXPP1MonthAgo = $fichier[111];
$CommandeEXPP2MonthAgo = $fichier[112];
$CommandeEXPP3MonthAgo = $fichier[113];
$CommandeEXPP4MonthAgo = $fichier[114];
$CommandeEXPP5MonthAgo = $fichier[115];
$CommandeEXPP6MonthAgo = $fichier[116];
$CommandeEXPP7MonthAgo = $fichier[117];
$CommandeEXPP8MonthAgo = $fichier[118];
$CommandeEXPP9MonthAgo = $fichier[119];



// 3 tableau pour ces données
$AvisToday = $fichier[120];
$Avis1daysAgo = $fichier[121];
$Avis2daysAgo = $fichier[122];
$Avis3daysAgo = $fichier[123];
$Avis4daysAgo = $fichier[124];
$Avis5daysAgo = $fichier[125];
$Avis6daysAgo = $fichier[126];
$Avis7daysAgo = $fichier[127];
$Avis8daysAgo = $fichier[128];
$Avis9daysAgo = $fichier[129];

$AvisWeek = $fichier[130];
$Avis1WeekAgo = $fichier[131];
$Avis2WeekAgo = $fichier[132];
$Avis3WeekAgo = $fichier[133];
$Avis4WeekAgo = $fichier[134];
$Avis5WeekAgo = $fichier[135];
$Avis6WeekAgo = $fichier[136];
$Avis7WeekAgo = $fichier[137];
$Avis8WeekAgo = $fichier[138];
$Avis9WeekAgo = $fichier[139];

$AvisMonth = $fichier[148];
$Avis1MonthAgo = $fichier[141];
$Avis2MonthAgo = $fichier[142];
$Avis3MonthAgo = $fichier[143];
$Avis4MonthAgo = $fichier[144];
$Avis5MonthAgo = $fichier[145];
$Avis6MonthAgo = $fichier[146];
$Avis7MonthAgo = $fichier[147];
$Avis8MonthAgo = $fichier[148];
$Avis9MonthAgo = $fichier[149];


$AvisProduitToday = $fichier[150];
$AvisProduit1daysAgo = $fichier[151];
$AvisProduit2daysAgo = $fichier[152];
$AvisProduit3daysAgo = $fichier[153];
$AvisProduit4daysAgo = $fichier[154];
$AvisProduit5daysAgo = $fichier[155];
$AvisProduit6daysAgo = $fichier[156];
$AvisProduit7daysAgo = $fichier[157];
$AvisProduit8daysAgo = $fichier[158];
$AvisProduit9daysAgo = $fichier[159];

$AvisProduitWeek = $fichier[160];
$AvisProduit1WeekAgo = $fichier[161];
$AvisProduit2WeekAgo = $fichier[162];
$AvisProduit3WeekAgo = $fichier[163];
$AvisProduit4WeekAgo = $fichier[164];
$AvisProduit5WeekAgo = $fichier[165];
$AvisProduit6WeekAgo = $fichier[166];
$AvisProduit7WeekAgo = $fichier[167];
$AvisProduit8WeekAgo = $fichier[168];
$AvisProduit9WeekAgo = $fichier[169];

$AvisProduitMonth = $fichier[170];
$AvisProduit1MonthAgo = $fichier[171];
$AvisProduit2MonthAgo = $fichier[172];
$AvisProduit3MonthAgo = $fichier[173];
$AvisProduit4MonthAgo = $fichier[174];
$AvisProduit5MonthAgo = $fichier[175];
$AvisProduit6MonthAgo = $fichier[176];
$AvisProduit7MonthAgo = $fichier[177];
$AvisProduit8MonthAgo = $fichier[178];
$AvisProduit9MonthAgo = $fichier[179];







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

    <div style="max-width:500px;margin: 0 auto;text-align: center;background-color: rgba(255, 87, 51  , 0.1);">
        <canvas id="myChart4" width="500" height="400"></canvas>
    </div>

    <div style="max-width:500px;margin: 0 auto;text-align: center;background-color: rgba(255, 87, 51  , 0.1);">
        <canvas id="myChart5" width="500" height="400"></canvas>
    </div>

    <div style="max-width:500px;margin: 0 auto;text-align: center;background-color: rgba(255, 87, 51  , 0.1);">
        <canvas id="myChart6" width="500" height="400"></canvas>
    </div>

    <div style="max-width:500px;margin: 0 auto;text-align: center;background-color: rgba(68, 235, 44  , 0.1);">
        <canvas id="myChart7" width="500" height="400"></canvas>
    </div>

    <div style="max-width:500px;margin: 0 auto;text-align: center;background-color: rgba(68, 235, 44  , 0.1);">
        <canvas id="myChart8" width="500" height="400"></canvas>
    </div>

    <div style="max-width:500px;margin: 0 auto;text-align: center;background-color: rgba(68, 235, 44  , 0.1);">
        <canvas id="myChart9" width="500" height="400"></canvas>
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
                        <?= $Commande9daysAgo; ?>,
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
                        <?= $Commande9WeekAgo; ?>,
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
                        <?= $Commande9MonthAgo; ?>,
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

<script>
    /******************************************************  Commande exp et partielle jour  ******************************************************/
    var ctx = document.getElementById('myChart4').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['9 Days Ago','Today -8','Today -7','Today -6','Today -5','Today -4','Today -3','Today -2','Today -1','Today'],
            datasets: [{

                    data: [
                        <?= $CommandeEXP9daysAgo; ?>,
                        <?= $CommandeEXP8daysAgo; ?>,
                        <?= $CommandeEXP7daysAgo; ?>,
                        <?= $CommandeEXP6daysAgo; ?>,
                        <?= $CommandeEXP5daysAgo; ?>,
                        <?= $CommandeEXP4daysAgo; ?>,
                        <?= $CommandeEXP3daysAgo; ?>,
                        <?= $CommandeEXP2daysAgo; ?>,
                        <?= $CommandeEXP1daysAgo; ?>,
                        <?= $CommandeEXPdays; ?>,


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
                    label: "Commande EXPEDIE",
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
                        <?= $CommandeEXPP9daysAgo; ?>,
                        <?= $CommandeEXPP8daysAgo; ?>,
                        <?= $CommandeEXPP7daysAgo; ?>,
                        <?= $CommandeEXPP6daysAgo; ?>,
                        <?= $CommandeEXPP5daysAgo; ?>,
                        <?= $CommandeEXPP4daysAgo; ?>,
                        <?= $CommandeEXPP3daysAgo; ?>,
                        <?= $CommandeEXPP2daysAgo; ?>,
                        <?= $CommandeEXPP1daysAgo; ?>,
                        <?= $CommandeEXPPdays; ?>,

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
                    label: "Commande EXPEDIE PARTIELLE",
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
    /******************************************************  Commande exp et partielle semaine  ******************************************************/
    var ctx = document.getElementById('myChart5').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Week -9','Week -8 ','Week -7','Week -6','Week -5','Week -4','Week -3','Week -2','Week -1','This Week'],
            datasets: [{

                    data: [
                        <?= $CommandeEXP9WeekAgo; ?>,
                        <?= $CommandeEXP8WeekAgo; ?>,
                        <?= $CommandeEXP7WeekAgo; ?>,
                        <?= $CommandeEXP6WeekAgo; ?>,
                        <?= $CommandeEXP5WeekAgo; ?>,
                        <?= $CommandeEXP4WeekAgo; ?>,
                        <?= $CommandeEXP3WeekAgo; ?>,
                        <?= $CommandeEXP2WeekAgo; ?>,
                        <?= $CommandeEXP1WeekAgo; ?>,
                        <?= $CommandeEXPWeek; ?>,


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
                    label: "CommandeEXP",
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
                        <?= $CommandeEXPP9WeekAgo; ?>,
                        <?= $CommandeEXPP8WeekAgo; ?>,
                        <?= $CommandeEXPP7WeekAgo; ?>,
                        <?= $CommandeEXPP6WeekAgo; ?>,
                        <?= $CommandeEXPP5WeekAgo; ?>,
                        <?= $CommandeEXPP4WeekAgo; ?>,
                        <?= $CommandeEXPP3WeekAgo; ?>,
                        <?= $CommandeEXPP2WeekAgo; ?>,
                        <?= $CommandeEXPP1WeekAgo; ?>,
                        <?= $CommandeEXPPWeek; ?>,

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
                    label: "CommandeEXPP",
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
    /******************************************************  Commande exp et partielle  mois  ******************************************************/
    var ctx = document.getElementById('myChart6').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Month -9','Month -8','Month -7','Month -6','Month -5','Month -4','Month -3','Month -2','Month -1','This Month'],
            datasets: [{

                    data: [
                        <?= $CommandeEXP9MonthAgo; ?>,
                        <?= $CommandeEXP8MonthAgo; ?>,
                        <?= $CommandeEXP7MonthAgo; ?>,
                        <?= $CommandeEXP6MonthAgo; ?>,
                        <?= $CommandeEXP5MonthAgo; ?>,
                        <?= $CommandeEXP4MonthAgo; ?>,
                        <?= $CommandeEXP3MonthAgo; ?>,
                        <?= $CommandeEXP2MonthAgo; ?>,
                        <?= $CommandeEXP1MonthAgo; ?>,
                        <?= $CommandeEXPMonth; ?>,


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
                    label: "CommandeEXP",
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
                        <?= $CommandeEXPP9MonthAgo; ?>,
                        <?= $CommandeEXPP8MonthAgo; ?>,
                        <?= $CommandeEXPP7MonthAgo; ?>,
                        <?= $CommandeEXPP6MonthAgo; ?>,
                        <?= $CommandeEXPP5MonthAgo; ?>,
                        <?= $CommandeEXPP4MonthAgo; ?>,
                        <?= $CommandeEXPP3MonthAgo; ?>,
                        <?= $CommandeEXPP2MonthAgo; ?>,
                        <?= $CommandeEXPP1MonthAgo; ?>,
                        <?= $CommandeEXPPMonth; ?>,

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
                    label: "CommandeEXPP",
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
    /******************************************************  Avis produit & boutique jour  ******************************************************/
    var ctx = document.getElementById('myChart7').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['9 Days Ago','Today -8','Today -7','Today -6','Today -5','Today -4','Today -3','Today -2','Today -1','Today'],
            datasets: [{

                    data: [
                        <?= $AvisProduit9daysAgo; ?>,
                        <?= $AvisProduit8daysAgo; ?>,
                        <?= $AvisProduit7daysAgo; ?>,
                        <?= $AvisProduit6daysAgo; ?>,
                        <?= $AvisProduit5daysAgo; ?>,
                        <?= $AvisProduit4daysAgo; ?>,
                        <?= $AvisProduit3daysAgo; ?>,
                        <?= $AvisProduit2daysAgo; ?>,
                        <?= $AvisProduit1daysAgo; ?>,
                        <?= $AvisProduitdays; ?>,


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
                    label: "Avis Produit",
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
                        <?= $Avis9daysAgo; ?>,
                        <?= $Avis8daysAgo; ?>,
                        <?= $Avis7daysAgo; ?>,
                        <?= $Avis6daysAgo; ?>,
                        <?= $Avis5daysAgo; ?>,
                        <?= $Avis4daysAgo; ?>,
                        <?= $Avis3daysAgo; ?>,
                        <?= $Avis2daysAgo; ?>,
                        <?= $Avis1daysAgo; ?>,
                        <?= $Avisdays; ?>,

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
                    label: "Avis Boutique",
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
    /******************************************************  Avis produit & boutique semaine  ******************************************************/
    var ctx = document.getElementById('myChart8').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Week -9','Week -8 ','Week -7','Week -6','Week -5','Week -4','Week -3','Week -2','Week -1','This Week'],
            datasets: [{

                    data: [
                        <?= $AvisProduit9WeekAgo; ?>,
                        <?= $AvisProduit8WeekAgo; ?>,
                        <?= $AvisProduit7WeekAgo; ?>,
                        <?= $AvisProduit6WeekAgo; ?>,
                        <?= $AvisProduit5WeekAgo; ?>,
                        <?= $AvisProduit4WeekAgo; ?>,
                        <?= $AvisProduit3WeekAgo; ?>,
                        <?= $AvisProduit2WeekAgo; ?>,
                        <?= $AvisProduit1WeekAgo; ?>,
                        <?= $AvisProduitWeek; ?>,


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
                    label: "AvisProduit",
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
                        <?= $Avis9WeekAgo; ?>,
                        <?= $Avis8WeekAgo; ?>,
                        <?= $Avis7WeekAgo; ?>,
                        <?= $Avis6WeekAgo; ?>,
                        <?= $Avis5WeekAgo; ?>,
                        <?= $Avis4WeekAgo; ?>,
                        <?= $Avis3WeekAgo; ?>,
                        <?= $Avis2WeekAgo; ?>,
                        <?= $Avis1WeekAgo; ?>,
                        <?= $AvisWeek; ?>,

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
                    label: "Avis",
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
    /******************************************************  Avis produit & boutique mois  ******************************************************/
    var ctx = document.getElementById('myChart9').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Month -9','Month -8','Month -7','Month -6','Month -5','Month -4','Month -3','Month -2','Month -1','This Month'],
            datasets: [{

                    data: [
                        <?= $AvisProduit9MonthAgo; ?>,
                        <?= $AvisProduit8MonthAgo; ?>,
                        <?= $AvisProduit7MonthAgo; ?>,
                        <?= $AvisProduit6MonthAgo; ?>,
                        <?= $AvisProduit5MonthAgo; ?>,
                        <?= $AvisProduit4MonthAgo; ?>,
                        <?= $AvisProduit3MonthAgo; ?>,
                        <?= $AvisProduit2MonthAgo; ?>,
                        <?= $AvisProduit1MonthAgo; ?>,
                        <?= $AvisProduitMonth; ?>,


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
                    label: "AvisProduit",
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
                        <?= $Avis9MonthAgo; ?>,
                        <?= $Avis8MonthAgo; ?>,
                        <?= $Avis7MonthAgo; ?>,
                        <?= $Avis6MonthAgo; ?>,
                        <?= $Avis5MonthAgo; ?>,
                        <?= $Avis4MonthAgo; ?>,
                        <?= $Avis3MonthAgo; ?>,
                        <?= $Avis2MonthAgo; ?>,
                        <?= $Avis1MonthAgo; ?>,
                        <?= $AvisMonth; ?>,

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
                    label: "Avis",
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