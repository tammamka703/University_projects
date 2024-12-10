<?php
include ('../../config/connection.php');

// Get input values from POST request
$device_type = $_POST['device_type'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$issue = $_POST['issue_des'];
$id = $_POST['id'];

if (isset($_POST['update'])) {
    // Prepare the SQL statement with placeholders
    $sql = "UPDATE Devices
            SET 
                device_type = :device_type,
                issue_description = :issue_description,
                brand = :brand,
                model = :model
            WHERE 
                device_id = :id";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters
    $stmt->bindParam(':device_type', $device_type, PDO::PARAM_STR);
    $stmt->bindParam(':issue_description', $issue, PDO::PARAM_STR);
    $stmt->bindParam(':brand', $brand, PDO::PARAM_STR);
    $stmt->bindParam(':model', $model, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script> alert('Update Successfully');window.location.assign('../../view/adminDashBoard.php') </script>";
    } else {
        echo "<script> alert('". $conn->errorInfo()[2] ."') </script>";
    }
} else {
    echo "No response";
}

// Close the connection
$conn = null;
?>
