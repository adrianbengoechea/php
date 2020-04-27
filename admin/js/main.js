jQuery(function(){

    if(jQuery('#edit-article-form').length > 0){
        console.log('RED');
        var button = jQuery('.btn-delete-article');
        var url = button.attr('href');

        button.attr('href', 'javascript:void(0)');
        button.on('click', function(){
            var x = confirm('Are you sure you want to delete this article?');
            if(x === true){
                window.location.href = url;
            }
        })
    }
});