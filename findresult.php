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
            $name = $_SESSION['clientName'];
            $id = $_SESSION['clientId'];
            $pwd = $_SESSION['password'];
        }
        ?>
        
        <nav id="navbar">
                <a href="logout.php" class = "navbar_icon"> 
                    <i class="fas fa-motorcycle"></i>
                    <div style ="color: rgb(248, 248, 248); padding-left: 7px" class="logowriting"> Shin_mini</div>
                </a> <div class="indexpage">Find Result!</div>
            <ul class="navbar_items">
                    <li><a class="navbar_item" href="logout.php">SignUp</a></li>
                    <li><a class="navbar_item" href='logout.php'>LogIn</a></li>
                <?php if(!isset($_SESSION['clientName'])){ ?>
                 
                <?php }else{ ?>
                <?php } ?>
            </ul>
        </nav>
        <section class="contain">

           <div class="resultpage">
                <?=$name?> 님의 아이디 : <?=$id?>
           </div>
           <div class="resultpage">
                <?=$name?> 님의 패스워드 : <?=$pwd?>
           </div>
            <div class="resultpageA"><a href = "logout.php">홈으로 돌아가기</a></div>

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