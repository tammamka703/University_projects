<?php
include "../config/connection.php";

$sql = 'SELECT * FROM employee';
$stmt = $conn->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $row) {

    // filling the card with the informations

    $full_name = $row['first_name']. " " .$row['last_name'];

    echo '
    <div class="card">
        <div class="card_body">
            <h3>Request</h3>
            <ul>
                <li>
                    <h4 class="under_lined">Name: ' . $full_name . '</h4>
                </li>
                <li>
                    <h4 class="under_lined">Position: ' . $row['position'] . '</h4>
                </li>
            </ul>
        </div>
        <div class="card_footer">
            <a href="./ReviewEmployee.php?id=' . $row['employee_id'] . '">Review Employee</a>
        </div>
    </div>';
    
}
    
    ?>