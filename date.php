<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo date("Y/m/d");
        echo "<br>";
        echo date("y.m.d");
        echo "<br>";
        echo date("y-m-d");
        echo "<br>";
        echo date("d-m-y");
        echo "<br>";
        echo date("l");
        echo "<br>";
        
        // H: 24 hours, h:12 hours, i: minutes, s: seconds, a: am or pm, A: AM, PM,

        date_default_timezone_set("America/New_York");
        echo date("h:i:sa");

        echo "<br>";

        $d = mktime(11, 14, 54, 4,12, 2023);
        echo date('Y-m-d h:i:sa:l',$d);

        echo "<br>";


        $d= strtotime("10:30pm April 15 2023");
        echo date("Y-m-d h:i:sa:l",$d);

    ?>
    <!-- &copy; 2023-<//?php echo date("Y"); ?> -->
</body>
</html>