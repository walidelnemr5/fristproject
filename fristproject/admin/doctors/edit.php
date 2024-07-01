<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>
<?php  
if(isset($_GET['id']) && is_numeric($_GET['id']))
{ 
    $row = getRow('doctors_id',$_GET['id'],'doctors');
    if(!$row){ header("location:".BU); }

    $doctors_id = $row['doctors_id'];
}
else
{
    header("location:".BUA);
}



?>
<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Edit doctors</h3>
        <form method="post" action="<?php echo BUA.'doctors/update.php'; ?>"  enctype='multipart/form-data' >
        <div class="form-group">
            <label >photo Of doctors</label>
            <input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $row['doctors_image']; ?>">
            <br>   
            <label >Name Of doctors</label>
                
                <input type="text" name="name" value="<?php echo $row['doctors_name']; ?>" class="form-control" >
            <br>
            <label >title Of doctors</label>
            <input type="text" name="title" class="form-control my-3 border border-success" value="<?php echo $row['doctors_title']; ?>"> 
            <input type="hidden" name="doctors_id" value="<?php echo $doctors_id; ?>" class="form-control" >   
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>
    


<?php require BLA.'inc/footer.php';  ?>