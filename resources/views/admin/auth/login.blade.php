<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Admin Login</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/backend/assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/backend/assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="/backend/assets/css/font-awesome.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="/backend/assets/css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body class="account-page">

		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a>
				<div class="container">

					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.html"><img src="/backend/assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->

					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle">Access to our dashboard</p>
                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('error_message'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{Session::get('error_message')}}

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
  @if(Session::has('success_message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('success_message')}}

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

						<!-- Account Form -->
							<form action="{{route('adminLogin')}}" method="POST">
                                @csrf
								<div class="form-group">
									<label for="email">Email Address</label>
									<input class="form-control" type="email" name="email" id="email">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label for="password">Password</label>
										</div>

									</div>
									<input class="form-control" type="password" name="password" id="password">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Login</button>
								</div>

							</form>
							<!-- /Account Form -->
                            <div class="account-footer">
                                <p>Forget Your Password <a href="register.html">Reset Here</a></p>
                            </div>

						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="/backend/assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="/backend/assets/js/popper.min.js"></script>
        <script src="/backend/assets/js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script src="/backend/assets/js/app.js"></script>

    </body>
</html>
