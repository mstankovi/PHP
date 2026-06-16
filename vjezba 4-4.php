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
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vježba 4-4</title>
</head>
<body>

    <h2>Prosti brojevi manji od 100</h2>

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