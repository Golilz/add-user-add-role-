<?php
// echo"testing";
if ( 
isset($_POST['a1'])&&
isset($_POST['a2'])

){

$a1 = $_POST['a1'];
$a2 = $_POST['a2'];


include('E_consumption.php');
$updatequery=mysqli_query($con,"Update tbl_role set Roles='$a1' where Role_Id='$a2'");
if($updatequery){
    echo "Record save";
}else{
    echo mysqli_error($con);
}
}
else{
    exit();
}
?>

