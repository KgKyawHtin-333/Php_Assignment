<?php 
    
    

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

   $subtotal_humburger = $humburger * 2;

   
   echo "<br><br><br>";
   echo "<table border=1 cellpadding=10px>
           <thead>
              
                <th> Name </th>
                <th> Price </th>
                <th> Quantity </th>
                <th> Sub total </th>

              
           </thead>
           <tbody>
                <tr> 
                  <td> Humburger </td>
                  <td> $humburger </td>
                  <td> 2 </td>
                  <td> $subtotal_humburger </td>

                  
                </tr>
                <tr>
                   <td> Chocolate Milkshake </td>
                   <td> $chocolate_milk </td>
                   <td> 1 </td>
                   <td> $chocolate_milk</td>
                </tr>
                <tr> 
                   <td> Cola </td>
                   <td> $cola </td>
                   <td> 1 </td>
                   <td> $cola </td>
                 </tr>
                 <tr>
                    <td colspan=3> Pre Tax </td>
                    <td> $pre_tax </td>
                 </tr>
                 < tr>
                    <td colspan=3> Post Tax </td>
                    <td> $post_tax </td>
                  </tr>
                  <tr>
                     <td colspan=3> Total Price </td>
                     <td> $total_price </td>
                  </tr>
             </tbody>



      </table>"




   ;


 ?>