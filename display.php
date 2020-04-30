<!DOCTYPE html>
<html>
<head>
    <title>DISPLAY</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <?php include 'link.php' ?>
</head>
<body>
<?php
if(isset($_POST['search'])){

  $Skey = $_POST['search'];
  $q = " Select * From crudtable WHERE name LIKE '%$Skey%'";
}else{
  $q = " Select * From crudtable";
  $Skey = "";  

}




?>

<div class="Container"><br><br>

<br><br>
        <h1 class="text-center">Table Data <h1>
        <table>
        <div>
<input type="text" name="search" value="<?php echo $Skey; ?>" >
</div><br>
<div>
<button class="btn-primary">Search</button>
</div>
            <tr>
                <th>Id</th>
                <th>F-Name</th>
                <th>L-Name</th>
                <th>M-Name</th>
                <th>Country</th>
                <th>Phone</th>
                <th>UPDATE</th>
                <th>DELETE</th>
                <th>PRINT</th>

            </tr>
            <?php

include 'conn.php';
$q = " Select * From crudtable";  
$query = mysqli_query($connect,$q);

while($result  = mysqli_fetch_array($query)) {


?>  

<tr>
  <td><?php echo $result['id']; ?></td>
  <td><?php echo $result['firstname']; ?></td>
  <td><?php echo $result['lastname']; ?></td>
  <td><?php echo $result['middlename']; ?></td>
  <td><?php echo $result['country']; ?></td>
  <td><?php echo $result['phone']; ?></td>
  <td><button class="btn-dark btn"><a href="delete.php?id=<?php echo $result['id']; ?>"class="text-white">DELETE</a><button></td>
  <td><button class="btn-primary btn"><a href="update.php?id=<?php echo $result['id']; ?>"class="text-white">UPDATE</a><button></td>
  <td><button class="btn-warning btn" class="print"><a href="makepdf.php?id=<?php echo $result['id']; ?>"class="text-white">PRINT</a><button></td>
   
  
  </tr>

  <?php
}

  ?>

        </table>


   </div>
</div>



    
</body>
</html>