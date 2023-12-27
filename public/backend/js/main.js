// import { CKFinder } from '../ckeditor/ckeditor5-ckfinder';
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

$(document).ready(function () {
    var canvas = $('#signature')[0];
    var context = canvas.getContext('2d');
    var isDrawing = false;
    $(canvas).mousedown(function (e) {
        isDrawing = true;
        context.beginPath();
        context.moveTo(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top);
    });
    $(canvas).mousemove(function (e) {
        if (isDrawing) {
            context.lineTo(e.pageX - $(this).offset().left, e.pageY - $(this).offset().top);
            context.stroke();
        }
    });
    $(document).mouseup(function () {
        isDrawing = false;
        context.closePath();
    });

    // Handle the "Konfirmasi" button click
    $('#konf-sign').click(function () {
        // Capture the signature data as an image
        var imageData = canvas.toDataURL('image/png');

        // Display the image in the .bukti div
        $('.bukti').html('<h4>Signature Image</h4><img src="' + imageData + '">');

        // Optionally, you can save the imageData in a hidden input field for form submission
        $('#signature64').val(imageData);
        $('#sign-modal').modal('hide')
        return false
    });
    $('#reset-sign').click(function() {
        context.clearRect(0, 0, canvas.width, canvas.height);
        return false
    })
});

$('#pay_method').on('change', function() {
    if($('#pay_method').val()==="1")
    {
        $('#rek_kirim').prop('readonly', true).val('0');
        $('#rek_terima').prop('readonly', true).val('0');
    }
    else
    {
        $('#rek_kirim').prop('readonly', false);
        $('#rek_terima').prop('readonly', false);
    }
})
$('#jenis').on('change', function() {
    if($('#jenis').val()==="1")
    {
        $('#label_rek').html('Rekening Pengirim');
        $('#rek_kirim').prop('type', 'number').val('0');
        $('#rek_terima').prop('type', 'hidden').val('0');
    }
    else
    {
        $('#label_rek').html('Rekening Penerima');
        $('#rek_kirim').prop('type', 'hidden').val('0');
        $('#rek_terima').prop('type', 'number').val('0');
    }
})