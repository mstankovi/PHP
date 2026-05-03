<?php
    
    $naslov = "PHP dokument — vježba 1c";
    $autor = "Mia Stanković";
    $opis = "Ova stranica nastavlja vježbu 1b i služi za uvježbavanje varijabli, ispisa i osnovnog CSS-a.";
    $linkInfo = "https://www.php.net";
    $linkNatrag = "vjezba2-1.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vježba 1c — nastavak na vjezba1b</title>
    <style>

        :root {
            --pozadina: gold;
            --oblacic: darkred;
            --tekst: white;
            --muted:grey;
            --accent: yellow;
        }

        * {box-sizing: border-box;}

        body {
            margin:0;
            font-size: 16px; 
            font-family:georgia;
            background: var(--pozadina);
            color: var(--tekst);   
        }

        .wrap {
            max-width: 720px;
            margin: 48px auto;
            background: var(--oblacic);
            padding: 32px;
            border-radius:16px; 
            box-shadow: 0 10px 30px black;
        }

        h1 { 
        margin:0 0 15px; 
        font-size:2rem;  
        }

        p { 
        margin:0 0 15px; 
        line-height:1.6; 
        }

        .btn{
            display: inline-block;
            background: gold;
            padding: 10px 16px;
            border:1px solid var(--accent);
            border-radius: 10px;
            text-decoration: underline;
        }

        .btn:hover{
            background: var(--accent);
            color: green;
        }

        footer {
            margin-top: 20px;
            font-size:0.9em;
            color: var(--muted);
        }

        .row{ 
            display:flex; gap:12px; flex-wrap:wrap; margin-top:10px 
        }

    </style>

</head>
<body>
    <main class="wrap">
        <h1> <?php echo $naslov; ?> </h1>
        <p>Ovu stranicu je izradila <strong><?php echo $autor; ?></strong></p>
        <p> <?php echo $opis ?> </p>

        <div  class="row">
            <a class="btn" href="<?php echo $linkInfo; ?>" target="_blank" >Saznaj više o PHP-u</a>
            <a  class="btn" href="<?php echo $linkNatrag; ?>"> Natrag ba vhežbu 1b </a>
        </div>

        <footer>&copy; <?php echo date('Y'); ?> — Demo za PHP</footer>
    </main>
</body>
</html>

<!-- Naziv datoteke: vjezba1c.php (tj. vjezba2-2) -->