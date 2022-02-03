<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Small Apps | Bootstrap App Landing Template</title>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Bootstrap App Landing Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Small Apps Template v1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

	<!-- PLUGINS CSS STYLE -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/plugins/themify-icons/themify-icons.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/plugins/slick/slick-theme.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/plugins/fancybox/jquery.fancybox.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/plugins/aos/aos.css') ?>">

	<!-- CUSTOM CSS -->
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

	<!-- leafletjs integration -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

	<!-- Leafletjs integration -->
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


	<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
		<div class="container">
			<a class="navbar-brand" href="index.html"><img src="<?= base_url('assets/images/logo.png') ?>" alt="logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="ti-menu"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Home
							<span><i class="ti-angle-down"></i></span>
						</a>
						<!-- Dropdown list -->
						<ul class="dropdown-menu">
							<li><a class="dropdown-item active" href="index.html">Homepage</a></li>
							<li><a class="dropdown-item" href="homepage-2.html">Homepage 2</a></li>
							<li><a class="dropdown-item active3" href="homepage-3.html">Homepage 3</a></li>

							<li class="dropdown dropdown-submenu dropright">
								<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

								<ul class="dropdown-menu" aria-labelledby="dropdown0301">
									<li><a class="dropdown-item" href="index.html">Submenu 11</a></li>
									<li><a class="dropdown-item" href="index.html">Submenu 12</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown @@pages">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages
							<span><i class="ti-angle-down"></i></span>
						</a>
						<!-- Dropdown list -->
						<ul class="dropdown-menu">
							<li><a class="dropdown-item @@team" href="team.html">Team</a></li>
							<li><a class="dropdown-item @@career" href="career.html">Career</a></li>
							<li><a class="dropdown-item @@blog" href="blog.html">Blog</a></li>
							<li><a class="dropdown-item @@blogSingle" href="blog-single.html">Blog Single</a></li>
							<li><a class="dropdown-item @@privacy" href="privacy-policy.html">Privacy</a></li>
							<li><a class="dropdown-item @@faq" href="FAQ.html">FAQ</a></li>
							<li><a class="dropdown-item" href="sign-in.html">Sign In</a></li>
							<li><a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
							<li><a class="dropdown-item" href="404.html">404</a></li>
							<li><a class="dropdown-item" href="comming-soon.html">Coming Soon</a></li>

							<li class="dropdown dropdown-submenu dropleft">
								<a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

								<ul class="dropdown-menu" aria-labelledby="dropdown0501">
									<li><a class="dropdown-item" href="index.html">Submenu 21</a></li>
									<li><a class="dropdown-item" href="index.html">Submenu 22</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item @@about">
						<a class="nav-link" href="about.html">About</a>
					</li>
					<li class="nav-item @@contact">
						<a class="nav-link" href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--====================================
=            Hero Section            =
=====================================-->
	<section class="section gradient-banner">
		<div class="shapes-container">
			<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
			<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
			<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
			<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
			<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
			<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
			<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
			<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
			<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
			<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
			<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
			<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
			<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
			<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
			<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
			<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
		</div>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
					<h1 class="text-white font-weight-bold mb-4">PDAM Customer Data Trace</h1>
					<p class="text-white mb-5">Sistem Informasi Pelanggan PDAM Kota Pekanbaru.</p>
				</div>
				<div class="col-md-6 text-center order-1 order-md-2">
					<img class="img-fluid" src="<?= base_url('assets/') ?>images/giscover.png" alt="screenshot">
				</div>
			</div>
		</div>
	</section>
	<!--====  End of Hero Section  ====-->

	<section class="section pt-0 position-relative pull-top">
		<div class="container">
			<div class="rounded shadow p-5 bg-white">
				<div class="row">
					<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
						<i class="ti-paint-bucket text-primary h1"></i>
						<h3 class="mt-4 text-capitalize h5 ">Trace Made Easy</h3>
						<p class="regular text-muted">Pengecekan Data Pelanggan dipermudah.</p>
					</div>
					<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
						<i class="ti-shine text-primary h1"></i>
						<h3 class="mt-4 text-capitalize h5 ">Powerful Design</h3>
						<p class="regular text-muted">Desain yang menarik.</p>
					</div>
					<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
						<i class="ti-thought text-primary h1"></i>
						<h3 class="mt-4 text-capitalize h5 ">Creative Content</h3>
						<p class="regular text-muted">Fitur yang lengkap.</p>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--==================================
