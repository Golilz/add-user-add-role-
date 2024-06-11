<?php
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }

    if(!isset($_SESSION['user'])){
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <!-- <link rel="stylesheet" href="addUser.css"> -->
</head>
<body>
    <div class="container">
        <h1>Add User</h1>
        <label for="txtUsername">Username</label>
        <input type="text" name="txtUsername" id="txtUsername" required>
        
        <label for="txtPassword">Password</label>
        <input type="text" name="txtPassword" id="txtPassword" required>
        
        <label for="txtRole">Role Id</label>
        <input type="text" name="txtRole" id="txtRole" required>

        <label for="txtPassword1">Retype Password</label>
        <input type="text" name="txtPassword1" id="txtPassword1" required>
        
        <button id="btnsave">Send</button>
    </div>
    
    <script src="jquery.js"></script>
    <script>
        $(document).on('click', '#btnsave', function() {
            let a1 = $("#txtUsername").val();
            let a2 = $("#txtPassword").val();
            let a3 = $("#txtRole").val();
            let a4 = $("#txtPassword1").val();

            if (a1 == "") {
                alert("NO Username NO NO WANNA😑");
            } else if (a2 == "") {
                alert("Password NO NO NO INPUT😤😩");
            } else if (a3 == "") {
                alert("Role_ID NO NO NO INPUT😤😩");
            } else if (a4 == "") {
                alert("Re-type Password NO NO NO INPUT😤😩");
            }else {
                $.ajax({
                    url: 'save2.php',
                    method: 'POST',
                    data: {
                        a1: a1,
                        a2: a2,
                        a3: a3,
                        a4: a4
                    },
                    success: function(response) {
                        alert(response);
                    }
                });
            }
        });
    </script>
</body>
</html>
