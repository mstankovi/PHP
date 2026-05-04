<?php 
    $cars=array("Audi","BMW","Renault","Citroen");

    $poruka = "";

    if (isset($_POST['potvrda'])) {
        if (isset($_POST['vozilo'])){
            $odabrano = $_POST['vozilo'];
            echo "<h1 class='boja2'>Odabrali ste vozilo: $odabrano</h1>";
        }
        else {
            echo "<h1 class='boja1'>Niste odabrali niti jedan auto!</h1>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 4-1</title>
    <style>
        .boja1 {
            color:red;
        }

        .boja2 {
            color: green;
        }

        body {
        display: flex;
        flex-direction: column;
        align-items: center;
        }

        div {
            margin: 10px;
        }

        .btn {
            background: blue;
            color: white;
            font-family: georgia serif;
            font-size: 16px;
            padding: 10px;
            margin:10px;
            border-radius: 15%;
        }

    </style>
</head>
<body>
    <h2>Označi automobil: </h2>
    <form action="" method="post">
        <?php
            foreach($cars as $car) {
                $oznaceno = "";
                if (isset($_POST['vozilo']) && $_POST['vozilo'] == $car) {
                    $oznaceno = "checked";
                }
                echo "<div>";
                echo "<input type='radio' id='$car' name='vozilo' value='$car' $oznaceno>";
                echo "<label for='$car'> $car</label>";
                echo "</div>";
            }
        ?>
        <input class="btn" type="submit" name="potvrda" value="Pošalji">
    </form> 
</body>
</html>