=            Feature Grid            =
===================================-->
	<section class="feature section pt-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 ml-auto justify-content-center">
					<!-- Feature Mockup -->
					<div class="image-content" data-aos="fade-right">
						<img class="img-fluid" src="<?= base_url('assets/') ?>images/giscover3.jpeg" alt="iphone">
					</div>
				</div>
				<div class="col-lg-6 mr-auto align-self-center">
					<div class="feature-content">
						<!-- Feature Title -->
						<h2>PDAM Customer Trace App</h2>
						<!-- Feature Description -->
						<p class="desc">Dengan adanya Sistem ini, Petugas PDAM dapat dengan mudah melakukan Tracing Jumlah Pelanggan pada tiap daerah yang mana awalnya sulit dilakukan karena harus mengecek data secara manual yang membuat pengecekan data sangat sulit dilakukan.</p>
					</div>
					<!-- Testimonial Quote -->
					<div class="testimonial">
						<p>
							"The secret of getting ahead is getting started."
						</p>
						<ul class="list-inline meta">
							<li class="list-inline-item">- Mark Twain</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==============================
=            Services            =
===============================-->
	<section class="service section bg-gray">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Desain Tampilan yang Mudah dan Lengkap</h2>
						<p>Website Simple yang menciptakan kemudahan penggunaan dan Kenyamanan untuk Karyawan PDAM dalam melakukan tracing data Pelanggan.</p>
					</div>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-lg-6 align-self-center">
					<!-- Feature Image -->
					<div class="service-thumb left" data-aos="fade-right">
						<img class="img-fluid" src="<?= base_url('assets/') ?>images/giscover2.jpg" alt="iphone-ipad">
					</div>
				</div>
				<div class="col-lg-5 mr-auto align-self-center">
					<div class="service-box">
						<div class="row align-items-center">
							<div class="col-md-6 col-xs-12">
								<!-- Service 01 -->
								<div class="service-item">
									<!-- Icon -->
									<i class="ti-bookmark"></i>
									<!-- Heading -->
									<h3>Easy Usage</h3>
									<!-- Description -->
									<p>Kemudahan Penggunaan Sistem dalam Kegiatan Tracing Pelanggan</p>
								</div>
							</div>
							<div class="col-md-6 col-xs-12">
								<!-- Service 01 -->
								<div class="service-item">
									<!-- Icon -->
									<i class="ti-pulse"></i>
									<!-- Heading -->
									<h3>Rich Feature</h3>
									<!-- Description -->
									<p>Kaya akan fitur pada sistem Data Spasial</p>
								</div>
							</div>
							<div class="col-md-6 col-xs-12">
								<!-- Service 01 -->
								<div class="service-item">
									<!-- Icon -->
									<i class="ti-bar-chart"></i>
									<!-- Heading -->
									<h3>Strategist</h3>
									<!-- Description -->
									<p>Sistem dibuat dengan tujuan utama mempermudah Staff PDAM dalam tracing Pelanggan</p>
								</div>
							</div>
							<div class="col-md-6 col-xs-12">
								<!-- Service 01 -->
								<div class="service-item">
									<!-- Icon -->
									<i class="ti-panel"></i>
									<!-- Heading -->
									<h3>Art Direction</h3>
									<!-- Description -->
									<p>Desain yang dikhususkan untuk kemudahan dan kenyamanan Penggunaan.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====  End of Services  ====-->


	<!--=================================
