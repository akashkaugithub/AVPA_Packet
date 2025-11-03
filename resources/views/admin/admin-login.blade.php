<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Admin Login - AVPA & Co.</title>
	<link rel="icon" type="{{asset('admin/image/png')}}" href="favicon.svg">
	<link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css">
	<link href="{{asset('admin/css/animation.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/css/custom.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('admin/css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<!-- CSS -->
</head>

<body>
	<!-- MAIN -->
	<div class="firewatch-login-inner-card">
		<div class="logo-firewatch">
			<img src="{{asset('admin/images/login-imgs/ca-logo.jpg')}}" alt="logo">
		</div>
		<div class="login-wrap">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-lg-12 col-md-12">
						<div class="login-in">
							<div class="firewatch-login-logo">
								<div class="firewatch-logo">
									<img src="{{asset('admin/images/HUHAHO-LOGIN-IMG.png')}}">
									<!-- <h1>INaholic</h1> -->
								</div>
							</div>
							<div class="firewatch-login-form">
								<form id="send-otp-form">
                                    @csrf
									<h1>Admin Login</h1>

									<div class="inner-form-label">
										<h2>Email</h2>
										<label for="">
											<input type="text" id="email_or_phone" name="email_or_phone" placeholder="Email Or Phone">
											<img src="{{asset('admin/images/login-imgs/email-icon.svg')}}" alt="">
										</label>
									</div>

									<div class="inner-form-label">
										<h2>Password</h2>
										<label for="">
											<input type="password" class="password" name="password" placeholder="Password">
											<div class="password-eye">
												<div class="eye eye-open"></div>
											</div>
											<img src="images/login-imgs/password-icon.svg" alt="">
										</label>
									</div>


									<label for="remember" class="login-labl">
										<input type="checkbox" class="login-rmb" id="remember" name="remember">
										<p class="remeber-me-title">Remember
											me</p>
									</label>
									<!-- <input type="submit" class="login-btn" value="Sign In"> -->
									<!-- <a href="#" class="firewatch-login-btn show-modal" data-bs-toggle="modal"
										data-bs-target="#OTP-login">Login</a> -->
                                        <button type="submit" class="firewatch-login-btn">Login</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- MAIN -->

	<!-- OTP-SUCCESSFUL-POPUP -->
<div class="modal animate__animated animate__bounceIn" id="OTP-login" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" data-bs-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content clearfix">
      <div class="modal-body">
        <div class="logout-in text-center">
          <img src="images/login-page/succes-icon.png" alt="">
          <h1>Enter OTP</h1>
          <p>Please enter the 4-digit OTP sent to your registered mobile/email.</p>

          <form id="verify-otp-form">
            @csrf
            <input type="hidden" name="email_or_phone" id="otp-email-or-phone">
            <div class="otp-wrapper">
              <input type="text" maxlength="1" class="otp-input" required>
              <input type="text" maxlength="1" class="otp-input" required>
              <input type="text" maxlength="1" class="otp-input" required>
              <input type="text" maxlength="1" class="otp-input" required>
            </div>

            <!-- Styled same as OK button -->
            <!-- <button type="submit" class="logout-in-btn">Verify</button> -->
			<!-- <a href="#" class="firewatch-login-btn show-modal" data-bs-toggle="modal"
										data-bs-target="#login-succ">Verify</a> -->
            <button type="submit" class="firewatch-login-btn">Verify</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


	<!-- OTP-SUCCESSFUL-POPUP -->

	<!-- LOGIN-SUCCESSFUL-POPUP -->
	<div class="modal animate__animated animate__bounceIn" id="login-succ" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel" data-bs-backdrop="static">
		<div class="modal-dialog" role="document">
			<div class="modal-content clearfix">
				<div class="modal-body">
					<div class="logout-in">
						<img src="images/login-page/succes-icon.png" alt="">
						<h1>Congratulation!</h1>
						<p>You have successfully logged into the <br> AVPA & Co Admin.</p>
						<form action="manage-user.html">
							<button type="button" class="logout-in-btn"  id="login-success-ok" >Ok</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- LOGIN-SUCCESSFUL-POPUP -->
	<!-- JS -->
	<script src="{{ asset('admin/js/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/animation.js') }}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>

 
	
		<script>
$(document).on('submit', '#send-otp-form', function(e) {
    e.preventDefault();

    let email_or_phone = $('#email_or_phone').val();
    let password = $('.password').val();
    let remember = $('#remember').is(':checked') ? true : false;

    $.ajax({
        url: "{{ route('admin.login') }}",
        type: 'POST',
        data: {
            _token: "{{ csrf_token() }}",
            email_or_phone: email_or_phone,
            password: password,
            remember: remember
        },
        success: function(response) {
            toastr.success(response.message);

           $('#login-succ').modal('show');
		      $('#login-success-ok').data('redirect', response.redirect);
        },
        error: function(xhr) {
            let res = xhr.responseJSON;
            if (res && res.message) {
                toastr.error(res.message);
            } else {
                toastr.error('Something went wrong!');
            }
        }
    });
});

$(document).on('click', '#login-success-ok', function () {
    let redirectUrl = $(this).data('redirect') || "{{ route('admin.teams.management') }}";
    window.location.href = redirectUrl;
});

</script>

	
</body>

</html>