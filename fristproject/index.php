<?php require_once 'config.php';  ?>
<?php require BLA.'inc/header.php'; ?>
<?php require BL.'functions/validate.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>booking</title>
</head>
<body>
<div class="col-sm-12">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>email</th>
        <th>phone</th>
        <th>booking time</th>
        <th>request services </th></tr>
    </thead>
    <?php $data = getRows('booking');  $x=1; ?>
    <?php foreach($data as $row){ ?>
    <tbody>
   
      
      <th><?php echo $row['booking_id'];?></th>
      <th><?php echo $row['booking_email'];?></th>
      <th><?php echo $row['booking_mobile'];?></th>
      <th><?php echo $row['booking_time'];?></th>
      <th><?php echo $row['booking_serv_title'];?></th>
      
     
    </tbody>
    <?php $x++; } ?>
  </table>

  </div>
 
</body>
</html>
