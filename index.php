<?php 
    // Creare una variabile con un paragrafo di testo a vostra scelta.
    $testo = "Annie, are you okay?
    So, Annie, are you okay? Are you okay, Annie?
    Annie, are you okay?
    So, Annie, are you okay? Are you okay, Annie?
    Annie, are you okay?
    So, Annie, are you okay? Are you okay, Annie?
    Annie, are you okay?
    So, Annie, are you okay? Are you okay, Annie?";
    // Una parola da censurare viene passata dall'utente tramite parametro GET.
    $parolaCensurata = $_GET["word"];
    $parolaLowerCase = strtolower($parolaCensurata);
    $testoLowerCase = strtolower($testo);
    
    // Sostituire con tre asterischi (***) tutte le occorrenze della parola da censurare.
    $testoPulito = str_replace($parolaLowerCase, "***", $testoLowerCase);
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        <form action="" method="GET">
            <label for="parola">Parola da Edulcorare</label>
            <input type="text" id="parola" name="word">
            <input type="submit">
        </form>
        <!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
        <p><?php echo $testo ?></p>
        <hr>
        <p><?php echo $testoPulito;  ?></p>
    </body>
</html>
