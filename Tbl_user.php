<?php
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }

    if(!isset($_SESSION['user'])){
        header('location: index.php');
    }
?>

<link rel="stylesheet" type="text/css" href="tbl_meter_css.css">
<body>
    <table border=1> 
        <h1>TBL USER</h1>
            <thead>
<tr>
                <td>UserID</td>
                <td>Username</td>
                <td>Password</td>
                <td>Role Id</td>
                <td>Actions</td>
</tr>
            </thead>
        <tbody>
                <?php
                    include("E_consumption.php");
                    
                    //query
                    $query = mysqli_query($con,"SELECT * FROM tbl_user");


                    //
                    while($result= mysqli_fetch_array($query)){
                     ?>
                        <tr >
                        <td> <?php echo $result["User_id"];?></td>
                        <td> <?php echo $result["Username"];?></td>
                        <td> <?php echo $result["Passwords"];?></td>
                        <td> <?php echo $result["Role_Id"];?></td>
                        <td> <a href="Edit_user.php?id=<?php echo $result['User_id'];?>"> Edit </a>
                        <button style="font-weight: bold;
                        letter-spacing: 2px;"    
                        class="btndeleteuser"
                        User_Id="<?php echo $result['User_id']; ?>">
                        Delete
                        </button>
                    <!--  -->
                        </td>

                        </tr>
                    <?php
                    }
                ?>


                
              
            </tbody>
    </table>
    <!-- prefinals  -->

    <script src="jquery.js"></script>
    <script>
        $(document).on('click','.btndeleteuser',function(){
            let a4 = $(this).attr('User_Id');
            if(confirm("DELETE A USER??????!!!")){
            $.ajax({
                url:'delete_user1.php',
                method:'POST',
                data:{
                    a4:a4
                },
                    success:function(response){
                    alert(response);
                    location.reload();
                }
            })
        }

        })
    </script>
</body>