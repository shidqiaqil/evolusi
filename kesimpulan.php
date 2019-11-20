<!DOCTYPE html>
<html lang="en">
<head>
<title>EvoLearning</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/dropdown.css">
</head>
<style>
	.margin1{
		margin-left: 20px;
	}
	.font1{
		font-size: 18px;
		font-weight: 500;
	}
	.navbar-nav li.active{
		border-bottom: 5px solid #5BC0EB;
	}
	.navbar-collapse.collapse.show {
		max-height: 280px;
		overflow-y: auto;
	}
</style>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->


		<!-- Header Content -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-sm-7">
							<a href="#">
								<div style="margin: 20px 10px;" class="logo_text">Evo<span>Learning</span></div>
							</a>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5">
							<ul class="nav justify-content-end">
								<li class="nav-item">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
								</li>
							</ul>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav">
									<li class="nav-item margin1">
										<a class="nav-link dropbtn font1"  href="index.php">Beranda <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item dropdown margin1 active">
										<a class="nav-link dropbtn font1" style="color:#14bdee;"  href="soalpretest.php">Materi <span class="sr-only"></span></a>
									</li>
									<li class="nav-item dropdown margin1">
										<a class="nav-link dropbtn font1"  href="profil.php">Profil <span class="sr-only"></span></a>
									</li>
									<li class="nav-item dropdown margin1">
										<a class="nav-link dropbtn font1"  href="contact.php">Contact<span class="sr-only"></span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- <div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">Q-LEAR<span>NING</span></div>
								</a>
							</div>
							<nav class="main_nav_container ml-auto navbar-fixed-top">
								<ul class="main_nav">
									<li><a href="index.html">Beranda</a></li>
									<div class="dropdown">
									  <li>
											<a href="#" class="dropbtn "style="color:#14bdee;">Materi <i class="fa fa-caret-down"></i></a>
										</li>
									  <div class="dropdown-content">
									    <a href="pengenalan.html"style="color:#14bdee;">Pengenalan</a>
									    <a href="mater-query-dasar.html">Query Dasar</a>
									    <a href="materi-intermediette-query.html">Intermediete Query</a>

									  </div>
									</div>
									<div class="dropdown">
										<li>
											<a href="#" class="dropbtn">Soal <i class="fa fa-caret-down"></i></a>
										</li>
										<div class="dropdown-content">
                      <a href="soal-query-dasar.html">Query Dasar</a>
                      <a href="soal-intermediette-query.html">Intermediette Query</a>

										</div>
								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div> -->

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>

		<nav class="menu_nav">

		</nav>
	</div>

	<!-- Home -->

			<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									<div class="home_slider_form_container">
										<form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
												<select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
												<select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
											</div>
											<button type="submit" class="home_search_button">search</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->


	</div>

	<!-- Features -->

  Copy the entire text BELOW THIS STATEMENT. Then replace the text in pink with your own text, while leaving the blue text intact. Save the document as "documentname.html" (e.g., quiz1.html), and you are ready to post it on your server!
<html>
<head>
<title>multiple-choice quiz form</title>
</head>
<body bgcolor=#ffffff>

<h3></h3>
<div class="container">
	<div></div>
	<h2 style="margin-top:10%; text-align:center;"> Kesimpulan</h2>
	<h2>

	</h2>
	<p style="margin-top:1%;text-align: justify; font-size:15px;">Revolusi Industri 4.0 menerapkan konsep automatisasi yang dilakukan oleh mesin tanpa memerlukan tenaga manusia dalam pengaplikasiannya. Dimana hal tersebut merupakan hal vital yang dibutuhkan oleh para pelaku industri demi efisiensi waktu, tenaga kerja, dan biaya. Penerapan Revolusi Industri 4.0 di pabrik-pabrik saat ini juga dikenal dengan istilah Smart Factory. Tidak hanya itu, saat ini pengambilan ataupun pertukaran data juga dapat dilakukan on time saat dibutuhkan, melalui jaringan internet. Sehingga proses produksi dan pembukuan yang berjalan di pabrik dapat
											termotorisasi oleh pihak yang berkepentingan kapan saja dan dimana saja selama terhubung dengan internet</p>
	<p style="margin-top:1%;text-align: justify; font-size:15px;">Kemampuan dan sikap apakah yang paling penting dipersiapkan pada Revin 4.0?</p>
	<p style="margin-top:1%;text-align: justify; font-size:15px;">Pertama, memperkuat SDM yang ada, urusan pekerja usia produktif Indonesia juaranya. Ada bonus demografi yang ada di negeri kita, jumlah yang besar ini harus dimanfaatkan dengan hal positif dalam menyambut masa depan.</p>
	<p style="margin-top:1%;text-align: justify; font-size:15px;">Kedua, mengubah sistem pendidikan ke arah modern, artinya ada hubungan dunia sekolah dengan dunia industri. Semua itu melalui program link and match kedua lini tersebut, mulai dari kurikulum berbasis STEAM (Science, Technology, Engineering, Art, dan Mathematics)</p>
	<p style="margin-top:1%;text-align: justify; font-size:15px;">Ketiga, mengedepankan kolaborasi, di era saat ini bukan lagi mengedepankan kompetisi tapi kolaborasi dengan semua pihak.
	Sebagai contoh adalah bisnis taxi konvensional yang harus kalah bersaing dengan taxi online. Sebuah bisnis taxi konvensional harus punya semuanya, dimulai dari taxi, pangkalan, driver hingga proses perizinan yang berbelit-belit.</p>
	
	
	<br>
	<br>
	<br>
</div>
</body>
</html>


				<!-- Features Item -->


			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<footer class="footer" style="margin-top:138px;">
		<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
			<div class="cr_text offset-md-5"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>

	</footer>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
