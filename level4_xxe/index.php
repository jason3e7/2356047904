<?php
error_reporting(0);
if(isset($_GET['CTF'])) {
    if(md5($_GET['CTF']) == "0e18392710126963017897398712") {
        $data = file_get_contents('php://input');
        $xml = @new SimpleXMLElement($data);
        echo $xml->MyFirstCTF;
    }
} else {
    echo "<h1>你了解XXE了嗎?</h1>";
    echo "<br>";
}
highlight_file(__FILE__);
