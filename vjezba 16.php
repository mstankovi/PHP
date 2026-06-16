<?php
$conn = mysqli_connect("localhost", "root", "", "vjezba14");

if (!$conn) {
    die("Greška pri spajanju na bazu.");
}

$rezultat = "";

if (isset($_POST['submit'])) {
    $trazilica = $_POST['trazilica'];

    $query = "SELECT ime, prezime, username, email 
              FROM users 
              WHERE ime LIKE '%$trazilica%' 
              OR prezime LIKE '%$trazilica%'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $rezultat .= "<p>" . $row['ime'] . " " . $row['prezime'] . 
                         " - " . $row['username'] . 
                         " - " . $row['email'] . "</p>";
        }
    } else {
        $rezultat = "Korisnik nije pronađen.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tražilica korisnika</title>
</head>
<body>

<h2>Pretraživanje korisnika</h2>

<form method="POST" action="">
    <input type="text" name="trazilica" placeholder="Unesi ime ili prezime">
    <button type="submit" name="submit">Pretraži</button>
</form>

<h3>Rezultat:</h3>

<?php
echo $rezultat;
?>

</body>
</html>