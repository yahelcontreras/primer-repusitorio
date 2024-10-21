<?php
 echo "<p>Reto Numero 6<p>";
 $ropa = array ("camisa", "pantalon","cinturon");

sort($ropa);
 foreach($ropa as $elemento){
   echo $elemento . "<BR>";
   } 

    array_push($ropa, "gorra");
     array_push($ropa, "calcetines");

 echo "<p> ropa en forma decendente <p>";

   rsort($ropa);
   foreach($ropa as $elemento){
     	 echo $elemento ."<BR>";
  } 
 
 ?>