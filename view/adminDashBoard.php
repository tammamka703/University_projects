<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Board</title>
    <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
    <!-- requests section -->
    <section class="requests_sec">
        <div class="content">
            <div class="sec_heading">
                <h1>
                    Requests 
                </h1>
            </div>
            <div class="card_container">
                <?php
                    include "../controller/AdminControllers/RequestsData.php"
                ?>
            </div>
            <div class="sec_footer">
                <?php
                    include "../controller/AdminControllers/RequestsCounter.php"
                ?>
            </div>
        </div>
    </section>
    <div class="section_sep">

    </div>
    <!-- Customer Section -->
    <section class="customers_sec">
        <div class="content"> 
            <div class="sec_heading">
                    <h1>
                        Customers 
                    </h1>
            </div>
            <div class="card_container">
                <?php
                    include "../controller/AdminControllers/CustomersData.php"
                ?>
                
            </div>
            <div class="sec_footer">
                <?php
                    include "../controller/AdminControllers/CustomersCounter.php"
                ?>
            </div>
        </div>
    </section>
    <div class="section_sep">

    </div>
    <!-- Device Section -->
    <section class="device_sec">
    <div class="content"> 
            <div class="sec_heading">
                    <h1>
                        Devices 
                    </h1>
            </div>
            <div class="card_container">
                <?php
                    include "../controller/AdminControllers/DevicesData.php"
                ?>
                
            </div>
            <div class="sec_footer">
                <?php
                    include "../controller/AdminControllers/DevicesCounter.php"
                ?>
            </div>
        </div>
    </section>
    <!-- employee section -->
     <div class="section_sep">
        
     </div>
    <section class="employee_sec">
    <div class="content"> 
            <div class="sec_heading">
                    <h1>
                        Employees 
                    </h1>
            </div>
            <div class="card_container">
                <?php
                    include "../controller/AdminControllers/EmployeesData.php"
                ?>
                
            </div>
            <div class="sec_footer">
                <?php
                    include "../controller/AdminControllers/EmployeeCounter.php"
                ?>
            </div>
        </div>
    </section>
</body>
</html>