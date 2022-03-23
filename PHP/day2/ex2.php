<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Create a function which takes two integer parameters - divide them and output the result on the screen. -->
    <?php
    $num1 = 10 ;
    $num2 = 5 ;
function dividing ($num1,$num2){
    $result = $num1 / $num2;
    return $result;
}
$returned_result = dividing($num1,$num2);
echo "Returned value from the function: $returned_result" ;
echo "</br>";

//or another way to direct insert numbers as params

function dividingolo ($nu1,$nu2){
    $result = $nu1 / $nu2;
    return $result;
}
$returned_result1 = dividing(10,2);
echo "Returned value from the function: $returned_result1"

    ?>
</body>
</html>


