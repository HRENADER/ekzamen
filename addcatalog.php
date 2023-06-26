<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\addcatalog.css">
    <title>Admin Panel Catalog</title>
</head>
<body>
    <?php
    require 'db.php';
    $data = $_POST;

        if(isset($data['add'])){
            $errors = array();
            if(trim($data['name'] == '')){
                $errors[] = 'Введите имя!';
            }
            if(trim($data['price'] == '')){
                $errors[] = 'Введите цену на товар!';
            }
            if(trim($data['url'] == '')){
                $errors[] = 'Введите ссылку на картинку!';
            }
            if (R::count('catalog', "name = ?", [$data['name']]) > 0){
                $errors[] = 'Товары с таким именем уже существуют!';
            }

            if(empty($errors)){
                $product = R::dispense('catalog');
                $product -> id;
                $product -> name = $data['name'];
                $product -> price = $data['price'];
                $product -> url = $data['url'];
                R::store($product);
                echo '<div class="success">Успешно</div>';
            }
            else{
                echo '<div class="errors"">' . array_shift($errors) . '</div>';
            }
        }
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
        <a href="adminpanel.php">adminpanel.</a>
    </nav>  
    <form class="form" method="post" action="">
        <p>Введите название товара</p>
        <input type="text" class="inputbox" name="name" required />
        <p>Введите цену товара</p>
        <input type="text" class="inputbox" name="price" required />
        <p>Введите ссылку на картинку товара</p>
        <input type="text" class="inputbox" name="url" required />
        <p></p>
        <button type="submit" name="add" class="button">Подтвердить</button>
    </form>
<? endif; ?>
</body>
</html>