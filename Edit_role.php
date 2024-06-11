<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    include_once('E_consumption.php');
    $searchquery = mysqli_query($con, "select * from tbl_role where Role_Id=' $id' ");

    if(mysqli_num_rows($searchquery) > 0) { //check if it found record/s

    $row = mysqli_fetch_array($searchquery); //collects all found records
    $Roles =$row["Roles"];

  
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT🫂</title>
</head>
<body>
    <h1>EDIT🫂</h1>
    <label for="txtRoles">Roles</label>
    <select id="txtRoles" name="role" value="<?php echo $Roles; ?>" required >
                <option value="SuperAdmin">SuperAdmin</option>
                <option value="Admin">Admin</option>
                <option value="Employee">Employee</option>
                <option value="Designer">Designer</option>
                <option value="Encoder">Encoder</option>
            </select>
    <br> <br>
 
    

    <button id="btnupdate" edit_id="<?php echo $id; ?>">Save Buttown</button>
<br>
<script src="jquery.js"></script>
<script>

    $(document).on('click','#btnupdate', function(){
        let a2=$("#btnupdate").attr('edit_id');
            alert(a2);
        //algorithm
        //1.get inputs
        //2.validations
        //3.Data cascading
        //4.Response/feedback
        let a1 = $("#txtRoles").val();
      
      


    if(a1==""){
        alert("NO Roles NO NO WANNA😑")
    }
    else{
        $.ajax({
        url:'update_role.php',
        method:'POST',
        data:{
          a1:a1,
            a2:a2

        },
        success: function(Response){
        alert(Response);
            }
            })
        }

    });
    </script>
</body>
</html>
<?php
    }
}
?>



