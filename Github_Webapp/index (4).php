<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
      .body{
    fontfamily:"poppins;
    
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}



    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>SCP Foundation</title>
  </head>
  <body style="font-style: italic; background-color: grey;">
      <div background></div>
   <?php include "db.php" ?>

  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: black;">
      <div class="container">
  <a class="navbar-brand" href="index.php" style="font-size: 35px; color: red;">
    
    <b>SCP Foundation</b>

    </a>
    <form class="form-inline my-1 my-lg-0">
      <a class="btn btn-success" href="form.php">ADD NEW</a>
     
    </form>

    </div>
    </nav>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">    
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

 
          <?php foreach($result as $page): ?>

          <li class="nav-item active">
            <a href="index.php?page='<?php echo $page['pg']; ?>'" class="nav-link" style="font-size: 25px; color: red;"><?php echo $page['pg']; ?></a>
          </li>

          <?php endforeach; ?>
      
    </ul>      
    
  </div>
  </nav>
  <div class="container" >

  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 " style="background-color: black; color: white;">
  <?php
     if(isset($_GET['page']))
     {
       $pg = trim($_GET['page'],"'");


       $record = $connection->query("select * from pages where pg='$pg'") or die($connection->error());
       

       $row = $record->fetch_assoc();


       $pg = $row['pg'];
       
       $oc = $row['oc'];
       
       $scp = $row['scp'];
       
       $des = $row['des'];


       $ref = $row['ref'];

       $addn = $row['addn'];

       $img1 = $row['img1'];
       $img2 = $row['img2'];


       $id = $row['id'];
       $update ="update.php?update=" . $id;
       $delete ="db.php?delete=" . $id;




       echo "
             <h2>Item</h2>
             <p>{$pg}</p> 
             <h2>Object Class</h2>             
             <p>{$oc}</p>
             <p><img src='{$img1}' width='40%'></p>
             <h2>Special Containment Procedures</h2>               
             <p>{$scp}</p>
             <h2>Description</h2>             
             <p>{$des}</p>
             <h2>Reference</h2>             
             <p>{$ref}</p>
             <p><img src='{$img2}' width='40%' ></p>
             <h2>Addendum</h2>               
             <p>{$addn}</p>
             <br>
             <br>
             <hr>
             

       ";


       echo "
       <hr>
       <p>
       <a href='{$update}' class='btn btn-primary'>Update</a>
       <a href='{$delete}' class='btn btn-danger'>Delete</a>
       </p>
       
       
       ";


     }
     else
     {

       echo "
         <h1 class='text-center'>Hello! Welcome Here</h1>
         <p class='text-center'>You can perform CRUD here.</p>
               
       ";
     }
    
  ?>                
                                           
      
  </div>            
</div>

 


   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>