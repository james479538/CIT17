
<?php
  $cities = array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");
    
    foreach($cities as $c){
      echo "$c, ";
    }
    sort($cities);
    
      echo "\n";
      foreach($cities as $c){
        echo "$c\n";
      }
      echo "\n";
      
      array_push($cities, "Los Angeles","Calcutta","Osaka","Beijing");
      
      sort($cities);
      echo "\n";
      foreach($cities as $c){
        echo "$c\n";
      }
      echo "\n";
?>