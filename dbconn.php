<?php
# MySQL 서버의 특징 데이터베이스로 연결하기
$server = "localhost";//MySQL 서버가 동작하는 호스트 컴퓨터의 IP주소 또는 도메인 이름
$user = "root";     //MySQL 서버의 접속 계정
$passwd = "";       //비밀번호
$dbname = "electroscooter";//연결할 데이터 베이스 이름
//conn 객체는 mysqli 클래스의 객체, 연결이 성공하면 정상적으로 생성됨.

$conn = new mysqli($server, $user, $passwd, $dbname);   //서버에 접속 요청
if($conn->connect_error){
    die("food_db 접속 오류");
}
?>