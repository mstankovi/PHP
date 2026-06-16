<?php
function jeProst($broj) {
    if ($broj <= 1) {
        return false;
    }

    for ($i = 2; $i < $broj; $i++) {
        if ($broj % $i == 0) {
            return false;
        }
    }

    return true;
}

$poruka = "";

if (isset($_POST["broj"])) {
    $broj = $_POST["broj"];

    if (jeProst($broj)) {
        $poruka = "Broj $broj je prost broj.";
    } else {
        $poruka = "Broj $broj nije prost broj.";
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vježba 4-4</title>
</head>
<body>

    <h2>Provjera prostog broja</h2>

    <form method="POST">
        <label>Upiši broj:</label>
        <input type="number" name="broj" required>

        <button type="submit">Provjeri</button>
    </form>

    <p><?php echo $poruka; ?></p>

    <h3>Prosti brojevi manji od 100:</h3>

    <p>
        <?php
        for ($i = 2; $i < 100; $i++) {
            if (jeProst($i)) {
                echo $i . " ";
            }
        }
        ?>
    </p>

</body>
</html>
