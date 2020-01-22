<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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
				<form class="login100-form validate-form" method="POST"  action="{{ url('/loginPost') }}">
          @csrf
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
          <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type email">
						<input id="first-name" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
						<span class="focus-input100"></span>

					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required >
						<span class="focus-input100"></span>

        </div>


                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="container-login100-form-btn">
                          <button class="login100-form-btn" type="submit">
                            Login
                          </button>


                        </div>
                        <div class="w-full text-center">
                          
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