=            Video Promo            =
==================================-->
	<section class="row">
		<div class="col-5 mt-5">
			<div class="inputs" id="jalans">
				<div class="row mb-2">
					<div class="col-12 d-flex">
						<div class="container d-flex">
							<h4>&nbsp;Jenis Wilayah&nbsp;</h4>
							<!-- <input id="wilayah" type="checkbox" checked="true"> -->
						</div>
						<script>
							// $(function() {
							// 	$('#wilayah').on('change', function() {
							// 		$('.jalan').prop('checked', $(this).prop('checked'));
							// 		jalanPelanggan.clearLayers()
							// 		updateCheckboxStates()
							// 		jalanPelanggan.addData(pdam)
							// 	});
							// 	$('.jalan').on('change', function() {
							// 		$('#wilayah').prop('checked', $('.jalan:checked').length ? true : false);
							// 		jalanPelanggan.clearLayers()
							// 		updateCheckboxStates()
							// 		jalanPelanggan.addData(pdam)
							// 	});
							// });
						</script>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-6">
						<div class="form-check">
							<input class="jalan" type="checkbox" value="Wilayah 01" id="1" checked="true">
							<label class="form-check-label" for="1">
								Wilayah 01
							</label>

						</div>
					</div>
					<div class="col-6">
						<div class="form-check">
							<input class="jalan" type="checkbox" value="Wilayah 05" id="2" checked="true">
							<label class="form-check-label" for="2">
								Wilayah 05
							</label>
						</div>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-6">
						<div class="form-check">
							<input class="jalan" type="checkbox" value="Wilayah 02" id="3" checked="true">
							<label class="form-check-label" for="3">
								Wilayah 02
							</label>
						</div>
					</div>
					<div class="col-6">
						<div class="form-check">
							<input class="jalan" type="checkbox" value="Wilayah 06" id="4" checked="true">
							<label class="form-check-label" for="4">
								Wilayah 06
							</label>
						</div>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-6">
						<div class="form-check">
							<input class="jalan" type="checkbox" value="Wilayah 03" id="5" checked="true">
							<label class="form-check-label" for="5">
								Wilayah 03
							</label>
						</div>
					</div>
					<div class="col-6">
						<div class="form-check">
							<input class="jalan" type="checkbox" value="Wilayah 07" id="6" checked="true">
							<label class="form-check-label" for="6">
								Wilayah 07
							</label>
						</div>
					</div>
				</div>
				<div class="row mb-4">
					<div class="col-6">
						<div class="form-check">
							<input class="jalan" type="checkbox" value="Wilayah 04" id="7" checked="true">
							<label class="form-check-label" for="7">
								Wilayah 04
							</label>
						</div>
					</div>
					<div class="col-6">
						<div class="form-check">
							<input class="jalan" type="checkbox" value="Wilayah 08" id="8" checked="true">
							<label class="form-check-label" for="8">
								Wilayah 08
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="container">
							<h4>Keterangan:</h4>
							<div class="col-12 p-0">
								<p class="mb-3">
									<b>Wilayah 1</b><br>
									ini isi aja deskripsi dari wilayah 1 tu apa2 aja
								</p>
								<p class="mb-3">
									<b>Wilayah 2</b><br>
									gitu juga yg ini, isi deskripsi dari wilayah 2
								</p>
								<p class="mb-3">
									<b>Wilayah 3</b><br>
									ini pun gitu
								</p>
								<p class="mb-3">
									<b>Wilayah 4</b><br>
									sama juga kaya diatas
								</p>
								<p class="mb-3">
									<b>Wilayah 5</b><br>
									isi deskripsi nya biar user yg make ga bingung wilayah no 1-8 tu apa2 aja
								</p>
								<p class="mb-3">
									<b>Wilayah 6</b><br>
									usahakan isi singkat padat jelas aja biar ga makan2 space
								</p>
								<p class="mb-3">
									<b>Wilayah 7</b><br>
									map di sebelah kanan ni dia panjang nya bakal ngikut otomatis dengan space di sebelah kiri
								</p>
								<p class="mb-3">
									<b>Wilayah 8</b><br>
									jadi mau panjang atau pendek informasi nya bakal sama panjang nya dia nanti
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-7 mt-5">

			<div id="map" style="height: 100%;"></div>
			<script src="<?= base_url('data/map.js') ?>" type="text/javascript"></script>
			<!-- MAP SCRIPT -->
			<script>
				let checkboxStates;

				// Open Street Map Integration
				var map = L.map('map').setView([0.510394, 101.448786], 12);

				var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
					maxZoom: 18,
					attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
						'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
					id: 'mapbox/light-v9',
					tileSize: 512,
					zoomOffset: -1
				}).addTo(map);

				var jalanPelanggan = L.geoJSON(null, {
					onEachFeature: function(feature, layer) {
						layer.bindPopup(
							'<p><b>Nama Jalan:</b> <br>' + feature.properties.nama_jalan + '</p>' +
							'<p><b>Kecamatan:</b> <br>' + feature.properties.Kecamatan + '</p>' +
							'<p><b>Kelurahan:</b> <br>' + feature.properties.Kelurahan + '</p>' +
							'<p><b>Jumlah Customer:</b> <br>' + feature.properties.customer + '</p>'
						);
					},

					style: function(feature) {
						switch (feature.properties.nama_jalan) {
							case 'Jalan HR. Subrantas':
								return {
									color: "#7da720",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Ir Juanda':
								return {
									color: "#cba27d",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Jati':
								return {
									color: "#862767",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Kapur':
								return {
									color: "#ab161d",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Sekolah':
								return {
									color: "#0d8a84",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Pari':
								return {
									color: "#cd6e1e",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Yos Sudarso':
								return {
									color: "#431041",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Pramuka':
								return {
									color: "#041562",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Baung':
								return {
									color: "#DA1212",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Bandeng':
								return {
									color: "#F76E11",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Gurami Raya':
								return {
									color: "#FC4F4F",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Kurnia':
								return {
									color: "#D3ECA7",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Sepat':
								return {
									color: "#B33030",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Tanjung Batu':
								return {
									color: "#313552",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Tanjung Medang':
								return {
									color: "#2EB086",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Tanjung Datuk':
								return {
									color: "#FA4EAB",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Tanjung Uban':
								return {
									color: "#655D8A",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Mujair':
								return {
									color: "#7897AB",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Udang':
								return {
									color: "#D885A3",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Belanak':
								return {
									color: "#270082",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Hasanuddin':
								return {
									color: "#D3ECA7",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Rokan':
								return {
									color: "#BF9270",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Setia Budhi':
								return {
									color: "#C1DEAE",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Singgalang':
								return {
									color: "#D885A3",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Kerinci':
								return {
									color: "#1572A1",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Dr. Sutomo':
								return {
									color: "#D67D3E",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Kuantan Raya':
								return {
									color: "#041562",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Sisingamangaraja':
								return {
									color: "#DA1212",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Kinibalu':
								return {
									color: "#FFAEBC",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan K.H. Wahid Hasyim':
								return {
									color: "#A0E7E5",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Sultan Syarif Kasim':
								return {
									color: "#B4F8C8",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Teuku Umar':
								return {
									color: "#FBE7C6",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Gatot Subroto':
								return {
									color: "#2FF3E0",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Lokomotif':
								return {
									color: "#F8D210",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Tanjung Jat':
								return {
									color: "#FA26A0",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Amal Hamzah':
								return {
									color: "#F51720",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Bima':
								return {
									color: "#BCECE0",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Borobudur':
								return {
									color: "#36EEE0",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Cemara':
								return {
									color: "#F652A0",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Khairul Anwar':
								return {
									color: "#4C5270",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Diponegoro':
								return {
									color: "#A4E8E0",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Enggano':
								return {
									color: "#4CD7D0",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Gajah Mada':
								return {
									color: "#E1C340",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Hang Jebat':
								return {
									color: "#E56997",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Hang Tuah':
								return {
									color: "#BD97CB",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Kembang Sari':
								return {
									color: "#FBC740",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Kartini':
								return {
									color: "#66D2D6",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Kundur':
								return {
									color: "#EEB5EB",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Lembaga Permasyarakatan':
								return {
									color: "#C26DBC",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Muara Takus':
								return {
									color: "#C8F4F9",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Pattimura':
								return {
									color: "#3CACAE",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Ronggowarsito':
								return {
									color: "#C4DBE0",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Sewu':
								return {
									color: "#2EB5E0",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Sumatra':
								return {
									color: "#00A8A8",
										weight: "4",
										opacity: "0.5"
								};
								break;
							case 'Jalan Tangkuban Perahu':
								return {
									color: "#0C6980",
										weight: "4",
										opacity: "0.5"
								};
								break;
						}
					},

					filter: (feature) => {
						return isJalanPelangganChecked = checkboxStates.jalans.includes(feature.properties.Wilayah)
					}
				}).addTo(map);

				function updateCheckboxStates() {
					checkboxStates = {
						jalans: []
					}

					for (let input of document.querySelectorAll('input')) {
						if (input.checked) {
							switch (input.className) {
								case 'jalan':
									checkboxStates.jalans.push(input.value);
									break
							}
						}
					}
				}

				for (let input of document.querySelectorAll('input')) {
					//Listen to 'change' event of all inputs
					input.onchange = (e) => {
						jalanPelanggan.clearLayers()
						updateCheckboxStates()
						jalanPelanggan.addData(pdam)
					}
				}

				// Init function
				updateCheckboxStates();
				jalanPelanggan.addData(pdam);
			</script>
		</div>
	</section>
	<!--====  End of Video Promo  ====-->

	<!--=================================
=            Testimonial            =
==================================-->
	<section class="section testimonial" id="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Testimonial Slider -->
					<div class="testimonial-slider owl-carousel owl-theme">
						<!-- Testimonial 01 -->
						<div class="item">
							<div class="block shadow">
								<!-- Speech -->
								<p>
									Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
									Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
									sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
									pretium ut lacinia in, elementum id enim.
								</p>
								<!-- Person Thumb -->
								<div class="image">
									<img src="<?= base_url('assets/') ?>images/testimonial/feature-testimonial-thumb.jpg" alt="image">
								</div>
								<!-- Name and Company -->
								<cite>Abraham Linkon , Themefisher.com</cite>
							</div>
						</div>
						<!-- Testimonial 01 -->
						<div class="item">
							<div class="block shadow">
								<!-- Speech -->
								<p>
									Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
									Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
									sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
									pretium ut lacinia in, elementum id enim.
								</p>
								<!-- Person Thumb -->
								<div class="image">
									<img src="<?= base_url('assets/') ?>images/testimonial/feature-testimonial-thumb.jpg" alt="image">
								</div>
								<!-- Name and Company -->
								<cite>Abraham Linkon , Themefisher.com</cite>
							</div>
						</div>
						<!-- Testimonial 01 -->
						<div class="item">
							<div class="block shadow">
								<!-- Speech -->
								<p>
									Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
									Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
									sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
									pretium ut lacinia in, elementum id enim.
								</p>
								<!-- Person Thumb -->
								<div class="image">
									<img src="<?= base_url('assets/') ?>images/testimonial/feature-testimonial-thumb.jpg" alt="image">
								</div>
								<!-- Name and Company -->
								<cite>Abraham Linkon , Themefisher.com</cite>
							</div>
						</div>
						<!-- Testimonial 01 -->
						<div class="item">
							<div class="block shadow">
								<!-- Speech -->
								<p>
									Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
									Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
									sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
									pretium ut lacinia in, elementum id enim.
								</p>
								<!-- Person Thumb -->
								<div class="image">
									<img src="<?= base_url('assets/') ?>images/testimonial/feature-testimonial-thumb.jpg" alt="image">
								</div>
								<!-- Name and Company -->
								<cite>Abraham Linkon , Themefisher.com</cite>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====  End of Testimonial  ====-->

	<section class="call-to-action-app section bg-blue">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>It's time to change your mind</h2>
					<p>Download over 2 million humans .Get <a href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small Apps</a> free forever!
						<br>We say you won’t look back.
					</p>
					<ul class="list-inline">
						<li class="list-inline-item">
							<a href="" class="btn btn-rounded-icon">
								<i class="ti-apple"></i>
								Iphone
							</a>
						</li>
						<li class="list-inline-item">
							<a href="" class="btn btn-rounded-icon">
								<i class="ti-android"></i>
								Android
							</a>
						</li>
						<li class="list-inline-item">
							<a href="" class="btn btn-rounded-icon">
								<i class="ti-microsoft-alt"></i>
								Windows
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!--============================
=            Footer            =
=============================-->
	<footer>
		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 m-md-auto align-self-center">
						<div class="block">
							<a href="index.html"><img src="<?= base_url('assets/') ?>images/logo-alt.png" alt="footer-logo"></a>
							<!-- Social Site Icons -->
							<ul class="social-icon list-inline">
								<li class="list-inline-item">
									<a href="https://www.facebook.com/themefisher"><i class="ti-facebook"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://twitter.com/themefisher"><i class="ti-twitter"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="https://www.instagram.com/themefisher/"><i class="ti-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
						<div class="block-2">
							<!-- heading -->
							<h6>Product</h6>
							<!-- links -->
							<ul>
								<li><a href="team.html">Teams</a></li>
								<li><a href="blog.html">Blogs</a></li>
								<li><a href="FAQ.html">FAQs</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
						<div class="block-2">
							<!-- heading -->
							<h6>Resources</h6>
							<!-- links -->
							<ul>
								<li><a href="sign-up.html">Singup</a></li>
								<li><a href="sign-in.html">Login</a></li>
								<li><a href="blog.html">Blog</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
						<div class="block-2">
							<!-- heading -->
							<h6>Company</h6>
							<!-- links -->
							<ul>
								<li><a href="career.html">Career</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="team.html">Investor</a></li>
								<li><a href="privacy.html">Terms</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
						<div class="block-2">
							<!-- heading -->
							<h6>Company</h6>
							<!-- links -->
							<ul>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="team.html">Team</a></li>
								<li><a href="privacy-policy.html">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center bg-dark py-4">
			<small class="text-secondary">Copyright &copy; <script>
					document.write(new Date().getFullYear())
				</script>. Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></small class="text-secondary">
		</div>
	</footer>


	<!-- To Top -->
	<div class="scroll-top-to">
		<i class="ti-angle-up"></i>
	</div>

	<!-- JAVASCRIPTS -->
	<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/') ?>plugins/bootstrap/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/') ?>plugins/slick/slick.min.js"></script>
	<script src="<?= base_url('assets/') ?>plugins/fancybox/jquery.fancybox.min.js"></script>
	<script src="<?= base_url('assets/') ?>plugins/syotimer/jquery.syotimer.min.js"></script>
	<script src="<?= base_url('assets/') ?>plugins/aos/aos.js"></script>

	<script src="<?= base_url('assets/') ?>js/script.js"></script>
</body>

</html>