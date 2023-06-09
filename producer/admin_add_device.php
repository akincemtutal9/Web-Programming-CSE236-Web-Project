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
        <?php include '../producer/admin_sidebar.php' ?>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Create Device</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php include '../producer/admin_dropdown.php' ?>
            </nav>

            <div class="container-fluid px-5">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="d-flex justify-content-start align-items-center">
                    <a href="../producer/admin_edit_devices.php?userID=<?php echo $_GET['userID'] ?>&roomID=<?php echo $_GET['roomID'] ?>" class="btn btn-danger btn-lg">
                            <span class="fw-bold">-</span> Go Back To Edit Devices
                        </a>
                    </div>
                </div>


            <div class="container-fluid px-4">
                <div class="row my-5 mb-3">
                    <div class="col-12 text-center">
                        <h3>Create Light</h3>
                        <p class="text-muted">Click update after creating device</p>
                    </div>

                    <div class="col-12 col-md-6 offset-md-3">
                        <form action="../admin_php/create_light.php?" method="post">
                            <div class="mb-3 d-flex-column align-items-center">
                                <input type="hidden" name="roomID" value="<?php echo $_GET['roomID']; ?>">
                                <label class="form-label rounded-pill px-3 py-2" style="color: #000000; font-weight: bold;">Light Name:</label>
                                <input type="text" class="form-control form-control-lg rounded-pill border-0 shadow flex-grow-1" name="device_name" value="" placeholder="Light Name" style="border-radius: 20px;">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary btn-lg mt-2 rounded-pill w-100" name="submit" value="Create Light" style="border-radius: 20px;">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row my-5 mb-2">
                    <div class="col-12 text-center">
                        <h3>Create Air Conditioner</h3>
                        <p class="text-muted">Click update after creating device</p>
                    </div>

                    <div class="col-12 col-md-6 offset-md-3">
                        <form action="../admin_php/create_air_conditioner.php?" method="post">
                            <div class="mb-3 d-flex-column align-items-center">
                                <input type="hidden" name="roomID" value="<?php echo $_GET['roomID']; ?>">
                                <label class="form-label rounded-pill px-3 py-2" style="color: #000000; font-weight: bold;">Air Conditioner Name:</label>
                                <input type="text" class="form-control form-control-lg rounded-pill border-0 shadow flex-grow-1" name="device_name" value="" placeholder="Air Conditioner Name" style="border-radius: 20px;">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary btn-lg mt-2 rounded-pill w-100" name="submit" value="Create Air Conditioner" style="border-radius: 20px;">
                            </div>
                        </form>
                    </div>
                </div>



                <div class="row my-5 mb-2">
                    <div class="col-12 text-center">
                        <h3>Create Dishwasher</h3>
                        <p class="text-muted">Click update after creating device</p>
                    </div>

                    <div class="col-12 col-md-6 offset-md-3">
                        <form action="../admin_php/create_dishwasher.php?" method="post">
                            <div class="mb-3 d-flex-column align-items-center">
                                <input type="hidden" name="roomID" value="<?php echo $_GET['roomID']; ?>">
                                <label class="form-label rounded-pill px-3 py-2" style="color: #000000; font-weight: bold;">Dishwasher Name:</label>
                                <input type="text" class="form-control form-control-lg rounded-pill border-0 shadow flex-grow-1" name="device_name" value="" placeholder="Dishwasher Name" style="border-radius: 20px;">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary btn-lg mt-2 rounded-pill w-100" name="submit" value="Create Dishwasher" style="border-radius: 20px;">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row my-5 mb-2">
                    <div class="col-12 text-center">
                        <h3>Create Electric Blancet</h3>
                        <p class="text-muted">Click update after creating device</p>
                    </div>

                    <div class="col-12 col-md-6 offset-md-3">
                        <form action="../admin_php/create_electric_blanket.php?" method="post">
                            <div class="mb-3 d-flex-column align-items-center">
                                <input type="hidden" name="roomID" value="<?php echo $_GET['roomID']; ?>">
                                <label class="form-label rounded-pill px-3 py-2" style="color: #000000; font-weight: bold;">Electric Blanket Name:</label>
                                <input type="text" class="form-control form-control-lg rounded-pill border-0 shadow flex-grow-1" name="device_name" value="" placeholder="Electric Blanket Name" style="border-radius: 20px;">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary btn-lg mt-2 rounded-pill w-100" name="submit" value="Create Electric Blanket" style="border-radius: 20px;">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row my-5 mb-2">
                    <div class="col-12 text-center">
                        <h3>Create Fan</h3>
                        <p class="text-muted">Click update after creating device</p>
                    </div>

                    <div class="col-12 col-md-6 offset-md-3">
                        <form action="../admin_php/create_fan.php?" method="post">
                            <div class="mb-3 d-flex-column align-items-center">
                                <input type="hidden" name="roomID" value="<?php echo $_GET['roomID']; ?>">
                                <label class="form-label rounded-pill px-3 py-2" style="color: #000000; font-weight: bold;">Fan Name:</label>
                                <input type="text" class="form-control form-control-lg rounded-pill border-0 shadow flex-grow-1" name="device_name" value="" placeholder="Fan Name" style="border-radius: 20px;">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary btn-lg mt-2 rounded-pill w-100" name="submit" value="Create Fan" style="border-radius: 20px;">
                            </div>
                        </form>
                    </div>
                </div>


                <div class="row my-5 mb-2">
                    <div class="col-12 text-center">
                        <h3>Create Toy</h3>
                        <p class="text-muted">Click update after creating device</p>
                    </div>

                    <div class="col-12 col-md-6 offset-md-3">
                        <form action="../admin_php/create_toy.php?" method="post">
                            <div class="mb-3 d-flex-column align-items-center">
                                <input type="hidden" name="roomID" value="<?php echo $_GET['roomID']; ?>">
                                <label class="form-label rounded-pill px-3 py-2" style="color: #000000; font-weight: bold;">Toy Name:</label>
                                <input type="text" class="form-control form-control-lg rounded-pill border-0 shadow flex-grow-1" name="device_name" value="" placeholder="Toy Name" style="border-radius: 20px;">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary btn-lg mt-2 rounded-pill w-100" name="submit" value="Create Toy" style="border-radius: 20px;">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row my-5 mb-2">
                    <div class="col-12 text-center">
                        <h3>Create Vacuum Cleaner</h3>
                        <p class="text-muted">Click update after creating device</p>
                    </div>

                    <div class="col-12 col-md-6 offset-md-3">
                        <form action="../admin_php/create_vacuum.php?" method="post">
                            <div class="mb-3 d-flex-column align-items-center">
                                <input type="hidden" name="roomID" value="<?php echo $_GET['roomID']; ?>">
                                <label class="form-label rounded-pill px-3 py-2" style="color: #000000; font-weight: bold;">Vacuum Cleaner Name:</label>
                                <input type="text" class="form-control form-control-lg rounded-pill border-0 shadow flex-grow-1" name="device_name" value="" placeholder="Vacuum Cleaner Name" style="border-radius: 20px;">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary btn-lg mt-2 rounded-pill w-100" name="submit" value="Create Vacuum Cleaner" style="border-radius: 20px;">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row my-5 mb-2">
                    <div class="col-12 text-center">
                        <h3>Create Washing Machine</h3>
                        <p class="text-muted">Click update after creating device</p>
                    </div>

                    <div class="col-12 col-md-6 offset-md-3">
                        <form action="../admin_php/create_washing_machine.php?" method="post">
                            <div class="mb-3 d-flex-column align-items-center">
                                <input type="hidden" name="roomID" value="<?php echo $_GET['roomID']; ?>">
                                <label class="form-label rounded-pill px-3 py-2" style="color: #000000; font-weight: bold;">Washing Machine Name:</label>
                                <input type="text" class="form-control form-control-lg rounded-pill border-0 shadow flex-grow-1" name="device_name" value="" placeholder="Washing Machine Name" style="border-radius: 20px;">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary btn-lg mt-2 rounded-pill w-100" name="submit" value="Create Washing Machine" style="border-radius: 20px;">
                            </div>
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