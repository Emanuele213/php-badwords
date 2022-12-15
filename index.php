<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        $text = "In un futuro prossimo venturo, il pianeta Terra sta diventando un ambiente inabitabile per l'uomo. Un gruppo di scienziati appartenenti un tempo alla NASA, sfruttando un wormhole per superare le limitazioni fisiche del viaggio spaziale e coprire le immense distanze del viaggio interstellare, organizza una serie di missioni spaziali alla ricerca di un pianeta abitabile. A tal scopo convince Cooper, un ex pilota di talento, a lasciare i propri figli per imbarcarsi in una missione che ha lo scopo di salvare l'umanità.";
        $badWord = str_ireplace(isset($_GET['badWord']), '***', $text, $numCensor);
    ?>
    <div class="container">
        <h1>INTERSTELLAR</h1>
        <p><?= $badWord; ?></p>
        <p class="num">Lunghezza stringa: <?php echo strlen($badWord); ?></p>
        <form action="" method="GET">
            <input type="text" name="badWord" placeholder="inserisci la parola da sbarrare">
            <button class="mod-btn">Sbarra</button>
        </form>
        <h3 class="num-censor">Parole censurate: <?= $numCensor ?></h3>
    </div>
</body>
</html>