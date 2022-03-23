<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   
    <div class="container">
      <div class="row row-cols-4 "> 
        <!-- row-cols-4 ti zmeni velkost tych form -->
    <form method="POST"class="row g-3" action="ex6.php">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="Name" name="Name" class="form-control" id="exampleFormControlInput1" placeholder="Here insert Your name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Surname</label>
  <input type="Surname" name="Surname" class="form-control" id="exampleFormControlInput1" placeholder="Here insert your surname">
</div>
  <div class="col-auto">
    <button type="submit" name="submit" class="btn btn-primary mb-3">Submit</button>
  </div>
</form>
</div>
</div>

<div class="container m-2 p-2 text-center">
            <h3 class="mb-4">Submitted</h3>
            <div class="row row-cols-4 justify-content-center">
            
                <?php echo $text ?> 
                <!-- TAKZE VYMAZAL SOM CELU PREDOSLU CAST A VYSLEDOK VZDY DAVALO POD TO -->
                <!-- poradie dolezite najprv musi ist echo html a potom if isset ! -->
</div> 
     <?php
    // cize default je nicale ked sa spravi submit tak sa to cele meni
    if( isset($_POST['submit']))
       {
        $text = strlen($_POST["Name"]) > 5 ? "success":"danger";
        // true or what $var = condition ? expression1 (if true) : expression2 (if false)
           if( $_POST["Name"] || $_POST["Surname"] ){
           
            echo "<div class='text-".$text."'>Welcome, ". $_POST['Name']. " ". $_POST['Surname']. "!". "</div> <br />";
           }
           
           else{
            echo "<div> Please insert your name and age! </div>";
           }
        }
    
      
    ?>
    <div class="row row-cols-4 "> 
    <!-- hobby with get -->
    <form action="ex6.php" method ="GET">
            <div class="mb-3">
      <input type="hobby" name="hobby" class="form-control" id="exampleInputHobby" aria-describedby="" placeholder="Hobby">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>

<div>
 <?php
 if (isset ($_GET["submit"]))
 {
if ($_GET["hobby"]){
 echo "Your hobby is:  ". $_GET['hobby']. " ";
  } else {
 echo "Please type your hobby!";
}
  }        
  ?>
</div>
 <!-- end of hobby -->
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>