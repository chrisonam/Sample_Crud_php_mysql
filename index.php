<?php
  include 'db/db_connect.php'; 
  include 'assets/header.php';   
?>

   
   
<div class="w-8/12 my-0 mx-auto align-center p-4 flex flex-col">
    <h1 class="text-center text-6xl"> Sample Crud - Read</h1>
    <div class="my-5 ">
    <a class="p-3 border-black rounded-full bg-zinc-800 text-slate-300" href=" pages/create_user.php"> Add New User</a>
    </div>
   <table class=" shadow-xl w-full table-auto border-collapse border border-slate-400 bg-slate-50 p-4 text-justify ">
    <thead>
        <tr>
        <th class="border border-slate-600 bg-gray-300"> #</th>
        <th class="border border-slate-600 bg-gray-300"> First - Name</th>
        <th class="border border-slate-600 bg-gray-300">Last - name</th>
        <th class="border border-slate-600 bg-gray-300"> E-mail </th>
        <th class="border border-slate-600 bg-gray-300"> Gender</th>
        <th class="border border-slate-600 bg-gray-300">Action</th>
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
            <td class="border border-slate-700"> <?php echo $row['id']?></td>
            <td class="border border-slate-700"> <?php echo $row['firstname']?></td>
            <td class="border border-slate-700"> <?php echo $row['lastname']?></td>
            <td class="border border-slate-700"> <?php echo $row['email']?></td>
            <td class="border border-slate-700"> <?php echo $row['gender']?></td>
            <td class="border border-slate-700"> <a class=" text-cyan-700" href="pages/edit.php?id=<?php echo $row['id']?>">Edit</a>
            <a class="text-red-700" href="pages/delete_user.php?id=<?php echo $row['id']?>">Delete</a>
        </td>
        </tr>
        

        <?php
       }
       
       ?>
    
    </tbody>
   </table>
</div>
