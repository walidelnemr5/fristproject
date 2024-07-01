<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>
<?php
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "DELETE FROM  `offers` WHERE `offer_id`='$id'";
    mysqli_query($conn,$sql);
    
    // header("location:".BLA."doctors/index.php");
}
header("location:".BLA."doctors/index.php");?>