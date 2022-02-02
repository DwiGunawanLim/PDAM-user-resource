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
          <div class="col-12 d-flex">
            <div class="container d-flex">
              <h4>Wilayah&nbsp;&nbsp;<input class="m-auto float-left" id="wilayah" type="checkbox" checked="true"></h4>
            </div>
            <script>
              $(function() {
                $('#wilayah').on('change', function() {
                  $('.jalan').prop('checked', $(this).prop('checked'));
                  jalanPelanggan.clearLayers()
                  updateCheckboxStates()
                  jalanPelanggan.addData(pdam)
                });
                $('.jalan').on('change', function() {
                  $('#wilayah').prop('checked', $('.jalan:checked').length ? true : false);
                  jalanPelanggan.clearLayers()
                  updateCheckboxStates()
                  jalanPelanggan.addData(pdam)
                });
              });
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
              <input class="jalan" type="checkbox" value="Wilayah 03" id="3" checked="true">
              <label class="form-check-label" for="3">
                Wilayah 03
              </label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Wilayah 07" id="4" checked="true">
              <label class="form-check-label" for="4">
                Wilayah 07
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Wilayah 04" id="3" checked="true">
              <label class="form-check-label" for="3">
                Wilayah 04
              </label>
            </div>
          </div>
          <div class="col-6">
            <div class="form-check">
              <input class="jalan" type="checkbox" value="Wilayah 08" id="4" checked="true">
              <label class=" form-check-label" for="4">
                Wilayah 08
              </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="container">
              <h4>Keterangan:</h4>
              <div class="col-12">
                <p>
                  <b>Wilayah 1</b><br>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquam nemo blanditiis accusamus ipsam suscipit corrupti dignissimos, eos, nulla porro voluptate! Ad accusantium vero sint ut odio. Ducimus, dolorem minima.
                </p>
                <p>
                  <b>Wilayah 1</b><br>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquam nemo blanditiis accusamus ipsam suscipit corrupti dignissimos, eos, nulla porro voluptate! Ad accusantium vero sint ut odio. Ducimus, dolorem minima.
                </p>
                <p>
                  <b>Wilayah 1</b><br>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquam nemo blanditiis accusamus ipsam suscipit corrupti dignissimos, eos, nulla porro voluptate! Ad accusantium vero sint ut odio. Ducimus, dolorem minima.
                </p>
                <p>
                  <b>Wilayah 1</b><br>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquam nemo blanditiis accusamus ipsam suscipit corrupti dignissimos, eos, nulla porro voluptate! Ad accusantium vero sint ut odio. Ducimus, dolorem minima.
                </p>
                <p>
                  <b>Wilayah 1</b><br>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquam nemo blanditiis accusamus ipsam suscipit corrupti dignissimos, eos, nulla porro voluptate! Ad accusantium vero sint ut odio. Ducimus, dolorem minima.
                </p>
                <p>
                  <b>Wilayah 1</b><br>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquam nemo blanditiis accusamus ipsam suscipit corrupti dignissimos, eos, nulla porro voluptate! Ad accusantium vero sint ut odio. Ducimus, dolorem minima.
                </p>
                <p>
                  <b>Wilayah 1</b><br>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquam nemo blanditiis accusamus ipsam suscipit corrupti dignissimos, eos, nulla porro voluptate! Ad accusantium vero sint ut odio. Ducimus, dolorem minima.
                </p>
                <p>
                  <b>Wilayah 1</b><br>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquam nemo blanditiis accusamus ipsam suscipit corrupti dignissimos, eos, nulla porro voluptate! Ad accusantium vero sint ut odio. Ducimus, dolorem minima.
                </p>
                <p>
                  <b>Wilayah 1</b><br>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquam nemo blanditiis accusamus ipsam suscipit corrupti dignissimos, eos, nulla porro voluptate! Ad accusantium vero sint ut odio. Ducimus, dolorem minima.
                </p>
              </div>
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