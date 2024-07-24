<?php
$age = array('asha'=>20, 'nisha'=>23, 'disha'=>24);

echo "Original Array<br/>";
var_dump($age);


echo "<br/><br/>Printing array through foreach loop...";
echo "<br>";
foreach($age as $a=>$b)
{
    echo "$a : $b"."<br/>";
}

echo "<br/><br/>Updating value of nisha...";
$age['nisha']=3;
echo $age['nisha'];

echo "<br/><br/>Sorted Array...according to value<br/>";
echo asort($age);
foreach($age as $a=>$b)
{
    echo "$a : $b"."<br/>";
}

echo "<br/><br/>Sorted Array...according to Key<br/>";
echo ksort($age);
foreach($age as $a=>$b)
{
    echo "$a : $b"."<br/>";
}
?>