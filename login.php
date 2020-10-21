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
    
        <div class="login_form"> <!-- 로그인 폼 -->
            <div class="top_cover_login"> <!-- 로그인 화면 상단 디자인 요소 -->
                <a href="javascript:history.back()"><i>arrow_back_ios</i></a> <!-- 이전 버튼 -->
                <h2>vpn_key</h2> <!-- 로그인 아이콘 -->
            </div>
            <h2 id="login_title">로그인</h2>
            <form method="POST" action="./login_ok.php">
            <span>
                <h3>이메일</h3>
                <!-- 이메일 필드 -->
                <input type="email" name="login_email" id="">
            </span>
            <span>
                <h3>패스워드</h3>
                <!-- 패스워드 필드 -->
                <input type="password" name="login_pw" id="">
            </span>
            <!-- 로그인(제출) 버튼 -->
            <button type="submit">로그인</button>
            <div class="account_option">
                <!-- 회원가입 버튼과 비밀번호 찾기 버튼 -->
                <p>아직 회원이 아니신가요? <a href="./register.php">회원가입</a></p>
                <a href="./find_password.php">비밀번호 찾기</a>
            </div>
            </form>
            <!-- 추후 SNS로그인등 추가 기능을 지원하기 위한 영역 -->
           <div class="buttons">

           </div>
        </div>
    
        
</body>
