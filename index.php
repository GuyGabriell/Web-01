<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays-web-01</title>
</head>
<body>


  <h1>Recommended Boooks</h1>
  
  <?php
  
 

    $Books = [

      "Do Androids Dream of Electric Sheep ",
      "The Langolier",
      "Hail Marry"
    ];


  
  
  
  
  ?>

<!--
  <ul>
    <?php 
    foreach ($Books as $Book) {

      echo "<li>$Book</li>";

    }
     ?>
  </ul>
  -->

  <ul>
   <?php foreach ($Books as $Book) : ?>

    <li> <?= $Book; ?> </li>

    <?php endforeach; ?>

  </ul>




</body>
</html>