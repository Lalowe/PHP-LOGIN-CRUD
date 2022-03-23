<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
    function calculator ($width,$height, $depth){
    global $result,$area , $volume;
    
    $area = $width * $height ;
    $volume = $area * $depth;
    $result = "Are  of box is $area .". "<br>" ."Volume of box  is $volume .";
     return $result; // with return and without return you do not need result , just like in 26.line 
    }

    ;
    $result_values =calculator (4,5,5);
    echo $result;
    ?>

<!-- $result_values =calculator (4,5,5);
    echo "Are  of box is $area .". "<br>";
    echo "Volume of box  is $volume .";
     -->
</body>
</html>
<!-- Exercise 4

    Create a function that calculates the area and volume of a box.
    Formulas:
    area = width x height
    volume = width x height x depth
    Pass three different numbers as arguments and get calculated results using the return statement.
    You should get the following results:
    The area of the box is: 14
    The volume of the box is: 70 -->