<!DOCTYPE html>
<html lang="en">
<head>

 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DIS-PORT ( DISASTER REPORT )</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

</head>
<body id="page-top">
  <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"> FORM LAPORAN</h2>
            <h3 class="section-subheading text-muted">Silahkan isi form berikut untuk melaporkan lokasi bencana.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Jenis Bencana*" required="required" data-validation-required-message="Harus diisi!">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="Provinsi" placeholder="Provinsi">

                    <option value="Kalimantan Barat" > Kalimantan Barat </option>
                    <option value="Katolik">Katolik</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>

                    </select>
                    <!--<input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address."> -->
                    <p class="help-block text-danger"></p>
                  </div>


                  <div class="form-group">
                    <select class="form-control" name="KabupatenKota" placeholder="Kabupaten atau Kota">

                    <option value="Pontianak" > Pontianak </option>
                    <option value="Katolik">Katolik</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>

                    </select>
                    <!--<input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address."> -->
                    <p class="help-block text-danger"></p>
                  </div>


                  <div class="form-group">
                    <select class="form-control" name="Kecamatan" placeholder="Kecamatan">

                    <option value="Kubu Raya" > Kubu Raya </option>
                    <option value="Katolik">Katolik</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>

                    </select>
                    <!--<input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address."> -->
                    <p class="help-block text-danger"></p>
                  </div>


                  <!--<div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div> -->
                <div class="form-group">

                    <input class="form-control" id="email" type="tel" placeholder="Kode Pos*" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
</div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Deskripsi Bencana*" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>


                  <div class="form-group">
                  <button type="button" name="file"> Kirim Foto</button> No file choosen </div>

                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Kirim Laporan</button>
                </div>



                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <form action="/2">
                 <br><button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="reset">Kembali</button>
                </form>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

 <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
</body>
</html>
