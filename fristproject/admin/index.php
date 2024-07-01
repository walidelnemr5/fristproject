<?php require_once '../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>
<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All  Services</h5>
        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        <a href="<?php echo BUA.'services/' ?>" class="btn btn-primary"><?php echo count_table('services'); ?></a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All doctors</h5>
        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        <a href="<?php echo BUA.'doctors/' ?>" class="btn btn-primary"><?php echo count_table('doctors'); ?></a>
      </div>
    </div>
  </div>


  <div class="col-sm-6 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All Offers</h5>
        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        <a href="<?php echo BUA.'orders/' ?>" class="btn btn-primary"><?php echo count_table('offers'); ?></a>
      </div>
    </div>
  </div>


  <div class="col-sm-6 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All booking This Day</h5>
        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        <a href="<?php echo BU.'index.php' ?>" class="btn btn-primary"><?php echo count_table('booking'); ?></a>
      </div>
    </div>
  </div>



 



<?php require BLA.'inc/footer.php';  ?>
