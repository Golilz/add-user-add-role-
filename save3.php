<?php

if(isset($_POST{'a1'})  )
{
    $a1 = $_POST['a1'];
  
    

    include('E_consumption.php');
    $savequery = mysqli_query($con,
    "insert into tbl_role values(null,'$a1') "); 

    if($savequery){
        echo "Role Has Been save!";
    }
    else{
        echo mysqli_error($con);
    }
}
    else{
    exit();
    }
?>