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
<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Главная</title>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<div class="home-bg">
<section class="home">
   <div class="swiper home-slider">
   <div class="swiper-wrapper">
      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-1.png" alt="">
         </div>
         <div class="content">
            <span>скидка до 50%</span>
            <h3>На последние смартфоны</h3>
            <a href="shop.php" class="btn">Купить сейчас</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-2.png" alt="">
         </div>
         <div class="content">
            <span>скидка до 50%</span>
            <h3>На последние часы</h3>
            <a href="shop.php" class="btn">Купить сейчас</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-3.png" alt="">
         </div>
         <div class="content">
            <span>скидка до 50%</span>
            <h3>На последние наушники</h3>
            <a href="shop.php" class="btn">Купить сейчас</a>
         </div>
      </div>
   </div>
      <div class="swiper-pagination"></div>
   </div>
</section>

</div>
<section class="category">
   <h1 class="heading">Категории товаров</h1>
   <div class="swiper category-slider">
   <div class="swiper-wrapper">
   <a href="category.php?category=laptop" class="swiper-slide slide">
      <img src="images/icon-1.png" alt="">
      <h3>Ноутбуки</h3>
   </a>
   <a href="category.php?category=tv" class="swiper-slide slide">
      <img src="images/icon-2.png" alt="">
      <h3>Телевизоры</h3>
   </a>
   <a href="category.php?category=camera" class="swiper-slide slide">
      <img src="images/icon-3.png" alt="">
      <h3>Камеры</h3>
   </a>
   <a href="category.php?category=mouse" class="swiper-slide slide">
      <img src="images/icon-4.png" alt="">
      <h3>Игровые мыши</h3>
   </a>
   <a href="category.php?category=fridge" class="swiper-slide slide">
      <img src="images/icon-5.png" alt="">
      <h3>Холодильники</h3>
   </a>
   <a href="category.php?category=washing" class="swiper-slide slide">
      <img src="images/icon-6.png" alt="">
      <h3>Посудомоечная машина</h3>
   </a>
   <a href="category.php?category=smartphone" class="swiper-slide slide">
      <img src="images/icon-7.png" alt="">
      <h3>Смартфоны</h3>
   </a>
   <a href="category.php?category=watch" class="swiper-slide slide">
      <img src="images/icon-8.png" alt="">
      <h3>Часы</h3>
   </a>
   </div>
   <div class="swiper-pagination"></div>
   </div>
</section>

<section class="home-products">
   <h1 class="heading">Последние добавленные продукты</h1>
   <div class="swiper products-slider">
   <div class="swiper-wrapper">
   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">товары еще не добавлены!</p>';
   }
   ?>
   </div>
   <div class="swiper-pagination"></div>
   </div>
</section>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script>
function selectLocation(location) {
   const selectedLocationDiv = document.getElementById('selected-location');

   selectedLocationDiv.innerText = location;

   selectedLocationDiv.style.display = 'block';
   document.getElementById('location-button').style.display = 'none';
   
   localStorage.setItem('selectedLocation', location);

   document.getElementById('location-dropdown').style.display = 'none';
   selectedLocationDiv.onclick = function() {
       selectedLocationDiv.style.display = 'none';
       document.getElementById('location-button').style.display = 'block';
       localStorage.removeItem('selectedLocation');
   };
}

window.onload = function() {
   const savedLocation = localStorage.getItem('selectedLocation');
   
   if (savedLocation) {
       selectLocation(savedLocation);
   }
};

document.getElementById('location-button').addEventListener('click', function() {
   const dropdown = document.getElementById('location-dropdown');
   dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
});

window.onclick = function(event) {
   if (!event.target.matches('#location-button') && !event.target.matches('.selected-location')) {
      const dropdown = document.getElementById('location-dropdown');
      if (dropdown.style.display === 'block') {
          dropdown.style.display = 'none';
      }
  }
};

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});


const themeBtn = document.querySelector('.theme-btn');

themeBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');

    themeBtn.querySelector('span:first-child').classList.toggle('active');

    themeBtn.querySelector('span:last-child').classList.toggle('active');
});
</script>

</body>
</html>