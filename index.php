<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/slideshow.css">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    
    <div class="mobile_navigation_menu">
        
    </div>

    <div class="mini_bar">
        <div class="wrapper">
            <div class="seller_contact">
                <a href="tel:01091094912"><i>call</i> 010-0000-0000</a>
                <a href="mailto:ky2710@nate.com"><i>mail</i>admin@toolsmall.com</a>
            </div>
            <div class="login_menu">
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
                <input type="search" name="search" class="search" placeholder="검색">
            </form>  
            </div>
        </div>
        <nav>
        <div class="category">
            <a href="./category.php">카테고리</a>
            <a href="./brand.php">브랜드관</a>
            <a href="./notice.php">공지 사항</a>
            <a href="./help.php">고객 지원</a>
            <a href="./mypage.php">마이페이지</a>
        </div>
        <div class="optional_menu">

        </div>
        </nav>  
        </header>
        <div class="slideshow">
            <div class="img_list">
                <img src="./images/slides/slide_1.png" alt="slide_1">
                <img src="./images/slides/slide_2.png" alt="slide_2">
                <img src="./images/slides/slide_3.png" alt="slide_3">
            </div>
        </div>
        
    </div>
    <script src="./js/jquery.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>