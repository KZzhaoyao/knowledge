$(document).ready(function(){
    $('span').on('click','.admin-delete-btn',function() {
        var url = $(this).data('url');
        if (confirm('确定要删除吗？')) {    
            $.post(url,function(data){  
                location.href = '/';                
            });
            location.reload();
        }
    });
})