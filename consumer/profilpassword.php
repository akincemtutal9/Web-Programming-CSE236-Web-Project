<?php
include '../php/session_user.php';
include '../database/config.php';

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_password = mysqli_real_escape_string($conn ,$_POST['new_password']);
    $again = mysqli_real_escape_string($conn ,$_POST['again']);
    if($new_password != $again ){
        echo "Password couldn't confirmed!";
    }
    else {
        $md5_password = md5($new_password);
        $query = "UPDATE user SET password = '$md5_password' WHERE userID = '$user_id'";
        mysqli_query($conn, $query);
        header("Location:profil.php");
    exit;
    }

    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            font-family: "Montserrat", sans-serif;
        }
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/adminstyle.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/user-account.css'>
    <script src="../js/deleteuser.js"></script>
    
    
    <title>Change Password</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <?php  include "consumer_sidebar.php"?>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-dark">Account</h2>
                </div>
                
                <?php include 'navbar.php';?>

            <div class="user-page">
                <div class="sidebar-user">
                    <div class="user-photo">
                        <img src="../images/profile.png" alt="user image">
                        <h3><?php echo $_SESSION['user_name']  ?></h3>
                    </div>
                    <div class="actions">
                        <ul>
                            <li><a href="profil.php" class="not-chosen"> My Account</a></li>
                            <li><a href="profiledit.php" class="not-chosen">Edit Account</a></li>
                            <li><a href="profilpassword.php" class="chosen">Change Password</a></li>
                        </ul>
                    </div>
                </div>
                <div class="user-info-board">
                    <h1>Change Password</h1>
                    
                        <form  class="pt-4" action="" method="post">
                            <div class="row ">
                                <div class="col-md-12"><label class="labels">New Password</label><input type="password" id="new_password" name="new_password" placeholder="New Password"></div>
                                <div class="col-md-12"><label class="labels">Confirm New Password</label><input type="password" id="again" name="again" placeholder="Confirm"></div>
                                <div class=" text-center"><button class="btn btn-primary profile-button w-100" type="submit">Submit</button></div>
                        </form>
                     
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>