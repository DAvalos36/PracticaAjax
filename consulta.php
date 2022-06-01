<?php
    $b = $_GET["b"];
    
    $arch = file("perritos.dat");

    $res = preg_grep("/$b */", $arch);

    foreach ($res as $value) {
        echo "<li onclick='asd(this.text)'> $value </li>";
    }

?>