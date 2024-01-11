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
    // $().on('change', function () {
    //     var lang = $(this).val();
    //     var currentUrl = window.location.href;
    //     console.log(currentUrl)
    //     var baseURL = currentUrl.split('/').slice(0, 3).join('/');
    //     var restUrl = currentUrl.split('/')
    //     var rest = restUrl.slice(4, restUrl.length).join('/')
    //     window.location.href = baseURL + '/' + lang+ '/'+rest;
    // });

    $.ajax({
        url: '/cms/pagegaleri',
        method: 'GET',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function(response) {
            var ktgr ='';
            var showndata = response
            var ktg = response.map((e) => e.kategori.split(',')).reduce((acc, cur) => acc.concat(cur),[])
            var uniqueKtg = [...new Set(ktg)];
            $('.kategori').html(uniqueKtg.map((e) => 
                    `<span class="ud-btn btn-gray me-2 ktg-btn" role="button" data-kategori='${e}'>${e}</span>`
            ).join('') + `<span class="ud-btn btn-gray me-2 ktg-btn" role="button" data-kategori=''>Show All</span>`)

            $('.ktg-btn').on('click', function() {
                ktgr = $(this).data('kategori')
                var fdata = response.filter(e => e.kategori.includes(ktgr));
                showndata = fdata;
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
                            <div class="portfolio-detail" style="width:250px; height:250px;">
                                <i style="width:250px; height:250px"><img src="../../uploads/galeri/${e.file}" alt="Gallery" width="400" height="400"/></i>
                                <div class="portfolio-content">
                                    <a href="#">${e.desc}</a>
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
                                <video width="400" height="400" controls>
                                <source src="../../uploads/galeri/${e.file}" type="video/${extf}">
                                </video>
                            </i>
                            <div class="portfolio-content">
                                <a href="#">${e.desc}</a>
                                <a href="#" data-img="../../uploads/galeri/${e.file}" data-bs-toggle="modal" data-bs-target="#galeri-modal" class="zoom" title="Work Title Goes right here"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        </div>`
                    }
                }))

            $('.page-button-galeri').on('click', function() {
                $(this).addClass('page-button-active')
                $('.page-button-galeri').not(this).removeClass('page-button-active');
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
                            <div class="portfolio-detail" style="width:250px; height:250px;">
                                <i style="width:250px; height:250px"><img src="../../uploads/galeri/${e.file}" alt="Gallery" width="400" height="400"/></i>
                                <div class="portfolio-content">
                                    <a href="#">${e.desc}</a>
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
                                <video width="400" height="400" controls>
                                <source src="../../uploads/galeri/${e.file}" type="video/${extf}">
                                </video>
                            </i>
                            <div class="portfolio-content">
                                <a href="#">${e.desc}</a>
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


    $(document).on('click', '.zoom', function() {
        event.preventDefault();
        var img = $(this).data('img');

        $('#pop-img').attr('src', img);


    });
    $('.portfolio-box').show();

    });




    
    

