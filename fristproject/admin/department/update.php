<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>
<?php if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $department_id = $_POST['department_id'];
        $notEmpty = checkEmpty($name);
        if($notEmpty){ 
                $sql = "UPDATE `department` SET `department_name`='$name' WHERE `department_id` = $department_id ";
                
                $result = mysqli_query($conn,$sql);
                if($result ) {
                        $success_message= "data updated succefully";
                        }
                        else{
                                header("location:edit.php");
                                die;}}
                                require BL.'functions/error.php';}?>
<?php require BLA.'inc/footer.php';  ?>




   

