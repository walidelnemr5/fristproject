<?php require '../../config.php';  ?>
<?php require BL.'functions/validate.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta charset="utf-8">
  <title>offers</title>
  <style>
    body {
      font-family:'Times New Roman', Times, serif;
      margin: 0;
      padding: 20px;
      background: linear-gradient(to right, #EED3D9, #EED3D9);
    }

    h1 {
    margin-left: 130px; /* زيادة المسافة من اليسار */
    font-size: 20px; /* تكبير حجم النص */
    width: fit-content; /* تناسب عرض النص */
    margin: 0 auto; /* توسيط النص */
    transform: scaleX(1); /* توسيع النص أفقيا */
    font-family:'Times New Roman', Times, serif;
    position: absolute;
       width: 100%;
       top: 30%;
       left: 10%;
       text-align: center;
       font-size: 3rem;
       text-transform: uppercase;
       letter-spacing: 0.1em;
       color: rgb(14, 14, 78);
    }

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
       border: 1px solid rgb(14, 14, 78);
      }
       
      
       .U a:hover{
      
          color: #e5c1c9;
       }
      
      li {
          display: inline;
       margin-right: 10px;
      
            }
          
        .c {
         color: #170f4d;
         text-decoration: none;
         text-transform: uppercase;
         font-size:large;
        }            
      
        nav{
         width: 100%;
         position: absolute;
         top: 0;
         left: 0;
         padding: 20px 8%;
         display: flex;
         align-items: center;
         justify-content: space-between;
         }           
      
         
         .QR {
          font-family: 'Times New Roman', Times, serif;
      text-decoration: none;
      color: #170f4d;
      text-transform:uppercase;
      font-weight: 600;
      font-size: 30px;
      
      }
      
      .QR {
         width: 100%;
         position: absolute;
         top: 0;
         left: 0;
         padding: 20px 8%;
         display: flex;
         align-items: center;
         justify-content: space-between;
         }
         
         .QR .logo {
         width: 80px;
         }
      
          
       .social img {
          margin-right: 1rem;
          width: 2.5rem;
          transition: 0.4s;
        
          }
          
          
          .social{
              position: absolute; /* تحديد الوضع ليكون مطلق */
              top: 400px; /* تحديد الموقع من الأعلى */
              left: 30px; /* تحديد الموقع من اليسار */
              right:50px;
           }
          
           .social{
              width: 100%;
              display: flex;
              justify-content: center;
              margin-top:900px;
              z-index: 999;
             } 
      
      
        </style>
      
      
      <link rel="stylesheet" type="text/css" href="stylehadel.css">

        <header>
         
          <nav >
           
            <ul class="U">
            
            <li> <a href="../services/services.php" class="c"> Services</a></li>
            <li> <a href="Offer.php" class="c"> Offers</a></li>
            <li> <a href="../doctors/doctors.php" class="c">doctors </a></li>
            <a href="../booking/booking.php" class="c">Book Appointment</a></li>
            <li><a href="../contactus/contactus.php" class="c">contact us</a></li>

            </ul>
            </nav>
      
        </div>
        
        </header>
<body>
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
  <h1> Offers </h1>
  <br>
  <br>
  <br>
  <br>


  
  <?php $data = getRows('offers'); ?>
        <?php foreach($data as $row){   ?>
    
  <div class="image-container">

<img src="<?php echo $row['offer_image']; ?>" alt="Description of the image" > 
<br>
<br>


</div>
<?php } ?>
 


  
 
</body>

</html>