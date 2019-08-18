<?php
$connect = mysqli_connect('localhost','root','hh3302@@','main'); // (서버주소, 계정 명, 패스워드, 데이타베이스 명)
mysqli_set_charset($connect,"utf8");
mysqli_query("SET NAMES utf8");
$login = 'SELECT * FROM user WHERE email=\'' . $_POST['login_email'] . '\' AND password=md5(\'' . $_POST['login_pw'] . '\')';
$login_result = mysqli_query($connect, $login);
$row = mysqli_fetch_array($login_result);
if($row['email'] != "")
{
    session_start();
    $_SESSION['name'] = $row['name'];
    $_SESSION['address1'] = $row['address1'];
    $_SESSION['address2'] = $row['address2'];
    $_SESSION['phone_number'] = $row['phone_number'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['kakao_token'] = $row['kakao_token'];
    $_SESSION['registered_date'] = $row['registered_date'];
    
    // echo "<script>alert('로그인 성공!');";
	echo "<script>alert('".$row['name']."님 환영합니다!');";
    echo " window.location.replace('./index.php');</script>";
    
}
else
{
    echo "<script>alert('이메일 또는 패스워드를 잘못되었거나 가입되어 있지 않은 회원 입니다.');";
    echo " window.location.replace('./login.php'); </script>";
}
?>