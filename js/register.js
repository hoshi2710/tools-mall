function terms_checkbox() //약관 동의 체크박스 클릭 시 동작을 담당하는 f()
{
	check = document.getElementById("term_check"); //체크박스 아이콘을 가져옴
	color = window.getComputedStyle(document.getElementById('term_check'), null).getPropertyValue("color"); //체크박스 아이콘의 색값을 가져옴
	
	if(color == "rgb(128, 128, 128)") //색이 그레이(체크안됨)인경우
	{
	   	check.style.setProperty("color", "#ae0000", "important"); //체크박스의 색을 #ae0000(체크함)으로 변경
	}
	else //아닐경우(체크 되어 있는 경우)
	{
	  check.style.setProperty("color", "gray", "important");	 //체크박스의 색을 회색(체크안함)으로 변경
	}
}

function find_zipcode() //회원가입시 
{
	new daum.Postcode({
        oncomplete: function(data) {
			zipcode_input = document.getElementById("zipcode"); //API로부터 사용자가 검색한 주소의 우편 번호를 가져온다.
			address1_input = document.getElementById("address1");	//API로 부터 사용자가 검색한 주소의 주소부를 가져온다.
			zipcode_input.value = data.zonecode; //우편번호를 사용자가 검색한 주소의 것으로 입력
			address1_input.value = data.address; //주소를 사용자가 검색한 주소로 입력
        }
    }).open();
	return false;
}

function register_next() //기본정보를 입력한 다음 다음 버튼을 눌렀을떄 발생하는 f()
{
	checked = window.getComputedStyle(document.getElementById('term_check'), null).getPropertyValue("color"); //약관 동의 여부를 가져 옴
	
	email = document.getElementById("email_field").value; //이메일 필드의 값을 가져옴
	pw = document.getElementById("password_field").value; //패스워드 필드의 값을 가져옴
	pw_verify = document.getElementById("password_verify_field").value; // 패스워드 재확인 필드의 값을 가져옴
	if (checked == "rgb(128, 128, 128)") // 약관을 동의 하지 않는 경우
	{
		alert("약관에 동의해 주세요.");	//약관을 동의해 달라는 ALERT를 발생 시킴
		return false;
	}
	else if(email == "") //이메일을 입력하지 않은 경우
	{
		alert("이메일을 입력해 주세요."); //이메일을 입력하라는 ALERT를 발생 시킴
		return false;
	}
	else if(pw == "") //패스워드를 입력하지 않은 경우
	{
		alert("패스워드를 입력해 주세요."); //패스워드를 입력하라는 ALERT를 발생 시킴
		return false;
	}
	else if(pw_verify ==  "") //패스워드 확인 필드를 입력하지 않는경우
	{
		alert("패스워드 확인 필드에 한번더 패스워드를 입력해 주세요."); //패스워드 확인필드의 패스워드를 다시 입력해 달라는 ALERT를 발생 시킴
		return false;
	}
	else //모두 입력한경우
	{
		//기본정보 필드의 모든 항목을 가져옴
		term_div = document.getElementsByClassName("term")[0];
		input_account_div = document.getElementsByClassName("input_account")[0];
		additional_info_div = document.getElementsByClassName("additional_info")[0];
		//기본정보 필드의 모든 항목을 투명도를 내리고 display값을 none으로 바꾸면서 페이드아웃 시키고 추가정보 입력 필드를 기본정보 필드의 역과정으로 페이드 인 시킴
		term_div.style.opacity = "0";
		input_account_div.style.opacity = "0";
		setTimeout(function() {
			term_div.style.display = "none";
			input_account_div.style.display = "none";
			additional_info_div.style.display = "block";
			setTimeout(function() {
			additional_info_div.style.opacity = "1";
			}, 100);
		}, 200);
		return false;
	}



	
}

function register_prev() //회원가입 화면 내에 있는 이전버튼을 클릭했을떄 발생하는 f()
{
	status = window.getComputedStyle(document.getElementsByClassName("additional_info")[0], null).getPropertyValue("display"); //현재 기본정보 입력필드인지 추가정보 입력필드인지 가져 옴
	if (status == "block") // 추가정보 입력필드가 존재하는 화면인경우
	{
		//기본정보 입력필드와 추가정보 입력필드를 모두 가져옴
		term_div = document.getElementsByClassName("term")[0];
		input_account_div = document.getElementsByClassName("input_account")[0];
		additional_info_div = document.getElementsByClassName("additional_info")[0];
		//추가정보 입력필드를 페이드 아웃시키고 기본정보 입력필드를 페이드 시켜 뒤로 이동 함
		additional_info_div.style.opacity = "0";
		setTimeout(function() {
			additional_info_div.style.display = "none";
			term_div.style.display = "block";
			input_account_div.style.display = "block";
			setTimeout(function() {
				term_div.style.opacity = "1";
				input_account_div.style.opacity = "1";
			}, 100);
		}, 200);
	}
	else	//기본정보 입력필드인 경우
	{
		history.back(); //이전페이지로 이동 함
	}
	return false;
}
window.addEventListener("beforeunload", function (e) { // 이화면을 벗어나려고 하는 경우 발생하는 f() 이벤트
    var confirmationMessage = 'It looks like you have been editing something. '
                            + 'If you leave before saving, your changes will be lost.';

    (e || window.event).returnValue = confirmationMessage; //Gecko + IE
    return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
});