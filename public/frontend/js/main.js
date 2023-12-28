$('.language').on('change', function() {
    var lang = $(this).val();
    var currentUrl = window.location.href;
    console.log(currentUrl)
    var baseURL = currentUrl.split('/').slice(0, 3).join('/');

var page = currentUrl.split('/')
window.location.href = baseURL + '/' + lang +'/'+ page[4];
});