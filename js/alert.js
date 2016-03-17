
$.alert({
    title: 'Alert!',
    content: 'Simple alert!',
    confirm: function(){
        $.alert('Confirmed!'); // shorthand.
    }
});