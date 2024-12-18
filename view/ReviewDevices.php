<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Devices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
  <div class="container">
    <form action="../controller/AdminControllers/UpdateDevices.php" method="post">
    <?php
    include('../config/connection.php');
    if(isset($_GET['id'])){
    $id = $_GET['id'];
      $sql = "SELECT * FROM devices WHERE device_id=$id ";   
      $result = $conn->query($sql);
      if($result->rowCount() > 0){
        while($row = $result->fetch()){
      ?>
      <div class="mb-3">
        <label  class="form-label">Device Type :</label>
        <input type="text" name="device_type" class="form-control" value="<?php echo $row['device_type'] ;  ?>">
      </div>
      <div class="mb-3">
        <label  class="form-label">Brand : </label>
        <input type="text" name="brand" class="form-control" value="<?php echo $row['brand'] ;  ?>">
      </div>
      <div class="mb-3">
        <label  class="form-label">model : </label>
        <input type="text" name="model" class="form-control" value="<?php echo $row['model'] ; ?>">
      </div>
      <div class="mb-3">
        <label  class="form-label">Issue Description : </label>
        <input type="text" name="issue_des" class="form-control" value="<?php echo $row['issue_description'] ; ?>">
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
