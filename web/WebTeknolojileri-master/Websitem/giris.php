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
    <!--İletişim doğrulama fonksiyonları içeri dahil edildi.-->
    <script src="js/iletisimdogrulama.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                        <a class="nav-link" href="#index.html">HAKKIMDA </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ozgecmis.html">ÖZGEÇMİŞ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sehrim.html"> ŞEHRİM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#miras">MİRASIMIZ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.php">İLETİŞİM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="giris.php">GİRİŞ YAP</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="card">

    <?php
            if(isset($_GET['durum']))
            {
                if($_GET['durum'] == "basarisiz")
                {
                    ?>
                    <div class="alert bg-danger text-center text-white" style="font-size: 20px; border: 4px solid black;">
                    <i class="fa fa-window-close-o" aria-hidden="true"></i> Kullanıcı adı veya şifreniz yanlış! Giriş başarısız oldu!
                    </div>
                    <?php
                }
            }

            if(isset($_GET['durum']))
            {
                if($_GET['durum'] == "kadiformat")
                {
                    ?>
                    <div class="alert bg-danger text-center text-white" style="font-size: 20px; border: 4px solid black;">
                    <i class="fa fa-window-close-o" aria-hidden="true"></i> Kullanıcı adınız uygun formatta değil.
                    </div>
                    <?php
                }
            }

            
            if(isset($_GET['durum']))
            {
                if($_GET['durum'] == "kullanicisifrebos")
                {
                    ?>
                    <div class="alert bg-danger text-center text-white" style="font-size: 20px; border: 4px solid black;">
                    <i class="fa fa-window-close-o" aria-hidden="true"></i> Kullanıcı adı ve şifre boş bırakılamaz!
                    </div>
                    <?php
                }
            }

            if(isset($_GET['durum']))
            {
                if($_GET['durum'] == "kullanicAdiBosBirakildi")
                {
                    ?>
                    <div class="alert bg-danger text-center text-white" style="font-size: 20px; border: 4px solid black;">
                    <i class="fa fa-window-close-o" aria-hidden="true"></i> Kullanıcı Adı Boş Bırakıldı!
                    </div>
                    <?php
                }
            }

            if(isset($_GET['durum']))
            {
                if($_GET['durum'] == "sifreBosBirakildi")
                {
                    ?>
                    <div class="alert bg-danger text-center text-white" style="font-size: 20px; border: 4px solid black;">
                    <i class="fa fa-window-close-o" aria-hidden="true"></i> Şifre Boş Bırakıldı!
                    </div>
                    <?php
                }
            }
    ?>


        <div class="card-body">

            <div class="row">
                <div class="col-2"></div>
                <div class="col text-center">
                <i class="fa fa-user-circle mb-2" style="font-size: 90px;" aria-hidden="true"></i>
                <div class="card-header bg-dark text-white p-3"> Giriş Yap</div>

                    <form action="oturumac.php" method="POST">

                        <div class="form-group">
                            <label class="mt-2">Kullanıcı Adı:</label>
                            <input type="text"  name="kullaniciAdi" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="mt-2">Şifre:</label>
                            <input type="password" name="sifre" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-lg bg-success text-white" name="oturumac">Giriş Yap</button>
                        <!--Verileri gönderir-->

                    </form>
                </div>
                <div class="col-2"></div>
            </div>



        </div>


    </div>

</body>

</html>