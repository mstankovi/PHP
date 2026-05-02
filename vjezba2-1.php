
<?php
    
       $naslov = "PHP dokument";
       $autor = "Mia Stanković";
       $link_php_wiki = "https://hr.wikipedia.org/wiki/PHP";
       $link_tekst = "Saznaj više o PHP-u";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    :root { 
       --pozadina:royalblue;
       --oblacic:greenyellow; 
       --tekst:darkred; 
       --muted:grey; 
       --accent:darkblue; 
       }

    * { box-sizing: border-box; }

    body { 
       margin:0;
       font-size: 16px; 
       font-family:georgia;
       background:var(--pozadina);
       color:var(--tekst);
       }

    .wrap { 
       max-width:720px;
       margin:48px auto;
       background:var(--oblacic); 
       padding:32px;
       border-radius:16px; 
       box-shadow:0 10px 30px rgba(0,0,0,.08); 
       }

    h1 { 
       margin:0 0 15px; 
       font-size:2rem;  
       }

    p  { 
       margin:0 0 15px; 
       line-height:1.6; 
       }

    .btn { 
       display:inline-block; 
       padding:10px 16px; 
       border:1px solid var(--accent);
       border-radius:10px; text-decoration:none; 
       }

    .btn:hover { 
       background:var(--accent); 
       color:yellow; 
       }

    footer { 
       margin-top:20px; 
       font-size:0.7em; 
       color:var(--muted); 
       }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <main class="wrap">
        <h1> <?php echo htmlspecialchars($naslov); ?> </h1>
        <br>
        <p> Ovu stranicu izradila je <strong><?php echo htmlspecialchars($autor) ?></strong></p>
        <br>
        <p> PHP je serverski jezik koji generira HTML i JSON odgovor prema klijentu. </p>
        <br>
        <a class="btn" href="<?php echo htmlspecialchars($link_php_wiki); ?>"
            target="_blank" rel="noopener"><?php echo htmlspecialchars($link_tekst); ?>
        </a>

        <footer>&copy;<?php echo date("Y"); ?> - demo za PHP </footer>
     </main>

     
</body>
</html>

<!-- Naziv datoteke: vjezba1b.php (tj. vjezba2-1) -->