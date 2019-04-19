<?php 


$conn = mysqli_connect("localhost" , "root", "", "restozza");

if(!$conn){
    echo "connection error:".mysqli_connect_error();
}

$query = "SELECT * FROM customer";
$result = mysqli_query($conn,$query);
$pizzas = mysqli_fetch_all($result,MYSQLI_ASSOC);


?>

<html>
<head><title>ninja</title>
<link rel="stylesheet" href="css/bootstrap.min.css"></head>
<body style="background:wheat">
    <nav class="navbar  navbar-light bg-warning text-center ">
    
            
      <div > <h1 class="flow-center bg-basic">restozza</h1></div>
     
      <div class="pull-right">
      <button class="btn btn-info bg-danger" type="submit">go to cart</button>
    </div>
      
    </nav>
    <?php
    foreach ($pizzas as $pizza) {?>
    <div class="card outline-danger ">
  <div class="card-body text-center " style="background:wheat">
  <div>
    <h4><?php echo ($pizza['pizza_name']);?>
</h4>
    <p><?php echo ($pizza['item']);  ?></p>
    <div class="checkbox">
  <label><input type="checkbox" ><?php echo "add to cart"; } ?></label>
</div>
    </div>
  </div>
</div>
</body>


</html>