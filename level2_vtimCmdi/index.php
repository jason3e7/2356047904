<html>
  <body>
  <h1>HTTP Header Reader v0.008</h1>
  <form action="index.php" method="POST">
    <input type="text" size="50" name="url" placeholder="URL">
    <input type="submit" value="submit">
  </from>
  <?php
    $url = str_replace(";", "\;", $_POST['url']);
    $output = shell_exec("curl -I -X GET ".$url);
    if($output != ""){
      echo "<h3>Here's your header :</h3>";    
      $array = explode("\n",$output);    
      echo "<pre>";    
      foreach($array as $str) {       
        echo $str;       
        echo "";    
      }    
      echo "</pre>";
  }?>
  </body>
</html>