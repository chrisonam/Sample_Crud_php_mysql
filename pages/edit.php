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




 include "../assets/header.php";
?>


<div class="my-6 mx-auto w-2/6 ">
     <h1 class="my-6 text-center text-4xl"> Sample Crud - Update </h1>
   <div class="w-full bg-white p-4 text-justify border-black border ">
  
   <?php 
        $id=$_GET['id'];
        $query = "SELECT * FROM `people` WHERE  id = $id  LIMIT 1 ";
        $result = mysqli_query($connex, $query);
        $row = mysqli_fetch_assoc($result);
   ?>
   <form action="" method="post">
    <label for="firstname">First Name:</label>
    <input  class=" border border-gray-700 w-2/3 rounded-full p-2 m-2"type="text" name="firstname" value="<?php echo ($row['firstname'])?>" require>
    <label for="lastname">Last Name:</label>
    <input class=" border border-gray-700 w-2/3 rounded-full p-2 m-2" type="text" name="lastname" value="<?php echo ($row['lastname'])?>" require> <br>
    <label for="email">E-mail:</label>
    <input  class=" border border-gray-700 w-2/3 rounded-full p-2 m-2" type="email" name="email" value="<?php echo ($row['email'])?>" require>
    <br>
    <label> Gender : </label>
     <label for="male">Male</label>
     <input type="radio" name="gender"  value="male" <?php echo ($row['gender']=='male')? "checked": ""; ?>>

     <label for="female">Female</label>
     <input type="radio" name="gender" id="female" value="female" <?php echo ($row['gender']=='female')? "checked": ""; ?>><br>
     
     <button class="rounded-lg bg-cyan-700 m-2 w-32 p-3 text-white" type="submit" name="submit"> Submit</button>
     <a class="rounded-lg bg-red-700 m-2 w-32 p-3 text-white" href="../index.php"> Cancel </a>

   </form>
</div>
</div>
    
</body>
</html>