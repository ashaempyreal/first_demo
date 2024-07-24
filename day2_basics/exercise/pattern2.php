<?php
// pattern 2
echo "<h4>Pattern 2</h4>";
    for($i=1;$i<=5;$i++)
    {
        for($j=1;$j<=$i;$j++){
            if($i%2!==0){
                echo " * "; 
            }  
            else
            {
                echo " # ";
            } 
        }
        echo " <br> ";
    }

?>