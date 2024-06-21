<?php
if (isset($_GET["px"])) {
    $file = file("./../data/pixel.json");
    var_dump($file);
    json_decode($file, true);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>js draw</title>
    <script src="./js/script.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

</body>

</html>