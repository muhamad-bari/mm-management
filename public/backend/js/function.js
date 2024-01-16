export function updateUI(data) {
    return data.map((e, i) => {
        var fsplit = e.file.split('.')
        var extf = fsplit[fsplit.length - 1]
        var ext  = ['jpg', 'png', 'svg', 'bmp', 'webp' ,'gif','jpeg']
        if(ext.includes(extf))
        {
        return `
        <div class="col-md-3 gal-cnt mb-2">
            <div class="act-gallery">
                <a href="#modal-galeri" data-bs-toggle="modal" class="img-thumb text-light" data-img="../../uploads/galeri/${e.file}"><i class="fa-solid fa-xl fa-magnifying-glass-plus"></i></a>
                <a href="#modal-up-galeri" data-bs-toggle="modal" class="img-update text-light mx-2" data-id="${e.id_gl}" data-ktg="${e.kategori}" data-desc="${e.desc}" data-vis="${e.visibility}"><i class="fa-regular fa-xl fa-pen-to-square"></i></a>
                <a href="del-gallery/${e.id_gl}" class="delg text-danger" data-img="../../uploads/galeri/${e.file}"><i class="fa-solid fa-xl fa-trash"></i></a>
            </div>
            <div class="d-flex justify-content-center">
                <img src='../../uploads/galeri/${e.file}' width='250' height='250' class='mx-auto'>
            </div>
        </div>` 
        }
        else
        {
            return   `
            <div class="col-md-3 gal-cnt mb-2">
            <div class="act-gallery">
                <a href="#modal-galeri" data-bs-toggle="modal" class="vd-thumb text-light" data-vd="../../uploads/galeri/${e.file}" data-ext="${extf}"><i class="fa-solid fa-xl fa-magnifying-glass-plus"></i></a>
                <a href="#modal-up-galeri" data-bs-toggle="modal" class="img-update text-light mx-2" data-id="${e.id_gl}" data-ktg="${e.kategori}" data-desc="${e.desc}" data-vis="${e.visibility}"><i class="fa-regular fa-xl fa-pen-to-square"></i></a>
                <a href="del-gallery/${e.id_gl}" class="delg text-danger" data-img="../../uploads/galeri/${e.file}"><i class="fa-solid fa-xl fa-trash"></i></a>
            </div>
            <div class="d-flex justify-content-center">
            <video width="250" height="250" controls class='mx-auto'>
            <source src="../../uploads/galeri/${e.file}" type="video/${extf}">
            </video>
            </div>
            </div>`
        }
    }).join('')
}

export function nexprev(page, total)
{
    (page > 1) ? $('.prevButton').css('display', 'block') : $('.prevButton').css('display', 'none')
    (page == total) ? $('.nextButton').css('display', 'none') : $('.nextButton').css('display', 'block')
}