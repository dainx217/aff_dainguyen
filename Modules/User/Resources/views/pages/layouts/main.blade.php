@include('user::pages.layouts.header')
@include('user::pages.layouts.menu')
<!--begin::Body-->

<body id="kt_body" style="background-image: url()"
	class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">

			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				@yield('content')

				<!--begin::Footer-->
				<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
					<!--begin::Container-->
					<div class="container-xxl d-flex flex-column flex-md-row flex-stack">
						<!--begin::Copyright-->
						<div class="text-dark order-2 order-md-1">
							<span class="text-gray-400 fw-bold me-1">Created by</span>
							<a href="https://keenthemes.com" target="_blank"
								class="text-muted text-hover-primary fw-bold me-2 fs-6">Adsmo themes</a>
						</div>
						<!--end::Copyright-->
						<!--begin::Menu-->
						<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
							<li class="menu-item">
								<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
							</li>
							<li class="menu-item">
								<a href="https://keenthemes.com/support" target="_blank"
									class="menu-link px-2">Support</a>
							</li>
							<li class="menu-item">
								<a href="https://1.envato.market/EA4JP" target="_blank"
									class="menu-link px-2">Purchase</a>
							</li>
						</ul>
						<!--end::Menu-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Footer-->

				@include('user::pages.layouts.footer')