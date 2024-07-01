<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>
<?php  
if(isset($_GET['id']) && is_numeric($_GET['id'])){ 
$row = getRow('department_id',$_GET['id'],'department');
    if(!$row){ header("location:".BU);}

    $department_id = $row['department_id'];}
else
{
    header("location:".BUA);
}



?>
<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Edit department</h3>
        <form method="post" action="<?php echo BUA.'department/update.php'; ?>"  >
        <div class="form-group">
             
            <label >Name Of department</label>
                
                <input type="text" name="name" value="<?php echo $row['department_name']; ?>" class="form-control" >
             
                <input type="hidden" name="department_id" value="<?php echo $department_id;?>" class="form-control" >   
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>
    


<?php require BLA.'inc/footer.php';  ?>