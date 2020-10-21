<?php
ini_set('display_errors', '0'); //화면에 PHP 오류를 표시하지 않음
$connect = mysqli_connect('localhost','root','','main'); // (서버주소, 계정 명, 패스워드, 데이타베이스 명)
mysqli_set_charset($connect,"utf8"); //인코딩 설정
mysqli_query("SET NAMES utf8");
$login = 'SELECT * FROM users WHERE email=\'' . $_POST['login_email'] . '\' AND password=md5(\'' . $_POST['login_pw'] . '\')'; //ID,PW을 이용해 main.users테이블에서 사용자의 정보를 검색하기 위한 SQL쿼리
$login_result = mysqli_query($connect, $login); // 쿼리를 실행한 결과를 변수에 저장
$row = mysqli_fetch_array($login_result); //쿼리의 결과를 열단위로 나눔
if($row['email'] != "") //결과값이 존재하는경우
{
    session_start();     //세션 시작(로그인)
    //사용자의 정보를 세션에 저장
    $_SESSION['name'] = $row['name'];
    $_SESSION['address1'] = $row['address1'];
    $_SESSION['address2'] = $row['address2'];
    $_SESSION['phone_number'] = $row['phone_number'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['kakao_token'] = $row['kakao_token'];
    $_SESSION['registered_date'] = $row['registered_date'];
    
    //사용자에게 환영 메시지를 ALERT로 출력
    echo "<script>alert('".$row['name']."님 환영합니다!');";
    //메인화면으로 이동
    echo " window.location.replace('./index.php');</script>";
    
}
else //결과값이 존재하지 않는 경우
{   
    //이메일 또는 패스워드가 잘못되었다는 ALERT를 발생시키고 다시 로그인 화면으로 이동 시킴
    echo "<script>alert('이메일 또는 패스워드를 잘못되었거나 가입되어 있지 않은 회원 입니다.');";
    echo " window.location.replace('./login.php'); </script>";
}
?>