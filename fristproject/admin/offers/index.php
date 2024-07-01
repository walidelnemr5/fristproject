<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>

    <div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All offers</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    
                    <th scope="col">image</th>
                    <th scope="col">Action</th>
                    
       
                </tr>
            </thead>
            <tbody>
                <?php $data = getRows('offers');  $x=1; ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    
                    <td class="text-center">  <img src="<?php echo $row['offer_image']; ?>" alt="">  </td>
                    <td class="text-center">
                        <a href="<?php echo BUA.'offers/edit.php?id='.$row['offer_id']; ?>" class="btn btn-info">Edit</a>
                        <a href="<?php echo BUA.'offers/delete.php?id='.$row['offer_id']; ?>" class="btn btn-danger delete" data-field="offer_id" data-id="<?php echo $row['offer_id']; ?>" data-table="offers" >Delete</a>
                     </td>
                    
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>


<?php require BLA.'inc/footer.php';  ?>