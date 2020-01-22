@extends('master')

@section('content')


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="/2">DIS-PORT</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="/2">HOME</a>
        </li>

        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" enctype="multipart/form-data" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>

 <br>
 <br>


        <div class="show_tables1"><center><h3>Tambah Data</h3></center>


  <form method="post" action="{{url('bencana')}}">

    {{csrf_field()}}
    <table>
      <tr>
        <td colspan="3" class="row_alert">@if(count($errors) > 0)
  <div class="error">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert">
   <p>{{ \Session::get('success') }}</p>
  </div>
  </div>
  @endif
  <br/>
</td>
      </tr>
      <tr>
        <td>Jenis Bencana</td>
        <td>:</td>
        <td><select class="form-control" name="jenis_bencana" placeholder="Jenis Bencana">

        <option value="Banjir" > Banjir </option>
        <option value="Tanah Longsor">Tanah Longsor</option>
        <option value="Gempa Bumi">Gempa Bumi</option>
        <option value="Kebakaran Hutan">Kebakaran Hutan</option>
        <option value="Gunung Meletus">Gunung Meletus</option>
        <option value="Tsunami" > Tsunami </option>
        <option value="Kekeringan Air">Kekeringan</option>
        <option value="Angin Puting Beliung">Angin Puting Beliung</option>
        <option value="Angin Topan">Angin Topan</option>
        <option value="Badai Tropis">Badai Tropis</option>
        <option value="Kabut Asap">Kabut Asap</option>

      </select></td>
      </tr>
      <tr>
        <td>Deskripsi Bencana</td>
        <td>:</td>
        <td><input type="text" name="deskripsi_bencana" class="form3"></td>
      </tr>
      <tr>
        <td>Provinsi</td>
        <td>:</td>
        <td><select class="form-control" name="provinsi_bencana" placeholder="Provinsi">

        <option value="Nanggro Aceh Darussalam" > Nanggro Aceh Darussalam </option>
        <option value="Sumatera Utara">Sumatera Utara</option>
        <option value="Sumatera Barat">Sumatera Barat</option>
        <option value="Riau">Riau</option>
        <option value="Kepulauan Riau">Kepulauan Riau</option>
        <option value="Sumatera Selatan">Sumatera Selatan</option>
        <option value="Bangka Belitung">Bengkulu</option>
        <option value="Lampung">Lampung</option>
        <option value="DKI Jakarta">DKI Jakarta</option>
        <option value="Jawa Barat">Jawa Barat</option>
        <option value="Banten">Banten</option>
        <option value="Jawa Tengah">Jawa Tengah</option>
        <option value="DI Yogyakarta">DI Yogyakarta</option>
        <option value="Jawa Timur">Jawa Timur</option>
        <option value="Bali">Bali</option>
        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
        <option value="Kalimantan Barat">Kalimantan Barat</option>
        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
        <option value="Kalimantan Timur">Kalimantan Timur</option>
        <option value="Sulawesi Utara">Sulawesi Utara</option>
        <option value="Sulawesi Barat">Sulawesi Barat</option>
        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
        <option value="Gorontalo">Gorontalo</option>
        <option value="Maluku">Maluku</option>
        <option value="Maluku Utara">Maluku Utara</option>
        <option value="Papua Barat">Papua Barat</option>
        <option value="Papua">Papua</option>
        <option value="Kalimantan Utara">Kalimantan Utara</option>


      </select></td>
      </tr>

      <tr>
        <td>Kabupaten atau Kota</td>
          <td>:</td>
          <td><input type="text" name="kabupaten_bencana" class="form2"> </td>
      </tr>

      <tr>
        <td>Kecamatan</td>
        <td>:</td>
        <td>
          <input type="text" name="kecamatan" class="form2">

        </td>
      </tr>

      <tr>
        <td>Kode Pos</td>
        <td>:</td>
        <td><input type="tel" name="kode_pos" class="form2"></td>
      </tr>

      <tr>
        <td>Alamat Lengkap</td>
        <td>:</td>
        <td><textarea name="alamat_lengkap" class="form3"></textarea></td>
      </tr>

      <tr>
        <td>Foto Bencana</td>
        <td>:</td>
        <td><input type="file" name="foto_bencana" class="form2" ></td>
      </tr>

      <tr>
        <td> Status </td>
        <td> : </td>
        <td><input type="text" name="status" readonly value="belum verifikasi" class="form2"></td>
      </tr>






    </table>
    <input type="submit" class="button1" data-toggle="modal" data-target="#confirm" ></input>


  </form>

</div>

</fieldset>
 </div>

 <br>
 <br>

 @if(\Session::has('success'))
   <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-body">
         berhasil
       </div>
     </div>
   </div>
 </div>
   @endif

 <footer>
   <div class="container">
     <div class="row">
       <div class="col-md-4">
         <span class="copyright">Copyright &copy; Your Website 2018</span>
       </div>
       <div class="col-md-4">
         <ul class="list-inline social-buttons">
           <li class="list-inline-item">
             <a href="#">
               <i class="fab fa-twitter"></i>
             </a>
           </li>
           <li class="list-inline-item">
             <a href="#">
               <i class="fab fa-facebook-f"></i>
             </a>
           </li>
           <li class="list-inline-item">
             <a href="#">
               <i class="fab fa-linkedin-in"></i>
             </a>
           </li>
         </ul>
       </div>
       <div class="col-md-4">
         <ul class="list-inline quicklinks">
           <li class="list-inline-item">
             <a href="#">Privacy Policy</a>
           </li>
           <li class="list-inline-item">
             <a href="#">Terms of Use</a>
           </li>
         </ul>
       </div>
     </div>
   </div>
 </footer>


 <!-- Bootstrap core JavaScript -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
 $("select[name='id_province']").change(function(){
     var id_province = $(this).val();
     var token = $("input[name='_token']").val();
     $.ajax({
         url: "<?php echo route('select-ajax') ?>",
         method: 'POST',
         data: {id_province:id_province, _token:token},
         success: function(data) {
           $("select[name='id_regency'").html('');
           $("select[name='id_regency'").html(data.options);
         }
     });
 });

  $("select[name='id_regency']").change(function(){
     var id_regency = $(this).val();
     var token = $("input[name='_token']").val();
     $.ajax({
         url: "<?php echo route('select-ajax') ?>",
         method: 'POST',
         data: {id_regency:id_regency, _token:token},
         success: function(data) {
           $("select[name='id_district'").html('');
           $("select[name='id_district'").html(data.options);
         }
     });
 });

   $("select[name='id_district']").change(function(){
     var id_district = $(this).val();
     var token = $("input[name='_token']").val();
     $.ajax({
         url: "<?php echo route('select-ajax') ?>",
         method: 'POST',
         data: {id_district:id_district, _token:token},
         success: function(data) {
           $("select[name='id_villages'").html('');
           $("select[name='id_villages'").html(data.options);
         }
     });
 });
</script>
 <script type="text/javascript">
  $('#confirm').modal('show');
</script>
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Plugin JavaScript -->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Contact form JavaScript -->
 <script src="js/jqBootstrapValidation.js"></script>
 <script src="js/contact_me.js"></script>

 <!-- Custom scripts for this template -->
 <script src="js/agency.min.js"></script>

 <div class="footer1">

 </div>
@endsection
