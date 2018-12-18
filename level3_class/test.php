<?php
foreach (get_declared_classes() as $value) {
    echo $value;
    if(in_array("__construct", get_class_methods($value))) {
        echo " have __construct.";
    }
    echo "<br>";
}
