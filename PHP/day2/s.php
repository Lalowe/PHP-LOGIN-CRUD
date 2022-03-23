<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP Day 2 Advanced</title>
</head>
<body>
    <!-- Create a function that can convert °F in °C and show the result on the screen. -->
    <!-- Container -->
        <div class="container mt-5 mb-5 p-5 shadow text-center">
            <h3 class="mb-4 display-5"> Weather station </h3>

    <!-- PHP starts -->
        <?php 
            function weather($f){
                $c = round(($f - 32) * 5/9);
                return $c;
            }

        /* setting °F as a var, returning, using return as a var for the switch */
            $f = 73; //23, 33, 43, 53, 63, 73
            $return_val = weather($f);
            echo "Today we have $return_val °C";
            echo "<br> That means ";

        /* changing pics and comments */

            switch($return_val){
                case($return_val >= 0 && $return_val <= 5):
                $message = "it´s a very cold weather! <br><br> <img src='https://cdn.pixabay.com/photo/2016/11/21/17/44/clouds-1846760__340.jpg' style='border-radius: 10px; height: 150px; width: 300px;'>";
                break;
                case($return_val >= 6 && $return_val <= 10):
                $message = "it´s just a cold weather! <br><br> <img src='https://cdn.pixabay.com/photo/2019/08/23/07/53/umbrella-4425160__340.jpg' style='border-radius: 10px; height: 150px; width: 300px;'>";
                break;
                case($return_val >= 11 && $return_val <= 15):
                $message = "it´s a pleasant weather! <br><br> <img src='https://cdn.pixabay.com/photo/2022/02/22/17/25/stork-7029266__480.jpg' style='border-radius: 10px; height: 150px; width: 300px;'>";
                break;
                case($return_val >= 16 && $return_val <= 20):
                $message = "it´s a warm weather! <br><br> <img src='https://cdn.pixabay.com/photo/2020/05/29/22/00/field-5236879__480.jpg' style='border-radius: 10px; height: 150px; width: 300px;'>";
                break;
                case($return_val >= 21):
                $message = "it´s a hot weather! <br><br> <img src='https://cdn.pixabay.com/photo/2018/05/02/18/23/landscape-3369304__480.jpg' style='border-radius: 10px; height: 150px; width: 300px;'>";
                break;
                default:
                $message = "it´s super cold weather! <br><br> <img src='https://cdn.pixabay.com/photo/2020/05/11/22/45/new-york-5160499__480.jpg' style='border-radius: 10px; height: 150px; width: 300px;'>";
            }

            echo $message;
        ?>
    <!-- end of PHP -->
    </div>
    <!--  end of container -->

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
