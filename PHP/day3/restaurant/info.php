<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Detail</title>
</head>
<body>
    <?php

    require_once 'actions/db_connect.php';

    if(isset($_GET['id'])){ // isset Check whether a variable is empty. Also check whether the variable is set/declared:
      //and it return true so that means that it start to do what is inside v nasom pripade ked sa klikne 
      // na detail 
      //tak sa vytvori to 'id' {}
      // $_GET is super global variable which is used to collect form data after submitting an HTML form with method="get".
        $query = "SELECT * FROM dishes WHERE id = {$_GET['id']}";// klasicka podmienka z sql / we created
        // query a ulozili do $query a pouzijeme $_Get metodu ze ktore id sa ma zobrazit
        $result = mysqli_query($connect, $query);
        if($row = mysqli_fetch_array($result)){
            
            echo "
            <h2> Detail </h2>
            <div class='row row-cols-1 row-cols-md-2 g-4'>
            <div class='col'>
            <div class='card-group '>
            <div class='card'>
            <img src='pictures/".$row['picture']."' class='card-img-top'  width= 100px ; height = 250px ; alt='...'>
              <div class='card-body'>
                <h5 class='card-title'>".$row['name']."</h5>
                <p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class='card-text'><small class='text-muted'>Dish with id ".$row['id']." updated 3 mins ago</small></p>
              </div>
            </div>
            </div>
            </div>

          </div>" ;
        }
    }   
    ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


