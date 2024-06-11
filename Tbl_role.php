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
        <h1>Roles</h1>
            <thead>
<tr>
    <td>Role ID</td>
    <td>Roles</td>
    <td>Actions</td>
</tr>
            </thead>
        <tbody>
                <?php
                    include("E_consumption.php");
                    
                    //query
                    $query = mysqli_query($con,"SELECT * FROM tbl_role");


                    //
                    while($result= mysqli_fetch_array($query)){
                     ?>
                        <tr >
                        <td> <?php echo $result["Role_Id"];?></td>
                        <td> <?php echo $result["Roles"];?></td>
                        <td> <a href="Edit_role.php?id=<?php echo $result['Role_Id'];?>"> Edit </a>
                       
                        <button style="font-weight: bold;
                        letter-spacing: 2px;"    
                        class="btndeleteuser"
                        Role_ID="<?php echo $result['Role_Id']; ?>">
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
            let rid = $(this).attr('Role_Id');
            if(confirm("DELETE A USER??????!!!")){
            $.ajax({
                url:'delete_role.php',
                method:'POST',
                data:{
                    rid:rid
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