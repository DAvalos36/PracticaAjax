<?php
    $b = $_GET["b"];
    
    $arch = file("perritos.dat");

    $res = preg_grep("/$b */", $arch);

    foreach ($res as $value) {
        echo "<li onclick='textoEnBarra(this.textContent)'>$value</li>";
    }

?>