<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\adminpanel.css">
    <title>Admin Panel</title>
</head>
<body>
    <?php
        require 'db.php';
        $data = $_POST;

        if (empty($_SESSION['logged_user'])):
    ?>
        <div class="zagolovok">
            <h1>У вас нет доступа к данной странице</h1>
        </div>
    <? else: ?>
    <nav>
        <div class="navicon">
            menu.
            <div></div>
        </div>
          
        <a href="index.php">main.</a>
        <a href="addcatalog.php">add.</a>
    </nav>  
    <div class="wrappers">
      <?php 
          $products = R::findAll('catalog');
    
          foreach($products as $product){
            echo '
            <div class="wrapper">
              <div class="product-img">
                <img src="'.$product['url'].'" >
              </div>
              <div class="product-info">
                <div class="product-text">
                  <h1>'.$product['name'].'</h1>
                </div>
                <div class="product-price-btn">
                    <p><span>'.$product['price'].'</span></p>
                    <form method="post" action="editcatalog.php?id='.$product['id'].'" >
                      <button>Изменить</button>
                  </form>
                </div>
              </div>
            </div>';
          }
    
      ?>
    </div>
<? endif; ?>
</body>
</html>