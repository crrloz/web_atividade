<?php
$tam = strlen($_POST['prim_txt']);

if(empty($tam)){
    header("location: ../form.php?error=emptyinput");
    exit();
} else {
    header("location: ../result.php");
    exit();
}