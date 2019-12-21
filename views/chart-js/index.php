<?php
	$this->title = 'My first chart';

$script = <<< JS
	var speedCanvas = document.getElementById("speedChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var dataFirst = {
    label: "Car A - Speed (mph)",
    data: [0, 59, 98, 28, 20, 55, 46],
    lineTension: 0,
    fill: false,
    borderColor: 'red'
  };

var dataSecond = {
    label: "Car B - Speed (mph)",
    data: [30, 15, 74, 60, 5, 30, 10],
    lineTension: 0,
    fill: false,
  borderColor: 'blue'
  };

var speedData = {
  labels: ["0s", "5s", "95s", "77s", "90s", "33s", "66s"],
  datasets: [dataFirst, dataSecond]
};

var chartOptions = {
  legend: {
    display: true,
    position: 'top',
    labels: {
      boxWidth: 80,
      fontColor: 'black'
    }
  }
};

var lineChart = new Chart(speedCanvas, {
  type: 'line',
  data: speedData,
  options: chartOptions
});

JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>

</div id= "my-chart">
	<h1><?= $this->title ?></h1>

	<canvas id="speedChart" width="600" height="400"></canvas>


</div>