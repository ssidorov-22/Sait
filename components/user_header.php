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

<header class="header">
        <div class="header__top">
            <div class="header__container container">
                <div class="header__contact">
                    <span>(+01) - 5432 -6879</span>

                    <div class="location-selector">
                        <button id="location-button">Выбрать локацию</button>
                        <div id="selected-location" class="selected-location" style="display: none;"></div>
                        <div id="location-dropdown" class="dropdown-content">
                            <a href="#" onclick="selectLocation('Москва')">Москва</a>
                            <a href="#" onclick="selectLocation('Санкт-Петербург')">Санкт-Петербург</a>
                            <a href="#" onclick="selectLocation('Новосибирск')">Новосибирск</a>
                            <a href="#" onclick="selectLocation('Екатеринбург')">Екатеринбург</a>
                            <a href="#" onclick="selectLocation('Калининград')">Калининград</a>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
<header class="header">
   <section class="flex">
      <a href="index.php" class="nav__logo">
         <img src="./img/logo.jpg" alt="" class="nav__logo-img">
      </a>
      <nav class="navbar">
         <a href="index.php">Главная</a>
         <a href="orders.php">Заказы</a>
         <a href="shop.php">Магазин</a>
         <a href="contact.php">Контакты</a>
      </nav>
      <div class="profile-area">
                    <div class="theme-btn">
                        <span class="material-icons-sharp active">light_mode</span>
                        <span class="material-icons-sharp">dark_mode</span>
                    </div>
                </div>
      <div class="icons">
         <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="search_page.php"><i class="fas fa-search"></i></a>
         <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?= $total_wishlist_counts; ?>)</span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_counts; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
      </div>
      <div class="profile">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["name"]; ?></p>
         <a href="update_user.php" class="btn">Обновить профиль</a>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">Зарегистрируйтесь</a>
            <a href="user_login.php" class="option-btn">Войти</a>
         </div>
         <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
         <?php
            }else{
         ?>
         <p>пожалуйста, сначала войдите в систему или зарегистрируйтесь!</p>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">Зарегистрируйтесь</a>
            <a href="user_login.php" class="option-btn">Войти</a>
         </div>
         <?php
            }
         ?>      
      </div>
   </section>
</header>
</header>