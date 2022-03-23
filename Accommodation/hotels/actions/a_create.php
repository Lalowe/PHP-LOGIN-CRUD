<?php

session_start();
// if you are a user and trying to acces to a_Create.php i will redirect to into home page 
if (isset($_SESSION['user']) != "") {
    header("Location: ../../home.php");// it is a key to use right way with ../../
    exit;
}

if (!isset($_SESSION['adm']) && !isset($_SESSION['user'])) {
    header("Location: ../../index.php");
    exit;
}

require_once '../../components/db_connect.php';
require_once '../../components/file_upload.php';

if ($_POST) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $agency = $_POST['agency'];
    $uploadError = '';
    //this function exists in the service file upload.
    $picture = file_upload($_FILES['picture'], 'hotels');

    if ($agency == 'none') {
        //checks if the agency is undefined and insert null in the DB
        $sql = "INSERT INTO hotels (name, price, picture, fk_agencyId) VALUES ('$name', $price, '$picture->fileName', null)";
    } else {
        $sql = "INSERT INTO hotels (name, price, picture, fk_agencyId) VALUES ('$name', $price, '$picture->fileName', $agency)";
    }

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $name </td>
            <td> $price </td>
            </tr></table><hr>";
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <?php require_once '../../components/boot.php' ?>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Create request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
        </div>
    </div>
</body>
</html>