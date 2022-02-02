<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GIS Sebaran PDAM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" rel="stylesheet">

  <!-- leafletjs integration -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

  <!-- Add jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <!-- Leafletjs integration -->
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <a class="hero-brand" href="index.php" title="Home"><img alt="Logo GIS" src="assets/img/logo.png"></a>
        </div>
      </div>

      <div class="col-md-12">
        <h1>
          Sebaran Pelanggan PDAM daerah <b>Pekanbaru</b>
        </h1>

        <p class="tagline">
          Berisi persebaran pelanggan PDAM pada daerah Provinsi Riau dan Sekitarnya.
        </p>
        <a class="btn btn-full scrollto" href="#main">Mulai</a>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="align-items-center">
    <div class="container align-items-center pt-2">

      <div class="row">
        <div class="col">
          <div id="logo" class="me-auto">
            <a href="index.html"><img src="assets/img/logo-nav.png" alt=""></a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="#hero">Bell</a></h1>-->
          </div>
        </div>

        <div class="col">

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#features">Features</a></li>
              <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
              <li><a class="nav-link scrollto" href="#team">Team</a></li>
              <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>
    </div>
  </header><!-- End Header -->

  <div id="main" class="row">
    <!-- Awal Page -->
    <div class="col-4 mt-5">
      <div class="inputs" id="jalans">
        <div class="row mb-2">
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan HR. Subrantas" id="1" checked="true">
              <label class="form-check-label" for="1">
                Jalan HR. Subrantas
              </label>

            </div>
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Ir Juanda" id="2" checked="true">
              <label class="form-check-label" for="2">
                Jalan Ir Juanda
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Jati" id="3" checked="true">
              <label class="form-check-label" for="3">
                Jalan Jati
              </label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Kapur" id="4" checked="true">
              <label class="form-check-label" for="4">
                Jalan Kapur
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Sekolah" id="5" checked="true">
              <label class=" form-check-label" for="5">
                Jalan Sekolah
              </label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Pari" id="6" checked="true">
              <label class="form-check-label" for="6">
                Jalan Pari
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Udang" id="19" checked="true">
              <label class="form-check-label" for="19">
                Jalan Udang
              </label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Belanak" id="20" checked="true">
              <label class="form-check-label" for="20">
                Jalan Belanak
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Tanjung Uban" id="17" checked="true">
              <label class="form-check-label" for="17">
                Jalan Tanjung Uban
              </label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Mujair" id="18" checked="true">
              <label class="form-check-label" for="18">
                Jalan Mujair
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Tanjung Medang" id="15" checked="true">
              <label class="form-check-label" for="15">
                Jalan Tanjung Medang
              </label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Tanjung Datuk" id="16" checked="true">
              <label class="form-check-label" for="16">
                Jalan Tanjung Datuk
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Sepat" id="13" checked="true">
              <label class="form-check-label" for="13">
                Jalan Sepat
              </label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Tanjung Batu" id="14" checked="true">
              <label class="form-check-label" for="14">
                Jalan Tanjung Batu
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Gurami Raya" id="11" checked="true">
              <label class="form-check-label" for="11">
                Jalan Gurami Raya
              </label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Kurnia" id="12" checked="true">
              <label class="form-check-label" for="12">
                Jalan Kurnia
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Baung" id="9" checked="true">
              <label class="form-check-label" for="9">
                Jalan Baung
              </label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Bandeng" id="10" checked="true">
              <label class="form-check-label" for="10">
                Jalan Bandeng
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Yos Sudarso" id="7" checked="true">
              <label class="form-check-label" for="7">
                Jalan Yos Sudarso
              </label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Jalan Pramuka" id="8" checked="true">
              <label class="form-check-label" for="8">
                Jalan Pramuka
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-8 mt-5">

      <div id="map"></div>
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
              '<p><b>Deskripsi:</b> <br>' + feature.properties.deskripsi + '</p>'
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
                  color: "#052983",
                    weight: "4",
                    opacity: "0.5"
                };
                break;
              case 'Jalan Baung':
                return {
                  color: "#052983",
                    weight: "4",
                    opacity: "0.5"
                };
                break;
              case 'Jalan Bandeng':
                return {
                  color: "#052983",
                    weight: "4",
                    opacity: "0.5"
                };
                break;
              case 'Jalan Gurami Raya':
                return {
                  color: "#052983",
                    weight: "4",
                    opacity: "0.5"
                };
                break;
              case 'Jalan Kurnia':
                return {
                  color: "#052983",
                    weight: "4",
                    opacity: "0.5"
                };
                break;
              case 'Jalan Sepat':
                return {
                  color: "#052983",
                    weight: "4",
                    opacity: "0.5"
                };
                break;
              case 'Jalan Tanjung Batu':
                return {
                  color: "#052983",
                    weight: "4",
                    opacity: "0.5"
                };
                break;
              case 'Jalan Tanjung Medang':
                return {
                  color: "#052983",
                    weight: "4",
                    opacity: "0.5"
                };
                break;
              case 'Jalan Tanjung Datuk':
                return {
                  color: "#052983",
                    weight: "4",
                    opacity: "0.5"
                };
                break;
              case 'Jalan Mujair':
                return {
                  color: "#052983",
                    weight: "4",
                    opacity: "0.5"
                };
                break;
              case 'Jalan Udang':
                return {
                  color: "#052983",
                    weight: "4",
                    opacity: "0.5"
                };
                break;
              case 'Jalan Belanak':
                return {
                  color: "#052983",
                    weight: "4",
                    opacity: "0.5"
                };
                break;
            }
          },

          filter: (feature) => {
            return isJalanPelangganChecked = checkboxStates.jalans.includes(feature.properties.nama_jalan)
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
    <!-- AKHIR PAGE -->
  </div>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>