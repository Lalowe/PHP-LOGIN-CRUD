 <?php
require_once 'db_connect.php';// we need from db
require_once 'file_upload.php';// we need upload

if ($_POST) {  // we need check if there is any post method  if yes then 
    $name = $_POST['name']; // what we take we store it in variable
    $price = $_POST['price'];// what we take we store it in variable
    $uploadError = '';
    
    //this function exists in the service file upload. it accept there a paramter
    $picture = file_upload($_FILES['picture']);  
   
    $sql = "INSERT INTO dishes (name, price, picture) VALUES ('$name', $price,'$picture->fileName')";
// picture-> file name odkazuje na file_upload
    if (mysqli_query($connect, $sql) === true) {// to check if there is everythin inserted correct
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $name </td>
            <td> $price </td>
            </tr></table><hr>";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);
} else { // this is second possibilyi if there is no $Post
    header("location: ../error.php");
}
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <h3></h3>
        <h3>TEST </h3>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>