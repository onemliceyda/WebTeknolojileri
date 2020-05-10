<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
    <link rel="sytlesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img width="100" src="img/logo.png"> CEYDA ÖNEMLİ </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.html">HAKKIMDA </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ozgecmis.html">ÖZGEÇMİŞ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sehrim.html"> ŞEHRİM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mirasimiz.html">MİRASIMIZ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.php">İLETİŞİM</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


        <?php

//kullanıcı doğrulamasında karşılaştırma için kullanılacak olan ve kullanıcı adını tutan yerel değişken
$kAdi = 'g181210107@ogr.sakarya.edu.tr';
//kullanıcı doğrulamasında karşılaştırma için kullanılacak olan ve şifreyi tutan yerel değişken
$sifre = 'ceyda';


//başarı ile giriş yapılırsa
if($kAdi == $_POST['kullaniciAdi'] && $sifre == $_POST['sifre'])
{
    ?>
        <div class="jumbotron text-center">
            <h1 class="display-4 text-white p-5 bg-success"><i class="fa fa-check mx-2" aria-hidden="true"></i>Giriş Başarılı!</h1>
            <p class="p-5" style="font-size:25px;"><?php echo "Hoşgeldin <b>$kAdi</b>!"; ?></p>
        </div>

        <?php
}
//kullanıcı adı veya şifre yanlışsa giriş başarısız durumu
else if ($kAdi != $_POST['kullaniciAdi'] || $sifre != $_POST['sifre'])
{
    header("location:giris.php?durum=basarisiz");
}
//kullanıcı adı email formatında değil ise 
if(!filter_var($_POST['kullaniciAdi'],FILTER_VALIDATE_EMAIL))
{
    header("location:giris.php?durum=kadiformat");
}
//kullanıcı adı ve şifre boş ise
if(($_POST['kullaniciAdi'] == null || $_POST['kullaniciAdi'] == '') && ($_POST['sifre'] == null || $_POST['sifre']==''))
{
    header("location:giris.php?durum=kullanicisifrebos");
}
//kullanıcı adı boş bırakılırsa
else if($_POST['kullaniciAdi'] == null || $_POST['kullaniciAdi'] == '')
{
    header("location:giris.php?durum=kullanicAdiBosBirakildi");
}
//şifre boş bırakılırsa 
else if($_POST['sifre'] == null || $_POST['sifre'] == '')
{
    header("location:giris.php?durum=sifreBosBirakildi");
}

?>

</body>

</html>