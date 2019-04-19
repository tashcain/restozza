<?php

include("mess.php");
error_reporting(0);
?>

<html>
<head><title>ninja</title>
<link rel="stylesheet" href="css/bootstrap.min.css"></head>
<body style="background:wheat">
<nav class="navbar  navbar-light bg-warning text-center ">
    
            
    <div > <h1 class="flow-center bg-basic">restozza</h1></div>
   
    <div class="pull-right">
    <button class="btn btn-info bg-danger" type="submit">add pizza</button>
  </div>
    
  </nav>
  <div class="container">
  <h2>log in to restozza</h2>
  <form>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">pizza_name:</label>
      <input type="text" name="title" class="form-control" id="pwd" placeholder="your pizza type">
    </div>
    
    <div class="form-group">
      <label for="pwd">items</label>
      <input type="text" name="items" class="form-control" id="pwd" placeholder="your pizza ingredients">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <input type="submit" class="btn btn-default" name="submit" placeholder="submit">
  </form>
</div>
</body>
<?php
if (isset($_GET['submit']))
{
    
$email=$_GET['email'];
$title=$_GET['title'];
$item=$_GET['items'];

    if($email!="" && $title!="" && $item!="")
    {
    $query ="INSERT INTO customer VALUES('$email','$title','$item')";
    $result = mysqli_query($conn,$query);
  }

    else{ echo "shubham";}
  



}?>



</html>
