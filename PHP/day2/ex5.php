<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Exercise 5

Create a function that will return the number of minutes, in hours and minutes. The function should accept only one argument.
E.g. If we call the function and pass the number of minutes 200 we should get the message "200 minutes = 3 hour(s) and 20 minute(s). -->
    <?php
    function totime ($num1){
    global $rest , $hours;
    $hours= round($num1 / 60, 0); // logicky zaokruhlujes ten vysledok nie $hours ale to comu sa to rovna !!! velka myslienka 
    $rest = $num1 % 60 ;
    }
     $give_number = totime(200);
     echo ("It is $hours hours and  $rest minutes.")
    ?>
    
</body>
</html>

<!-- function input(number) {
    let weeks = Math.floor(number / 604800)
    let rest = number % 604800;
    let days = Math.floor(rest / 86400);
    rest = rest % 86400;
    let hours = Math.floor(rest / 3600);
    rest = rest % 3600;
    let minutes = Math.floor(rest / 60);
    rest %= 60; // same like  rest = rest % 60 
    console.log(`It is ${weeks} weeks and ${days} days and ${hours} hours and ${minutes} minutes and ${rest} seconds`) -->






