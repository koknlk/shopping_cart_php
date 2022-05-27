<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="bg-light">
  <?php require_once("php/header.php"); ?>

  <div class="container-fluid">
     <div class="row px-5">
       <div class="col-md-7">
           <div class="shopping-cart">
               <h6>My Cart</h6>
               <hr>
               <form action="cart.php" method="get" class="cart-items">
                   <div class="border rounded">
                      <div class="row bg-white">
                          <div class="col-md-3">
                              <img src="./products/wristW.jpg" alt="One" class="img-fluid"/>
                          </div>
                          <div class="col-md-6">
                              <h5 class="pt-2">Product 1</h5>
                              <small class="text-secondary">Seller: dailytuition</small>
                              <h5 class="pt-2">R 4589</h5>
                              <button type="submit" class="btn btn-warning">Save for Later</button>
                              <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
                          </div>
                          <div class="col-md-3"></div>
                      </div>
                   </div>
               </form>
           </div>
       </div>
       <div class="col-md-5"></div>
     </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>