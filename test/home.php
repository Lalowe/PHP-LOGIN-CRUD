<?php
session_start();
require_once 'components/db_connect.php';

// if adm will redirect to dashboard
if (isset($_SESSION['adm'])) {
    header("Location: dashboard.php");
    exit;
}
// if session is not set this will redirect to login page
if (!isset($_SESSION['adm']) && !isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

// select logged-in users details - procedural style
$res = mysqli_query($connect, "SELECT * FROM users WHERE id=" . $_SESSION['user']);
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php echo $row['first_name']; ?></title>
    <?php require_once 'components/boot.php' ?>
    <style>

        html, body{
        margin: 0;
        }

        .userImage {
            width: 11vw;
            height: 24vh;
        }

        .hero {
            background-image: url(https://cdn.pixabay.com/photo/2016/05/24/16/48/mountains-1412683__340.png);
            background-size: cover;
            height: 50vh;
        }
    </style>
</head>

<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><h4 class="text-dark mt-2 ms-2">Hi, <?php echo $row['first_name']; ?>!</h4></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <p class="text-white">Hi <?php echo $row['first_name']; ?></p>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php?logout">Sign Out</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="update.php?id=<?php echo $_SESSION['user'] ?>">Update your profile</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        <div class="hero">
            <img class="userImage mt-5 ms-5" src="pictures/<?php echo $row['picture']; ?>" alt="<?php echo $row['first_name']; ?>">
        </div>
        <div class="card shadow text-center mt-5 mb-5">
            <h2>Name</h2>
            <p><?php echo $row['first_name']; ?></p>
            <h2>Date of birth</h2>
            <p><?php echo $row['date_of_birth']; ?></p>
        </div>

        <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">© 2022</p>
  </footer>
</body>
</html>