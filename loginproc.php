<?php
session_start(); //세션 처리 시작
include_once('dbconn.php');
$id = $_POST['id'];
$pwd = $_POST['pwd'];
$sql = "SELECT * from client where clientId = '$id' and password = '$pwd'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $_SESSION ['clientId'] = $row['clientId'];    //세션 키 생성해서 로그인한 사용자의 아이디와 이름을 저장
    $_SESSION ['clientName'] = $row['clientName'];
    echo "<script>location.href='index.php'</script>";
}else{
    echo "<script type='text/javascript'>alert('아이디 또는 비밀번호가 맞지 않습니다.$conn->error');</script>";
    echo "<script>location.href='login.php'</script>";
}

?>