<?php
include '../php/session_admin.php';

$user_name = $_SESSION['admin_name'];

$user_id = $_SESSION['admin_id'];

$sql = "SELECT * FROM user WHERE userID = '$user_id' AND name = '$user_name'"; 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['admin_id'];
    $name = mysqli_real_escape_string($conn ,$_POST['name']);
    $surname = mysqli_real_escape_string($conn ,$_POST['surname']);
    $phone_number = mysqli_real_escape_string($conn ,$_POST['phone_number']);
    $address = mysqli_real_escape_string($conn ,$_POST['address']);
    $email = mysqli_real_escape_string($conn ,$_POST['email']);

    $query = "UPDATE user SET name='$name', surname='$surname', phone_number='$phone_number', address='$address', email='$email' WHERE userID='$user_id'";
    mysqli_query($conn, $query);
    header("Location:../producer/admin_profile.php");
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


    <title>Edit Account</title>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <?php include '../producer/admin_sidebar.php' ?>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-dark">Account</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php include '../producer/admin_dropdown.php'?>
            </nav>

            <div class="user-page">

                <?php include '../producer/admin_profile_sidebar.php' ?>

                <div class="user-info-board">
                    <h1>Edit Account</h1>
                    <div class="user-infos">
                        <form name="editProfile" method="post" action="">
                            <div class="row">
                                <div class="col-md-6"><label class="labels">Name</label><input name="name" type="text" class="form-control form-control-sm" placeholder="first name" value="<?php echo $_SESSION['admin_name'] ?>"></div>
                                <div class="col-md-6"><label class="labels">Surname</label><input name="surname" type="text" class="form-control form-control-sm" value="<?php echo $_SESSION['admin_surname'] ?>" placeholder="surname"></d>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><label class="labels">Mobile Number</label><input name="phone_number" type="text" class="form-control form-control-sm" placeholder="enter phone number" value="<?php echo $_SESSION['admin_phonenumber'] ?>"></div>
                                    <div name="address" class="col-md-12"><label class="labels">Address Line 1</label><input name="address" type="text" class="form-control form-control-sm" placeholder="enter address line 1" value="<?php echo $_SESSION['admin_address'] ?>"></div>
                                    <div name="email" class="col-md-12"><label class="labels">Email ID</label><input name="email" type="text" class="form-control form-control-sm" placeholder="enter email id" value="<?php echo $_SESSION['admin_email'] ?>"></div>
                                    
                                    </div>
                                    <div class=" text-center"><input class="btn btn-primary profile-button w-100" name="submit" type="submit" value="Save Profile"></input></div>
                        </form>
                    </div>
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