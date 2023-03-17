<?php
  include 'db/db_connect.php'; 
  include 'assets/header.php';   
?>

   
   <a href=" pages/create_user.php"> Add New User</a>

   <table border="1">
    <thead>
        <tr>
        <th> #</th>
        <th> First - Name</th>
        <th>Last - name</th>
        <th> E-mail </th>
        <th> Gender</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>

    <?php
    // select query 
       $query="SELECT * FROM `people`";
       $result= mysqli_query($connex,$query);
       while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td> <?php echo $row['id']?></td>
            <td> <?php echo $row['firstname']?></td>
            <td> <?php echo $row['lastname']?></td>
            <td> <?php echo $row['email']?></td>
            <td> <?php echo $row['gender']?></td>
            <td> <a href="pages/edit.php?id=<?php echo $row['id']?>">Edit</a>
            <a href="pages/delete_user.php?id=<?php echo $row['id']?>">Delete</a>
        </td>
        </tr>
        

        <?php
       }
       
       ?>
    
    </tbody>



   </table>
</body>
</html>