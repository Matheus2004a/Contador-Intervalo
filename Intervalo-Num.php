<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Intervalo</title>
    <link rel="stylesheet" href="style-interval.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    $totalNum = array($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5'], $_POST['num6'], $_POST['num7'], $_POST['num8'], $_POST['num9'], $_POST['num10']);

    $contadorInter1 = 0;
    $contadorInter2 = 0;
    $contadorInter3 = 0;
    $contadorInter4 = 0;

    for ($i = 0; $i < count($totalNum); $i++) {
        if ($totalNum[$i] >= 0  && $totalNum[$i] <= 25) {
            $contadorInter1 += 1;
        }
        if ($totalNum[$i] >= 26  && $totalNum[$i] <= 50) {
            $contadorInter2 += 1;
        }
        if ($totalNum[$i] >= 51  && $totalNum[$i] <= 75) {
            $contadorInter3 += 1;
        }
        if ($totalNum[$i] >= 76  && $totalNum[$i] <= 100) {
            $contadorInter4 += 1;
        }
    }
    ?>

    <div class="alert alert-success message-interval-success" role="alert">
        <h4 class="alert-heading">Resultado</h4>
        <?php
        echo "Há $contadorInter1 números entre o intervalo de 0 à 25 <br>";
        echo "Há $contadorInter2 números entre o intervalo de 26 à 50 <br>";
        echo "Há $contadorInter3 números entre o intervalo de 51 à 75 <br>";
        echo "Há $contadorInter4 números entre o intervalo de 76 à 100";
        ?>
    </div>

</body>

</html>