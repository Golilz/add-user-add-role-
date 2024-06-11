<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    include_once('E_consumption.php');
    $searchquery = mysqli_query($con, "select * from tbl_user where User_Id=' $id' ");

    if(mysqli_num_rows($searchquery) > 0) { //check if it found record/s

    $row = mysqli_fetch_array($searchquery); //collects all found records

  
    $Username =$row["Username"];
    $Passwords =$row["Passwords"];
    $Role_Id =$row["Role_Id"];
 
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT User Manual🫂</title>
</head
>
<body>
<h1>User's Manual</h1>
    <label for="txtUsername">Username</label>
    <input type="text" name="txtUsername" id="txtUsername" value="<?php echo $Username; ?>">
    <br> <br>
    <label for="txtPassword">Password</label>
    <input type="text" name="txtPassword" id="txtPassword" value="<?php echo $Passwords; ?>">
    <br> <br>
    <label for="txtRole">Role Id</label>
    <input type="text" name="txtRole" id="txtRole" value="<?php echo $Role_Id; ?>">
    <br> <br>
    
   

    <button id="btnupdate" edit_id="<?php echo $id; ?>">Save Buttown</button>
<br>
<script src="jquery.js"></script>
<script>

    $(document).on('click','#btnupdate', function(){
        let a4=$("#btnupdate").attr('edit_id');
            alert(a4);
        //algorithm
        //1.get inputs
        //2.validations
        //3.Data cascading
        //4.Response/feedback
        let a1 = $("#txtUsername").val();
        let a2 = $("#txtPassword").val();
        let a3 = $("#txtRole").val();
       


    if(a1==""){
        alert("NO Username NO NO WANNA😑")
    }
    else if(a2==""){
        alert("Password NO NO NO INPUT😤😩") 
    }
    else if(a3==""){
        alert("ROLE NO NO NO INPUT😤😩") 
    }
    else{
        $.ajax({
        url:'update_user.php',
        method:'POST',
        data:{
          a1:a1,
                a2:a2,
                    a3:a3,
                        a4:a4

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



