<?php
 $number= 7;
 $penultimate=0;
 $last=1;
    
  	echo "0" . "<br />";
	echo "1" . "<br />";

  for($count=1 ; $count <= ($number - 2) ; $count++){
   $x = $last + $penultimate;
   echo $x."<br />";
   
   $penultimate = $last;
   $last = $x;
  } 
?>