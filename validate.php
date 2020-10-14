<?php

$name = $_POST['passw'];
if(!empty($_POST)) {
    $name = $_POST['passw'];
    
    $namelen = strlen($name);
   
    $max = 255;
    $minname = 2;
    

    if($namelen < $minname){
        $errors[] = "name must be at least 2 characters";
    } elseif($namelen > $max){
        $errors[] = "name must be less than 255 characters";
    }


    if(empty($name)){
        $errors[] = "Password is required";
    }

    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";

}
?>