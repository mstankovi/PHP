<?php
$naslov = "PHP dokument — vježba 1d";
$autor = "Mia Stanković";
$opis = "Ova stranica prikazuje formu, odabir teme i sliku prema GET parametrima.";

$tema = isset($_GET["tema"]) ? $_GET["tema"] : "dark";
$slika = isset($_GET["slika"]) ? $_GET["slika"] : "php";
$prikaziOpis = isset($_GET["opis"]);

if ($tema != "dark" && $tema != "light") {
    $tema = "dark";
}

if ($slika != "php" && $slika != "server" && $slika != "code") {
    $slika = "php";
}

$slike = [
    "php" => "php.png",
    "server" => "server.png",
    "code" => "code.png"
];

$odabranaSlika = $slike[$slika];
$linkNatrag = "vjezba1c.php";
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vježba 1d</title>

    <style>
        :root {
            --pozadina: <?php echo $tema == "dark" ? "#111827" : "gold"; ?>;
            --kartica: <?php echo $tema == "dark" ? "#1f2937" : "darkred"; ?>;
            --tekst: <?php echo $tema == "dark" ? "white" : "white"; ?>;
            --muted: grey;
            --accent: yellow;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-size: 16px;
            font-family: Georgia;
            background: var(--pozadina);
            color: var(--tekst);
        }

        .wrap {
            max-width: 720px;
            margin: 48px auto;
            background: var(--kartica);
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 10px 30px black;
        }

        h1 {
            margin: 0 0 15px;
            font-size: 2rem;
        }

        p {
            margin: 0 0 15px;
            line-height: 1.6;
        }

        img {
            max-width: 180px;
            display: block;
            margin: 20px 0;
            border-radius: 12px;
        }

        form {
            margin-top: 20px;
            padding: 16px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
        }

        label {
            display: block;
            margin-top: 12px;
        }

        select {
            padding: 8px;
            border-radius: 8px;
            margin-top: 6px;
        }

        .btn {
            display: inline-block;
            background: gold;
            color: black;
            padding: 10px 16px;
            border: 1px solid var(--accent);
            border-radius: 10px;
            text-decoration: underline;
            margin-top: 15px;
            cursor: pointer;
        }

        .btn:hover {
            background: var(--accent);
            color: green;
        }

        .row {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: var(--muted);
        }
    </style>
</head>

<body>
    <main class="wrap">
        <h1><?php echo $naslov; ?></h1>

        <p>Ovu stranicu je izradila <strong><?php echo $autor; ?></strong>.</p>

        <img src="<?php echo $odabranaSlika; ?>" alt="Odabrana slika">

        <?php
        if ($prikaziOpis) {
            echo "<p>$opis</p>";
        }
        ?>

        <form method="GET">
            <label>
                Odaberi temu:
                <br>
                <input type="radio" name="tema" value="dark" <?php if ($tema == "dark") echo "checked"; ?>>
                Dark

                <input type="radio" name="tema" value="light" <?php if ($tema == "light") echo "checked"; ?>>
                Light
            </label>

            <label>
                Odaberi sliku:
                <br>
                <select name="slika">
                    <option value="php" <?php if ($slika == "php") echo "selected"; ?>>PHP</option>
                    <option value="server" <?php if ($slika == "server") echo "selected"; ?>>Server</option>
                    <option value="code" <?php if ($slika == "code") echo "selected"; ?>>Code</option>
                </select>
            </label>

            <label>
                <input type="checkbox" name="opis" <?php if ($prikaziOpis) echo "checked"; ?>>
                Prikaži opis
            </label>

            <button class="btn" type="submit">Primijeni odabir</button>
        </form>

        <div class="row">
            <a class="btn" href="<?php echo $linkNatrag; ?>">Natrag na vježbu 1c</a>
        </div>

        <footer>&copy; <?php echo date("Y"); ?> — Demo za PHP</footer>
    </main>
</body>
</html>

<!-- Naziv datoteke: vjezba1d.php -->
