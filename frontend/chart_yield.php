<?php

$query = "SELECT CropName, SUM(YieldEstimate) as sum from crops GROUP BY CropName";
$result = mysqli_query($conn, $query);

$count = 0;
$yield_per_month = array();
while ($row = mysqli_fetch_array($result)) {
    $yield_per_month[$count]["label"] = $row["CropName"];
    $yield_per_month[$count]["y"] = $row["sum"];
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
        text: "Expected Crop Yield"
    },
    axisY: {
        title: "Crop Yield (in tonnes)"
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.## tonnes",
        dataPoints: <?php echo json_encode($yield_per_month, JSON_NUMERIC_CHECK); ?>
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