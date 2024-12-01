<?php

$id = $_SESSION['farmer_id'];
$query = "SELECT AnimalType, COUNT(Livestock_ID) AS cnt FROM livestock 
          WHERE farmer_id = '$id' GROUP BY AnimalType";
$result = mysqli_query($conn, $query);

$count = 0;
$count_per_animal = array();
while ($row = mysqli_fetch_array($result)) {
    $count_per_animal[$count]["label"] = $row["AnimalType"];
    $count_per_animal[$count]["y"] = $row["cnt"];
    $count = $count + 1;
}

?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: "Count"
    },
    axisY: {
        title: "Count of Animals"
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.##",
        dataPoints: <?php echo json_encode($count_per_animal, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>                              