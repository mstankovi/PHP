<?php
$conn = mysqli_connect("localhost", "root", "", "vjezba14");

if (!$conn) {
    die("Greška pri spajanju na bazu: " . mysqli_connect_error());
}

/* UPDATE korisnika */
if (isset($_POST['spremi'])) {
    $id = $_POST['id'];
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $country_id = $_POST['country_id'];

    $query = "UPDATE users 
              SET ime = ?, prezime = ?, country_id = ?
              WHERE id = ?";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssii", $ime, $prezime, $country_id, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo "<p>Korisnik je uspješno ažuriran.</p>";
}

/* Dohvati sve države */
$countries_query = "SELECT id, name FROM countries ORDER BY name ASC";
$countries_result = mysqli_query($conn, $countries_query);

$countries = [];

while ($country = mysqli_fetch_array($countries_result)) {
    $countries[] = $country;
}

/* Dohvati korisnike s državama */
$query = "
    SELECT users.id, users.ime, users.prezime, users.country_id, countries.name AS country
    FROM users
    LEFT JOIN countries ON users.country_id = countries.id
    ORDER BY users.id ASC
";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vježba 18</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        .korisnik {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 15px;
            width: 450px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<h2>Lista korisnika</h2>

<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
?>

<div class="korisnik">
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label>Ime:</label>
        <input type="text" name="ime" value="<?php echo $row['ime']; ?>" required>

        <label>Prezime:</label>
        <input type="text" name="prezime" value="<?php echo $row['prezime']; ?>" required>

        <label>Država:</label>
        <select name="country_id" required>
            <?php
            foreach ($countries as $country) {
                $selected = "";

                if ($country['id'] == $row['country_id']) {
                    $selected = "selected";
                }

                echo "<option value='" . $country['id'] . "' $selected>" . $country['name'] . "</option>";
            }
            ?>
        </select>

        <button type="submit" name="spremi">Spremi promjene</button>
    </form>
</div>

<?php
    }
} else {
    echo "Nema korisnika.";
}

mysqli_close($conn);
?>

</body>
</html>