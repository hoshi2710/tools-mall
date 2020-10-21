function search1() //검색창에서 Enter키를 눌렀을경우 발생하는 f()
{
    if(search_form.search.value == '') //검색창에 아무것도 입력하지 않은 경우
    {
        alert('검색어를 입력해 주세요.'); //검색어를 입력해 달라는 ALERT를 발생시킴
        search_form.search.focus(); //검색창에 다시 커서 포커스가 넘어가도록 함
        return false
    }
    else //입력한 경우
    {
        return true //검색을 진행 함
    }
}
    var slideNo = 0; //슬라이드 항목 번호
    var a = 0; //슬라이드 전체 항목을 왼족으로 이동한 px수
    setInterval(function () { //특정간격을 가지고 반복
        if(slideNo != 2) //슬라이드 넘버가 2번(마지막 슬라이드)이 아닌경우 슬라이드 넘버를 올려 다음 슬라이드로 넘김
            slideNo++;
        else //마지막 슬라이드인 경우
            slideNo = 0; // 첫 슬라이드로 이동
            
        a = -1200*slideNo; // 이미지의 폭만큼 슬라이드를 이동시키도록 변수에 저장
        $(".img_list").animate({"left":a+"px"}); //이미지가 슬라이드할떄 애니메이션효과를 주기위해 Jquery를 이용
    },3000);
    $("nav").hover(function () // 메인 상단 메뉴에 MouseHover 이벤트가 발생 했을때
    {
        $(".optional_menu").stop().slideDown(); // 추가 메뉴가 내려옴
    },function () {
        //마우스가 벗어난 경우
        $(".optional_menu").stop().slideUp();  // 추가 메뉴가 다시 올라가 사라짐
    });
    $(".product_add_icon").click(function () { //상품의 +(장바구니 담기) 버튼을 클릭했을 경우
        confirm('장바구니에 상품을 담았습니다! 장바구니로 이동하시겠습니까?'); // 장바구니에 상품을 담았다는 ALERT를 사용자에게 표시 함
        //아직 장바구니 기능은 미완성입니다...
    });
$(".scroll_right").click(function () { //추천상품(Tools Pick)에서 > 버튼을 눌렀을경우
    current_scroll = document.querySelector('.recommend_product_items').scrollLeft;
    $('.recommend_product_items').stop().animate({scrollLeft: current_scroll+402},400); //한 항목 씩 오른쪽으로 이동 
});
$(".scroll_left").click(function () { //추천상품(Tools Pick)에서 < 버튼을 눌렀을경우
    current_scroll = document.querySelector('.recommend_product_items').scrollLeft;
    $('.recommend_product_items').stop().animate({scrollLeft: current_scroll-402},400); //한 항목 씩 왼쪽으로 이동 

});