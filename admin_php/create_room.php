<?php
include '../database/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST['userID'];
    $roomName = mysqli_real_escape_string($conn ,$_POST['room_name']);
    $icon = mysqli_real_escape_string($conn ,$_POST['icon']);

    echo $userID;
    echo $roomName;

    $sql = "INSERT INTO room (userID,room_name,temperature,humidity,icon) VALUES ('$userID', '$roomName', '25','25','$icon')";

    if ($conn->query($sql) === TRUE) {

            header("Location: " . $_SERVER["HTTP_REFERER"]); 
            exit();
        } 
        else {
            echo "Error inserting into light table: " . $conn->error;
        }
   
    // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com')";
    
    // if ($conn->query($sql) === TRUE) {
    //   echo "New record created successfully";
    // } else {
    //   echo "Error: " . $sql . "<br>" . $conn->error;
    // }    
     $conn->close();
    }

?>
