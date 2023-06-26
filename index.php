<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Main.</title>
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
          
            <a href="catalog.php">catalog.</a>
            <?php
                if(isset($_SESSION['logged_user'])){
                    echo '<a href="adminpanel.php">adminpanel.</a>';
                }
            ?>
        </nav>  
        
    <div class="head">
        ОБО МНЕ.
    </div>
    <div class="description">
        Привет, меня зовут Роберт! Я живу в городе <div style="display: inline; color: #D6C396;">Пенза.</div> <br>
        Моё творчество - наглядный пример, как можно свои переживания <br>
        и эмоции трансформировать в материальные вещи - фото и видеоролики. <br> 
        Тут есть мода, эстетика, ощущение, разные люди и видение их через призму моего взгляда.<br> 
        <br>
        За довольно короткое время в данной сфере, а именно 3 года, я успел поработать с крупными брендами такими как <div style="display: inline; color: #D6C396;">“Твое”</div>, 
        <div style="display: inline; color: #D6C396;">“Bershka”</div>, <div style="display: inline; color: #D6C396;">“H&M”</div>.
    </div>
    <div class="image-one">
        <img class="img1" src="pictures/one.jpg" alt="image-one">
    </div>
    <div class="quote">
        Моя работа имеет смысл только в том случае, если она является верным свидетелем своего времени.
    </div>
    <div class="mark1">
        "
    </div>
    <div class="mark2">
        "
    </div>
    <div class="image-two">
        <img class="img2" src="pictures/two.jpg" alt="image-two">
    </div>
    <div class="experience">
        МОЙ ОПЫТ.
    </div>
    <div class="txt-exp">
        Первый мой договор на коммерческую фотографию я подписал в 2021 году, до этого работал по обычной договорённости или вообще за идею. Такое трудно вообще назвать работой. Как правило,   подписание договора и обсуждение деталей занимает 10% от общего времени, остальное - обсуждение всего, что только придёт в голову, начиная с погоды и заканчивая концертами. В нашей работе также нужно быть всегда на чеку и быстро реагировать на предложения и запросы клиента, иначе это сделает кто-то другой.
    </div>
    <div class="image-three">
        <img class="img3" src="pictures/three.jpg" alt="three-img">
    </div>
    <div class="image-four">
        <img class="img4" src="pictures/four.jpg" alt="four-img">
    </div>
    <div class="image-five">
        <img class="img5" src="pictures/five.jpg" alt="five-img">
    </div>

    <div class="txt-statistics1">
       <div class="number-statistics1">447</div>
        съёмок было совершено за всё время
    </div>

    <div class="txt-statistics2">
        <div class="number-statistics2">170</div>
         новых клиентов пришли ко мне
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