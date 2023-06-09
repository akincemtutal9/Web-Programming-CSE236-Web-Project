<?php
include '../database/config.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
   
} else {
   
    die('User is not found');
}


$sql = "SELECT * FROM room WHERE userID ='$user_id'";


$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $roomID = $row["roomID"];
        $_SESSION['roomID'] = $roomID;
        $sql2 = "SELECT COUNT(*) AS row_count FROM device WHERE roomID = '$roomID'; ";
        $sql_acc = "SELECT COUNT(*) AS ac_count FROM device WHERE roomID = '$roomID' AND device_type='air conditioner';";
        $result2 = mysqli_query($conn, $sql2);
        $resultacc = mysqli_query($conn, $sql_acc);
        $row2 = mysqli_fetch_assoc($result2);
        $rowacc = mysqli_fetch_assoc($resultacc);
        if($rowacc['ac_count']>0){
            
        }
        echo "<div>
                <a href=\"devices.php?roomID=" . $row["roomID"]. " \" class=\"to-devices\">
                    <div class=\"card\">
                        <div class=\"room-info\">
                            <h3>" . $row["room_name"] . "</h3>
                            <span>" . $row2["row_count"] . " devices</span>
                            <div class=\"temp-humid-show\">
                                <div class=\"temp-show\">
                                    <span>
                                        <i class=\"fas fa-temperature-three-quarters\"></i>
                                        Temperature =<span id=\"t" . $row["roomID"]. "\">" . $row["temperature"] . "</span><sup>o</sup>C</span>
                                </div>
                                <div class=\"humid-show\">
    
                                    <span>
                                        <i class=\"fa-solid fa-droplet fa-sm\" style=\"color: #00ffff;\"></i>
                                        Humidity = %<span id=\"h" . $row["roomID"]. "\">" . $row["humidity"] . "</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"room-icon\">
                            <i class=\"" . $row['icon'] . "\" style=\"color: #b6decd;\"></i>
                        </div>
                    
                    </div>
                </a>
            </div>";
    }
} else {
    echo "No users found";
}

mysqli_close($conn);
?>
