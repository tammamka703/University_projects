<?php
// Include your database configuration
include '../config/connection.php';

try {
    // Specify the table name
    $tableName = 'customer';

    // Prepare and execute the SQL query to count rows
    $sql = "SELECT COUNT(*) AS row_count FROM $tableName";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Display the row count
    echo '  <h3 class="under_lined">
                The total customer number is <span>' . $result['row_count'] . '</span>
            </h3>';
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
