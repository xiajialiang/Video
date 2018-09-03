//处理搜索相关数据
$('.search-submit-button').click(function () {

    $keyword = $('#s').val();

    $.ajax({
        url:"search",
        data:'keyword='+$keyword,
        success:function ($result) {
            if($result)
            {
                alert($result);
            }else {
                window.alert('删除失败！');
            }
        }
    });
});