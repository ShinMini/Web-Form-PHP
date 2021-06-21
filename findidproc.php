<?php
session_start(); //세션 처리 시작
include_once('dbconn.php');
$name = $_POST['name'];     // 이름
$tel = $_POST['tel'];       // 전화번호

$sql = "SELECT * from client where clientName = '$name' and clientTel = '$tel'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $_SESSION ['clientId'] = $row['clientId'];    //세션 키 생성해서 로그인한 사용자의 아이디와 이름, 비밀번호를 저장
    $_SESSION ['clientName'] = $row['clientName'];
    $_SESSION ['password'] = $row['password'];
    
    echo "<script>location.href='findresult.php'</script>";
}else{
    echo "<script type='text/javascript'>alert('일치하는 아이디가 없습니다.$conn->error');</script>";
    echo "<script>location.href='login.php'</script>";
}

?>