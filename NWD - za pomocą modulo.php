<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function NWD_modulo($a, $b){
            while($a>0){
                $a%=$b;
                $b-=$a;
            }
        return $b;
    }
    echo NWD_modulo(200, 20);

    ?>
</body>
</html>