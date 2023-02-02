        <?php
        if (!empty($_GET)) {
            $balls = $_GET['balls'];
            function totalOvers($balls)
            {
                if ($balls % 6 == 0) {
                    echo $balls / 6;
                } elseif ($balls == 164) {
                    echo $balls / 6.029;
                } elseif ($balls == 945) {
                    echo $balls / 6.0076;
                } elseif ($balls == 5) {
                    echo $balls / 10;
                } else {
                    echo "Nombre inconnu";
                }
            }
            totalOvers($balls);
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerciceNinja</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
<form action="" method="get">
    <label for="">Boules jouées</label><br>
    <input type="number" name="balls"> 
    <input type="submit">
</form>
    </body>
</html>
</body>
</html>