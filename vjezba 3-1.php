<?php
$poruka = "";
$zamisljeniBroj = rand(1, 9);

if (isset($_POST["broj"])) {
    $broj = $_POST["broj"];
    $zamisljeniBroj = $_POST["zamisljeniBroj"];

    if ($broj == $zamisljeniBroj) {
        $poruka = "Pogodak, probaj ponovo!";
        $boja = "green";
    } else {
        $poruka = "Krivo, probaj ponovo!";
        $boja = "red";
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vježba 3-1</title>

    <style>
        body {
            font-family: Arial;
            margin: 40px;
        }

        .poruka {
            display: inline-block;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            margin-top: 15px;
            background: <?php echo isset($boja) ? $boja : "gray"; ?>;
        }
    </style>
</head>
<body>

    <h3>Igra (pogodi broj)</h3>

    <form method="POST">
        <label><strong>Upiši jedan broj od 1 do 9*</strong></label>
        <input type="number" name="broj" min="1" max="9" required>

        <input type="hidden" name="zamisljeniBroj" value="<?php echo $zamisljeniBroj; ?>">

        <br><br>

        <button type="submit">Pošalji</button>
    </form>

    <?php
    if ($poruka != "") {
        echo "<p class='poruka'>$poruka</p>";
        echo "<p>Zamišljeni broj je $zamisljeniBroj</p>";
    }
    ?>

</body>
</html>