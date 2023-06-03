<?php
include '../php/session_user.php';
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
    <script src="../js/deleteuser.js"></script>
    
    
    <title>Rooms</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-user me-2"></i>Home Auto</div>
                <div class="list-group list-group-flush my-3">
                    
                    <a href="consumernew.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-door-open"></i> Rooms</a>
                    
                    <a href="statistics.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-calendar-alt me-2"></i>Statistics</a>
                    <a href="profil.php" class="list-group-item list-group-item-action bg-transparent second-text "><i class="fas fa-user me-2"></i>Account</a>
                    <a href="chart.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-star me-2"></i>Chart</a>
                    <a href="../php/logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
                </div>
            </div>

            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                        <h2 class="fs-2 m-0 text-dark">Consumer</h2>
                    </div>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user me-2"></i><?php echo $_SESSION['user_name']  ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="profil.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="room-container">
                    <?php

                        include '../php/user_list_room.php';
                    ?>
        
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