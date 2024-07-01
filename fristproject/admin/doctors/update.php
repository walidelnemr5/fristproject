<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>
<?php if(isset($_POST['submit']))
{
       $target_dir = "uploads/";
       $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
       move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
       $name = sanitizeString($_POST['name']);
       $title = sanitizeString($_POST['title']);
       $notEmpty = checkEmpty($name);
       $doctors_id = $_POST['doctors_id'];
       if($notEmpty)
{
        if(empty($_FILES["fileToUpload"]["name"]))
{ 
        $sql = "UPDATE `doctors` SET `doctors_title`='$title',`doctors_name`='$name' WHERE `doctors_id` = $doctors_id ";
        $result = mysqli_query($conn,$sql);
        if($result )
{
        $success_message= "data updated succefully";
        
}
        else
{
        header("location:edit.php");
        die;
}
}
        else
{
        $sql = "UPDATE `doctors` SET `doctors_title`='$title',`doctors_name`='$name', `doctors_image`='$target_file' WHERE `doctors_id` = $doctors_id ";
        $result = mysqli_query($conn,$sql);
        if($result )
    {
        $success_message = "data updated succefully";
        header("location:edit.php");
    }
        else
    {
        header("location:edit.php");
        die;
}
}
}
        require BL.'functions/error.php';
}?>
<?php require BLA.'inc/footer.php';  ?>




   

