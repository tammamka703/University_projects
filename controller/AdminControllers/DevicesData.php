<?php
include "../config/connection.php";

$sql = "
        SELECT 
            customer.customer_id, 
            customer.first_name,
            customer.last_name,
            devices.brand,
            devices.model,
            devices.device_type,
            devices.issue_description,
            devices.device_id
        FROM 
            customer 
        INNER JOIN 
            devices 
        ON 
            customer.customer_id = devices.customer_id
    ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $row) {

    // filling the card with the informations
    $full_name = $row['first_name']. " " .$row['last_name'];
    echo '
    <div class="card">
        <div class="card_header">
            <h3>Device</h3>
        </div>
        <div class="card_body">
            <ul>
                <li>
                    <h4 class="under_lined">Customer Name: ' . $full_name . '</h4>
                </li>
                <li>
                    <h4 class="under_lined">Address: ' . $row['brand'] . '</h4>
                </li>
                <li>
                    <h4 class="under_lined">Device Brand: ' . $row['model'] . '</h4>
                </li>
                <li>
                    <h4 class="under_lined">Device Brand: ' . $row['device_type'] . '</h4>
                </li>
                <li>
                    <h4 class="under_lined">Device Brand: ' . $row['issue_description'] . '</h4>
                </li>
            </ul>
        </div>
        <div class="card_footer">
            <a href="./ReviewDevices.php?id=' . $row['device_id'] . '">Review Device</a>
        </div>
    </div>';
    
}
    
    ?>