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

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>

 <br>
 <br>
<div class="show_tables">
<h1 class="h1">Data Laporan</h1>
<br/>
@if($message = Session::get('success'))
<div class="success">
	<p>{{$message}}</p>
</div>
@endif
<br/>
<a href="/laporan" class="button2">Tambah data </a>
<br/>
<br/>
<br/>
<table class="show">
<tr>
	<th class="th">Id</th>
	<th class="th">Jenis Bencana</th>
	<th class="th">Deskripsi Bencana </th>
  <th class="th">Provinsi</th>
	<th class="th">Kabupaten</th>
	<th class="th">Kecamatan</th>
	<th class="th">Kode Pos</th>
  <th class="th">Alamat Lengkap</th>
	<th class="th">Foto Bencana</th>
	<th class="th">Status</th>

</tr>
@if($bencanas->count())
@foreach($bencanas as $row)
<tr>
	<td>{{$row['id']}}</td>
	<td>{{$row['jenis_bencana']}}</td>
	<td>{{$row['deskripsi_bencana']}}</td>
  <td>{{$row['provinsi_bencana']}}</td>
	<td>{{$row['kabupaten_bencana']}}</td>
	<td>{{$row['kecamatan']}}</td>
	<td>{{$row['kode_pos']}}</td>
  <td>{{$row['alamat_lengkap']}}</td>
	<td>{{$row['foto_bencana']}}</td>
	<td>{{$row['status']}}</td>




</tr>
@endforeach
@endif
</table>
{!!$bencanas->appends(\Request::except('page'))->render()!!}
</div>
<div class="footer1">

 </div>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Apakah kamu yakin akan menghapus data?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>

 <br>
 <br>

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
