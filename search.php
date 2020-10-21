<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/search_result.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Tools Mall</title><!-- 웹사이트 타이틀 -->
    <?php echo "<script src='./js/script.js'></script>";?>
    <?php echo "<script src='./js/jquery.js'></script>";?>
</head>
<body>
   <!-- 상단 (검은색)바 -  회원가입/로그인/판매자 이메일/전화번호 표시, 로그인 했을경우 회원가입/로그인 버튼 대신 사용자 이름과 로그아웃 버튼이 표시 됨-->
   <div class="mini_bar">
        <div class="wrapper">
        <!-- 판매자 연락처 -->
            <div class="seller_contact">
                <a href="tel:01091094912"><i>call</i> 010-0000-0000</a>
                <a href="mailto:ky2710@nate.com"><i>mail</i>admin@toolsmall.com</a>
            </div>
            <!-- 로그인 메뉴 -->
            <div class="login_menu">
                <!-- 로그인 세션 기능을 담당하는 PHP소스 -->
                <?php
				session_start();
                if(!empty($_SESSION['name']))
                {
                    echo '<a href="./mypage.php">'.$_SESSION['name'] . "님</a>";
					echo '<a href="./logout.php">로그아웃</a>';
                }
                else
                {
                    echo '<a href="./register.php">회원가입</a>';
                    echo '<a href="./login.php">로그인</a>';
                }
                ?>
            </div>
        </div> 
    </div>
    <div class="wrapper">
        <header>
        <div class="first_floor">
            <a href="./index.php"><div class="logo"></div></a>
            <div class="search_div">
              <i>search</i>   
			<form method="POST" onsubmit="return search1();" action="search.php" name="search_form">
                <input type="search" name="search" class="search" placeholder="검색" value="<?php echo $_POST['search'];?>">
            </form>  
            </div>
        </div>
        <div class="category"> <!-- 로고 밑에 존재하는 메뉴, MouseHover시 optional_menu영역, 즉 서브 메뉴가 내려온다. -->
            <a href="./category.php">카테고리</a>
            <a href="./brand.php">브랜드관</a>
            <a href="./notice.php">공지 사항</a>
            <a href="./help.php">고객 지원</a>
            <a href="./mypage.php">마이페이지</a>
        </div>
        <div class="optional_menu">
        <div class="items">
                <ul>
                    <li><a href="">작업공구</a></li>
                    <li><a href="">전동공구</a></li>
                    <li><a href="">측정공구</a></li>
                    <li><a href="">에어공구</a></li>
                    <li><a href="">더보기</a></li>
                </ul>
                <ul>
                    <li><a href="">브랜드1</a></li>
                    <li><a href="">브랜드2</a></li>
                    <li><a href="">브랜드3</a></li>
                    <li><a href="">브랜드3</a></li>
                    <li><a href="">더보기</a></li>
                </ul>
                <ul>
                    <li><a href="">공지사항</a></li>
                    <li><a href="">이벤트</a></li>
                    <li><a href="">신제품 안내</a></li>
                    <li><a href="">예약구매 안내</a></li>
                    <li><a href="">더보기</a></li>
                </ul>
                <ul>
                    <li><a href="">1:1문의</a></li>
                    <li><a href="">자주하는 질문(Q&A)</a></li>
                    <li><a href="">대량주문 문의</a></li>
                    <li><a href="">자료실</a></li>
                    <li><a href="">더보기</a></li>
                </ul>
                <ul>
                    <li><a href="">정보 수정</a></li>
                    <li><a href="">배송 조회</a></li>
                    <li><a href="">맴버쉽</a></li>
                    <li><a href="">수리 신청</a></li>
                    <li><a href="">수리 내역</a></li>
                </ul>
        </div>              
        </div>
        </nav>  
        </header>
            <!-- ' 검색결과 <검색한 내용> '  의 형식으로 표시됩니다.-->
        <h1>
            검색 결과 "<?php echo $_POST['search'];?>"
        </h1>
        <!--  검색 결과를 표시하는 부분은 아직 미완성 입니다... -->
        <script src="./js/jquery.js"></script> <!-- Jquery 연결 -->
    <script src="./js/script.js"></script> <!-- JS 연결 -->
    </div>
</body>
</html>