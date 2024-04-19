<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 1; $i < 201; $i++) {
        if ($i % 2 == 0) {
            echo "<p style = 'color: red';><strong> $i</strong></p>";
        } else {
            echo "<i style = 'color: blue';> $i</i>";
        }
    }
    ?>
</body>

</html>