<?php
$recenica = "";
$brojRijeci = "";

if (isset($_POST["recenica"])) {
    $recenica = $_POST["recenica"];
    $brojRijeci = str_word_count($recenica);
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vježba 4-3</title>

    <style>
        body {
            font-family: Arial;
            background: #eeeeee;
            margin: 40px;
        }

        .okvir {
            background: white;
            width: 600px;
            padding: 20px;
            border: 1px solid #cccccc;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
        }

        button {
            padding: 8px 12px;
        }

        .rezultat {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="okvir">
        <h2>Zadatak str_word_count</h2>

        <p>Upiši rečenicu i program će prebrojati riječi.</p>

        <form method="POST">
            <label>Ulazni niz:</label>
            <input type="text" name="recenica" value="<?php echo $recenica; ?>" required>

            <button type="submit">Ispiši broj riječi</button>
        </form>

        <?php
        if ($brojRijeci !== "") {
            echo "<div class='rezultat'>";
            echo "Ulazni niz: " . $recenica . "<br>";
            echo "Sadrži " . $brojRijeci . " riječi.";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>