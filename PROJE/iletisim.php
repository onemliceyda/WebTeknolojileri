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
                    <li class="nav-item">
                         <a class="nav-link" href="giris.php">GİRİŞ YAP</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="card">

        <div class="card-header text-center bg-danger text-white p-3"> İletişim Formu</div>

        <div class="card-body">

            <form action="formbilgi.php" method="POST" id="iletisimform" name="iletisimform"  onsubmit="return dogrulama()">

                <div class="form-group">
                    <label>İsim:</label>
                    <input type="text" id="isim" name="isim" class="form-control">
                </div>

                <div class="form-group">
                    <label>Soyisim:</label>
                    <input type="text" id="soyisim" name="soyisim" class="form-control">
                </div>

                <div class="form-group">
                    <label>Mail Adresiniz:</label>
                    <input type="email" id="mail" name="mail" class="form-control">
                </div>

                <div class="form-group">
                    <label>Mesajınız:</label>
                    <textarea class="form-control" id="mesaj" name="mesaj"></textarea>
                </div>



                <button type="reset" class="btn btn-lg bg-danger text-white">Sıfırla</button>
                <!--Bilgileri sıfırlar-->
                <button type="submit" class="btn btn-lg bg-success text-white" name="formbilgi">Gönder</button>
                <!--Verileri gönderir-->

            </form>




        </div>


    </div>








</body>

</html>