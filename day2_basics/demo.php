<?php
// echo phpversion();
// function for add in array
function myFunction(){
    echo "Text Inside function<br/>";
}

$arr = array('color', 'green', myFunction());

echo "<br>Printing of Indexed array<br>";
echo "<br>";    
var_dump($arr);

echo '<br/><br/>Items in array ::'.count($arr)."<br/>";

echo "Updating first index value.<br/>";
$arr[0]='red';
var_dump($arr);

echo "<br/><br/>Printing array through foreach loop...<br/>";
foreach($arr as $i)
{
    echo $i."<br>";
}

echo "Adding new value in array<br/>";
array_push($arr, 'yello');
foreach($arr as $a)
{ 
    echo $a."<br>";
}

$food = ["sandwich", "piza", "burger", "chips"];
echo "<br>";
echo var_dump($food);
sort($food);
echo "<br>::Sorted array::<br/>";
$alength =  count($food);
for($i=0;$i<$alength;$i++){
    echo $food[$i]."<br>";
}

echo "<br/>Example<br/>";
$stud = ['nisha', 
'prisha',
 'krisha'];
var_dump($stud);
rsort($stud);
print "<br>Reverser sorted array.<br/>";
foreach($stud as $nm){
    echo $nm."<br>";
}
echo "<br/>Array Splice<br/>";
array_splice($stud,0,2);
unset($stud[2]);
var_dump($stud);
?>