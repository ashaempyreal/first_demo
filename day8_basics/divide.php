<?php
$count =1;
while($count<=100)
{
  if($count%33===0)
  {
    echo $count." - is divisible by 33";
    echo "<br>";
  }
  
    $count+=1;

}
  $plant_height = 22;
  // $plant_height = 22;
do{
  echo "The plant height is".$plant_height."<br>";
  $plant_height+=1;

}
while($plant_height<=30);

$count = 1;
while ($count < 11)
{
  if ($count === 5) {
    $count += 1;
    continue;
  }
  echo "The count is: " . $count . "\n";
  echo "<br>";  
  $count += 1;
}

// function expectTwo($first, $second)
// {
//   return "whatever";
// }

// echo expectTwo("test")

function first()
{
  echo "This works!\n";
}
function second()
{
  first();
}
second();

$feed_quantity = 300;
function calculateDaysLeft($number, $rate)
{
  global $feed_quantity;
  $result = $feed_quantity / ($number * $rate);
  return $result;
}
echo calculateDaysLeft(2, 120);
$name ="<br>abhi ";
echo str_repeat($name, 10);
?>
