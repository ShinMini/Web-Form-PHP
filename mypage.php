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
            $id = $_SESSION['clientId'];
        }
        
        ?>
        
        <nav id="navbar">
                <a href="index.php" class = "navbar_icon"> 
                    <i class="fas fa-motorcycle"></i>
                    <div style ="color: rgb(248, 248, 248); padding-left: 7px" class="logowriting"> Shin_mini</div>
                </a>
                <div class="mypage">My  Page</div>
            <ul class="navbar_items">
                    
                    <li><a class = "navbar_item" href='review.php'>REVIEW</a></li>
                <?php if(!isset($_SESSION['clientName'])){ ?>
                 
                <li><a class="navbar_item" href="signup.php">SignUp</a></li>
                <li><a class="navbar_item" href='login.php'>LogIn</a></li>
                <?php }else{ ?>
                    <li><a class = "navbar_item" href="rent.php">RENT</a></li>
                    <li><a class="navbar_item" href='mypage.php?id=<?=$_SESSION['clientId']?>'>MyPage</a></li>
                    <li><a class="navbar_item" href='logout.php'>LogOut</a></li>
                <?php } ?>
            </ul>
        </nav>
        <section class="contain">
        <?php 
        
        $sql = "SELECT * from client where clientId = '$id'";
        $result = $conn->query($sql);
                    
        if($result){
            $row = $result->fetch_assoc();
            $_SESSION ['clientId'] = $row['clientId'];    
            $_SESSION ['clientName'] = $row['clientName'];
            $_SESSION ['password'] = $row['password'];
            $_SESSION ['clientTel'] = $row['clientTel'];
            $_SESSION ['address'] = $row['address'];
        }
        ?>
            
           <div class="mypage_contain">
                <div class="resultpage">
                    <?=$_SESSION ['clientName']?> 님의 아이디  _ <?=$_SESSION ['clientId']?>
                </div>
                <div class="resultpage">
                    <?=$_SESSION ['clientName']?> 님의 패스워드  _ <?=$_SESSION ['password']?>
                </div>
                <div class="resultpage">
                    <?=$_SESSION ['clientName']?> 님의 전화번호  _ <?= $_SESSION['clientTel']?>
                </div>
                <div class="resultpage">
                    <?=$_SESSION ['clientName']?> 님의 주소  _ <?=$_SESSION ['address']?>
                </div>
                <?php if(!isset($_SESSION['clientName'])){ ?>
                <div class="resultpageB">
                    회원님의 스쿠터 대여이력이 있습니다 ! 
                </div>
                <div class="resultpage">
                    <?=$_SESSION ['clientName']?> 님의 주소  _ <?=$_SESSION ['address']?>
                </div>
                <div class="resultpage">
                    <?=$_SESSION ['clientName']?> 님의 주소  _ <?=$_SESSION ['address']?>
                </div>
                <?php }?>
                <div class="resultpageA"><a href = "index.php">홈으로 돌아가기</a></div>
           </div>
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