<?php

function grade($i){ 
    if ($i >=90){
		echo "A+";
	}
    else if($i > 80 && $i < 90){ 
        echo "A";  
    } 
    else if($i > 70 && $i < 80){ 
        echo "B";  
    } 
	else if($i > 60 && $i < 70){ 
        echo "C";  
    } 
	else "F";
} 
  
 
$i = 77; 
grade($i)

?>