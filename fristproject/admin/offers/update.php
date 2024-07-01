<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>
<?php if(isset($_POST['submit']))
{
       $target_dir = "uploads/";
       $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
       move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
      
       
       $offer_id = $_POST['offer_id'];
       
        if(empty($_FILES["fileToUpload"]["name"]))
{ 
        $sql = "SELECT `offer_image` FROM `offers` WHERE `offer_id` = $offer_id ";
        $result = mysqli_query($conn,$sql);
        if($result )
{
        $success_message= "data updated succefully";
        
}
        else
{
        // header("location:edit.php");
        die;
}
}
        else
{
        $sql = "UPDATE `offers` SET `offer_image`='$target_file' WHERE `offer_id` = $offer_id ";
        $result = mysqli_query($conn,$sql);
        if($result )
    {
        $success_message = "data updated succefully";
        // header("location:edit.php");
    }
        else
    {
        // header("location:edit.php");
        die;
}
}

        require BL.'functions/error.php';}
// header("location:edit.php");
?>

<?php require BLA.'inc/footer.php';  ?>




   

