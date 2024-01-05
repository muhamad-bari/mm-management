var csrfToken = $('meta[name="csrf-token"]').attr('content');

$('#menu-button').on('click', ()=> {
    $('.side-bar').toggleClass('side-bar-toggled');
})
$('#menu-close').on('click', ()=> {
    $('.side-bar').toggleClass('side-bar-toggled');
})

$('#clear').on('click', () => {
    $('#user').val("");
    $('#pass').val("");
    return false;
})
$('#see-pass').on('change', function () {
    ($(this).is(':checked')) 
        ? $('#pass').attr('type', 'text')
        : $('#pass').attr('type', 'password');

});

$('#login').on('click', function() {
    if($('#user').val().trim()===""){
        $('#check-user').html('Username Tidak Boleh Kosong')
        $('#check-pass').html('')
        return false;
    }
    if($('#pass').val().trim()===""){
        $('#check-pass').html('Password Tidak Boleh Kosong')
        $('#check-user').html('')
        return false;
    }
    
})
$('.menu-link').each((i, e) => {
    if(e.href===window.location.href)
    {
        $('.side-menu-active').removeClass('side-menu-active')
        $(e).parent().addClass('side-menu-active')
    }
})

// $(document).ready(function () {
//     var canvas = $('#signature')[0];
//     var context = canvas.getContext('2d');
//     var isDrawing = false;
//     $(canvas).mousedown(function (e) {
//         isDrawing = true;
//         context.beginPath();
//         context.moveTo(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top);
//     });
//     $(canvas).mousemove(function (e) {
//         if (isDrawing) {
//             context.lineTo(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top);
//             context.stroke();
//         }
//     });
//     $(document).mouseup(function () {
//         isDrawing = false;
//         context.closePath();
//     });


//     $('#konf-sign').click(function () {

//         var imageData = canvas.toDataURL('image/png');

//         $('.bukti').html('<h4>Signature Image</h4><img src="' + imageData + '">');

//         $('#signature64').val(imageData);
//         $('#sign-modal').modal('hide')
//         return false
//     });
//     $('#reset-sign').click(function() {
//         context.clearRect(0, 0, canvas.width, canvas.height);
//         return false
//     })
// });

// $('#pay_method').on('change', function() {
//     if($('#pay_method').val()==="1")
//     {
//         $('#rek_kirim').prop('readonly', true).val('0');
//         $('#rek_terima').prop('readonly', true).val('0');
//     }
//     else
//     {
//         $('#rek_kirim').prop('readonly', false);
//         $('#rek_terima').prop('readonly', false);
//     }
// })
// $('#jenis').on('change', function() {
//     if($('#jenis').val()==="1")
//     {
//         $('#label_rek').html('Rekening Pengirim');
//         $('#rek_kirim').prop('type', 'number').val('0');
//         $('#rek_terima').prop('type', 'hidden').val('0');
//     }
//     else
//     {
//         $('#label_rek').html('Rekening Penerima');
//         $('#rek_kirim').prop('type', 'hidden').val('0');
//         $('#rek_terima').prop('type', 'number').val('0');
//     }
// })

// 
$('#tambah-ktg').on('click', function() {
    var ktg = $('#ktg').val();
    if(ktg.length < 3 || ktg.length > 15)
    {
        $('#err').html('Minimal 3 Karakter Maksimal 15');
        return false;
    }
})

$('.tag-input')
        .on('change', function (event) {
          var $element = $(event.target);
          var $container = $element.closest('.example');

          if (!$element.data('tagsinput')) return;

          var val = $element.val();
          if (val === null) val = 'null';
          var items = $element.tagsinput('items');

          $('code', $('pre.val', $container)).html(
            $.isArray(val)
              ? JSON.stringify(val)
              : '"' + val.replace('"', '\\"') + '"'
          );
          $('code', $('pre.items', $container)).html(
            JSON.stringify($element.tagsinput('items'))
          );
        })
        .trigger('change');


        
            $.ajax({
                url: '/cms/pagegaleri',
                method: 'GET',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    
                    var ktg = response.map((e) => e.kategori.split(',')).reduce((acc, cur) => acc.concat(cur),[])
                    var uniqueKtg = [...new Set(ktg)];
                    $('#kategori').html(uniqueKtg.map((e) => 
                            `<span class="btn btn-sm btn-accent mx-1" role="button" data-kategori='${e}'>${e}</span>`
                    ))
                   
                    // button item
                    var itemperPage =  5
                    var totalpage = Math.ceil(response.length/itemperPage)
                    var buttonitem=''
                    for(i=1; i<=totalpage; i++)
                    {
                       
                           buttonitem += `<button data-page='${i}' class='page-button'>${i}</button>`
                       
                    }
                    $('#pageButtons').html(buttonitem)

                    //updateui
                        var sliceddata1 = response.slice(0, itemperPage)
                        $('#data-container').html(sliceddata1.map((e, i) => {
                            var fsplit = e.file.split('.')
                            var extf = fsplit[fsplit.length - 1]
                            var ext  = ['jpg', 'png', 'svg', 'bmp', 'webp' ,'gif']
                            if(ext.includes(extf))
                            {
                            return `<img src='../../uploads/galeri/${e.file}' width='250' height='250'>` 
                            }
                            else
                            {
                             return   `<video width="250" height="250" controls>
                                <source src="../../uploads/galeri/${e.file}" type="video/${extf}">
                                </video>`
                            }
                            }))

                    $('.page-button').on('click', function() {
                        var page = $(this).data('page')
                        var currentindex = (page-1)*itemperPage
                        var sliceddata = response.slice(currentindex, currentindex+itemperPage)
                        $('#data-container').html(sliceddata.map((e, i) => {
                            var fsplit = e.file.split('.')
                            var extf = fsplit[fsplit.length - 1]
                            var ext  = ['jpg', 'png', 'svg', 'bmp', 'webp' ,'gif']
                            if(ext.includes(extf))
                            {
                            return `<img src='../../uploads/galeri/${e.file}' width='250' height='250'>` 
                            }
                            else
                            {
                             return   `<video width="250" height="250" controls>
                                <source src="../../uploads/galeri/${e.file}" type="video/${extf}">
                                </video>`
                            }
                            }))
                    })

                    
                        

                },
                error: function(err) {
                    console.error('Error:', err);
                }
            });
        
    
        // Function to update the UI with fetched data
    