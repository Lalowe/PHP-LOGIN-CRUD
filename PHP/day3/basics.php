Shortest solution for the last one:
$br = "<br>";

for ($i = 1; $i <= 100; $i++) 
{
  if ($i % 15 == 0)  {
      echo "Full-Stack".$br;
  } elseif ($i % 5 == 0) {
      echo "Front-End".$br;
  } elseif ($i % 3 == 0) {
      echo "Back-End".$br;
  } else {
      echo $i.$br;
  }
}