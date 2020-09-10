function search1()
{
    if(search_form.search.value == '')
    {
        alert('검색어를 입력해 주세요.');
        search_form.search.focus(); 
        return false
    }
    else
    {
        return true
    }
}
    var slideNo = 0;
    var a = 0;
    setInterval(function () {
        if(slideNo != 2)
            slideNo++;
        else
            slideNo = 0;
            
        a = -1200*slideNo;
        $(".img_list").animate({"left":a+"px"});
    },3000);
    $("nav").hover(function ()
    {
        $(".optional_menu").stop().slideDown();
    },function () {
        $(".optional_menu").stop().slideUp();  
    });
