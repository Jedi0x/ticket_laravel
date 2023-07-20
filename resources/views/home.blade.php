<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HelpDesk</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-white position-relative app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>
		var defaultThemeMode = "light"; 
		var themeMode; 
		if ( document.documentElement ) { 
			if ( document.documentElement.hasAttribute("data-theme-mode")) { 
				themeMode = document.documentElement.getAttribute("data-theme-mode"); 
			} else { 
				if ( localStorage.getItem("data-theme") !== null ) { 
					themeMode = localStorage.getItem("data-theme"); 
				} else { 
					themeMode = defaultThemeMode; 
				} 
			} 
			if (themeMode === "system") { 
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; 
			} 
			document.documentElement.setAttribute("data-theme", themeMode); 
		}
        </script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Header Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
										<span class="svg-icon svg-icon-2hx">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<a href="">
										<img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}" class="logo-default h-45px h-lg-30px" />
										<img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}" class="logo-sticky h-45px h-lg-25px" />
									</a>
									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Knowledge</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#achievements" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">FAQs</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Blog</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#portfolio" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Contact</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											
										</div>
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->
								<div class="flex-equal text-end ms-1">
									<a href="{{ route('login') }}" class="btn btn-success">Login Helpdesk</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Landing hero-->
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
						<!--begin::Heading-->
						<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
							<!--begin::Title-->
							<h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">Make your working process easier 
							<br />with
							<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">HelpDesk</span>
							</span></h1>
							
							<h3 class="text-white lh-base fw-bold mb-15">It's much easier now to create, assign, manage and resolve <br> tickets with HelpDesk. You just need to host this web <br> application on any hosting server of your choice and use it.</h3>
							<!--end::Title-->
							<!--begin::Action-->
							<a href="" class="btn btn-primary">Submit Survey</a>
							<a href="" class="btn btn-primary">Submit Ticket</a>
							<!--end::Action-->
						</div>
						<!--end::Heading-->
						<!--begin::Clients-->
						<div class="d-flex flex-center flex-wrap position-relative px-5">
							
						</div>
						<!--end::Clients-->
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Header Section-->
			<!--begin::How It Works Section-->
			<div class="mb-n10 mb-lg-n20 z-index-2">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-17">
						<!--begin::Title-->
						<h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">HelpDesk Process</h3>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="fs-5 text-muted fw-bold">An example process about how HelpDesk work like.</div>
						<!--end::Text-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="row w-100 gy-10 mb-md-20">
						<!--begin::Col-->
						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="assets/media/illustrations/sketchy-1/2.png" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">1</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bold text-dark">Submit A ticket</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<div class="fw-semibold fs-6 fs-lg-4 text-muted">You can submit ticket from this
								<br/>home page or dashboard after login.
								<br/>If you don't have login access 
								<br/>you can create account from this link.</div>
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="assets/media/illustrations/sketchy-1/8.png" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">2</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bold text-dark">Track progress with email</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<div class="fw-semibold fs-6 fs-lg-4 text-muted">You will get email progress when
								<br />change ticket status or you can
								<br />comment and discuss with agent for a
								<br/>particular ticket discussion.</div>
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="assets/media/illustrations/sketchy-1/12.png" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">3</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bold text-dark">Done and Close the ticket</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<div class="fw-semibold fs-6 fs-lg-4 text-muted">After making done a ticket agent will
								<br />close the ticket though status, you may
								<br />get notify when close.</div>
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Product slider-->
					<div class="tns tns-default">
						<!--begin::Slider-->
						<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
							<!--begin::Item-->
							<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
								<img src="assets/media/demos/demo1/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt="" />
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
								<img src="assets/media/demos/demo2/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt="" />
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
								<img src="assets/media/demos/demo4/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt="" />
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
								<img src="assets/media/demos/demo5/light-ltr.png" class="card-rounded shadow mh-lg-650px mw-100" alt="" />
							</div>
							<!--end::Item-->
						</div>
						<!--end::Slider-->
						<!--begin::Slider button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
							<span class="svg-icon svg-icon-3x">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Slider button-->
						<!--begin::Slider button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
							<span class="svg-icon svg-icon-3x">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Slider button-->
					</div>
					<!--end::Product slider-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::How It Works Section-->


			<!--begin::Projects Section-->
			<div class="mb-lg-n15 position-relative z-index-2">
				<!--begin::Container-->
				<div class="container">
					<form class="form" action="{{ route('front.create_ticket') }}" method="POST" id="kt_modal_create_front_ticket_form" enctype="multipart/form-data">
					@csrf
						<!--begin::Card-->
						<div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
							<!--begin::Card body-->
							<div class="card-body p-lg-20">
								<!--begin::Heading-->
								<div class=" mb-5 mb-lg-10">
									<!--begin::Title-->
									<h3 class="text-center fs-2hx text-dark mb-5" id="portfolio" data-kt-scroll-offset="{default: 100, lg: 250}">Create a ticket</h3>
									<!--end::Title-->
									<div class="separator my-10"></div>
									
									<div class="row g-9 mb-7">
									
										<div class="col-md-6 fv-row">
											<label class="required fs-6 fw-semibold mb-2" for="first_name">First Name</label>
											<input class="form-control form-control-solid" type="text" placeholder="Please enter first name" name="first_name" id="first_name"/>
										</div>
										
										<div class="col-md-6 fv-row">
											<label class="required fs-6 fw-semibold mb-2" for="last_name">Last Name</label>
											<input class="form-control form-control-solid" type="text" placeholder="Please enter last name" name="last_name" id="last_name"/>
										</div>
										
										<div class="col-md-6 fv-row">
											<label class="required fs-6 fw-semibold mb-2" for="email">Email</label>
											<input class="form-control form-control-solid" type="email" placeholder="Please enter email address" name="email" id="email"/>
										</div>
										
										<div class="col-md-6 fv-row">
											<label class="required fs-6 fw-semibold mb-2" for="phone">Phone</label>
											<input class="form-control form-control-solid" type="number" placeholder="Please enter phone" name="phone" id="phone"/>
										</div>
										
										<div class="col-md-6 fv-row">
											<label class="required fs-6 fw-semibold mb-2" for="subject">Subject</label>
											<input class="form-control form-control-solid" type="text" placeholder="Please enter subject" name="subject" id="subject"/>
										</div>
										
										<div class="col-md-6 fv-row">
											<label class="required fs-6 fw-semibold mb-2" for="department_id">Department</label>
											<select aria-label="Select a department" data-control="select2"  data-placeholder="Select a department"  id="department_id" name="department_id" class="form-select form-select-solid fw-bold">
												<option value="">Select a department</option>
												@foreach($departments as $department)
													<option value="{{ $department->id }}" {{ old('department_id') == $department->name ?'selected' :'' }}> {{ $department->name }} </option>
												@endforeach
												
											</select>
										</div>
							
										<div class="col-md-6 fv-row">
											<label class="required fs-6 fw-semibold mb-2" for="type_id">Type</label>
											<select aria-label="Select a ticket type" data-control="select2"  data-placeholder="Select a ticket type"  id="type_id" name="type_id" class="form-select form-select-solid fw-bold">
												<option value="">Select a ticket type</option>
												@foreach($types as $type)
													<option value="{{ $type->id }}" {{ old('type_id') == $type->name ?'selected' :'' }}> {{ $type->name }} </option>
												@endforeach
											</select>
										</div>
							

										<div class="col-md-6 fv-row">
											<label class="required fs-6 fw-semibold mb-2" for="category_id">Category</label>
											<select aria-label="Select a type" data-control="select2"  data-placeholder="Select a category"  id="category_id" name="category_id" class="form-select form-select-solid fw-bold">
												<option value="">Select a category</option>
												@foreach($categories as $category)
													<option value="{{ $category->id }}" {{ old('category') == $category->name ?'selected' :'' }}> {{ $category->name }} </option>
												@endforeach
												
											</select>
										</div>
								
										<div class="col-md-6 fv-row">
											<label for="attachment" class="fs-6 fw-semibold mb-2">Attachments</label>
											<input class="form-control form-control form-control-solid" type="file" name="files[]" id="attachment" multiple />
										</div>
										
										<div class="col-md-6 fv-row">
											<label for="details" class="required fs-6 fw-semibold mb-2">Request Details</label>
											<textarea class="form-control form-control form-control-solid" name="details" id="details" data-kt-autosize="true"></textarea>
										</div>
							
									</div>
									
								</div>
								<!--end::Heading-->
			
							</div>
							<!--end::Card body-->
							
							<div class="card-footer d-flex justify-content-end py-6 px-9">
								<button type="submit" id="kt_modal_create_front_ticket_submit" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							
						</div>
						<!--end::Card-->
					</form> 
				</div>
				<!--end::Container-->
			</div>
			<!--end::Projects Section-->


			<!--begin::Footer Section-->
			<div class="mb-0">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="landing-dark-bg pt-20">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Row-->
						<div class="row py-10 py-lg-20">
							<!--begin::Col-->
							<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9 mb-10">
									<!--begin::Title-->
									<h2 class="text-white">Would you need a Custom License?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">Email us to
									<a href="" class="text-white opacity-50 text-hover-primary">support@helpdesk.com</a></span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
								
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6 ps-lg-16">
								<!--begin::Navs-->
								<div class="d-flex justify-content-center">
									<!--begin::Links-->
									<div class="d-flex fw-semibold flex-column me-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bold text-gray-400 mb-6">More Usefull Links</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Terms of Services</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Privacy Policy</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Knowledge Base</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
									<!--begin::Links-->
									<div class="d-flex fw-semibold flex-column ms-lg-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bold text-gray-400 mb-6">Stay Connected</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="" class="mb-6">
											<img src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
										</a>
										<!--end::Link-->
	
										<!--begin::Link-->
										<a href="" class="mb-6">
											<img src="{{ asset('assets/media/svg/brand-logos/twitter.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="" class="mb-6">
											<img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
										</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
								</div>
								<!--end::Navs-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Container-->
					<!--begin::Separator-->
					<div class="landing-dark-separator"></div>
					<!--end::Separator-->
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							<!--begin::Copyright-->
							<div class="d-flex align-items-center order-2 order-md-1">
								<!--begin::Logo-->
								<a href="">
									<img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}" class="h-15px h-md-20px" />
								</a>
								<!--end::Logo image-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="https://aaqoo.com/">&copy; {{ date("Y") }} Helpdesk Developed by aaqoo</span>
								<!--end::Logo image-->
							</div>
							<!--end::Copyright-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Footer Section-->
			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
				<span class="svg-icon">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
						<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Scrolltop-->
		</div>
		<!--end::Root-->
		<!--begin::Engage drawers-->


		<!--end::Engage drawers-->
		<!--begin::Engage modals-->
		<!--end::Engage modals-->
		
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--begin::Javascript-->

		
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		
		<script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
		
		<script src="{{ asset('assets/js/custom/landing.js') }}"></script>
		
		@if (isset($errors) && $errors->any())
			@foreach ($errors->all() as $error)
				<script>
					Swal.fire({
					text: `{{ $error }}`,
					icon: "error",
					buttonsStyling: false,
					confirmButtonText: "Ok, got it!",
					customClass: {
						confirmButton: "btn fw-bold btn-primary",
					}
				})
				</script>
			@endforeach
		@endif



		@if (Session::has('warning'))
			<script>
				Swal.fire({
					text: `{!!Session::get("warning")!!}`,
					icon: "error",
					buttonsStyling: false,
					confirmButtonText: "Ok, got it!",
					customClass: {
						confirmButton: "btn fw-bold btn-primary",
					}
				})
			</script>
		@endif

		@if (Session::has('success'))
			<script>
				Swal.fire({
					text: `{!!Session::get("success")!!}`,
					icon: "success",
					buttonsStyling: false,
					confirmButtonText: "Ok, got it!",
					customClass: {
						confirmButton: "btn fw-bold btn-primary",
					}
				});
			</script>
		@endif

		
		<script>
		// Class definition
		var KTModaluserAdd = function () {
			var submitButton;
			var cancelButton;
			var validator;
			var form;
			// Init form inputs
			var handleForm = function () {
				
				validator = FormValidation.formValidation(
					form,
					{
						fields: {
							first_name: {
								validators: {
									notEmpty: {
										message: 'The first name is required'
									}
								}
							},
							last_name: {
								validators: {
									notEmpty: {
										message: 'The last name is required'
									}
								}
							},
							email: {
								validators: {
									notEmpty: {
										message: "The email is required"
									},
									emailAddress: {
										message: 'The email is not a valid email address'
									}
								}
							},
							department_id: {
								validators: {
									notEmpty: {
										message: 'The department is required'
									}
								}
							},
							phone: {
								validators: {
									notEmpty: {
										message: "The phone number is required"
									},
									stringLength: {
										min: 11,
										message: "The phone number must be more than 7 characters"
									},
									regexp: {
										message: "The phone number can only consist of number",
										regexp: /^[0-9]*$/
									},
								}
							},
							type_id: {
								validators: {
									notEmpty: {
										message: 'The type is required'
									}
								}
							},
							subject: {
								validators: {
									notEmpty: {
										message: 'The subject is required'
									}
								}
							},
							category_id: {
								validators: {
									notEmpty: {
										message: 'The category is required'
									}
								}
							},
							details: {
								validators: {
									notEmpty: {
										message: 'The detail is required'
									}
								}
							}
						},
						plugins: {
							trigger: new FormValidation.plugins.Trigger(),
							bootstrap: new FormValidation.plugins.Bootstrap5({
								rowSelector: '.fv-row',
								eleInvalidClass: '',
								eleValidClass: ''
							})
						}
					}
				);

				// Action buttons
				$(submitButton).on('click', function (e) {
					e.preventDefault();

					// Validate form before submit
					if (validator) {
						validator.validate().then(function (status) {
							console.log('validated!');

							if (status == 'Valid') {
								submitButton.setAttribute('data-kt-indicator', 'on');

								// Disable submit button whilst loading
								submitButton.disabled = true;
								form.submit(); // Submit form

													
							} else {
								Swal.fire({
									text: "Sorry, looks like there are some errors detected, please try again.",
									icon: "error",
									buttonsStyling: false,
									confirmButtonText: "Ok, got it!",
									customClass: {
										confirmButton: "btn btn-primary"
									}
								});
							}
						});
					}
				});
			}

			return {
				// Public functions
				init: function () {
					// Elements
					form = document.querySelector('#kt_modal_create_front_ticket_form');
					submitButton = form.querySelector('#kt_modal_create_front_ticket_submit');
					handleForm();
				}
			};
		}();

		// On document ready
		KTUtil.onDOMContentLoaded(function () {
			KTModaluserAdd.init();
		});

		</script>
		
	</body>
</html>