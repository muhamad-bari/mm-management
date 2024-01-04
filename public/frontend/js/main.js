
$(document).ready(function () {
    $('#language').on('change', function() {
    var lang = $(this).val();
    var currentUrl = window.location.href;
    console.log(currentUrl)
    var baseURL = currentUrl.split('/').slice(0, 3).join('/');
    var restUrl = currentUrl.split('/')
    var rest = restUrl.slice(4, restUrl.length).join('/')
    window.location.href = baseURL + '/' + lang+ '/'+rest;
    });
    $('#languages').on('change', function() {
        var lang = $(this).val();
        var currentUrl = window.location.href;
        console.log(currentUrl)
        var baseURL = currentUrl.split('/').slice(0, 3).join('/');
        var restUrl = currentUrl.split('/')
        var rest = restUrl.slice(4, restUrl.length).join('/')
        window.location.href = baseURL + '/' + lang+ '/'+rest;
        });

});


    $('a.zoom').on('click', function(event) {
        event.preventDefault();
        var img = $(this).data('img');
        $('#pop-img').attr('src', img);
        $('#cp-img').text(img);
    });
    $('.portfolio-box').show();
    $('button').click(function() {
        var category = $(this).data('ktg');

        $('.portfolio-box').hide();
        $('.portfolio-box[data-ktr="' + category + '"]').show();
    });

