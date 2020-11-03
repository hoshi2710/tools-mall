<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/slideshow.css">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet"> <!-- 웹사이트 메인 폰트 NOTO SANS CJK KR IMPORT -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- 검색 아이콘을 표시하기 위한 폰트 IMPORT -->
    
    <title>Tools Mall</title> <!-- 웹사이트 타이틀 -->
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
        <div class="first_floor"> <!-- 검색창과 로고가 존재하는 영역 -->
            <a href="./index.php"><div class="logo"></div></a> <!-- 로고 -->
            <div class="search_div"> <!-- 검색창 영역 -->
              <i>search</i>    <!-- 검색창 아이콘 -->
            <form method="POST" onsubmit="return search1();" action="search.php" name="search_form">
                <input type="search" name="search" class="search" placeholder="검색"> <!-- 검색창 -->
            </form>  
            </div>
        </div>
        <nav>
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
        <!-- 제품광고, 공지사항등을 다양한 정보가 표시되는 슬라이드 쇼 -->
        <div class="slideshow">
        <!-- 슬라이드 이미지 리스트 -->
            <div class="img_list">
                <img src="./images/slides/slide_1.png" alt="slide_1">
                <img src="./images/slides/slide_2.png" alt="slide_2">
                <img src="./images/slides/slide_3.png" alt="slide_3">
            </div>
        </div>
        <!-- Tools Mall 추천 상품 목록 -->
        <div class="recommend_product">
        <h2>Tools PICK!</h2>
        <!-- 추천 상품 목록을 좌우로 스크롤 하기 위한 버튼 < > -->
        <div class="horizontal_scroll_controller">
            <div class="scroll_left">＜</div>
            <div class="scroll_right">＞</div>
        </div>
        <!-- 추천 상품 항목 -->
        <div class="recommend_product_items">
        <!-- 상품명이 TEST인 항목들은 모두 화면 테스트를 위해서 삽입한 것 -->
            <!-- SQL쿼리를 이용해 main.recommend_product 테이블에 존재하는 항목을 가져옴-->
           <?php
           ini_set('display_errors', '0');
                $connect = mysqli_connect('localhost','root','','main'); // (서버주소, 계정 명, 패스워드, 데이타베이스 명)
                mysqli_set_charset($connect,"utf8"); //인코딩 설정
                mysqli_query("SET NAMES utf8");
                $find_recommend_product = 'SELECT * FROM `recommend_product`'; // main.recommend_product 테이블을 가져오기위한 쿼리
                $result_recommend_product = mysqli_query($connect,$find_recommend_product); //쿼리 실행후 변수에 테이블을 가져온 결과를 저장 함
                while($row = mysqli_fetch_array($result_recommend_product)) //반복문을 통해 항목을 삽입
                {
                    $insert = '<section>
                    <div class="product_img" style="background-image:url(\'' . $row['img_path'] . '\')"></div>
                    <div class="product_detail">
                        <h2>' . $row['product_name'] . '</h2>
                        <p>' . $row['detail'] . '</p>
                        <div class="price">₩ ' . $row['price'] . '</div>
                        <div class="product_add_icon">+</div>
                    </div>
                </section>';
                    echo $insert;
                }
           ?>
        </div>
        </div>
        <!-- 쇼핑물에서 판매하고 있는 모든 상품을 표시 함 -->
        <div class="all_products">
        <h2>전체 상품</h2>
            <div class="product_list">
            <?php
                $connect = mysqli_connect('localhost','root','','main'); // (서버주소, 계정 명, 패스워드, 데이타베이스 명)
                mysqli_set_charset($connect,"utf8"); //인코딩 설정
                mysqli_query("SET NAMES utf8");
                $find_recommend_product = 'SELECT * FROM `product`'; // main.product 테이블 항목을 불러오기 위한 SQL쿼리
                $result_recommend_product = mysqli_query($connect,$find_recommend_product); //쿼리를 실행한 결과를 변수에 저장
                while($row = mysqli_fetch_array($result_recommend_product)) //반복문을 통해 가져온 항목을 화면에 삽입
                {
                    $insert = '<section>
                    <div class="product_img" style="background-image:url(\'' . $row['img_path'] . '\')"></div>
                    <div class="product_detail">
                        <h2>' . $row['product_name'] . '</h2>
                        <p>' . $row['detail'] . '</p>
                        <div class="price">₩ ' . $row['price'] . '</div>
                        <div class="product_add_icon">+</div>
                    </div>
                </section>';
                    echo $insert;

                }
            ?>
            </div>
   
    </div>
    </div>
   
    <script src="./js/jquery.js"></script> <!-- Jquery 연결 -->
    <script src="./js/script.js"></script> <!-- JS 연결 -->
</body>
</html>