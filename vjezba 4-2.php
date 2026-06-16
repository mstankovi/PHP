<?php
date_default_timezone_set("Europe/Zagreb");

$dan = date("N");   // 1 = ponedjeljak, 6 = subota, 7 = nedjelja
$sat = date("G");   // sat bez vodeće nule, npr. 8, 14, 20
$datum = date("d.m.");
$vrijeme = date("H:i");

$praznici = [
    "01.01.",
    "06.01.",
    "01.05.",
    "30.05.",
    "22.06.",
    "05.08.",
    "15.08.",
    "01.11.",
    "18.11.",
    "25.12.",
    "26.12."
];

if (in_array($datum, $praznici)) {
    $poruka = "Dućan je zatvoren jer je državni praznik ili blagdan.";
} else if ($dan == 7) {
    $poruka = "Danas je nedjelja. Dućan je zatvoren.";
} else if ($dan == 6) {
    if ($sat >= 9 && $sat < 14) {
        $poruka = "Danas je subota. Dućan je otvoren.";
    } else {
        $poruka = "Danas je subota. Dućan je zatvoren.";
    }
} else {
    if ($sat >= 8 && $sat < 20) {
        $poruka = "Dućan je trenutno otvoren.";
    } else {
        $poruka = "Dućan je trenutno zatvoren.";
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vježba 4-2</title>

    <style>
        body {
            font-family: Arial;
            background: #eeeeee;
            margin: 40px;
        }

        .okvir {
            background: white;
            width: 400px;
            padding: 20px;
            border: 1px solid #cccccc;
        }

        .poruka {
            font-size: 20px;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <div class="okvir">
        <h2>Radno vrijeme dućana</h2>

        <p>Trenutno vrijeme: <strong><?php echo $vrijeme; ?></strong></p>
        <p><?php echo $poruka; ?></p>

        <hr>

        <p>Radnim danom: 8 - 20</p>
        <p>Subotom: 9 - 14</p>
        <p>Nedjeljom: zatvoreno</p>
    </div>

</body>
</html>