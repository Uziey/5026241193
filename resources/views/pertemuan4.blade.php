<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pertemuan 4 Latihan Layout GRID</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .body {
      background-color: #f2f2f2;
    }

    .container {
      background-color: #ffffff;
    }

    .img {
      border-radius: 50%;
      max-widht: 75px;
      max-height: 75px;
      aspect-ratio: 1/1;
    }

    .testimonial-text {
      font-family: 'Open Sans', sans-serif;
      font-style: italic;
      font-size: 16px;
      line-height: 1.6;
      color: #777;
      margin-bottom: 15px;
    }

    .namaclient {
      font-family: 'Open Sans', sans-serif;
      font-weight: 700;
      font-size: 13px;
      text-transform: uppercase;
      color: #333;
      margin-bottom: 2px;
    }

    .jabatanclient {
      font-family: 'Open Sans', sans-serif;
      font-size: 11px;
      color: #999;
      display: block;
    }

    .logoperusahaan {
      text-align: center;
      width: 50px;
      height: 50px;
      margin-top: 20px;
      margin-bottom: 20px;
    }
  </style>


</head>

<body class="body">
  <br>
  <div class="container-fluid">
    <div class="container">
      <br>
      <h3 class="text-center"> OUR CLIENT LOVE US</h2> <br>
        <div class="row">
          <div class="col-2">
          </div>
          <div class="col-1">
            <img class="img" src="https://tse4.mm.bing.net/th/id/OIP.VdVIYdYGhNSSyOtYslT31QHaHa?pid=Api&h=220&P=0"
              alt="">
          </div>
          <div class="col-3">
            <p class="testimonial-text"> "Produk ini sangat bermanfaat bagi saya dan keluarga saya."</p>

          </div>
          <div class="col-1">
            <img class="img" src="https://tse1.mm.bing.net/th/id/OIP.hCfHyL8u8XAbreXuaiTMQgHaHZ?pid=Api&h=220&P=0"
              alt="">
          </div>
          <div class="col-3">
            <p class="testimonial-text"> "Produk sesuai apa yang dideskripsikan, sangat bagus dan bermanfaat"</p>

          </div>
          <div class="col-2">
          </div>
        </div>

        <div class="row">
          <div class="col-2">
          </div>
          <div class="col-1">
          </div>
          <div class="col-3">
            <h6 class="namaclient">ELON MUSK</h6>
            <h6 class="jabatanclient">CEO</h6>
          </div>
          <div class="col-1">
          </div>
          <div class="col-3">
            <h6 class="namaclient">RIZKY SANDRA</h6>
            <h6 class="jabatanclient">BUMN</h6>
          </div>
          <div class="col-2">
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-2">
          </div>
          <div class="col-1">
            <img class="img"
              src="https://2.bp.blogspot.com/-SCzZZhErNLA/W5UmYMfUH1I/AAAAAAAAAhg/UB2AvyWdCrQO6PTlsZ1bsokS1_l4QSGlgCLcBGAs/s1600/Dimas%2BAnggara.jpg"
              alt="">
          </div>
          <div class="col-3">
            <p class="testimonial-text"> "Pengiriman dan respon cepat, pelayanan ramah" </p>
          </div>
          <div class="col-1">
            <img class="img" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/09/26/3314225744.jpg"
              alt="">
          </div>
          <div class="col-3">
            <p class="testimonial-text"> "Produk sangat cocok dengan kebutuhan saya, pelayanan ramah dan cepat"</p>
          </div>
          <div class="col-2">
          </div>
        </div>

        <div class="row">
          <div class="col-2">
          </div>
          <div class="col-1">
          </div>
          <div class="col-3">
            <h6 class="namaclient">DIMAS ANGGARA</h6>
            <h6 class="jabatanclient">Selebrity</h6>
          </div>
          <div class="col-1">
          </div>
          <div class="col-3">
            <h6 class="namaclient">AZIZI ASADEL</h6>
            <h6 class="jabatanclient">Mahasiswa</h6>
          </div>
          <div class="col-2">
          </div>
        </div>
        <br>
        <div>
          <div class="row" style="background-color: #6f6f6f;">
            <div class="col-2">
            </div>
            <div class="col-10">
              <div class="row">
                <div class="col">
                  <img src="https://londonpetroacademy.co.uk/wp-content/uploads/2021/05/logo-pertamina-png-6.png"
                    class="logoperusahaan">
                </div>
                <div class="col">
                  <img
                    src="https://jasalogocepat.com/wp-content/uploads/2023/09/logo-bumn-tanpa-background-png-6-jasalogocepat-1536x276.png"
                    class="logoperusahaan" style="fit-content;">
                </div>
                <div class="col">
                  <img
                    src="https://1.bp.blogspot.com/-M8L5nZiXMpk/X2H14EBayoI/AAAAAAAAAXA/yoo-qlBm224VriUmYfbW0DaJszOs0T8CgCLcBGAsYHQ/s3237/tokped%2Blogo%2B2.png"
                    class="logoperusahaan">
                </div>
                <div class="col">
                  <img
                    src="https://i1.wp.com/images.squarespace-cdn.com/content/v1/5b75354d36099be341d84c48/1606112207824-MYA1SB77SHI72L8PPRIV/ke17ZwdGBToddI8pDm48kPJXHKy2-mnvrsdpGQjlhod7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QHyNOqBUUEtDDsRWrJLTmrMDYraMJMCQwFxTSOIP7LpSBEQpA-g5k6VTjWbSuadHJq0dp98hg5AZvIaPb3DoM/new+shopee.png"
                    class="logoperusahaan">
                </div>
                <div class="col">
                  <img
                    src="http://1.bp.blogspot.com/-G2Mm3Qsg85U/U4LL1HkbhnI/AAAAAAAARkI/1K5p566SzOo/s1600/LOGO+BARU+PTPN+IX.png"
                    class="logoperusahaan">
                </div>
                <div class="col">
                  <img
                    src="https://static.vecteezy.com/system/resources/thumbnails/028/667/072/small_2x/google-logo-icon-symbol-free-png.png"
                    class="logoperusahaan">
                </div>
                <div class="col-2">
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>



</body>

</html>
