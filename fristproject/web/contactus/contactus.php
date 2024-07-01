<?php require '../../config.php';  ?>
<?php require BL.'functions/validate.php';?>
<html lang="ar">
<head>
    <title>contact us </title>
<style>
    .U{
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
    .QR {
        font-family: 'Times New Roman', Times, serif;
        text-decoration: none;
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
    .social img {
        margin-right: 1rem;
        width: 2.5rem;
        transition: 0.4s;}
    .social{
        position: absolute; /* تحديد الوضع ليكون مطلق */
        top: 510px; /* تحديد الموقع من الأعلى */
        left: 40px; /* تحديد الموقع من اليسار */
        right:50px;}
    
    .social{
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 50px;
        z-index: 999;} 
    body {
        font-family: 'Times New Roman', Times, serif;
        margin: 0;
        padding: 20px;
        background: linear-gradient(to right, #EED3D9, #EED3D9);
        text-align: center;}
    .container {
        max-width:600px;
        margin: 50px auto;
        padding: 30px;
        background-color: #EED3D9;}
    h1 {
        color: #170f4d;
        padding: 0.5px;
        text-align: center;}
    form {
        margin-top: 20px;
        padding: 0.5px;
        text-align: center;}
    label {
        display: block;
        margin-bottom: 8px;
        color: #333;}
    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid ;
        border-radius: 4px;}
    input[type="submit"] {
        background-color: rgb(13, 8, 72);
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;}
    input[type="submit"]:hover {
        background-color: rgba(13, 8, 72, 0.644);}
</style>
</head>
<header>
    <nav >
    <a href="#" class="QR">Molière Clinic</a>
    <nav >
        <ul class="U">
            <li> <a href="../services/services.php" class="c"> Services</a></li>
            <li> <a href="../offers/Offer.php" class="c"> Offers</a></li>
            <li> <a href="../doctors/doctors.php" class="c">doctors </a></li>
            <li><a href="../booking/booking.php" class="c">Book Appointment</a></li>
            <li><a href="contactus.php" class="c">contact us</a></li>
        </ul>
    </nav>
</header>
<body>
    <br><br><br>
    <div class="container">
        <h1>contact us </h1>
        <form action="contactusdate.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="comment">Your opinion on service:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>

            <input type="submit" value="submit" name="submit">
        </form>
    </div>

        
    
</body>

</html>