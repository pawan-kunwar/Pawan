<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>SCP Foundation</title>
  </head>
  <body style="background-color: black; color: white; font-style: italic;">
   <?php include "db.php" ?>

  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: black; ">
      <div class="container">
  <a class="navbar-brand" href="index.php" style="color: red;font-size: 35px;">

<b>SCP Foundation</b>    <form class="form-inline my-1 my-lg-0">
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
  


<div class="container">
  <br>
<!--   <div style="width: 100%;"><h1 style="margin:auto;">SCP Foundation</h1></div>
 -->  
  <br>

  <form class="form-group" method="post" action="db.php" style="width: 60%; margin:auto;">
  
  <label>Item#</label>
  <br>
  <input type="text" class="form-control" name="pg" placeholder="Item Name" required>
  <br><br>

  <label>Object Class</label>
  <br>
  <input type="text" class="form-control" name="oc" placeholder="Object Class" required>
  <br><br>

  <label>Special Containment Procedures</label>
  <br>
  <textarea type="text" class="form-control" name="scp" row="10"></textarea>
  <br><br>

  <label>Description</label>
  <br>
  <textarea type="text" class="form-control" name="des" row="10"></textarea>
  <br><br>


  <label>Reference</label>
  <br>
  <textarea type="text" class="form-control" name="ref" row="10"></textarea>
  <br><br>
  
  <label>Addendum</label>
  <br>
  <textarea type="text" class="form-control" name="addn" row="10"></textarea>
  <br><br>


  <label>Image 1</label> 
  <br>
  <input type="text" class="form-control" name="img1" placeholder="Image One">
  <br><br>
  <hr width="100%">  
  <label>Image 2</label> 
  <br>
  <input type="text" class="form-control" name="img2" placeholder="Image Two">
  <br><br>
  <hr width="100%">
  
  <input type="submit" class="btn btn-success " name="submit" value="Save Data" style="width: 100%;">
  
  </form>
</div>

 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>