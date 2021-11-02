
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{ asset('affassets/media/logos/favicon.ico') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('affassets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('affassets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/frontends.css') }}">
        @if(session('toastr'))
        <script>
            var TYPE_MESSAGES = "{{ session('toastr.type') }}"
            var MESSAGE = "{{ session('toastr.message') }}"
        </script>
    	@endif
		<!--end::Global Stylesheets Bundle-->
		<!--Begin::Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
		<!--End::Google Tag Manager -->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
						<!--begin::Content-->
						<div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
							<!--begin::Logo-->
							<a href="#" class="py-9 mb-5">
								<img alt="Logo" src="{{ asset('affassets/src/media/logos/adsmo.png') }}" class="h-60px" />
							</a>
							<!--end::Logo-->
							<!--begin::Title-->
							<h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Welcome to Adsmo</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<p class="fw-bold fs-2" style="color: #986923;">Khám phá Adsmo
							<br />Affiliate Marketing 5.0</p>
							<!--end::Description-->
						</div>
						<!--end::Content-->
						<!--begin::Illustration-->
						<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url({{ asset('affassets/media/illustrations/sigma-1/13.png') }}"></div>
						<!--end::Illustration-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('post.login') }}" method="POST">
                                @csrf
								<!--begin::Heading-->
								<div class="text-center mb-10">
									<!--begin::Title-->
									<h1 class="text-dark mb-3">Đăng nhập tài khoản</h1>
									<!--end::Title-->
									<!--begin::Link-->
									<div class="text-gray-400 fw-bold fs-4">Bạn chưa có tài khoản? 
									<a href="#" class="link-primary fw-bolder">Đăng ký tài khoản</a></div>
									<!--end::Link-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="form-label fs-6 fw-bolder text-dark">Email</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack mb-2">
										<!--begin::Label-->
										<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
										<!--end::Label-->
										<!--begin::Link-->
										<a href="#" class="link-primary fs-6 fw-bolder">Quên mật khẩu ?</a>
										<!--end::Link-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Input-->
									<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="text-center">
									<!--begin::Submit button-->
									<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5 js-login">
										<span class="indicator-label">Đăng nhập</span>
										<span class="indicator-progress">Please wait... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<!--end::Submit button-->
									<!--begin::Separator-->
									<div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
									<!--end::Separator-->
									<!--begin::Google link-->
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="{{ asset('affassets/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3" />Continue with Google</a>
									<!--end::Google link-->
									<!--begin::Google link-->
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="{{ asset('affassets/media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-3" />Continue with Facebook</a>
									<!--end::Google link-->
									<!--begin::Google link-->
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
									<img alt="Logo" src="{{ asset('affassets/media/svg/brand-logos/apple-black.svg') }}" class="h-20px me-3" />Continue with Apple</a>
									<!--end::Google link-->
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
						<!--begin::Links-->
						<div class="d-flex flex-center fw-bold fs-6">
							<a href="#" class="text-muted text-hover-primary px-2" target="_blank">About</a>
							<a href="#" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
							<a href="#" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
						</div>
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('affassets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('affassets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		{{-- <script src="{{ asset('affassets/js/custom/authentication/sign-in/general.js') }}"></script> --}}
        <script src="{{ asset('js/login.js') }}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		<!--Begin::Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!--End::Google Tag Manager (noscript) -->
	</body>
	<!--end::Body-->
</html>