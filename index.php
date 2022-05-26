<?php

require_once("./php/Createdb.php");
require_once("./php/component.php");

if (isset($_POST['addToCart'])) {
  //echo $_POST["product_id"];
  if (isset($_SESSION['cart'])) {

    $item_array_id = array_column($_SESSION['cart'], "product_id");
    

    if(in_array($_POST['product_id'], $item_array_id)){
       echo "<script>alert('Item is already added in the cart.')</script>";
       echo "<script>window.location = 'index.php'</script>";
    }else{

      $count = count($_SESSION['cart']);
      $item_array = array(
        'product_id'=>$_POST['product_id']
      );

      $_SESSION['cart'][$count] = $item_array;


    }

  }else{
    $item_array = array(
      'product_id'=>$_POST['product_id']
    );

    //new session
    $_SESSION['cart'][0] = $item_array;

    
  }
}

?>

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

<body>
  <?php require_once("php/header.php"); ?>
  <div class="container">
    <div class="row text-center py-5">
      <?php
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
        }
      }
      ?>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>