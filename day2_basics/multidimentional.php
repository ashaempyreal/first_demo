<?php
    $cars = array(
        array('volvo', 'bmw', 'kia'),
        array(10, 20, 30),
        array(2,4, 6),
        array(2,4, 6)
    );
    // echo $cars[0][2];
    for($row=0;$row<4;$row++)
    {
        for($col=0;$col<3;$col++)
        {
            echo $cars[$row][$col]." | ";
        }
        echo "<br>";
    }
?>