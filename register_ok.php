<?php
ini_set('display_errors', '0'); //화면에 PHP에러가 표시되지 않음
$connect = mysqli_connect('localhost','root','','main'); // (서버주소, 계정 명, 패스워드, 데이타베이스 명)
mysqli_set_charset($connect,"utf8"); //인코딩 설정
mysqli_query("SET NAMES utf8");
$register = 'INSERT INTO users(name,address1,address2,phone_number,email,password,registered_date) VALUES (\'' . $_POST['register_name'] . '\', \''. $_POST['register_address_1'] .'\',\''. $_POST['register_address_2'] .'\',\''. $_POST['register_phone_number'] .'\',\''. $_POST['register_email'] .'\',md5(\''. $_POST['register_pw'] .'\'),CURDATE())'; //회원가입을 위해 main.users테이블에 사용자 정브를 삽입하기 위한 SQL쿼리
$overlap_verify_cmd = 'SELECT * FROM users WHERE email=\'' . $_POST['register_email'] . '\''; // 중복 가입 방지를 위해 중복 유저 검색을 위한 SQL쿼리
$overlap_verify = mysqli_query($connect, $overlap_verify_cmd); // 중복 항목 검색 쿼리 실행후 결과를 변수에 저장
$overlap_verify_result = mysqli_fetch_array($overlap_verify)['email']; //중복 항목 검색 쿼리중 첫 항목 가져옴
if($overlap_verify_result != "") // 결과가 존재하는 경우
{
    //이미 존재하는 사용자라고 유저에게 ALERT를 통해 알리고 회원가입 페이지로 다시 이동시킴
    echo "<script>alert('이미 존재하는 사용자 입니다.');";
    echo " window.location.replace('./register.php');</script>";
}
else // 중복 유저가 존재하지 않는 경우
{
    //유저 삽입 쿼리를 실행함
    mysqli_query($connect, $register);
    //사용자에게 회원가입을 완료하였음을 ALERT를 통해 알리고 메인화면으로 로그인화면으로 이동시킨다.
    echo "<script>alert('가입이 완료되었습니다! Tools Mall에 오신것을 환영합니다!');";
    echo " window.location.replace('./login.php');</script>";
}

?>
