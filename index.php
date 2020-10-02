<?php

$paragrafo = "PHP (acronimo ricorsivo di 'PHP: Hypertext Preprocessor', preprocessore di ipertesti; originariamente acronimo di 'Personal Home Page') è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche. L'interprete PHP è un software libero distribuito sotto la PHP License.
Attualmente è principalmente utilizzato per sviluppare applicazioni web lato server, ma può essere usato anche per scrivere script a riga di comando o applicazioni stand-alone con interfaccia grafica. Un esempio di software scritto in PHP è MediaWiki, su cui si basano i progetti wiki della Wikimedia Foundation come Wikipedia.";

$parLength = strlen($paragrafo);
$badword = $_GET["badword"];

$paragrafoNew = str_replace($badword, "***", $paragrafo);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Badword</title>
  </head>
  <body>
    <div class="container">
      <h1>PHP</h1>
      <p class="par"><?php echo $paragrafoNew ?></p>
      <p class="par-length">Il paragrafo ha una lunghezza di <?php echo $parLength ?> caratteri</p>
    </div>
  </body>
</html>
