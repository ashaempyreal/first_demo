<?php
// pattern 4
echo "<h4>Pattern 4</h4>";

for($i=5;$i>=1;$i--)
{
    for($j=5;$j>=$i;$j--){
        echo $j;
    }
    echo " <br> ";
}
echo "________________________________<br>";
for ($i =1 ; $i <= 5; $i++) 
{
    for ($j = 5; $j >= $i; $j--)
    {
        echo $j;
    }
    echo "<br>";
}
?>