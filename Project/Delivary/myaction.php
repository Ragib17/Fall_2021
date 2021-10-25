<?php

$validationmessage1="";

if(isset($POST["submit"])){
    $pName=$_post["pName"];
    if(empty($pName))
    {
        $validationmessage1="please enter name";
    }
    else
    {
        echo "";
    }
}


?>