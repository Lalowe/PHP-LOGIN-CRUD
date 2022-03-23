<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title></title>
   </head>
   <body>
  <!-- CGECK List of parameters for the date() function -->
   <!--  To find out if a string is numeric or boolean, you may use is_numeric() or is_bool(). -->
   <!-- n this case: <input type ="text" name="age" />.  So in php: $age = $_POST["age"] will store the value from the input age. -->


   <p>POST METHOD</p>
       <form action="prework.php" method ="POST">
           Name: <input type="text"  name="name" />
           Age: <input type ="text" name="age" />
           <input  type="submit" name="submit"  />
       </form>
       <?php
       if( isset($_POST['submit']))
       {
           if( $_POST["name"] || $_POST["age"] )
           {
               echo "Welcome ". $_POST[ 'name']. "<br />";
               echo "You are " . $_POST['age']. " years old.";
           }
       }

       function printName()
       {
           echo  "Hello to PHP !";
       };
       printName();
       

// Function parameters are declared inside the parentheses that form the function syntax.
//  As any variable, it will need the $ and the variable name. 
// This variable, as a local variable, will only be available within the function.




function capFirstString($str)
       {
           $cap = ucfirst($str);
           echo  $cap;
       }
       //*ucfirst() is one of the thousands of built-in ready to use functions available in PHP.
//Returns a string with the first character of string capitalized, if that character is alphabetic.
//https://www.php.net/manual/en/function.ucfirst.php
       capFirstString("hello world");

       function addFunction($num1, $num2)
       {
           $sum = $num1 + $num2;
           return  $sum;// Return stops the execution of the function and sends the value back to the calling code.
       }
       $return_value = addFunction(10, 20);
       echo "Returned value from the function: $return_value";

       //Let’s create the function formatted_dump() 
       //that will format the output from $GLOBALS on the screen using var_dump:
        function formatted_dump($content)
{
   echo '<pre>';//HTML tag '<pre></pre>' to format the text that will be shown on the screen.
   var_dump($content);
   echo '</pre>';
}

$name = 'John';
function fullName(){
   $surname = 'Doe';
   $fullName = $GLOBALS['name'] . ' ' . $GLOBALS['surname'];
   return $fullName;
}
formatted_dump($GLOBALS);

//if 
$date = date("Thursday");
        //"Thursday" will return the full name of the day of the week
       if ($date == "Friday")
           echo "It's Friday, weekend is around the corner... :-)";
       else
           echo "Don't watch the clock; do what it does, keep on going!" ;

           $today = date("N");
        "<br>";
       
       
        //"N" returns day of the week as numbers mon=1, sun=7
       if ($today == 1)
       
           echo "It's Monday, let's get the week started.";
       elseif ($today == 2)
           echo "It's Tuesday, a perfect day to learn conditional statements";
       else
           echo "Don't watch the clock; do what it does, keep on going!";
           
           $today = date("D"); //parameter vo funkcie date("D") je => A textual representation of a day (three letters)
           switch ($today) {
               case "Mon":
                echo "</br>"; 
                   echo "Today is Monday";
                   break;
               case "Tue":
                   echo "Today is Tuesday";
                   break;
               case "Wed":
                   echo "Today is Wednesday";
                   break;
               case "Thu":
                   echo "Today is Thursday";
                   break;
               case "Fri":
                   echo "Today is Friday";
                   break;
               case "Sat":
                   echo "Today is Saturday";
                   break;
               case "Sun":
                   echo "Today is Sunday";
                   break;
               default:
                   echo "If you seeing this message, something went wrong :)";
           }
           // correct switch
        
        $favcolor = "red";

        switch ($favcolor) {
          case "red":
            echo "</br>"; 
            echo "Your favorite color is red!";
            break;
          case "blue":
            echo "Your favorite color is blue!";
            break;
          case "green":
            echo "Your favorite color is green!";
            break;
          default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
        echo"<br>";
        
        
        // true or what $var = condition ? expression1 (if true) : expression2 (if false);
        $session = "John";
$user = ($session == "John") ? $session : "not logged in";
echo $user.'<br>';




function confirm(){
   echo "affirmative";
}
function deny(){
   echo "negative";
}
//is 10 bigger than 5?
(10 > 5) ? confirm() : deny();

// //To check if the condition exists use @ or isset().

$varOne = 4>3;
$varTwo = 4<3;
$varThree = null;
echo ($varOne ?: "The condition was false or null") ."<br>";
//returns 1 (true)
echo ($varTwo ?: "The condition was false or null") ."<br>";
// returns "The condition was false or null"
echo ($varThree ?: "The condition was false or null") ."<br>";
// returns "The condition was false or null"
// Throws an error because the condition doesn't exist and shows the second result. Uncomment to see:
//echo ($varFour ?: "The condition was false or null") ."<br>";
//To check if the condition exists use @ or isset().
echo (@$varFour ?: "The condition doesn't exist") ."<br>";
//same as:
//echo (isset($varFour) ?: "The condition doesn't exist");

       ?>    
   </body>
</html>