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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add User</title>
    <!-- <link rel="stylesheet" href="addrole.css"> -->
       
</head>
<body>
    <div class="container">
        <label for="txtRole">Roles</label>
        <select id="txtRole" name="role" required>
            <option value="SuperAdmin">SuperAdmin</option>
            <option value="Admin">Admin</option>
            <option value="Employee">Employee</option>
            <option value="Designer">Designer</option>
            <option value="Encoder">Encoder</option>
        </select>
        
        <button id="btnsave" class="btn btn-primary">Save</button>
        <!-- <button id="toggle-theme">🌙</button> -->
    </div>
    <script src="jquery.js"></script>
    <script>
        $(document).on('click', '#btnsave', function() {
            let a1 = $("#txtRole").val();

            if (a1 == "") {
                alert("No role selected!");
            } else {
                $.ajax({
                    url: 'save3.php',
                    method: 'POST',
                    data: {
                        a1: a1
                    },
                    success: function(response) {
                        alert(response);
                    }
                });
            }
        });

        $(document).on('click', '#toggle-theme', function() {
            document.body.classList.toggle("dark-mode");
        });
    </script>
</body>
</html>