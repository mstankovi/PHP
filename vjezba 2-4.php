<?php
$rezultat = "";

if (isset($_POST["a"]) && isset($_POST["b"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];

    $c = (3 * $a - $b) / 2;

    $rezultat = "Vrijednost varijable c je: " . $c;
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vježba 2-4</title>
</head>
<body>

    <h1>Izračun varijable c</h1>

    <p>Formula: <strong>c = (3a - b) / 2</strong></p>

    <form method="POST">
        <label>Vrijednost a:</label>
        <input type="number" name="a" required>
        <br><br>

        <label>Vrijednost b:</label>
        <input type="number" name="b" required>
        <br><br>

        <button type="submit">Pošalji</button>
    </form>

    <p><?php echo $rezultat; ?></p>

</body>
</html>