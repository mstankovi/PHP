<?php
$rezultat = "";

if (isset($_POST["broj1"]) && isset($_POST["broj2"]) && isset($_POST["operacija"])) {
    $broj1 = $_POST["broj1"];
    $broj2 = $_POST["broj2"];
    $operacija = $_POST["operacija"];

    switch ($operacija) {
        case "+":
            $rezultat = $broj1 + $broj2;
            break;

        case "-":
            $rezultat = $broj1 - $broj2;
            break;

        case "*":
            $rezultat = $broj1 * $broj2;
            break;

        case "/":
            if ($broj2 != 0) {
                $rezultat = $broj1 / $broj2;
            } else {
                $rezultat = "Dijeljenje s nulom nije dopušteno.";
            }
            break;

        default:
            $rezultat = "Nepoznata operacija.";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vježba 3-2</title>

    <style>
        body {
            font-family: Arial;
            margin: 40px;
        }

        input {
            margin: 8px;
            padding: 5px;
        }

        button {
            padding: 12px 18px;
            margin: 5px;
            font-size: 18px;
        }

        .rezultat {
            margin-top: 20px;
            font-size: 22px;
        }
    </style>
</head>
<body>

    <h2>Kalkulator (Switch naredba)</h2>

    <form method="POST">
        <label><strong>Upiši prvi broj *</strong></label>
        <input type="number" name="broj1" required>
        <br>

        <label><strong>Upiši drugi broj *</strong></label>
        <input type="number" name="broj2" required>
        <br><br>

        <p>Rezultat: <?php echo $rezultat; ?></p>

        <button type="submit" name="operacija" value="+">+</button>
        <button type="submit" name="operacija" value="-">-</button>
        <button type="submit" name="operacija" value="*">*</button>
        <button type="submit" name="operacija" value="/">/</button>
    </form>

</body>
</html>