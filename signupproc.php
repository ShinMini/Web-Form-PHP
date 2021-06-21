<?php
// 회원가입 과정 기록
include_once('dbconn.php');

$id = $_POST['id'];
$pwd = $_POST['pwd'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$address = $_POST['address'];

// 일반 회워 회원가입 과정 
$sql = "INSERT INTO client(clientId, password, manager, clientName, clientTel, address)
VALUES('$id', '$pwd', 'No', '$name', '$tel', '$address')";

if($conn->query($sql)){
    echo "<script type='text/javascript'>alert('회원가입에 성공하였습니다.');</script>";
    echo "<script>location.href='index.php'</script>";
}else{
    echo "<script type='text/javascript'>alert('회원가입 도중에 오류가 발생하였습니다.$conn->error');</script>";
    echo "<script>location.href='signup.php'</script>";
}
?>