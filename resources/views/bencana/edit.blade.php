@extends('master')

@section('content')


<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">DIS-PORT</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
    <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#login">LAPOR LOKASI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#register">REKAP LAPORAN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        </div>
      </ul>
    </div>
  </div>
</nav>

<header class="masthead" style="background-image: url('img/gunung2.jpg')">
  <div class="container">
    <div class="intro-text">
      <div class="intro-lead-in">LAPORKAN BENCANA ANDA!</div>
      <div class="intro-heading text-uppercase"></div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{route('bencana.index')}}">LAPOR LOKASI</a>
       <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about">REKAP LAPORAN</a>
    </div>
  </div>
</header>

<div class="content">
<a href="{{route('bencana.index')}}" class="button2">Kembali </a>
<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Data Laporan Fakultas</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  </div>
  <table>
  <form method="post" action="{{action('BencanaController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <tr>
     <td>Jenis Bencana</td>
     <td>:</td>
     <td><input type="text" name="jenis_bencana" value="{{$bencana->jenis_bencana}}" class="form2"></td>
   </tr>

   <tr>
     <td>Deskripsi Bencana</td>
     <td>:</td>
     <td><input type="text" name="deskripsi_bencana" value="{{$bencana->deskripsi_bencana}}" class="form2"></td>
   </tr>

   <tr>
     <td>Provinsi Bencana</td>
     <td>:</td>
     <td><select class="form-control" name="kabupaten_bencana" value="{{$bencana->provinsi_bencana}}" placeholder="Provinsi">

     <option value="Kalimantan Barat" > Kalimantan Barat </option>
     <option value="Kalimantan Selatan">Kalimantan Selatan</option>
     <option value="Kaltim">Kaltim</option>
     <option value="Jakarta">Jakarta</option>
     <option value="Yogyakarta">Yogyakarta</option>

   </select></td>
   </tr>
   <tr>
     <td>Kabupaten Bencana</td>
     <td>:</td>
     <td><select class="form-control" name="provinsi_bencana" value="{{$bencana->kabupaten_bencana}}" placeholder="Kabupaten">

       <option value="Sui Raya" > Sui Raya </option>
       <option value="Sleman">Sleman</option>
       <option value="Nganglik">Nganglik</option>
       <option value="Lodadi">Lodadi</option>
       <option value="Besi">Besi</option>

   </select></td>
   </tr>

   <tr>
     <td>Kecamatan Bencana</td>
     <td>:</td>
     <td><select class="form-control" name="kecamatan" value="{{$bencana->kecamatan}}" placeholder="Kecamatan">

       <option value="Kubu Raya" > Kubu Raya </option>
       <option value="Katolik">Katolik</option>
       <option value="Kristen">Kristen</option>
       <option value="Budha">Budha</option>
       <option value="Hindu">Hindu</option>

   </select></td>
   </tr>

   <tr>
     <td>Kode Pos Bencana</td>
     <td>:</td>
     <td><input type="tel" name="kode_pos" value="{{$bencana->kode_pos}}" class="form2"></td>
   </tr>

   <tr>
     <td>Alamat Lengkap</td>
     <td>:</td>
     <td><textarea name="alamat_lengkap" value="{{$bencana->alamat_lengkap}}" class="form2"></textarea></td>
   </tr>

   <tr>
     <td>Foto Bencana</td>
     <td>:</td>
     <td><textarea name="foto_bencana" value="{{$bencana->foto_bencana}}" class="form2"></textarea></td>
   </tr>

    <tr>
      <td colspan="3"><input type="submit" class="btn button2" value="Edit" /></td>
    </tr>

  </form>
  </table>
</div>
</div>


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
