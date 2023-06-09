<?php
include '../php/session_user.php';
include '../database/config.php';


$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM user WHERE userID = '$user_id'";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $subject = mysqli_real_escape_string($conn ,$_POST['subject']);
    $message = mysqli_real_escape_string($conn ,$_POST['message']);
   
    $query = "INSERT INTO message (userID, subject, message) VALUES ('$user_id', '$subject', '$message')";
    mysqli_query($conn, $query);

    header("Location:profilsupport.php");
    exit;
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
    
    
    <title>Support</title>
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

            <div class="user-page mt-3">
                
                <div class="user-info-board">
                    <h1>Support</h1> 
                        <form  action="" method="post">
                            <div class="row ">
                                <div class="col-md-12"><label class="labels">Subject</label><input type="text" id="subject" name="subject" placeholder="Subject"></div>
                                <div class="col-md-12"><label class="labels">Address Line 1</label><textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea></div>
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