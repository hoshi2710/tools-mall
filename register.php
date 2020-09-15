<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/login.css">
	<link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" media="all and (max-width: 530px)" href="./css/mobile/login.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" media="all and (max-width: 530px)" href="./css/mobile/register.css">
	<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
	<script src="./js/register.js"></script>
    <title>회원가입</title>
</head>
<body onbeforeunload="HandleBackFunctionality();">
        <div class="login_form">
            <div class="top_cover_login">
                <a onclick="return register_prev();"><i>arrow_back_ios</i></a>
                <h2>person_add</h2>
            </div>
            <h2 id="login_title">회원가입</h2>
			<div class="register_form">
				<div class="term">
					<div id="terms_agree_1" onclick="return terms_checkbox();">
						<i id="term_check">check</i>
						<div id="term_check_button">
							<h4>약관에 동의 합니다.</h4>
						</div>	
					</div>
					<a href="./terms_1.html" target="_blank">약관 보기</a>
				</div>	
				<form method="POST" action="./register_ok.php">
					<div class="input_account">
						<input type="email" id="email_field" name="register_email" placeholder="이메일">
						<input type="password" id="password_field"  name="register_pw" placeholder="패스워드">
						<input type="password" id="password_verify_field" name="register_pw" placeholder="패스워드 확인">
					<button id="next" onclick="return register_next();">다음</button>
					</div>
					<div class="additional_info">
						<div class="zipcode">
							<input type="text" id="zipcode" name="register_address_1" placeholder="우편 번호" readonly>
							<button id="search_zipcode" onclick="return find_zipcode();">우편번호 검색</button>
						</div>			
						<input type="text" id="address1" name="register_address_1" placeholder="주소 1" readonly>
						<input type="text" id="address2" name="register_address_2" placeholder="주소 2">
						<input type="text" id="phone_number" name="register_phone_number" placeholder="전화 번호 ('-'없이 입력)">
						<input type="text" id="promotion" name="promotion" placeholder="<공구몰 이름> 을 알게된 경로 (선택)">
						<button type="submit">가입하기</button>
					</div>
            	</form>
			</div>
			
            
        </div>
    
        
</body>
