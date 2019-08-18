<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" media="all and (max-width: 530px)" href="./css/mobile/login.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="script.js"></script>
    <title>로그인</title>
</head>
<body>
    
        <div class="login_form">
            <div class="top_cover_login">
                <a href="javascript:history.back()"><i>arrow_back_ios</i></a>
                <h2>vpn_key</h2>
            </div>
            <h2 id="login_title">로그인</h2>
            <form method="POST" action="./login_ok.php">
            <span>
                <h3>이메일</h3>
                <input type="email" name="login_email" id="">
            </span>
            <span>
                <h3>패스워드</h3>
                <input type="password" name="login_pw" id="">
            </span>
            <button type="submit">로그인</button>
            <div class="account_option">
                <p>아직 회원이 아니신가요? <a href="./register.php">회원가입</a></p>
                <a href="./find_password.php">비밀번호 찾기</a>
            </div>
            </form>
           <div class="buttons">

           </div>
        </div>
    
        
</body>
