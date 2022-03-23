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
// $name = 'John';
// $surname = 'Doe';
// function printName()
// {
//    global $name, $surname, $fullName;
//    $fullName = $name . ' ' . $surname;
//    return $fullName;
// }
// echo printName()."<br>";
// echo $fullName;


//right way 
$name = 'John';
$surName = 'Doe';
$fullName;
//variables

function printName()
{  
   $GLOBALS['fullName'] = $GLOBALS['name'].' '.$GLOBALS['surName'];
   return $GLOBALS['fullName'];
}
echo printName();
echo $fullName;
var_dump( $GLOBALS );

// static function 
function lapCounter() {
   static $lap =  1;
   echo $lap.'<br>';
   $lap++;
}
 
lapCounter();
lapCounter();
lapCounter();
?>
</body>
</html>