<!DOCTYPE html>
<html lang="en">
    @include('admin.includes.head')

    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
           @include('admin.includes.header')
			<!-- /Header -->

			<!-- Sidebar -->
           @include('admin.includes.sidebar')
			<!-- /Sidebar -->

			<!-- Page Wrapper -->
            <div class="page-wrapper">

				<!-- Page Content -->
                @yield('content')
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="/backend/assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="/backend/assets/js/popper.min.js"></script>
        <script src="/backend/assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="/backend/assets/js/jquery.slimscroll.min.js"></script>

		<!-- Chart JS -->
		<script src="/backend/assets/plugins/morris/morris.min.js"></script>
		<script src="/backend/assets/plugins/raphael/raphael.min.js"></script>
		<script src="/backend/assets/js/chart.js"></script>

		<!-- Custom JS -->
		<script src="/backend/assets/js/app.js"></script>

    </body>
</html>
