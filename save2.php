<?php

if(isset($_POST{'a1'}) && 
isset($_POST{'a2'}) && 
isset($_POST{'a3'}) && 
isset($_POST{'a4'}) )

{
    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $a4 = $_POST['a4'];
    
    include('E_consumption.php');
    $savequery = mysqli_query($con,
    "insert into tbl_user values(null,'$a1','$a2','$a3','$a4') "); 

    if($savequery){
        echo "user Has Been save!";
    }
    else{
        echo mysqli_error($con);
    }
}
    else{
    exit();
    }
?>