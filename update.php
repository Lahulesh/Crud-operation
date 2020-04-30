<?php

include 'conn.php';

if(isset($_POST['ok'])){

    $id = $_GET['id'];
    $First = $_POST['fn'];
    $Last = $_POST['ln'];
    $middle = $_POST['mn'];
    $cou = $_POST['c'];
    $ph = $_POST['p'];

    $q =  " update crudtable set id=$id, FirstName='$First', LastName='$Last', MiddleName='$middle', Country='$cou', Phone='$ph' where id=$id ";


   $query = mysqli_query($connect,$q);
   header('location:display.php');


   

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <?php include 'link.php' ?>
</head>
<body>
<div class="col-lg-6 m-auto">
    <form method="post" class="text-center">
    <br><br>
        <h1 class="text-center"> UPDATE DATA <h2><br><br>
        <label > First Name: </label><br>
        <input type="text" name="fn" required><br>

        <label > Last Name: </label><br>
        <input type="text" name="ln" required><br>

        <label > Middle Name: </label><br>
        <input type="text" name="mn" required ><br>

        <label > Country: </label><br>
        <input type="text" name="c" required><br>

        <label > Phone: </label><br>
        <input type="tel" name="p" required><br>

        

        <button type="submit" class="btn btn-success" name="ok"> Submit </button>

    </form>


</div>
    
</body>
</html>