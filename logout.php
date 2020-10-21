<?php
	session_start(); //세션 불러오기
	session_destroy(); //세션을 제거합니다.
	echo "<script>alert('로그아웃 되었습니다.');"; //로그아웃이 되었다고 사용자에게 ALERT로 알림
	echo " window.location.replace('./index.php'); </script>"; //메인화면으로 이동시킴
?>