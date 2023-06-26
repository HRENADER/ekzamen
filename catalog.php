<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/catalog.css">
    <title>Catalog.</title>
</head>
<body>
    <?php 
        require 'db.php';
        if(isset($_SESSION['logged_user'])){
          echo '<div class="close"><a href="logOut.php">sign out.</a></div>';
        }
        else{
          echo '<div class="close"><a href="sign in.php">sign in.</a></div>';
        }
        ?>
    <nav>
        <div class="navicon">
            menu.
        <div></div>
        </div>
          
        <a href="index.php">main.</a>
    </nav>  

    <main>
    <div class="line1">
    </div>
    <div class="zagolovok">
        <h1>КАТАЛОГ.</h1>
    </div>
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
                <form action="form.php" target="_blank">
                    <button >Купить</button>
                  </form>
                </div>
              </div>
            </div>';
          }
    
      ?>
    </div>
    <div class="line2">
      </div>

    <footer>
        <div class="footer">
            <a style="font-size: 30px;" class="foot" target="_blank" href="https://t.me/HRENADER">telegram.</a> <a style="font-size: 30px;" class="foot" target="_blank" href="https://vk.com/hr3nad3r">vk.</a> <a style="font-size: 30px;" class="foot" target="_blank" href="https://www.behance.net/robertantal">behance.</a>
        </div>
    </footer>
  </div>
            

</body>
</html>