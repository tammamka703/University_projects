<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
<div class="container">
  <form action="../controller/AdminControllers/UpdateCustomer.php" method="post">
  <?php
  include('../config/connection.php');
  if(isset($_GET['id'])){
  $id = $_GET['id'];
    $sql = "SELECT * FROM customer WHERE customer_id=$id ";   
    $result = $conn->query($sql);
    if($result->rowCount() > 0){
      while($row = $result->fetch()){
    ?>
    <div class="mb-3">
      <label  class="form-label">First Name :</label>
      <input type="text" name="first_name" class="form-control" value="<?php echo $row['first_name'] ;  ?>">
    </div>
    <div class="mb-3">
      <label  class="form-label">Last Name :</label>
      <input type="text" name="last_name" class="form-control" value="<?php echo $row['last_name'] ;  ?>">
    </div>
    <div class="mb-3">
      <label  class="form-label">Address : </label>
      <input type="text" name="address" class="form-control" value="<?php echo $row['address'] ;  ?>">
    </div>
    <div class="mb-3">
      <label  class="form-label">email : </label>
      <input type="text" name="email" class="form-control" value="<?php echo $row['email'] ; ?>">
    </div>
    <div class="mb-3">
      <label  class="form-label">phone : </label>
      <input type="text" name="phone" class="form-control" value="<?php echo $row['phone'] ; ?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $row['device_id'] ; }}}  ?>" >
    <div>
      <button type="submit" name="update" class="btn btn-primary">submit</button>
      <a href="./adminDashBoard.php" class="btn btn-danger">Cancel</a>
    </div>
  </form>
</div>
</body>
</html>
