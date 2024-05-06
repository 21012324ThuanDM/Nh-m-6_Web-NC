<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    define("PI", 3.14);
    $r = 10;
    $s = PI * pow($r, 2);
    $p = 2 * PI * $r;
    echo $s, "<br>";
    echo $p;
    ?>
</body>

</html>