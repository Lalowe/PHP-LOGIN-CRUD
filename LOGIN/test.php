<!DOCTYPE html>
<html>
<body>
<?php
$str = "\t\t\n PHP Validators are useful tools\n\t ";
echo "Original value:" . $str . "\n";
echo "<br>";
echo "Trimmed value:" . trim($str);
$test_var_a = "<br><p><a href='file.php'>PHP Validators</a></p>";
echo htmlspecialchars($test_var_a);
//it will print: <br><p><a href='file.php'>PHP Validators</a></p>
echo filter_var($email = 'johndoe@mail.com', FILTER_VALIDATE_EMAIL);
//it will print: johndoe@mail.com
var_dump(filter_var($email = 'johndoe@mail', FILTER_VALIDATE_EMAIL));
//it will print: bool(false)
echo filter_var($email = '1-*johndoe123@mail.com', FILTER_VALIDATE_EMAIL);
//it will print: 1-*johndoe123@mail.com
var_dump(filter_var($email = '1john&doe\123@mail.com', FILTER_VALIDATE_EMAIL));
//it will print: bool(false)
$string1 = "This is a string with alphabetic characters and spaces";
$string2 = "Characters and numb3rs";

echo filter_var(
 $string1, FILTER_VALIDATE_REGEXP,array(
     "options" => array("regexp" =>"/^[a-zA-Z\s]+$/")
 )
); //it will print: This is a string with alphabetic characters and spaces

var_dump(filter_var(
 $string1, FILTER_VALIDATE_REGEXP,array(
     "options" => array("regexp" =>"/^[a-zA-Z]+$/")
 )
)); //it will print: bool(false)

var_dump(filter_var(
 $string2, FILTER_VALIDATE_REGEXP,array(
     "options" => array("regexp" =>"/^[a-zA-Z\s]+$/")
 )
)); //it will print: bool(false)


?>
</body>
</html>