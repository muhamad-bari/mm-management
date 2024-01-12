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