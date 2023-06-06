<?php
    $badwords = $_POST['badwords'];
    $inputParagraph = $_POST['paragraph'];
    $newParagraph = str_replace($badwords, '***', $inputParagraph);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="style.css" />


  </head>
 
  <body>
    <div class="phpScript">

        <h1>Il paragrafo originale: </h1>
        <p><?= $_POST['paragraph']; ?></p> 
        <br>
        <h1>Lunghezza paragrafo originale: </h1>
        <p><?= strlen($inputParagraph); ?></p> 
        <br>
        <div class="a"></div>
        <br>
        <h1>Il paragrafo modificato: </h1>
        <p><?=$newParagraph?></p> 
        <br>
        <h1>Lunghezza paragrafo modificato: </h1>
        <p><?= strlen($newParagraph); ?></p> 

    
    
       
    </div>

   
  </body>
</html>