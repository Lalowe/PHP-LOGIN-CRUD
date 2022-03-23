<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Make a function that will accept 3 parameters, which are the grades from Math, Physics and English. 
then make the calculation and print them on the screen. Make sure that the variables are numbers.
E.g. If you put the following grades 3, 4, 5 the result should be:
Sum:12
Average: 4 -->
    <?php

function calculation($math,$physics,$english){
    // global $sum;
    if(is_numeric($math) && is_numeric($physics) && is_numeric($english)){// if this all is true then :
        $sum = $math + $physics + $english;
        $result = $sum / 3 ;
        echo "Sum of your marks is: $sum"."<br>";
        echo "Average of inserted grades is: $result" ."<br>";// takto sa robi medzera  
    } 
    else {
    echo "You have to insert numbers , something is wrong ";"<br>";
    }
    };
    // echo "Sum of your marks is: $sum"; // tu neukaze vysledok lebo to nepozna este !!,idealne to dat do if hore
    $result_value= calculation(3,4,5);
    // echo "Sum of your marks is: $sum";
    
    
/// from delia with Returns 
// function calculation($math,$physics,$english){
//     if(is_numeric($math) && is_numeric($physics) && is_numeric($english)){
//         $sum = $math + $physics + $english;
//         $result = $sum / 3 ;
//         return "Average of inserted grades is: $result" ;
//     } 
//     return "You have to insert numbers , something is wrong ";
    
    
    // };





    // function calculation($math,$physics,$english){
    
    // $sum = $math + $physics + $english;
    
    // $result = $sum / 3 ;
    // if ( is_int($math) == true ||is_int($physics) == true || is_int($english) == true ){
    //     echo "Average of inserted grades is: $result" ;
        
    //     }
    //     else {
    //         echo" You have to insert numbers , something is wrong ";
            
    //     }
    //     return $result;
   
    // };
   
    // $result_value= calculation(3,4,5);


    //|||||||||||||||||||||||||||||||

    // function calculations($math,$physics,$english){
    //    global $info ;wrong
    //    $info ="";
    
    //     if ( is_int($math) == true ||is_int($physics) == true || is_int($english) == true ){
    //         $sum = $math + $physics + $english;
    //         $result = $sum / 3 ;
    //         $info =  "Average of inserted grades is: $result" ;
            
    //         }
    //         else {
    //             $info = " You have to insert numbers , something is wrong ";
                
    //         }
    //         return $result;
       
    //     };
       
    //     $result_value= calculations(2,4,5);
    //     echo "$info" ;
    
   

        

  
    ?>
</body>
</html>


