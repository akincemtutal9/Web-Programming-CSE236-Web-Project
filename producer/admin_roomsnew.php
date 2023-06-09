<?php
include '../php/session_admin.php';
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
    <script src="../js/deleteuser.js"></script>
    
    
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-user me-2"></i>Home Auto</div>
            <div class="list-group list-group-flush my-3">
                <a href="../producer/admin_page.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-calendar-alt me-2"></i>Dashboard</a>
                <a href="../producer/admin_rooms.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-door-open"></i> Rooms</a>
                <a href="../producer/admin_devices.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-hammer"></i> Sensors</a>
                <a href="../producer/admin_consumers.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-user me-2"></i>Consumers</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-star me-2"></i>Reviews</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-message-dots me-2"></i>Messages</a>
                <a href="../login-signup/login_form.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Consumers</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php echo $_SESSION['admin_name']  ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="../login-signup/login_form.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row my-5 mb-2">
                   
                        
                        <div class="d-flex mb-3">
                            <div class="me-auto "><h3>Rooms</h3></div>
                            
                            <button type="button"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                                </svg>
                                Add Room
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Room</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post">
                                                <div class="row w-75 m-auto ">
                                                    <div class="col-md-12 mt-2"><label class="labels">Room Name</label><input type="text" class="form-control " placeholder="Enter Room Name" value=""></div>
                                                        <div class="col-md-12 mt-2"><label class="labels">Temperature</label><input type="text" class="form-control" value="" placeholder="Enter Temperature"></div>
                                                        <div class="col-md-12 mt-2"><label class="labels">Humidity</label><input type="text" class="form-control" placeholder="Enter Humidity" value=""></div>
                                                        <div class="col-md-12 mt-2"><label class="labels">Icon</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                                <option value="1">Bedroom</option>
                                                                <option value="2">Kitchen</option>
                                                                <option value="3">Children Room</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                          
                        
                    
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">id</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Room</th>
                                    <th scope="col">Number of Device</th>
                                    <th scope="col">Update/Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include '../php/list_rooms.php';                                
                                ?>
                                
                            </tbody>
                            
                        </table>
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