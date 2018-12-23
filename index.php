<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Partie10_TP3</title>
</head>
<body>

  <?php
  // Faire une fonction qui permet d'afficher les données des tableaux suivants :

  // $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
  // $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
  // $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
  // $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
  ?>
  <?php
  include 'portraits.php'; // La fonction include inclut et exécute le fichier spécifié en argument.

  $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
  $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
  $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
  $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

    $data = array($portrait1, $portrait2, $portrait3, $portrait4);
    generateGallery($data);
  /*La fonction generateGallery ($data) doit générer un code Html d'une galerie de portrait à partir d'informations présentes dans la variable $data.
  La fonction doit s'attendre à trouver un tableau de tableaux associatif dans le parametre $data. */
  ?>
        <!--Correction Nico V  avec les regex -->

        <!DOCTYPE html>
        <html lang="fr" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title>TP3</title>
        </head>
        <body>
          <?php
          //Déclaration des variables portrait contenant les tableaux fournis.
          $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
          $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
          $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
          $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
          // Création d'une fonction permettant d'afficher le contenu des 4 tableaux, prenant en paramètre les variables créées précédemment.
          function displayArrays($portrait1, $portrait2, $portrait3, $portrait4){
            foreach ($portrait1 as $key => $value) {
              //Si la regex match avec une valeur $value du tableau, preg_replace va alors tansformer la donnée saisie en ce qui nous intéresse, ici une balise img contenant la source de l'image.
                if (preg_match('#http:\/\/[a-z0-9-_./]*$#i', $value)) {
                $value = preg_replace('#http:\/\/[a-z0-9-_./]*$#i', '<img src="$0" style="width: 150px; height: 200px;"/>', $value);
              }
              ?>
              <p><?= $key . ' : ' . $value; ?></p>
              <?php
            }
            ?>
            <hr>
            <?php
            foreach ($portrait2 as $key => $value) {
              if (preg_match('#http:\/\/[a-z0-9-_./]*$#i', $value)) {
                $value = preg_replace('#http:\/\/[a-z0-9-_./]*$#i', '<img src="$0" style="width: 150px; height: 200px;"/>', $value);
              }
              ?>
              <p><?= $key . ' : ' . $value; ?></p>
              <?php
            }
            ?>
            <hr>
            <?php
            foreach ($portrait3 as $key => $value) {
              if (preg_match('#http:\/\/[a-z0-9-_./]*$#i', $value)) {
                $value = preg_replace('#http:\/\/[a-z0-9-_./]*$#i', '<img src="$0" style="width: 150px; height: 200px;"/>', $value);
              }
              ?>
              <p><?= $key . ' : ' . $value; ?></p>
              <?php
            }
            ?>
            <hr>
            <?php
            foreach ($portrait4 as $key => $value) {
              if (preg_match('#http:\/\/[a-z0-9-_./]*$#i', $value)) {
                $value = preg_replace('#http:\/\/[a-z0-9-_./]*$#i', '<img src="$0" style="width: 150px; height: 200px;"/>', $value);
              }
              ?>
              <p><?= $key . ' : ' . $value; ?></p>
              <?php
            }
          }
          ?>
          <?= displayArrays($portrait1, $portrait2, $portrait3, $portrait4); ?>
