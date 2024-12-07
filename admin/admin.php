<?php
include '../components/connect.php';
session_start();
$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
       <link rel="stylesheet" href="../css/stylead.css">
</head>
<body>
<?php include '../components/admin_header.php'; ?>

    <main>
        <aside>
            <button id="close-btn">
                <span class="material-icons-sharp">close</span>
            </button>

            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                        <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">person_outline</span>
                        <h3>Customers</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">terminal</span>
                        <h3>Help</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">grid_view</span>
                        <h3>Add product</h3>
                </a>
            </div>
            <div class="updates">
                <span class="material-icons-sharp">update</span>
                <h4>Updates Available</h4>
                <p>Security Updates</p>
                <p>General Updates</p>
                <a href="#" button=""onclick="location.reload();">Update Now</a>
            </div>
        </aside>

        <section class="middle">
            <div class="header">
                <h1>Overview</h1>
                <input type="date">
            </div>

            <div class="cards">
                <div class="card">
                  <div class="top">
                    <div class="left">
                        <img src="../image/BTC.png">
                        <h2>BTC</h2>
                    </div>
                    <img src="../image/visa.png" class="right">
                </div>
                <div class="middle">
                    <h1>$827,199</h1>
                    <div class="chip">
                    <img src="../image/card chip.png">
                    </div>
                </div>
                <div class="bottom">
                    <div class="left">
                        <small>Card Holder</small>
                        <h5>Serge Sidorov</h5>
                    </div>
                    <div class="right">
                        <div class="expiry">
                            <small>Expiry</small>
                            <h5>08/28</h5>
                        </div>
                        <div class="CVV">
                            <small>CVV</small>
                            <h5>657</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of card 1-->

                <div class="card">
                    <div class="top">
                    <div class="left">
                      <img src="./image/RUB.png">
                      <h2>RUB</h2>
                    </div>
                    <img src="../image/MIR.png" class="right">
                </div>
                <div class="middle">
                  <h1>₽683,094</h1>
                  <div class="chip">
                    <img src="../image/card chip.png">
                </div>
                </div>
                <div class="bottom">
                  <div class="left">
                      <small>Card Holder</small>
                      <h5>Serge Sidorov</h5>
                  </div>
                  <div class="right">
                      <div class="expiry">
                          <small>Expiry</small>
                          <h5>08/30</h5>
                      </div>
                      <div class="CVV">
                          <small>CVV</small>
                          <h5>675</h5>
                      </div>
                  </div>
              </div>
          </div>
          <!--End of card 2-->
          <div class="card">
            <div class="top">
              <div class="left">
                  <img src="../image/EURO.png">
                  <h2>EURO</h2>
              </div>
              <img src="../image/master card.png" class="right">
          </div>
          <div class="middle">
              <h1>€79,854</h1>
              <div class="chip">
                <img src="../image/card chip.png">
                </div>
          </div>
          <div class="bottom">
              <div class="left">
                  <small>Card Holder</small>
                  <h5>Serge Sidorov</h5>
              </div>
              <div class="right">
                  <div class="expiry">
                      <small>Expiry</small>
                      <h5>08/29</h5>
                  </div>
                  <div class="CVV">
                      <small>CVV</small>
                      <h5>876</h5>
                  </div>
              </div>
          </div>
      </div>
      <!--End of card 3-->
    </div>
    <!--End of cards-->
    <div class="monthly-report">
        <div class="report">
            <h3>Income</h3><!--доход-->
        <div>
        <details>
            <h1>₽50,000</h1>
            <h6 class="success">+3.5%</h6>
        </details>
        <p class="text-muted">Compared to 20,000 last mount</p>
        </div>
    </div>
<!--Конец Income-->
        <div class="report">
            <h3>Expenses</h3><!--Расходы-->
        <div>
            <details>
                <h1>₽25,000</h1>
                <h6 class="danger">-6.5%</h6>
            </details>
            <p class="text-muted">Compared to 27,000 last mount</p>
        </div>
        </div>
