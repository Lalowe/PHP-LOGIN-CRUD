<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    h1 {
        color : yellow ;
    }
    body {
  background-color: lightblue;
  text-align : center ;
  margin : 20%;
}
</style>
</head>

<body>
    
    <?php
    
    $myname= "V l a d i m i r";
    $age = 25;
    $arr_hobbies =array("fitness","nature","sailing");
    echo "<h1>Hello to PHP<h1>";
    echo  "<h2>FROM<h2>";
    echo "<h3>$myname<h3>";
    echo "My coolest hobby is $arr_hobbies[2], then I love $arr_hobbies[1] and daily i do $arr_hobbies[0].";
    echo "First element in array is " . $arr_hobbies[0] . "<br/>";
    echo "Second element in array is " . $arr_hobbies[1] . "<br/>";
    echo "Third element in array is " . $arr_hobbies[2] . "<br/>";
    ?>
</body>
<script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</script>
</html>