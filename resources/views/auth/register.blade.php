<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap2/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
        	<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
            @csrf
            <span class="login100-form-title p-b-34">
  						Account Register
  					</span>
            <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type NIK">
              <input id="first-name" type="text" class="form-control{{ $errors->has('NIK') ? ' is-invalid' : '' }}" name="NIK" placeholder="NIK" value="{{ old('NIK') }}" required autofocus>
              <span class="focus-input100"></span>
              @if ($errors->has('NIK'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('NIK') }}</strong>
                  </span>
              @endif
            </div> <br>
            <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type name">
              <input id="first-name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required autofocus>
              <span class="focus-input100"></span>
              @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div> <br>
            <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type email">
              <input  type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required>
              <span class="focus-input100"></span>
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div><br>
            <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type telephone">
              <input id="first-name" type="text" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone"placeholder="No Telp" value="{{ old('telephone') }}" required autofocus>
              <span class="focus-input100"></span>
              @if ($errors->has('telephone'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('telephone') }}</strong>
                  </span>
              @endif
            </div> <br>
            <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type address">
              <textarea id="first-name" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" placeholder="Alamat Lengkap" value="{{ old('address') }}" required autofocus>
              </textarea>
              <span class="focus-input100 form-control"></span>
              @if ($errors->has('address'))
                  <span class="invalid-feedback form-control" role="alert">
                      <strong>{{ $errors->first('address') }}</strong>
                  </span>
              @endif
            </div> <br>
            <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type Password">
              <input id="first-name" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
              						<span class="focus-input100"></span>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
              <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type Password">
                      <input id="first-name" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
              </div>

              <div class="container-login100-form-btn">
    						<button class="login100-form-btn" type="submit">
    							{{ __('Register') }}
    						</button>
    					</div>
                  </form>
                    	<div class="login100-more" style="background-image: url('images/Untitled-2.jpg');"></div>
                </div>
            </div>
          </div>
            <div id="dropDownSelect1"></div>

          <!--===============================================================================================-->
          	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
          <!--===============================================================================================-->
          	<script src="vendor/animsition/js/animsition.min.js"></script>
          <!--===============================================================================================-->
          	<script src="vendor/bootstrap2/js/popper.js"></script>
          	<script src="vendor/bootstrap2/js/bootstrap.min.js"></script>
          <!--===============================================================================================-->
          	<script src="vendor/select2/select2.min.js"></script>
          	<script>
          		$(".selection-2").select2({
          			minimumResultsForSearch: 20,
          			dropdownParent: $('#dropDownSelect1')
          		});
          	</script>
          <!--===============================================================================================-->
          	<script src="vendor/daterangepicker/moment.min.js"></script>
          	<script src="vendor/daterangepicker/daterangepicker.js"></script>
          <!--===============================================================================================-->
          	<script src="vendor/countdowntime/countdowntime.js"></script>
          <!--===============================================================================================-->
          	<script src="js/main.js"></script>

          </body>
          </html>
