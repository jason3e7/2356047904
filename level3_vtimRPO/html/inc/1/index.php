<?php
    $param = parse_url(urldecode($_SERVER['REQUEST_URI']), PHP_URL_QUERY);
    parse_str($param, $output);
    $text = htmlspecialchars($output['query']);
?>
<html>
<head>
</head>
<body>
  <h1>ECHO-Bot</h1>
  <form action="index.php" method="get">
    <input type="text" name="query"><br>
    <input type="submit" value="sent">
  </form>
  <br><br><br>
  <div id="re">
    <h2>Echo</h2>
    <p><?=$text?></p>
  </div>
</body>
</html>
