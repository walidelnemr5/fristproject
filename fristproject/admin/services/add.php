<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>


  


    <div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New servives</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  enctype='multipart/form-data'>
            <div class="form-group">
            <label >photo Of servives</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br>   
            <label >Name Of services</label>
                
                <input type="text" name="name" class="form-control" >
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>
    <?php 

if(isset($_POST['submit']))
{
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    $name = sanitizeString($_POST['name']);
    $notEmpty = checkEmpty($name);
  
    if($notEmpty)
    {
        $less = checkLess($name,3);
        if($less)
        {
            $sql = "INSERT INTO services (`serv_title`,serv_image) VALUES ('$name','$target_file') ";
            $success_message = db_insert($sql);
        }
        else 
        {
            $error_message = "Please Type Correct Service";
        }
    }
    else 
    {
        $error_message = "Please Type Service Name";
    }

    require BL.'functions/error.php';
}


?>

<?php require BLA.'inc/footer.php';  ?>