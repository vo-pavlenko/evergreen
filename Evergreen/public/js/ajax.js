$(document).ready(function() {
    $('.submit').on('click', function() {

        $.ajax({
            url: '/ajax',
            type: 'GET',
            data: $('input[type="text"], input[type="radio"]:checked, input[type="checkbox"]:checked'),
            success: function(html){
                $('.users').html(html);
            },
            // Ошибка AJAX
            error: function(result){
                console.log(result);
            }
        })
    });
});
