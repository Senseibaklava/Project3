<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shop</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'components/user_header.php'; ?>
<section class="products">
   <!-- Titel voor de nieuwste producten -->
   <h1 class="heading">nieuwste producten</h1>
   <div class="box-container">
   <?php
     // Selecteer alle producten uit de database
     $select_products = $conn->prepare("SELECT * FROM `products`"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   
   <form action="" method="post" class="box">
      <!-- Verborgen veld voor product-id -->
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <!-- Verborgen veld voor productnaam -->
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <!-- Verborgen veld voor productprijs -->
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <!-- Verborgen veld voor productafbeelding -->
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <!-- Hartvormige knop voor het toevoegen van het product aan de verlanglijst -->
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <!-- Knop voor het snel bekijken van het product -->
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <!-- Afbeelding van het product -->
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <!-- Naam van het product -->
      <div class="name"><?= $fetch_product['name']; ?></div>
      <!-- Prijs van het product -->
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <!-- Aantal producten -->
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <!-- Knop voor het toevoegen van het product aan de winkelwagen -->
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      // Melding als er geen producten zijn gevonden
      echo '<p class="empty">no products found!</p>';
   }
   ?>
   </div>
</section
