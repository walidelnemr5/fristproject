<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>
<?php  
if(isset($_GET['id']) && is_numeric($_GET['id']))
{ 
    $row = getRow('offer_id',$_GET['id'],'offers');
    if(!$row){ header("location:".BU); }

    $offer_id = $row['offer_id'];
}
else
{
    header("location:".BUA);
}



?>
<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Edit offer</h3>
        <form method="post" action="<?php echo BUA.'offers/update.php'; ?>"  enctype='multipart/form-data' >
        <div class="form-group">
            <label >photo Of doctors</label>
            <input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $row['offer_image']; ?>">
        
            <input type="hidden" name="offer_id" value="<?php echo $offer_id; ?>" class="form-control" >   
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>
    


<?php require BLA.'inc/footer.php';  ?>