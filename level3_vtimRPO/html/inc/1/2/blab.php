<?php
    $param = parse_url(urldecode($_SERVER['REQUEST_URI']), PHP_URL_QUERY);
    parse_str($param, $output);
    $text = htmlspecialchars($output['query']);
    if($text) {
        if(strlen($text) > 12) {
            $blab = "Stop!!! I am good at keeping secret!!!";
        } else {
            $blab = "OKOK.... No more secret!";
            show_source($text);
        }
    }
?>
<html>
<body>
  <h1>BLAB-Bot</h1>
  <p>I can tell you JOKE-Bot's secret ... <a href="blab.php?query=../joke.php">here</a>, you are welcome... o$_$o</p><br>
  <?=$blab?>
</body>
</html>
