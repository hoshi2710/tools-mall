<?php
ini_set('display_errors', '0');
$connect = mysqli_connect('localhost','root','hh3302@@','main'); // (서버주소, 계정 명, 패스워드, 데이타베이스 명)
mysqli_set_charset($connect,"utf8");
mysqli_query("SET NAMES utf8");
$register = 'INSERT INTO users(name,address1,address2,phone_number,email,password,registered_date) VALUES (\'' . $_POST['register_name'] . '\', \''. $_POST['register_address_1'] .'\',\''. $_POST['register_address_2'] .'\',\''. $_POST['register_phone_number'] .'\',\''. $_POST['register_email'] .'\',md5(\''. $_POST['register_pw'] .'\'),CURDATE())';
$overlap_verify_cmd = 'SELECT * FROM users WHERE email=\'' . $_POST['register_email'] . '\'';
$overlap_verify = mysqli_query($connect, $overlap_verify_cmd);
$overlap_verify_result = mysqli_fetch_array($overlap_verify)['email'];
if($overlap_verify_result != "")
{
    echo "<script>alert('이미 존재하는 사용자 입니다.');";
    echo " window.location.replace('./register.php');</script>";
}
else
{
    mysqli_query($connect, $register);
    echo "<script>alert('가입이 완료되었습니다! Tools Mall에 오신것을 환영합니다!');";
    echo " window.location.replace('./login.php');</script>";
}

?>