<!-- конец Expenses-->
        <div class="report">
            <h3>Cashback</h3><!--Кэшбек-->
        <div>
            <details>
                <h1>₽5000</h1>
                <h6 class="success">+7.1%</h6>
            </details>
            <p class="text-muted">Compared to 4000 last mount</p>
        </div>
    </div>
<!--конец cashback-->
        <div class="report">
            <h3>Turnover</h3><!--оборот-->
        <div>
            <details>
                <h1>₽139,900</h1>
                <h6 class="danger">-17.8%</h6>
            </details>
            <p class="text-muted">Compared to 157,000 last mount</p>
        </div>
    </div>
<!--Turnover-->
    </div>
        
        <div class="fast-payment">
            <h2>Fast Payment</h2>
            <div class="badges">
                <div class="badge">
                    <span class="material-icons-sharp">add<span>
                </div>
                <div class="badge">
                    <span class="bg-primary"></span>
                    <div>
                        <h5>Games</h5>
                        <h4>$50</h4>
                    </div>
                </div>
                <div class="badge">
                    <span class="bg-success"></span>
                    <div>
                        <h5>Internet</h5>
                        <h4>$50</h4>
                    </div>
                </div>
                <div class="badge">
                    <span class="bg-primary"></span>
                    <div>
                        <h5>Gas</h5>
                        <h4>$190</h4>
                    </div>
                </div>
                <div class="badge">
                    <span class="bg-danger"></span>
                    <div>
                        <h5>Moves</h5>
                        <h4>$35</h4>
                    </div>
                </div>
                <div class="badge">
                    <span class="bg-primary"></span>
                    <div>
                        <h5>Education</h5>
                        <h4>$99</h4>
                    </div>
                </div>
                <div class="badge">
                    <span class="bg-danger"></span>
                    <div>
                        <h5>Electricity</h5>
                        <h4>$109</h4>
                    </div>
                </div>
                <div class="badge">
                    <span class="bg-success"></span>
                    <div>
                        <h5>Food</h5>
                        <h4>$399</h4>
                    </div>
                </div>
            </div>
        </div>
         
        <canvas id="chart"></canvas>
        

        
    </section>

        <section class="right">

            <div class="recent-transaction">
                <div class="header">
                    <h2>Recent Transaction</h2>
                    <a href="#">More <span class="material-icons-sharp purple">chevron_right</span></a>
                </div>

                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-purple-light">
                            <span class="material-icons-sharp primary">headphones</span>
                    </div>
                    <div class="details">
                        <h4>Music</h4>
                        <p>20.11.2024.</p>
                    </div>
                    </div>
                    <div class="card-details">
                        <div class="card bg-danger">
                            <img src="../image/master card.png">
                    </div>
                    <div class="details">
                        <p>*2757</p>
                        <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>$20</h4>
                </div>
                <!---END OF TRANSACTION-->
                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-purple-light">
                            <span class="material-icons-sharp purple">shopping_bag</span>
                        </div>
                        <div class="details">
                            <h4>Shopping</h4>
                            <p>21.11.2024.</p>
                        </div>
                        </div>
                    <div class="card-details">
                        <div class="card bg-primary">
                            <img src="../image/visa.png">
                    </div>
                    <div class="details">
                        <p>*1920</p>
                        <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$200</h4>
                </div>
                <!---END OF TRANSACTION-->
                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-success-light">
                            <span class="material-icons-sharp success">restaurant</span>
                        </div>
                        <div class="details">
                            <h4>Restaurant</h4>
                            <p>21.11.2024.</p>
                        </div>
                        </div>
                    <div class="card-details">
                        <div class="card bg-dark">
                            <img src="../image/master card.png">
                    </div>
                    <div class="details">
                        <p>*8273</p>
                        <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$50</h4>
                </div>
                <!---END OF TRANSACTION-->
                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-danger-light">
                            <span class="material-icons-sharp danger">sports_esports</span>
                        </div>
                        <div class="details">
                            <h4>Games</h4>
                            <p>15.11.2024.</p>
                        </div>
                        </div>
                    <div class="card-details">
                        <div class="card bg-danger">
                            <img src="../image/MIR.png">
                    </div>
                    <div class="details">
                        <p>*2757</p>
                        <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$44</h4>
                </div>
                <!---END OF TRANSACTION-->
                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-danger-light">
                            <span class="material-icons-sharp success">medication</span>
                        </div>
                        <div class="details">
                            <h4>Pharmacy</h4>
                            <p>15.11.2024</p>
                        </div>
                        </div>
                    <div class="card-details">
                        <div class="card bg-primary">
                            <img src="../image/MIR.png">
                    </div>
                    <div class="details">
                        <p>*2757</p>
                        <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$30</h4>
                </div>
                <!---END OF TRANSACTION-->
            </div>
        <!----END Of RECENT TRANSACITION-->
        </section>
    
    </main>
