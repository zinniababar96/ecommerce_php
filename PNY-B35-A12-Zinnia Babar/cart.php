<?php include('setsession.php'); ?>

<?php 
$cookie_value = $_SESSION['ss_username'];
setcookie("test_cookie", "PAKISTAN", time() + 86400, "/"); // 86400 = 1 day

//echo $_COOKIE["test_cookie"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

.container .image:hover {
      opacity: 0.3;
    }
    #main {
      width: 400px;
      height: 200px;
      border: 2px solid black;
    }
    #head1 {
      background-color: grey;
      color: white;
      padding: 10px;
    }

	.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
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
          <a class="nav-link active" aria-current="page" href="product.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Unstiched</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html">login</a>
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

<div class="w-50 mx-auto">

  <div class="container">
    <div class="row p-3">
      <div class="col-4">
        <p align="center">
          <img src="images/pic4.jpg" 
          class="img-thumbnail image" id="c1" onclick="showBigImage(this.id)">
        </p>
      </div>
        <div class="col-4">
          <p align="center">
          <img src="images/pic4.jpg" 
          class="img-thumbnail image" id="c2" onclick="showBigImage(this.id)">
        </p>
        </div>
        <div class="col-4">
          <p align="center">
          <img src="images/pic4.jpg"
          class="img-thumbnail image" id="c3" onclick="showBigImage(this.id)">
        </p>
        </div>
    </div>    

    <div class="row">
      <div class="col-12">
        <p align="center">
          <img src="images/pic4.jpg" id="imageBig">
        </p>
      </div>
    </div>   

  </div>
  <br>

  <span id="mySelect" style="color: red; font-size: 15px; font-weight: bold;"></span>
  
  <br>
  <div class="container">
    <div class="row">
      <div class="col-4">
        Available Sizes:
      </div>
      <div class="col-8">
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions"
        id="rd1" value="0" onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">s</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions" 
        id="rd2" 
        value="1"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio2">m</label>
        </div>
        <div class="form-check form-check-inline">
        <input 
        class="form-check-input" 
        type="radio" 
        name="inlineRadioOptions"
        id="rd3" 
        value="2"
        onchange="getPrice(this.id)">
        <label class="form-check-label" for="inlineRadio3">l</label>
        </div>        
      </div>
    </div>
    </div>
  </div>
<br><br>
<div>

   <form method="GET" action="checkcart.php">

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Select Your Item</label>
    <div class="col-sm-10">

      <input type="text" class="form-control" id="inputEmail3" name="t1">

    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Price Selected</label>
    <div class="col-sm-10">

      <input type="text" class="form-control" id="inputEmail3" name="t2">

    </div>
  </div>

<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Quantity Required</label>
    <div class="col-sm-10">

      <input type="text" class="form-control" id="inputEmail3" name="t3">

    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Total Amount</label>
    <div class="col-sm-10">

      <input type="text" name="t4" class="form-control" id="inputPassword3">


    </div>
  </div>


<br><br>

  <button type="submit" class="btn btn-primary">Click Here To Add Item</button>
</form>




   
    <hr>
      

<!---
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-instagram"></a>

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->
</footer>
<!-- Footer -->
  <script type="text/javascript">

    function getPrice(pIndex) {
      var price = [3500 ,3700 ,4000]
      var sizes = ["s" ,"m" ,"l"]
      var rd1 = document.getElementById("rd1")
        var rd2 = document.getElementById("rd2")
        var rd3 = document.getElementById("rd3")
        var ss = document.getElementById("mySelect")

        if(pIndex == "rd1"){
         ss.innerHTML = "Size:" + price[rd1.value]
          //ss.innerHTML += "&nbsp;&nbsp;&nbsp; Price: " + price[rd1.value]
        }
        if (pIndex == "rd2") {
      // console.log (rd2.value)
      ss.innerHTML = "Size: " + price[rd2.value]
     // ss.innerHTML += " &nbsp;&nbsp;&nbsp; Price: " + price[rd2.value]
    }
    if (pIndex == "rd3") {
      // console.log (rd3.value)
      ss.innerHTML = "Size: " + price[rd3.value]
     // ss.innerHTML += " &nbsp;&nbsp;&nbsp; Price: " + price[rd3.value]
    }
        }

    

    function showBigImage(cd){
      console.log(cd)
      var dd = document.getElementById("imageBig")

      if(cd == "c1"){
        dd.src = c1.src
      }
      if (cd == "c2"){
      dd.src = c2.src
    }
    if (cd == "c3"){
      dd.src = c3.src
    }
</script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</body>
</html>