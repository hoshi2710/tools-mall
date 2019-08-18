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
