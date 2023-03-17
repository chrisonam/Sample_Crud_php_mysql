<?php
   include "../db/db_connect.php";
   
   $id = $_GET['id'];

   $query = "DELETE FROM `people` WHERE id = $id";

   $result = mysqli_query($connex,$query);

   if($result){

    header("Location: ../index.php?msg=Record deleted successfully");
   }
   else{
       echo "Failed to Delete record ". mysqli_error($connex);
   }
?>