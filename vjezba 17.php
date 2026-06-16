<?php

/* USE vjezba14;

CREATE TABLE countries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

INSERT INTO countries (name) VALUES
('Argentina'),
('Australia'),
('Hrvatska'),
('Njemačka'),
('Srbija'),
('Slovenija');

ALTER TABLE users
ADD country_id INT;

ALTER TABLE users
ADD CONSTRAINT fk_users_countries
FOREIGN KEY (country_id) REFERENCES countries(id);
 */

$conn = mysqli_connect("localhost", "root", "", "vjezba14");

if (!$conn) {
    die("Greška pri spajanju na bazu: " . mysqli_connect_error());
}

$query = "
    SELECT users.ime, users.prezime, countries.name AS country
    FROM users
    INNER JOIN countries ON users.country_id = countries.id
    ORDER BY countries.name ASC, users.prezime ASC
";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Korisnici i države</title>
</head>
<body>

<h2>Korisnici i države</h2>

<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<p>👤 " . $row['ime'] . " " . $row['prezime'] . 
             " (" . $row['country'] . ")</p>";
    }
} else {
    echo "Nema korisnika za prikaz.";
}

mysqli_close($conn);
?>

</body>
</html>