<?php
$poruka = "";

if (isset($_POST["kolokvij1"]) && isset($_POST["kolokvij2"])) {
    $ocjene = [
        $_POST["kolokvij1"],
        $_POST["kolokvij2"]
    ];

    if ($ocjene[0] < 1 || $ocjene[0] > 5 || $ocjene[1] < 1 || $ocjene[1] > 5) {
        $poruka = "Ocjena mora biti između 1 i 5.";
    } else {
        $prosjek = ($ocjene[0] + $ocjene[1]) / 2;

        if ($ocjene[0] == 1 || $ocjene[1] == 1) {
            $konacna = 1;
        } else {
            $konacna = round($prosjek);
        }

        $poruka = "Prosjek ocjena je: " . $prosjek . "<br>";
        $poruka .= "Konačna ocjena je: " . $konacna;
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vježba 3-3</title>

    <style>
        body {
            font-family: Arial;
            background: #eeeeee;
            margin: 40px;
        }

        .okvir {
            background: white;
            width: 350px;
            padding: 20px;
            border: 1px solid #cccccc;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }

        button {
            padding: 10px 15px;
            background: #333333;
            color: white;
            border: none;
        }

        .rezultat {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="okvir">
        <h2>Izračun ocjene</h2>

        <form method="POST">
            <label>Ocjena I. kolokvija:</label>
            <input type="number" name="kolokvij1" min="1" max="5" required>

            <label>Ocjena II. kolokvija:</label>
            <input type="number" name="kolokvij2" min="1" max="5" required>

            <button type="submit">Izračunaj</button>
        </form>

        <div class="rezultat">
            <?php echo $poruka; ?>
        </div>
    </div>

</body>
</html>