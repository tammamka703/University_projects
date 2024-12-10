<?php
include ('../../config/connection.php');

// Get input values from POST request
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$id = $_POST['id']; // Assuming 'id' is the primary key of the customer record

if (isset($_POST['update'])) {
    // Prepare the SQL statement with placeholders
    $sql = "UPDATE customer
            SET 
                first_name = :first_name,
                last_name = :last_name,
                email = :email,
                address = :address,
                phone = :phone
            WHERE 
                customer_id = :id";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters
    $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':address', $address, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
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
