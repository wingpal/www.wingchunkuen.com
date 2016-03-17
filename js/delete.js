(function($){
    $('#brisanje').confirm({
            title: 'Upozorenje!',
            content: '- potvrdite unos clana -',
            confirm: function () {
                $("#delete").submit();
            }
        },
        cancel: function(){
    }
})(jQuery);


