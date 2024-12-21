<?php include('setsession.php'); ?>

<?php 
$cookie_value = $_SESSION['ss_username'];
setcookie("test_cookie", "PAKISTAN", time() + 86400, "/"); // 86400 = 1 day

//echo $_COOKIE["test_cookie"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Shopping Cart</title>

    <style type="text/css">
        
        .container {
          width: 100%;
          border: 0px solid black;
        }

        .item_col {
        	width: 200px;
        	height: 100px;
        	padding: 10px;
        	background-color: lightgreen;
        	border: 1px solid black;
        	margin: 2px;
        }

        .wrapper {
          display: flex;
          width: 100%;
          height:  500px;
          /*flex-direction: row-reverse;  */
          justify-content: center;  
          align-items: center;  
          flex-wrap: wrap;      
          margin-top: 50px;
        }

        .box {
          width:  200px;
          height: 250px;
          margin:  2px;
          border: 1px black solid;
          background-color: lightgrey;
        }

         .col1 {
            background-color: darkgrey;
            border: 0px;
            margin:  10px;
            padding: 20px;
          }
          

          .row_bg {
            background-color: lightgray;
            padding: 20px;
          }

    </style>




  </head>
  <body>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Clothing Brand</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse show" id="navbarDark">
      <ul class="navbar-nav me-auto mb-2 mb-xl-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Unstiched</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">login</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br><br>


  <hr>

    <div class="container">
    
    <h1>Welcome: </h1> <h3> <?php echo $_SESSION['ss_username'];  ?> </h3> 
    <br><br>
    
    <?php 

    	include('dbconnect.php');

    	$sql = "select * from product_master a where a.block_status=false";

		$res = mysqli_query($conn, $sql);

		echo "</h3> Total: " . mysqli_num_rows($res) . " Items Found </h3>";
		?>

		<br><br>
		

     <div class="wrapper"> 
 <!--<div class="container"> -->
      <div class="row">   
    
		<?php
		while ($row = mysqli_fetch_assoc($res))  {
  		?>		
  			 <div class="box">

         <!-- <div class="col-12 col-sm-6 col-lg-3 col1"> -->
  	      		<?php 
              echo $row["item_name"] . "<br>";
              echo $row["item_price"] . "<br><br>"; 
              echo  "<img src='images/" . $row["image_file"] .
                    "' width=100px height=100px>" ;
              ?>

              <a class="btn btn-primary" href="cart.php" role="button">Add to Cart</a>
                
  	     </div>

  		<?php				
		}
		?>

  </div>
  </div>

    <?php
      include('dbclose.php');
    ?>
   
    <hr>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>