function dogrulama() {
    var fIsim = document.forms["iletisimform"]["isim"].value;
    var fSoyIsim = document.forms["iletisimform"]["soyisim"].value;
    var fEmail = document.forms["iletisimform"]["mail"].value;
    var fMesaj = document.forms["iletisimform"]["mesaj"].value;
    if (fIsim == null || fIsim == "") {
        swal ( "Hata" ,  "İsim alanı boş bırakılamaz!" ,  "error" )
        return false;
    }
    if (fSoyIsim == null || fSoyIsim == "") {
        swal ( "Hata" ,  "Soyisim alanı boş bırakılamaz!" ,  "error" )
        return false;
    }
    if (fEmail == null || fEmail == "") {
        swal ( "Hata" ,  "Email alanı boş bırakılamaz!" ,  "error" )
        return false;
    }
    if (fMesaj == null || fMesaj == "") {
        swal ( "Hata" ,  "Mesaj alanı boş bırakılamaz" ,  "error" )
        return false;
    }
}
