<?php
    for($i=0; $i<5;$i++)
    {
        for($j=0;$j<$i-1;$j++)
        {
            echo "&nbsp;&nbsp;";
        }
        for ($j = $i; $j <5; $j++) {
            echo " * ";
        }
        echo "<br>";
    }

?>
