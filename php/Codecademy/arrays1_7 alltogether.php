<html>
  <head>
    <title>I am the King of Arrays!</title>
  </head>
  <body>
    <p>
      <?php
      // On the line below, create your own associative array:
      
      $myArray = array(
          'breed' => 'burmese',
          'colour' => 'blue',
          'name' => 'Rocky'
          );


      // On the line below, output one of the values to the page:
      
      echo $myArray['name'];
     
     echo '<br /><br />';
          
      // On the line below, loop through the array and output
      // *all* of the values to the page:
      
      foreach ($myArray as $items => $value) {
          echo $items . ': ' . $value . '<br />';
      }
     
     
      ?>
    </p>
  </body>
</html>