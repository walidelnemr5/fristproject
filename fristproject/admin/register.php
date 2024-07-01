<?php require '../config.php';  ?>
<?php require BL.'functions/validate.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css" >
    <title>Dashboard | Register</title>
</head>
<body>
<div class="cont-login d-flex align-items-center justify-content-around">    
    
    <form action="register1.php" method="POST" class="border p-5" >
        <div class="row">
                <?php  require BL.'functions/error.php'; ?>
                    <div class="col-sm-12  ">
                        <h3 class="text-center p-3 text-white">Register</h3>
                    </div>

                    <div class="col-sm-6 offset-sm-3 ">

                        <div class="form-group">
                            <label >Email </label>
                            <input type="email" name="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label >Password </label>
                            <input type="password" name="password" class="form-control" >
                        </div>
                        <div class="form-group">
                             <input type="submit" name="submit" class="form-control btn btn-success"   >
                        </div>
                    </div>
        </div>
    </form>
    
</div>    
<script src="<?php echo ASSETS;?>/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo ASSETS;?>/js/popper.min.js"></script>
<script src="<?php echo ASSETS;?>/js/bootstrap.min.js"></script>
</body>
</html>