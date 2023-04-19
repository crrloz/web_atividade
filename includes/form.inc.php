<?php
$tam = strlen($_POST['prim_txt']);

function emptyInput($tam){
    $result;
    if(empty($tam)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

if(emptyInput($tam) !== false){
    header("location: ../form.php?error=emptyinput");
    exit();
} else {
    header("location: ../result.php");
    exit();
}