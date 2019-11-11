<?php
    $conn = new mysqli('localhost', 'root', 'root', 'cdmx_webcamp');

    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }

?>