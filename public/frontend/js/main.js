$('.language').on('change', function() {
    var lang = $(this).val();
    var currentUrl = window.location.href;
    console.log(currentUrl)
    var baseURL = currentUrl.split('/').slice(0, 3).join('/');
window.location.href = baseURL + '/' + lang;
});
