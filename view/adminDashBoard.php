<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Board</title>
    <link href="../assets/css/dashboard.css" rel="stylesheet">
    <script src="../assets/js/dashboard.js" defer></script>
</head>
<body>
    <nav>
        <button class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
          <svg width="100" height="100" viewBox="0 0 100 100">
           <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
           <path class="line line2" d="M 20,50 H 80" />
           <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
          </svg>
        </button>
        <div class="logo_btn">
          <img src="img/logo.png" alt="">
          <p>godboard <br>maintenance</p>
        </div>
    </nav>

    <!-- sidebar -->
     <div class="sidebar">
        <ul>
            <li>

            </li>
        </ul>
     </div>
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