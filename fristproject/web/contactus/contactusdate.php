<?php require '../../config.php';  ?>
<?php require BL.'functions/validate.php';  ?>
<?php echo "<script>console.log(1)</script>"?>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $notes= $_POST['comment']; 
    echo $_POST['comment'];
    echo $_POST['name'];
   echo "<script>console.log(2)</script>";
    $sql="INSERT INTO `opinions` (`opinions_name`,`opinions_notes`) VALUES (`$name`,`$notes`)";
    echo "<script>console.log(3)</script>";
    // header("location:contactus.php");
};?>
        