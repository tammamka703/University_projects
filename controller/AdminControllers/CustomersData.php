<?php
include "../config/connection.php";

$sql = "
        SELECT 
            customer.customer_id, 
            customer.first_name, 
            customer.last_name,
            customer.phone,
            customer.address, 
            customer.email, 
            devices.brand,
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
        <div class="card_body">
            <h3>Customer</h3>
            <ul>
                <li>
                    <h4 class="under_lined">Name: ' . $full_name . '</h4>
                </li>
                <li>
                    <h4 class="under_lined">Address: ' . $row['address'] . '</h4>
                </li>
                <li>
                    <h4 class="under_lined">Device Brand: ' . $row['brand'] . '</h4>
                </li>
                <li>
                    <a class="under_lined" href="tel:' . $row['phone'] . '"> Phone :" ' . $row['phone'] . '</a>
                </li>
                <li>
                    <a class="under_lined" href="mailto:' . $row['email'] . '">Email : ' . $row['email'] . '</a>
                </li>
            </ul>
        </div>
        <div class="card_footer">
            <a href="./ReviewDevices.php?id=' . $row['device_id'] . '">Review Device</a>
            <a href="./ReviewCustomer.php?id=' . $row['customer_id'] . '">Review Customer</a>
        </div>
    </div>';
    
}
    
    ?>