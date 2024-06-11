<?php

if(isset($_POST['a1']) && 
isset($_POST['a2']) && 
isset($_POST['a3']) && 
isset($_POST['a4']) )
{
    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $a4 = $_POST['a4'];

    include('E_consumption.php');
   
//    User_id	
//    Username	
//    Email	
//    Password_Hash	
    $updatequery = mysqli_query($con,"UPDATE tbl_user SET 
    Username='$a1', Passwords='$a2', Role_id='$a3' where User_id='$a4'");

    if($updatequery){
        echo "Record Was Updated";
    }
    else{
        echo mysqli_error($con);
    }
}
else {
    exit();
}
?>
