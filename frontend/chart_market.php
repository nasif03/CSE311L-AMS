<?php

$id = $_SESSION['farmer_id'];
$query = "SELECT ItemName, Price FROM marketplace";
$result = mysqli_query($conn, $query);

$count = 0;
$item_price = array();
while ($row = mysqli_fetch_array($result)) {
    $item_price[$count]["label"] = $row["ItemName"];
    $item_price[$count]["y"] = $row["Price"];
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
        text: "Market Price"
    },
    axisY: {
        title: "Price in $"
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.## $",
        dataPoints: <?php echo json_encode($item_price, JSON_NUMERIC_CHECK); ?>
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