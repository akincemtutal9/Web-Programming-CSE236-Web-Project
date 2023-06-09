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

    <script src="../js/deleteuser.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    
    
    <title>Account</title>
</head>

<body>
    <div class="d-flex" id="wrapper">

    <?php  include "consumer_sidebar.php"?>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-dark">All Devices</h2>
                </div> 
            <?php include 'navbar.php';?>
            
            <div class="d-flex flex-md-row flex-column justify-content-center">
                <div class="m-3 bg-light rounded" style="height: 300px">
                    <canvas id="pieChart"></canvas> 
                    <span class="bg-light pe-5 ps-5 ms-2">Pie Chart for Device Types</span>
                </div>
                <div>
                <div class="col">
                        <div>
                            <h3 class="fs-4 mb-3">All Devices</h3>
                        </div>
                        <table id="example" class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="60">#</th>
                                    <th scope="col" width="130">Room ID</th>
                                    <th scope="col" width="280">Device ID</th>
                                    <th scope="col" width="400">Device Name</th>
                                    <th scope="col">Device Type</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php include '../php/list_user_all_devices.php';  ?>
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
    <script>

        <?php
        include '../database/config.php';
        $sql = "SELECT device_type, COUNT(*) as count 
        FROM device AS d 
        INNER JOIN room AS r ON d.roomID = r.roomID
        INNER JOIN user AS u ON r.userID = u.userID
        WHERE u.userID = '{$_SESSION['user_id']}'
        GROUP BY device_type";
        $result = $conn->query($sql);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[$row['device_type']] = $row['count'];
        }

        $conn->close();
        ?>

        var labels = [];
        var values = [];
        <?php foreach ($data as $deviceType => $count) { ?>
            labels.push("<?php echo $deviceType; ?>");
            values.push("<?php echo $count; ?>");
        <?php } ?>
        
        var ctx = document.getElementById("pieChart").getContext("2d");
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(255, 159, 64, 0.7)',
                        'rgba(255, 99, 132, 0.7)'
                    ]
                }]
            },
            options: {
                title: {
                    display: true,
                    responsive: false,
                    maintainAspectRatio: false,
                    text: 'Device Type Distribution'
                }
                
            }
        });
    </script>
    <script>
        <?php
        include '../database/config.php';
        $sql = "SELECT DATE_FORMAT(date, '%Y/%m') as month, COUNT(*) as count FROM statistics GROUP BY month";
        $result = $conn->query($sql);

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[$row['month']] = $row['count'];
        }

        $conn->close();
        ?>

        var labels = [];
        var values = [];
        <?php foreach ($data as $month => $count) { ?>
            labels.push("<?php echo $month; ?>");
            values.push("<?php echo $count; ?>");
        <?php } ?>

        var ctx = document.getElementById("barChart").getContext("2d");
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'User Activity Count',
                    data: values,
                    backgroundColor: 'rgba(54, 162, 235, 0.7)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,

                        precision: 0,
                        stepSize: 1
                    }
                }
            }
        });


    </script>    
</body>

</html>