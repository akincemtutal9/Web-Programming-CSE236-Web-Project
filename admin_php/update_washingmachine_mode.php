<?php
require_once "../database/config.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $deviceID = $_POST['deviceID'];
    $modeWM = mysqli_real_escape_string($conn ,$_POST['modeWashingMachine']);

    $sql = "UPDATE washing_machine SET mode = '$modeWM' WHERE deviceID = $deviceID";

    if (!$conn) {
        die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: " . $_SERVER["HTTP_REFERER"]); 
        exit();
    } else {
        echo "Güncelleme hatası: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
