<?php
    // die ("done");

    function dump($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }
    // dump($_SERVER);

    // if($_SERVER["REQUEST_SCHEME"]=="http"){
    //     echo"You are using http";
    // }
    // else{
    //     echo"Not using http";
    // }
    dump($_REQUEST);
    dump($_FILES);
    ?>
