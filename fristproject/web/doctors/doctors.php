<?php require '../../config.php';  ?>
<?php require BL.'functions/validate.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="stylehadel.css">
    <title>Doctors </title>
    <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      margin: 0;
      padding: 20px;
      background: linear-gradient(to right, #EED3D9, #EED3D9);
      text-align: center; /* لتوسيط العناصر داخل ال body */}
    .card {
      position: relative;
      left: 335px;
      bottom: 11.5%;}
    /* .card1 {
      position: relative;
      right: 22%;
      bottom: 92.5%;} */
    h1 {
      margin-left: 130px; /* زيادة المسافة من اليسار */
      font-size: 20px; /* تكبير حجم النص */
      width: fit-content; /* تناسب عرض النص */
      margin: 0 auto; /* توسيط النص */
      transform: scaleX(1); /* توسيع النص أفقيا */
      font-family:'Times New Roman', Times, serif;
      position: absolute;
      width: 100%;
      top: 20%;
      left: 10%;
      text-align: center;
      font-size: 3rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color:rgb(13, 8, 72);}

    button {
      padding: 10px 20px;
      background-color: #26306a;
      color: #fff;
      font-size: 18px;
      border: none;
      cursor: pointer;}
    button:hover {
      background-color: #f3f4fb;}
    a {
      text-decoration: none;
      color: #d4a1cb;}
    .U {
      font-family: 'Times New Roman', Times, serif;
      text-align:left;
      margin-left: 300px;
      text-decoration:none;
      padding: 10px 10px;
      margin-top: 0px;
      text-transform: uppercase;
      font-size: 10px;
      font-weight:900px;
      z-index: 999;
      border-radius: 1px;
      border: 1px solid rgb(14, 14, 78);}
    .U a:hover{
      color: #e5c1c9;}
    li {
      display: inline;
      margin-right: 10px;}
    .c {
      color: #170f4d;
      text-decoration: none;
      text-transform: uppercase;
      font-size:large;}            

    nav{
      width: 100%;
      position: absolute;
      top: 0;
      left: 0;
      padding: 20px 8%;
      display: flex;
      align-items: center;
      justify-content: space-between;}
      </style>
  </head>
  <header>
    <nav >
      <ul class="U">
        <li> <a href="../services/services.php" class="c"> Services</a></li>
        <li> <a href="../offers/offer.php" class="c"> Offers</a></li>
        <li> <a href="doctors.php" class="c">Doctors </a></li>
        <li> <a href="../booking/booking.php" class="c">Book Appointment</a></li>
        <li><a href="../contactus/contactus.php" class="c">contact us</a></li>
      </ul>
    </nav>
  </header>
  <body>
    <br>
    <br>
    <h1> Our Doctors </h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="main">
      <div class="container">
        
        <?php $data = getRows('doctors');?>
        <?php foreach($data as $row){   ?>
            <div class="card1">
              <div class="front">
                <div class="image1"><img src="<?php echo $row['doctors_image']; ?>" alt="" > </div>
                <div class="content">
                  <h3><?php echo $row['doctors_name']; ?></h3>
                  <h3><?php echo $row['doctors_title']; ?></h3>
                </div>
                </div>
                <?php } ?>
              </div>
            </div>
      </div>
    </div>
    <!-- <?php echo $row['doctors_image']; ?> -->
  </body>
</html>