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
    <title>Document</title>
    <?php echo "<script src='./js/script.js'></script>";?>
</head>
<body>
    <div class="mini_bar">
        <div class="wrapper">
            <div class="seller_contact">
                <a href="tel:01091094912"><i>call</i> 010-9109-4912</a>
                <a href="mailto:ky2710@nate.com"><i>mail</i>ky2710@nate.com</a>
            </div>
            <div class="login_menu">
                <a href="./register.html">회원가입</a>
                <a href="./login.html">로그인</a>
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
        <div class="category">
            <a href="./category.php">카테고리</a>
            <a href="./brand.php">브랜드관</a>
            <a href="./notice.php">공지 사항</a>
            <a href="./help.php">고객 지원</a>
            <a href="./basket.php">장바구니</a>
        </div>
        </header>
        <h1>
            검색 결과 "<?php echo $_POST['search'];?>"
        </h1>
    </div>
</body>
</html>