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
            <a class="navbar-brand" href="index.html"> <img width="100" src="img/logo.png"> CEYDA ÖNEMLİ </a>
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
                        <a class="nav-link" href="giris.php">Giriş YAP</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <div class="card">

<?php
$isim;
$soyisim;
$email;
$mesaj;
if(isset($_POST['formbilgi']))
{
    $isim = $_POST['isim'];
    $soyisim = $_POST['soyisim'];
    $email = $_POST['mail'];
    $mesaj = $_POST['mesaj'];
}
?>

           <div class="card text-center p-5">

           <table class="table table-warning">

  <tbody>
      <h3 class="my-5">Gelen Bilgiler</h3>
    <tr>
      <td><span><b>İsminiz: </b></span><?php echo "$isim"; ?></td>
    </tr>
    <tr>
      <td><span><b>Soyisminiz: </b></span><?php echo "$soyisim"; ?></td>
    </tr>
    <tr>
      <td><span><b>Emailiniz: </b></span><?php echo "$email"; ?></td>
    </tr>
    <tr>
      <td><span><b>Mesaj: </b></span><?php echo "$mesaj"; ?></td>
    </tr>
  </tbody>
</table>
</div>
</body>

</html>

