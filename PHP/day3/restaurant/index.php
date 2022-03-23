<?php
session_start(); // start a new session or continues the previous
if (isset($_SESSION['user']) != "") { // very important : it means if you are logged as a user or as a admin tring to come on index page - 
    //actually mentioned the side where you are logging  ! , i will send to you to home , i will not allow you to do this again
    header("Location: home.php"); // redirects to home.php
    exit; // none of code will be executed
}
if (isset($_SESSION['adm']) != "") {
    header("Location: dashboard.php"); // redirects to home.php
    exit; // no chance to any code to run , it is like break
}
require_once 'actions/db_connect.php';
require_once 'actions/file_upload.php';

$sql = "SELECT * FROM dishes";
$result = mysqli_query($connect,$sql);
$tbody = "";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $tbody .= "<tr>
        <td><img class='img-thumbnail' width = 250px ; height = 100px ; src='pictures/" .$row['picture']."'</td>
            <td class=fs-5 text  >".$row['name']."</td>
            <td class=fs-5 text >".$row['price']."$</td>
            <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-outline-secondary btn-sm' type='button'>Edit</button></a>
           <a href='delete.php?id=" .$row['id']."'><button class='btn btn-outline-danger btn-sm' type='button'>Delete</button></a></td>
           <td> <a href='info.php?id=" .$row['id']."'><button class='btn btn-outline-info btn-sm' type='button'>Detail</button></a></td>
       
        </tr>";
    }
} else {
    $tbody = "<tr><td colspan='5' class='text-center'>Nothing here</td></tr>";
}

$error = false;
$email = $password = $emailError = $passError = '';

if (isset($_POST['btn-login'])) {

    // prevent sql injections/ clear user invalid inputs
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);

    if (empty($email)) {
        $error = true;
        $emailError = "Please enter your email address.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $emailError = "Please enter valid email address.";
    }

    if (empty($pass)) {
        $error = true;
        $passError = "Please enter your password.";
    }

    // if there's no error, continue to login
    if (!$error) {

        $password = hash('sha256', $pass); // password hashing

        $sql = "SELECT id, first_name, password, status FROM users WHERE email = '$email'";
        // query
        $result = mysqli_query($connect, $sql);// it run query ($SQL)
        $row = mysqli_fetch_assoc($result);// if i want use data from sql i need to fetch bcs iy is object and php do not know it
        $count = mysqli_num_rows($result);//  to know how many results
        if ($count == 1 && $row['password'] == $password) { // cize musi byt len 1 v rowi a musi sa heslo zhodovsat
            if ($row['status'] == 'adm') {
                $_SESSION['adm'] = $row['id'];
                header("Location: dashboard.php"); // poslem ho sem
            } else {
                $_SESSION['user'] = $row['id'];
                header("Location: home.php"); // poslem ho tam
            }
        } else {
            $errMSG = "Incorrect Credentials, Try again...";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Restaurant</title>
</head>
<body>
    <div class="container w-75 mt-3 mx-auto">
        <div class="row">
            <div class="col">
        <h2 class="text-center fs-4 text mb-3">Menu</h2>
        <a href="create.php"><button class="btn btn-primary">ADD product</button></a>
        <table class="table table-dark table-striped table-hover">
            <thead class="table-secondary table-dark  fs-4 text">
                <!-- cize toto je vrch table to je to co je hore co sa nemeni co je stale -->
                <tr> 
                    <th >Picture</th>
                    <th >Name</th>
                    <th >Price</th>
                    <th >Action</th>
                    <th >Detail</th>
                </tr>
            </thead>
            <!-- a tu vkladam svoj php table rovno pod ten horny table  -->
            <tbody>
                <?php echo $tbody ?>
            </tbody>
        </table>
        </div>
    <div class="col">
        <form class="w-75" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
            <h2>Login</h2>
            <hr />
            <?php
            if (isset($errMSG)) {
                echo $errMSG;
            }
            ?>

            <input type="email" autocomplete="off" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
            <span class="text-danger"><?php echo $emailError; ?></span>

            <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
            <span class="text-danger"><?php echo $passError; ?></span>
            <hr />
            <button class="btn btn-block btn-primary" type="submit" name="btn-login">Sign In</button>
            <hr />
            <a href="register.php">Not registered yet? Click here</a>
        </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

