var csrfToken = $('meta[name="csrf-token"]').attr('content');

$(document).ready(function () {

    $('#language_one , #language, #languagess').on('change', function () {
        var lang = $(this).val();
        var currentUrl = window.location.href;
        console.log(currentUrl)
        var baseURL = currentUrl.split('/').slice(0, 3).join('/');
        var restUrl = currentUrl.split('/')
        var rest = restUrl.slice(4, restUrl.length).join('/')
        window.location.href = baseURL + '/' + lang + '/' + rest;
    });
    $().on('change', function () {
        var lang = $(this).val();
        var currentUrl = window.location.href;
        console.log(currentUrl)
        var baseURL = currentUrl.split('/').slice(0, 3).join('/');
        var restUrl = currentUrl.split('/')
        var rest = restUrl.slice(4, restUrl.length).join('/')
        window.location.href = baseURL + '/' + lang+ '/'+rest;
    });
$('.glr-btn').on('click' , function() {
    var alb = $(this).data('alb')
    $.ajax({
        url: '/cms/pagegaleri',
        method: 'GET',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function(response) {
                var fdata = response.filter(e => e.kategori.includes(alb));
                showndata = fdata;
                updateUIFR()

            function updateUIFR() {
                $('#cp-img').html(showndata.map((e, i) => {
                    var fsplit = e.file.split('.')
                    var extf = fsplit[fsplit.length - 1]
                    var ext  = ['jpg', 'png', 'svg', 'bmp', 'webp' ,'gif' ,'jpeg']
                    if(ext.includes(extf))
                    {
                    return `<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
                            <div class="portfolio-detail" style="width:250px; height:250px;">
                                <i style="width:250px; height:250px"><img src="../../uploads/galeri/${e.file}" alt="Gallery" width="400" height="400"/></i>
                                <div class="portfolio-content">
                                    <a href="#">${e.desc}</a>
                                    <a href="#galeri-modal-detail" data-alb="${alb} "data-img="../../uploads/galeri/${e.file}" data-bs-toggle="modal" class="zoom glr-det" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            </div>`
                    }
                    else
                    {
                    return  `<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
                            <div class="portfolio-detail">
                        <i>
                            <video width="400" height="400" controls>
                            <source src="../../uploads/galeri/${e.file}" type="video/${extf}">
                            </video>
                        </i>
                        <div class="portfolio-content">
                            <a href="#">${e.desc}</a>
                            <a href="#galeri-modal-detail" data-alb="${alb} data-img="../../uploads/galeri/${e.file}" data-bs-toggle="modal" class="zoom glr-det" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    </div>`
                    }
                }))
        }
        },
        error: function(err) {
            console.error('Error:', err);
        }
    });
})


    $(document).on('click', '.zoom', function() {
        event.preventDefault();
        var img = $(this).data('img');



    });
    $(document).on('click','.glr-det',  function() {
        var detImg = $(this).data('img')
        var alb = $(this).data('alb')
        $('.modal-galeri-detail').attr('data-alb', alb)
        $('#img-galeri-detail').attr('src', detImg)

    })

})


    
    

