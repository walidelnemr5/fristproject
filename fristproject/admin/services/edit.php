<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>
<?php  
if(isset($_GET['id']) && is_numeric($_GET['id']))
{ 
    $row = getRow('serv_id',$_GET['id'],'services');
    if(!$row){ header("location:".BU); }

    $serv_id = $row['serv_id'];
}
else
{
    header("location:".BUA);
}



?>
<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Edit services</h3>
        <form method="post" action="<?php echo BUA.'services/update.php'; ?>"  enctype='multipart/form-data' >
        <div class="form-group">
            <label >photo Of services</label>
            <input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $row['serv_image']; ?>">
            <br>   
            
            <br>
            <label >title Of services</label>
            <input type="text" name="title" class="form-control my-3 border border-success" value="<?php echo $row['serv_title']; ?>"> 
            <input type="hidden" name="serv_id" value="<?php echo $serv_id; ?>" class="form-control" >   
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>
    


<?php require BLA.'inc/footer.php';  ?>