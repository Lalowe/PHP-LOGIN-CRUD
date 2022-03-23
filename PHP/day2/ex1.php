<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin=  "anonymous">
</head>
<body>
    <?php
    $err_info = "";
    if( isset($_POST['submit']))
       {
           if( $_POST["Name"] || $_POST["Surname"] ){
           
            $err_info =  "Welcome "  .$_POST[ 'Name']."   " .$_POST["Surname"]." <br />";
           }
           else{
            $err_info =  "please insert your name, or please insert your surname";
           }
        }
    ?>
    <form method="POST"class="row g-3" action="ex1.php">
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
    <div> <?php echo  $err_info ?> </div>
  </div>
</form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>