<section class="dashboard">
   <div class="box-container">

      <div class="box">
         <h3>welcome!</h3>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="../admin/update_profile.php" class="btn">update profile</a>
      </div>

      <div class="box">
         <?php
            $total_pendings = 0;
            $select_pendings = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
            $select_pendings->execute(['pending']);
            if($select_pendings->rowCount() > 0){
               while($fetch_pendings = $select_pendings->fetch(PDO::FETCH_ASSOC)){
                  $total_pendings += $fetch_pendings['total_price'];
               }
            }
         ?>
         <h3><span>$</span><?= $total_pendings; ?><span>/-</span></h3>
         <p>total pendings</p>
         <a href="../admin/placed_orders.php" class="btn">see orders</a>
      </div>

      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
            $select_completes->execute(['completed']);
            if($select_completes->rowCount() > 0){
               while($fetch_completes = $select_completes->fetch(PDO::FETCH_ASSOC)){
                  $total_completes += $fetch_completes['total_price'];
               }
            }
         ?>
         <h3><span>$</span><?= $total_completes; ?><span>/-</span></h3>
         <p>completed orders</p>
         <a href="../admin/placed_orders.php" class="btn">see orders</a>
      </div>

      <div class="box">
         <?php
            $select_orders = $conn->prepare("SELECT * FROM `orders`");
            $select_orders->execute();
            $number_of_orders = $select_orders->rowCount()
         ?>
         <h3><?= $number_of_orders; ?></h3>
         <p>orders placed</p>
         <a href="../admin/placed_orders.php" class="btn">see orders</a>
      </div>

      <div class="box">
         <?php
            $select_products = $conn->prepare("SELECT * FROM `products`");
            $select_products->execute();
            $number_of_products = $select_products->rowCount()
         ?>
         <h3><?= $number_of_products; ?></h3>
         <p>products added</p>
         <a href="../admin/products.php" class="btn">see products</a>
      </div>

      <div class="box">
         <?php
            $select_users = $conn->prepare("SELECT * FROM `users`");
            $select_users->execute();
            $number_of_users = $select_users->rowCount()
         ?>
         <h3><?= $number_of_users; ?></h3>
         <p>normal users</p>
         <a href="../admin/users_accounts.php" class="btn">see users</a>
      </div>

      <div class="box">
         <?php
            $select_admins = $conn->prepare("SELECT * FROM `admins`");
            $select_admins->execute();
            $number_of_admins = $select_admins->rowCount()
         ?>
         <h3><?= $number_of_admins; ?></h3>
         <p>admin users</p>
         <a href="../admin/admin_accounts.php" class="btn">see admins</a>
      </div>

      <div class="box">
         <?php
            $select_messages = $conn->prepare("SELECT * FROM `messages`");
            $select_messages->execute();
            $number_of_messages = $select_messages->rowCount()
         ?>
         <h3><?= $number_of_messages; ?></h3>
         <p>new messages</p>
         <a href="../admin/messages.php" class="btn">see messages</a>
      </div>

   </div>

</section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/admin.js"></script>
    <script>
let profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
}

window.onscroll = () =>{
   profile.classList.remove('active');
}

let mainImage = document.querySelector('.update-product .image-container .main-image img');
let subImages = document.querySelectorAll('.update-product .image-container .sub-image img');

subImages.forEach(images =>{
   images.onclick = () =>{
      src = images.getAttribute('src');
      mainImage.src = src;
   }
});
    </script>
</body>
</html>