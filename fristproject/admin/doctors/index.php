<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>

    <div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All doctors</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">title</th>
                    <th scope="col">image</th>
                    <th scope="col">Action</th>
                    
       
                </tr>
            </thead>
            <tbody>
                <?php $data = getRows('doctors');  $x=1; ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"> <?php echo $row['doctors_name'] ?>  </td>
                    <td class="text-center"> <?php echo $row['doctors_title'] ?>  </td>
                    <td class="text-center">  <img src="<?php echo $row['doctors_image']; ?>" alt="">  </td>
                    <td class="text-center">
                        <a href="<?php echo BUA.'doctors/edit.php?id='.$row['doctors_id']; ?>" class="btn btn-info">Edit</a>
                        <a href="<?php echo BUA.'doctors/delete.php?id='.$row['doctors_id']; ?>" class="btn btn-danger delete" data-field="doctors_id" data-id="<?php echo $row['doctors_id']; ?>" data-table="doctors" >Delete</a>
                     </td>
                    
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>


<?php require BLA.'inc/footer.php';  ?>