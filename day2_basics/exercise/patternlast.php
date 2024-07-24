<?php
    // pattern 6
echo "<h4>Pattern 6</h4>";
    for($i=1;$i<=10;$i++){//ROW
        for($j=1;$j<=$i;$j++)//COLUMN
        {
            if($j%2==0 && $i%2==0)
            {
                echo " ".$j." ";
            }
        }
        echo "<br>";

    }
?>