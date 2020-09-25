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
    
    <title>Tools Mall</title>
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
        <div class="items">
                <ul>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                </ul>
                <ul>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                </ul>
                <ul>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                </ul>
                <ul>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                </ul>
                <ul>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                    <li><a href="">d</a></li>
                </ul>
        </div>              
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
        <div class="recommend_product">
        <h2>Tools PICK!</h2>
        <div class="recommend_product_items">
           <?php
           ini_set('display_errors', '0');
                $connect = mysqli_connect('localhost','root','hh3302@@','main'); // (서버주소, 계정 명, 패스워드, 데이타베이스 명)
                mysqli_set_charset($connect,"utf8");
                mysqli_query("SET NAMES utf8");
                $find_recommend_product = 'SELECT * FROM `recommend_product`';
                $result_recommend_product = mysqli_query($connect,$find_recommend_product);
                while($row = mysqli_fetch_array($result_recommend_product))
                {
                    $insert = '<section>
                    <div class="product_img" style="background-image:url(\'' . $row['img_path'] . '\')"></div>
                    <div class="product_detail">
                        <h2>' . $row['product_name'] . '</h2>
                        <p>' . $row['detail'] . '</p>
                        <div class="price">₩ ' . $row['price'] . '</div>
                        <div class="product_go_icon">＞</div>
                    </div>
                </section>';
                    echo $insert;

                }
           ?>
        </div>
        </div>
    </div>
    <script src="./js/jquery.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>