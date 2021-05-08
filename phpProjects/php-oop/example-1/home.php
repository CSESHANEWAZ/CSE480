<?php

    require_once('hello.php');

    //create an object
    $objDemo = new Demo();

    $objDemo -> name = "How are you...?";
    $objDemo -> SayHello($objDemo -> name);

?>