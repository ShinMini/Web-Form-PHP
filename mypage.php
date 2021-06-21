<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="reset.css" type="text/css" />
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <title>ElectroScooter</title>
    </head>
    <body>
        <?php
        session_start();
        include_once('dbconn.php');
        if(isset($_SESSION['clientName'])){
            $id = $_SESSION['clientName'];
        }
        $sql = "SELECT * from board";
        $result = $conn->query($sql);
        ?>
        
        <nav id="navbar">
                <a href="index.php" class = "navbar_icon"> 
                    <i class="fas fa-motorcycle"></i>
                    <div style ="color: rgb(248, 248, 248); padding-left: 7px" class="logowriting"> Shin_mini</div>
                </a>
            <ul class="navbar_items">
                    <li><a class = "navbar_item" href="rent.php">RENT</a></li>
                    <li><a class = "navbar_item" href='review.php'>REVIEW</a></li>
                <?php if(!isset($_SESSION['clientName'])){ ?>
                <li><a class="navbar_item" href="signup.php">SignUp</a></li>
                <li><a class="navbar_item" href='login.php'>LogIn</a></li>
                <?php }else{ ?>
                    <li><a class="navbar_item" href='mypage.php?id=<?=$_SESSION['clientId']?>'>MyPage</a></li>
                    <li><a class="navbar_item" href='logout.php'>LogOut</a></li>
                <?php } ?>
            </ul>
        </nav>
        <section class="contain">
           

        </section>
        <footer id="footer">
    <ul class="contact">
        <li> Tel : 010-8794-3202</li>
            <a href="https://www.instagram.com/dlwlrma/?hl=ko" target="_balnk">
                 Email : gusals121234@gmail.com
            </a>
        </li>
        <li class="footer_git">
            <a href="https://github.com/ShinMini" target="_balnk">
                 https://github.com/ShinMini
            </a>
        </li>
    </ul>
    <p class="footer__description"> Web Programming final Assignment </p>
  </footer>
</body>
</html>