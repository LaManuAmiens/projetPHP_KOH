<?php
/*
La fonction simplexml_load_file() convertit un fichier XML en objet.
Le 'or die' permet d'afficher un message d'erreur.
*/
$xml = simplexml_load_file('source.xml') or die('Erreur : impossible de créer l\'objet');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="jquery-3.2.1.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <title>
    <?php
    if(empty($_GET['id'])){
/*
Syntaxe $variable -> page[numéro de la page à afficher] -> nom de la balise contenant
les infos que l'on veut récupérer.
*/
    echo $xml->page[0]->title;
  }
  else if($_GET['id'] == '2.html'){
    echo $xml->page[1]->title;
  }else if($_GET['id'] == '3.html'){
    echo $xml->page[2]->title;
  }else if($_GET['id'] == '4.html'){
    echo $xml->page[3]->title;
  }else{
    echo $xml->page[0]->title;
  }
  ?></title>
</head>
<body>
  <header>
    <nav>
      <div class="logo-section">
        <a class="logo">OcorDo</a>
        <button class="hb-button"><i class='fa fa-bars'></i></button>
      </div>
      <ul>
        <li><a href="1.html"><?= $xml->page[0]->menu ?></a></li>
        <li><a href="2.html"><?= $xml->page[1]->menu ?></a></li>
        <li><a href="3.html"><?= $xml->page[2]->menu ?></a></li>
        <li><a href="4.html"><?= $xml->page[3]->menu ?></a></li>
      </ul>
    </nav>
  </header>
  <?php
  if(empty($_GET['id'])){
    echo $xml->page[0]->content;
  }
  else if($_GET['id'] == '2.html'){
    echo $xml->page[1]->content;
  }else if($_GET['id'] == '3.html'){
    echo $xml->page[2]->content;
  }else if($_GET['id'] == '4.html'){
    echo $xml->page[3]->content;
  }else{
    echo $xml->page[0]->content;
  }
  ?>
  <script src="assets/js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
