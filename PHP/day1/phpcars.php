<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
  <?php 


$cars = array (
    array("Volvo",22,18,),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15,"https://www.autozeitung.de/assets/styles/article_image/public/field/images/land-rover-discovery-2020-01.jpg?itok=kxDMiCQx",110000)
  );
    
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

 
  
  ?>
<h1> <?php echo $x ?></h1>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="<?php echo $cars[3][3] ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $cars[3][0] ?></h5>
        <p class="card-text">Price :<?php echo $cars[3][4] ?> </p>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<!-- <html>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <img src="https://cdn.pixabay.com/photo/2022/03/06/05/30/clouds-7050884__480.jpg" width="280" height="125" title="Logo of a company" alt="Logo of a company" />
  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">".$cars[0][1]."</h5>
        <p class="card-text">$cars[0][1] onger card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </html>
  ' -->
<!-- to add just  img in html from echo -->
  <!-- echo "<br>";
  echo ' 
  <img src="https://www.autozeitung.de/assets/styles/article_image/public/field/images/land-rover-discovery-2020-01.jpg?itok=kxDMiCQx" width="280" height="125" 
  ';
  echo "<br>"; -->