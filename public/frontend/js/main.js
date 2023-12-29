$('.language').on('change', function () {
    var lang = $(this).val();
    var currentUrl = window.location.href;
    console.log(currentUrl)
    var baseURL = currentUrl.split('/').slice(0, 3).join('/');

    var page = currentUrl.split('/')
    var resUrl = page.slice(4, page.length).join('/');
    window.location.href = baseURL + '/' + lang + '/' + resUrl;
});