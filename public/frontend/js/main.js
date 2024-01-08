var csrfToken = $('meta[name="csrf-token"]').attr('content');

$(document).ready(function () {
    $('#language').on('change', function () {
        var lang = $(this).val();
        var currentUrl = window.location.href;
        console.log(currentUrl)
        var baseURL = currentUrl.split('/').slice(0, 3).join('/');
        var restUrl = currentUrl.split('/')
        var rest = restUrl.slice(4, restUrl.length).join('/')
        window.location.href = baseURL + '/' + lang + '/' + rest;
    });
    $('#languages').on('change', function () {
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
    $('button').click(function () {
        var category = $(this).data('ktg');

        $('.portfolio-box').hide();
        $('.portfolio-box[data-ktr="' + category + '"]').show();
    });



    $.ajax({
        url: '/cms/pagegaleri',
        method: 'GET',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function(response) {
            console.log(response)
            var ktgr ='';
            var showndata = response
            var ktg = response.map((e) => e.kategori.split(',')).reduce((acc, cur) => acc.concat(cur),[])
            var uniqueKtg = [...new Set(ktg)];
            $('.kategori').html(uniqueKtg.map((e) => 
                    `<span class="btn btn-sm btn-accent mx-1 ktg-btn" role="button" data-kategori='${e}'>${e}</span>`
            ) + `<span class="btn btn-sm btn-accent mx-1 ktg-btn" role="button" data-kategori=''>Show All</span>`)

            $('.ktg-btn').on('click', function() {
                ktgr = $(this).data('kategori')
                console.log(ktgr)
                var fdata = response.filter(e => e.kategori.includes(ktgr));
                showndata = fdata;
                console.log(showndata)
                updateUIFR()
                
            })
            
            function updateUIFR() {
            var itemperPage = 10
            var totalpage = Math.ceil(showndata.length/itemperPage)
            var buttonitem=''
            for(i=1; i<=totalpage; i++)
            {
                
                    buttonitem += `<li class="page-item"><a class="page-link page-button-galeri" role="button" data-page="${i}">${i}</a></li>`
                
            }
            $('.pageButtons').html(`
                    <li class="page-item">
                        <a class="page-link"> <span class="fas fa-angle-left"></span></a>
                     </li>
                    ${buttonitem}
                    <li class="page-item">
						<a class="page-link"><span class="fas fa-angle-right"></span></a>
					</li>
                    `)
                var sliceddata1 = showndata.slice(0, itemperPage)
                $('.galeri-fr').html(sliceddata1.map((e, i) => {
                    var fsplit = e.file.split('.')
                    var extf = fsplit[fsplit.length - 1]
                    var ext  = ['jpg', 'png', 'svg', 'bmp', 'webp' ,'gif']
                    if(ext.includes(extf))
                    {
                    return `<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
                            <div class="portfolio-detail">
                                <i><img src="../../uploads/galeri/${e.file}" alt="Gallery" /></i>
                                <div class="portfolio-content">
                                    <a href="#">Pelatihan Lanayan Baby Sitter</a>
                                    <a href="#" data-img="../../uploads/galeri/${e.file}" data-bs-toggle="modal" data-bs-target="#galeri-modal" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            </div>`
                    }
                    else
                    {
                        return   `<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
                                <div class="portfolio-detail">
                            <i>
                                <video width="250" height="250" controls>
                                <source src="../../uploads/galeri/${e.file}" type="video/${extf}">
                                </video>
                            </i>
                            <div class="portfolio-content">
                                <a href="#">Pelatihan Lanayan Baby Sitter</a>
                                <a href="#" data-img="../../uploads/galeri/${e.file}" data-bs-toggle="modal" data-bs-target="#galeri-modal" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        </div>`
                    }
                }))

            $('.page-button-galeri').on('click', function() {
                var page = $(this).data('page')
                var currentindex = (page-1)*itemperPage
                var sliceddata = showndata.slice(currentindex, currentindex+itemperPage)
                $('.galeri-fr').html(sliceddata.map((e, i) => {
                    var fsplit = e.file.split('.')
                    var extf = fsplit[fsplit.length - 1]
                    var ext  = ['jpg', 'png', 'svg', 'bmp', 'webp' ,'gif']
                    if(ext.includes(extf))
                    {
                    return `<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
                            <div class="portfolio-detail">
                                <i><img src="../../uploads/galeri/${e.file}" alt="Gallery" /></i>
                                <div class="portfolio-content">
                                    <a href="#">Pelatihan Lanayan Baby Sitter</a>
                                    <a href="#" data-img="../../uploads/galeri/${e.file}" data-bs-toggle="modal" data-bs-target="#galeri-modal" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            </div>`
                    }
                    else
                    {
                        return   `<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-box">
                        <div class="portfolio-detail">
                            <i>
                                <video width="250" height="250" controls>
                                <source src="../../uploads/galeri/${e.file}" type="video/${extf}">
                                </video>
                            </i>
                            <div class="portfolio-content">
                                <a href="#">Pelatihan Lanayan Baby Sitter</a>
                                <a href="#" data-img="../../uploads/galeri/${e.file}" data-bs-toggle="modal" data-bs-target="#galeri-modal" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        </div>`
                    }
                    }))
            })
            $('.prevButton').on('click', function() {
                
            })

        }
                
        updateUIFR()
        },
        error: function(err) {
            console.error('Error:', err);
        }
    });

