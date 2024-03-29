import { updateUI, nexprev } from "./function.js";

var csrfToken = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function() {
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

    $(document).on('click', '.add-ktg', function() {
        var form= $(this).data('form')
        $('.ktg-gl').css('display','none')
        $('.ktgi-gl').css('display','block')
        $('#tambah-ktg').val('Tambah')
        $('#ktg').val()
        $('#form-kategori').attr('action', form)
    })
    $(document).on('click', '.edit-ktg', function() {
        var form= $(this).data('form')
        $('.ktg-gl').css('display','block')
        $('.ktgi-gl').css('display','block')
        $('#tambah-ktg').val('Update')
        $('#ktg').val()
        $('#form-kategori').attr('action', form)
    })
    $(document).on('click', '.del-ktg', function() {
        var form= $(this).data('form')
        $('.ktg-gl').css('display','block')
        $('.ktgi-gl').css('display','none')
        $('#tambah-ktg').val('Hapus')
        $('#ktg').val('Delete')
        $('#form-kategori').attr('action', form)
    })
        
    $.ajax({
        url: '/cms/pagegaleri',
        method: 'GET',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function(response) {
            var page = 1
            var ktgr ='';
            var vsb= '';
            var showndata = response
            
            $('.ktg-btn').on('click', function() {
                ktgr = $(this).data('kategori')
                var fdata = response.filter(e => e.kategori.includes(ktgr));
                showndata = fdata;
                updateUIAndPageButtons()  
                $('.vsb-btn').on('click', function() {
                    vsb = $(this).data('visible')
                    var fdata = response.filter(e => e.visibility.includes(vsb));
                    showndata = fdata;
                    updateUIAndPageButtons()  
                })
            })
            $('.vsb-btn').on('click', function() {
                vsb = $(this).data('visible')
                var fdata = response.filter(e => e.visibility.includes(vsb));
                showndata = fdata;
                updateUIAndPageButtons()  
            })
            
            function updateUIAndPageButtons() {
                var itemperPage = 10
                var totalpage = Math.ceil(showndata.length/itemperPage)
                var buttonitem=''
                for(var i=1; i<=totalpage; i++)
                {
                    buttonitem += `<button data-page='${i}' class='btn mx-2 page-button-galeri '>${i}</button>`
                }
                $('.pageButtons').html(buttonitem)
                var sliceddata1 = showndata.slice(0, itemperPage)
                $('.data-galeri').html(updateUI(sliceddata1))
                    

                $(document).on('click', '.page-button-galeri', function() {
                    $(this).addClass('page-button-active')
                    $('.page-button-galeri').not(this).removeClass('page-button-active');
                    page = $(this).data('page')
                    var currentindex = (page-1)*itemperPage
                    var sliceddata = showndata.slice(currentindex, currentindex+itemperPage)
                    $('.data-galeri').html(updateUI(sliceddata))
                

                })
                $(document).on('click', '.prevButton', function() {
                    page = page-1
                    var activeButton = $('.page-button-galeri').filter(function () {
                        return $(this).data('page') === page;
                    });
                    activeButton.addClass('page-button-active')
                    $('.page-button-galeri').not(activeButton).removeClass('page-button-active');
                    var currentindex = (page-1)*itemperPage
                    var sliceddata = showndata.slice(currentindex, currentindex+itemperPage)
                    $('.data-galeri').html(updateUI(sliceddata))
                })   
                $(document).on('click', '.nextButton', function() {
                    page = page+1
                    var activeButton = $('.page-button-galeri').filter(function () {
                        return $(this).data('page') === page;
                    });
                    activeButton.addClass('page-button-active')
                    $('.page-button-galeri').not(activeButton).removeClass('page-button-active');
                    var currentindex = (page-1)*itemperPage
                    var sliceddata = showndata.slice(currentindex, currentindex+itemperPage)
                    $('.data-galeri').html(updateUI(sliceddata))
                })          

            }
            updateUIAndPageButtons()
        },
        error: function(err) {
            console.error('Error:', err);
        }

    });
    $(document).on('click', '.img-thumb', function() {
        var img = $(this).data('img');
        $('#img-modal').attr('src',img)
        $('#img-modal').css('display', 'block');
        $('#vd-modal').css('display','none')
    });
    $(document).on('click', '.vd-thumb', function() {
        var vd = $(this).data('vd');
        var ext = $(this).data('ext');
        $('#vd-modal').attr('src',vd)
        $('#vd-modal').attr('type','video/'+ ext)
        $('#img-modal').css('display','none')
        $('#vd-modal').css('display', 'block');
    });

    $(document).on('click', '.delg', function() {
        return confirm('Yakin Hapus Data ?')
    })

    $(document).on('click', '.img-update', function() {
        var kategori = $(this).data('ktg')
        var desc = $(this).data('desc')
        var vis = $(this).data('vis')
        var id_gl = $(this).data('id')
        $('#id_gl').val(id_gl)
        $('#ktg_gl').val(kategori)
        $('#desc').html(desc)
        if (vis === 1) {
            $('#userradio').prop('checked', true);
            $('#publicradio').prop('checked', false);
        } else if (vis === 0) {
            $('#userradio').prop('checked', false);
            $('#publicradio').prop('checked', true);
        }
    })
    
        
})
        
    