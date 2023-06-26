<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign in.css">
    <title>Sign in.</title>
</head>
<body>
    <?php 
    
    require 'db.php';
    $data = $_POST;
    
    if(isset($data['doLogin'])){
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($data['log']));
        if($user){
            if ($user['pass'] == MD5($data['pas'])){
                $_SESSION['logged_user'] = $user;
                header('Location: /');
            }
            else{
                $errors[] = 'Пароль неверный!';
            }
        }
        else{
            $errors[] = 'Пользователь с таким логином не найден!';
        }
        if(!empty($errors)){
            echo '<div class="errors">' . array_shift($errors) . '</div>';
        }
    }

    ?>
    <nav>
        <div class="navicon">
            menu.
          <div></div>
        </div>
        <a class="index" href="index.php">main.</a>
        <a class="catalog" href="catalog.php">catalog.</a>  
    </nav>
   
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" action="sign in.php" method="post">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" name="log" class="login__input" placeholder="Логин">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="pas" class="login__input" placeholder="Пароль">
                    </div>
                    <button type="submit" name="doLogin" class="button login__submit">
                        <span class="button__text"> Авторизироваться</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="line">
        </div>

    <footer>
        <div class="footer">
            <a style="font-size: 30px;" class="foot" target="_blank" href="https://t.me/HRENADER">telegram.</a> <a style="font-size: 30px;" class="foot" target="_blank" href="https://vk.com/hr3nad3r">vk.</a> <a style="font-size: 30px;" class="foot" target="_blank" href="https://www.behance.net/robertantal">behance.</a>
        </div>
    </footer>
    
</body>
</html>