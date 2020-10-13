<?php 

  // echo "Hello";
  
  $location = array("NY","CA","IL","TX","PA","AZ","TX","CA","TX","CA");

  $population = array(8175133,3792621,2695598,2100263,1526006,1445632,1327407,1307402,1197816,945942 );

  echo "<table border=1 cellpadding=10px>
         <thead>
             <th> City Name </th>
             <th> Location </th>
             <th> Population </th>
             
         </thead>
         <tbody>
             <tr>
                <td> New York </td>
                <td> $location[0] </td>
                <td> $population[0] </td>
              </tr> 
              <tr>
                <td> Los Angeles </td>
                <td> $location[1] </td>
                <td> $population[1] </td>
              </tr> 
              <tr>
                <td> Chicago </td>
                <td> $location[2] </td>
                <td> $population[2] </td>
              </tr> 
              <tr>
                <td> Houston </td>
                <td> $location[3] </td>
                <td> $population[3] </td>
              </tr> 
              <tr>
                <td> Philadelphia </td>
                <td> $location[4] </td>
                <td> $population[4] </td>
              </tr> 
              <tr>
                <td> Phoenix </td>
                <td> $location[5] </td>
                <td> $population[5] </td>
              </tr> 
              <tr>
                <td> San Antonio </td>
                <td> $location[6] </td>
                <td> $population[6] </td>
              </tr> 
              <tr>
                <td> San Diego </td>
                <td> $location[7] </td>
                <td> $population[7] </td>
              </tr> 
              <tr>
                <td> Dallas  </td>
                <td> $location[8] </td>
                <td> $population[8] </td>
              </tr> 
              <tr>
                <td> San Jose  </td>
                <td> $location[9] </td>
                <td> $population[9] </td>
              </tr> 
          </tbody>

  
  <table>";
  echo "<br><br><br>";

  $ordering = array(
     "New York"    => 8175133,
     "Los Angeles" => 3792621,
     "Chicago"     => 2695598,
     "Houston"     => 2100263,
     "Philadelphia"=> 1526006,
     "San Antonio" => 1327407,
     "San Diego"   => 1307402,
     "Dallas"      => 1197816,
     "San Jose"    => 945942 
        );
  
  arsort($ordering);
     
        echo " <table border=1 cellpadding=10px>   
               <thead>
                  <th>City Name</th>
                  <th>Sort by Population</th>
                 </thead>";
  	 foreach ($ordering as $key => $value) {
  	 	     echo "
                
                <tbody>
                  <td>$key</td>
                  <td>$value</td>
                </tbody>";
            }
            


  	 	     
  	            
  	    echo "</table>";
  	    echo "<br><br><br>";
    $city = array( 
    "New York"    => "NY(8175133)",
     "Los Angeles" => "CA(3792621)",
     "Chicago"     => "IL(2695598)",
     "Houston"     => "TX(2100263)",
     "Philadelphia"=> "PA(1526006)",
     "San Antonio" => "TX(1327407)",
     "San Diego"   => "CA(1307402)",
     "Dallas"      => "TX(1197816)",
     "San Jose"    => "CA(945942)"

   );

     ksort($city);
       
       echo " <table border=1 cellpadding=10px>   
               <thead>
                  <th>City Name</th>
                  <th>Sort by City Name</th>
                 </thead>";
  	 foreach ($city as $key => $value) {
  	 	     echo "
                
                <tbody>
                  <td>$key</td>
                  <td>$value</td>
                </tbody>";
            }
            


  	 	     
  	            
  	    echo "</table>";


 ?>