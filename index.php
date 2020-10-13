<?php 
    
    echo "<h1> Your Bill <h1>"

    $humburger = 4.95;
    $chocolate_milk = 1.95;
    $cola = 0.85;

    $total = $humburger*2+$chocolate_milk+$cola;

    echo "Humburger Price : ".$humburger*2;
    echo "<br><br>";

    echo "Chocolate Milkshake Price : ".$chocolate_milk;
    echo "<br><br>";

    echo "Cola Price : ".$cola;
    echo "<br><br>";

    $pre_tax=$total*16/100;

    echo "Pre-tax tip : ".$pre_tax;
    echo "<br><br>";
    
    $post_tax=$total*7.5/100;
    echo "Post tax : ".$post_tax;
    echo "<br><br>";

   $total_price=$pre_tax+$post_tax+$total;
   echo "Total Price : ".$total_price;




 ?>