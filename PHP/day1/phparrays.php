<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArraysPHP</title>

</head>
<style>
     body {
  background-color: lightblue;
  text-align : center ;
  margin : 20%;
}
h2 {
    color: white;

}
h5 {
    color: green;
}
.experiment {
    color: yellow ;
}
.green {
    color:green ;
}
</style>

<body>
    <?php
    //Associative Arrays keys and values princip 
    $characters_series  = array ("Goku" => 2 , "Shrek" => 4 , "Nemo" => 5, "Spiderman" => 10 , "Hulk" => 6);// mohol by si aj manualne vipisat napr ze  "Goku nana naa, Spiderman naanna ,ale takto pouzijes foreach 
    foreach ($characters_series as $x => $x_value){// to acces a key and value
    echo "<h1>Series with character<h1> <h2>  " .$x . "</h2><h4>  Has   $x_value  epizodes .<h4>" ;   // to co chces mat napisane do uvodzoviek a ostatne s bodkou
    echo "<br>";
    
    }
    //multidimensional array 
    $characters_multi = array (
    "Groku" => array (
        "epizode" => 1 ,
        "color" => "Green" ,
        "motto" => "Das ist der Weg"
    ),
    "Spiderman" => array (
        "epizode" => 10 ,
        "color" => "red"
    ),
    );
    // for each nesting tak sa to da prehliadat cize acces groku , spiderman a v nom nest dalsi foreach..alebo dolu priklad 
     /* Accessing multidimensional array values */
     echo "<h1> Accessing multidimensional array values </h1>";
     echo "<h2>Motto and color of Groku: </h2>";
     echo " <div class = experiment > Motto is :</div>  <h2> ".$characters_multi ["Groku"]["motto"]. "</h2> <div class = experiment > Color is :</div> <br> <div class = green>" .$characters_multi ["Groku"]["color"].  ".</div>  " ; 
     // BODKU DAVAS ZO STRANY KDE ODDELUJES , AK JE VSTREDE TAK AJ PRED AJ ZA 
     // takto to je rozdelene toto bude fungovat <h2> ".$characters_multi ["Groku"]["motto"]. "</h2>

    ;
    echo "<br>";

    //
    // Multidimensional array
$superheroes = array(
    "spider-man" => array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    "super-man" => array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    "iron-man" => array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
 
// Printing all the keys and values one by one
$keys = array_keys($superheroes);
for($i = 0; $i < count($superheroes); $i++) {
    echo $keys[$i] . "{<br>";
    foreach($superheroes[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "}<br>";
}
    ?>

    
</body>
</html>