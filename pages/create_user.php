<?php 
// db connect file included 
 include "../db/db_connect.php";

 if(isset($_POST['submit'])){

    $first=$_POST['firstname'];
    $last = $_POST['lastname'];
    $email = $_POST['email'];
    $gender=$_POST['gender'];

    $query = "INSERT INTO `people`(`id`, `firstname`, `lastname`, `email`, `gender`) 
    VALUES (NULL,'$first','$last','$email','$gender')";

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
     <h1> Create new user</h1>
   </div>
   <form action="" method="post">
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" placeholder="First name" require>
    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" placeholder="Last name" require> <br>
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" require>
    <br>
    <label> Gender : </label>
     <label for="male">Male</label>
     <input type="radio" name="gender" id="male" value="male">

     <label for="female">Female</label>
     <input type="radio" name="gender" id="female" value="female"><br>
     
     <button type="submit" name="submit"> Submit</button>
     <a href="../index.php"> Cancel </a>

   </form>
    
</body>
</html>