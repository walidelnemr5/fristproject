<?php require '../../config.php';  ?>
<?php require BL.'functions/validate.php';?>
<html>
<head> 
    <meta name="viewport" content="width=device-width, inital-scale=1.0"  >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking</title>
</head>
<style>
  body{
    background-color: #EED3D9;
    margin: 0;
    padding: 0;
    min-height: 100vh;
    font-family:Georgia, 'Times New Roman', Times, serif;
    border: #11033e;
    font-size: 15px;
    padding-left: 0ch;
    padding-bottom: 10ch;
    text-align: center;
    padding: 10px;
    margin: 25px;
    margin-left: 200px;
    margin-right: 0px;
    padding-left: 20px;
    padding-right: 27px;
    border-radius: 100px;}
 .login{
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 350px;
    width: 450px;
    border: 5px solid #1a0b5c;
    border-radius: 10px;
    transition: 0.5s ease;
    padding: 40px ;
    margin-top: 50px;}
 .login:hover{
    box-shadow: 3px 3px 50px #15146a;}
  h2{
   font-size: 30px;
   font-weight: bold;
   letter-spacing: 2px;
   text-align: center;
   margin: 0;
   color: #1f0b4b;
   font-family: 'Times New Roman', Times, serif;}
 .input-text{
   position: relative;
   margin: 20px 0;}
 .input-text input {
   width: 100%;
   padding: 10px 0;
   box-sizing: border-box;
   font-size: 16px;
   border: none;
   padding-left: 30px;
   border-bottom: 2px solid #11033e;
   transition: 0.5s ease;}
 .input-text input:focus{
   border-bottom: 5px solid #190750;
   border-radius: 10px;}
 .input-text i{
   position: absolute;
   bottom: 10px;
   font-size: 25px;
   color: #1f0b4b;}
 .btn{
   width: 100%;
   font-size: 16px;
   font-weight: bold;
   border-radius: 15px;
   padding: 5px;
   background: none;
   cursor: pointer;
   transition: 0.5s ease;
   font-family: Georgia, 'Times New Roman', Times, serif;}
 .btn:hover{
   background: #1f0b4b;
   color: #fff;}
 .remember{
   margin-top: 45px;
   color: #1f0c3f;}
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
    display: inline;margin-right: 10px;}
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
 .QR {
    font-family: 'Times New Roman', Times, serif;text-decoration: none;
    color: #170f4d;
    text-transform:uppercase;
    font-weight: 600;
    font-size: 30px;}
 .QR {
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    padding: 20px 8%;
    display: flex;
    align-items: center;
    justify-content: space-between;}
 .QR .logo {
    width: 80px;}
</style>
</head>
 <header>
    <a href="#" class="QR">Molière Clinic</a>
    <nav >
        <ul class="U">
            <li> <a href="../services/services.php" class="c"> Services</a></li>
            <li> <a href="../offers/Offer.php" class="c"> Offers</a></li>
            <li> <a href="../doctors/doctors.php" class="c">doctors </a></li>
            <li><a href="booking.php" class="c">Book Appointment</a></li>
            <li><a href="../contactus/contactus.php" class="c">contact us</a></li>
        </ul>
    </nav>
</header>
<body>
<div class="login">
    <h2>Book Appointment</h2>
    <div class="navbar"> </div>
    <form action="bookingdate.php" method="post">
        <br>
        <form>
            <label for="id">ID/Iqama Number:</label>    
            <input type="number" id="id" name="id" required><br><br>
            <label for="number">Phone Number:</label>
            <input type="text" id="number" name="number" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="Date">Date:</label>
            <input type="date" id="date" name="date" required><br>
        </select><br>
        <label for="time">Time</label>
        <input type="time" id="time" name="time" required><br><br>
        <br><br>
       
        <label for="Department">Department:</label>
        <select id="Department" name="Department">

        <?php $data = getRows('department');?>
        <?php foreach($data as $row):  ?>
       
          <option value="<?php echo htmlspecialchars($row['department_id']); ?>">
          <?php echo htmlspecialchars($row['department_name']); ?>
          </option>
        <?php endforeach; ?>
            
        </select>
        <br><br>
        <div>
            <input class="btn"type="submit" name="submit" onclick="alert"(' Your appointment has been booked , Thank you for choosing Moliere Clinic.') value="Booking">
        </div>
    </div> 
    <div class="navbar"></div>
         </form>
    </form> 
</body>
</html>