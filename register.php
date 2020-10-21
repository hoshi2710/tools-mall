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
	<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script> <!-- DAUM 도로명 주소 검색 API 관련 JS 파일 IMPORT -->
	<script src="./js/register.js"></script>
    <title>회원가입</title>
</head>
<body onbeforeunload="HandleBackFunctionality();"> <!-- 해당화면을 벗어날시 경고 ALERT를 발생 시킴 -->
        <div class="login_form"> <!-- 로그인 폼 -->
            <div class="top_cover_login">
                <a onclick="return register_prev();"><i>arrow_back_ios</i></a> <!-- 이전 버튼 -->
                <h2>person_add</h2> <!-- 회원가입 아이콘 -->
            </div>
            <h2 id="login_title">회원가입</h2>
			<div class="register_form">
			<!-- 약관동의, 약관 확인 -->
				<div class="term">
					<div id="terms_agree_1" onclick="return terms_checkbox();">
						<i id="term_check">check</i>
						<div id="term_check_button"> <!-- 약관 동의 버튼 -->
							<h4>약관에 동의 합니다.</h4>
						</div>	
					</div>
					<a href="./terms_1.html" target="_blank">약관 보기</a> <!-- 약관 확인 하기 -->
				</div>	
				<form method="POST" action="./register_ok.php">
					<!-- 기본 정보(Email, Password, Password 확인) 입력 필드 -->
					<div class="input_account">
						<input type="email" id="email_field" name="register_email" placeholder="이메일">
						<input type="password" id="password_field"  name="register_pw" placeholder="패스워드">
						<input type="password" id="password_verify_field" name="register_pw_verify" placeholder="패스워드 확인">
					<button id="next" onclick="return register_next();">다음</button> <!-- 추가 정보를 입력하기 위한 화면으로 이동하기 위한 버튼 -->
					</div>
					<!-- 추가 정보(배송지 주소, 전화번호 등) 입력 필드 -->
					<div class="additional_info">
					<input type="text" id="name" name="register_name" placeholder="이름">
						<div class="zipcode">
							<input type="text" id="zipcode" name="register_address_1" placeholder="우편 번호" readonly>
							<button id="search_zipcode" onclick="return find_zipcode();">우편번호 검색</button> <!-- 우편번호 검색시 Daum에서 제공하는 도로명주소 검색 API를 이용하게 됨 -->
						</div>			
						<input type="text" id="address1" name="register_address_1" placeholder="주소 1" readonly>
						<input type="text" id="address2" name="register_address_2" placeholder="주소 2">
						<input type="text" id="phone_number" name="register_phone_number" placeholder="전화 번호 ('-'없이 입력)">
						<button type="submit">가입하기</button> <!-- 최종 가입(제출) 버튼 -->
					</div>
            	</form>
			</div>
			
            
        </div>
    
        
</body>
