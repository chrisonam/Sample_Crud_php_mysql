<?php
  include "../db/db_connect.php";
  $id = $_GET['id'];

  if(isset($_POST['submit'])){

    $first=$_POST['firstname'];
    $last = $_POST['lastname'];
    $email = $_POST['email'];
    $gender=$_POST['gender'];

    $query = "UPDATE `people` SET `firstname`='$first',`lastname`='$last',`email`='$email',`gender`='$gender' WHERE id=$id ";

    $result= mysqli_query($connex, $query);

    if($result){
     header("Location: ../index.php?msg=New record created successfully");

    }

    else{
        echo "Failed: ".mysqli_error($connex);
    }
 }





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


   <div>
     <h1>  Edit user information </h1>
   </div>
   <?php 
        $id=$_GET['id'];
        $query = "SELECT * FROM `people` WHERE  id = $id  LIMIT 1 ";
        $result = mysqli_query($connex, $query);
        $row = mysqli_fetch_assoc($result);
   ?>
   <form action="" method="post">
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" value="<?php echo ($row['firstname'])?>" require>
    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" value="<?php echo ($row['lastname'])?>" require> <br>
    <label for="email">E-mail:</label>
    <input type="email" name="email" value="<?php echo ($row['email'])?>" require>
    <br>
    <label> Gender : </label>
     <label for="male">Male</label>
     <input type="radio" name="gender"  value="male" <?php echo ($row['gender']=='male')? "checked": ""; ?>>

     <label for="female">Female</label>
     <input type="radio" name="gender" id="female" value="female" <?php echo ($row['gender']=='female')? "checked": ""; ?>><br>
     
     <button type="submit" name="submit"> Submit</button>
     <a href="../index.php"> Cancel </a>

   </form>
    
</body>
</html>