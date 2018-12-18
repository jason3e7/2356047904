<head>
<link href="https://fonts.googleapis.com/css?family=IM+Fell+French+Canon+SC" rel="stylesheet">
</head>
<body style="background-color: #fefad0;font-family: 'IM Fell French Canon SC', serif;font-size:20px">

<h1>Youtube Viewer</h1>

Give me a valid youtube id:
<form method="get">
<input type="text" name="v">
<input type="submit">
</form><br><br>
Example: uCLEq9V0-Yk
<br>
I will check your input is valid youtube id or not.
<br><br>
<?php
        $default="uCLEq9V0-Yk";
        if(isset($_GET['v'])) {
                $tmp = $_GET['v'];
                $res = shell_exec("curl -i 'https://img.youtube.com/vi/$tmp/0.jpg'");
                if(strpos($res, "404 Not Found") !== FALSE) {
                        echo "<h3>Q___Q  Your input seems invalid.</h3><br>";
                } else {
                        $default = $tmp;
                }
        }
?>
<iframe id="ytplayer" type="text/html" width="640" height="360"
  src="https://www.youtube.com/embed/<?php echo $default; ?>?autoplay=0"
  frameborder="0"></iframe>
<!-- hint: backend will download/view the youtube video image and check it exist or not. -->
<!-- Try more payload -->
</body>