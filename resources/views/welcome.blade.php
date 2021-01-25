<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.hogash.com/membership_html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 08:29:10 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content=" width=device-width, initial-scale=1">
		<title>membership</title>
    <!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Lato%7COpen+Sans%7CUbuntu:300,400,500,700" rel="stylesheet">
		 <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <!-- CSS assets -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="addons/Magnific-Popup/magnific-popup.css" rel="stylesheet">
		<!-- LOAD slick slider assets -->
		<link rel="stylesheet" type="text/css" href="addons/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="addons/slick/slick-theme.css"/>
    <!-- Main theme stylesheet -->
    <link href="css/template.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div id="page_wrapper">

				<header id="header" class="site-header header--sticky header--not-sticked site-header--absolute">
					<div class="site-header-main-wrapper clearfix">
						<div class="container siteheader-container">
								<div class="flex-col flex-basis-auto">
									<div class="flex-row site-header-row site-header-main">
										<!-- left column - logo -->
										<div class="flex-col flex flex-start-x flex-center-y flex-basis-auto flex-grow-0 flex-sm-half site-header-col-left">
											<div class="logo-container">
													<div class="site-logo">
															<a href="#" class="site-logo-anch">
																	<img class="logo-img-sticky site-logo-img-sticky" src="img-assets/csz.png" alt="logo" title="membership">
																	<img class="logo-img site-logo-img" src="img-assets/csz.png" alt="logo" title="membership">
															</a>
													</div>
											</div>
										</div>
										<!-- right column - navigation menu -->
										<div class="flex-col flex flex-end-x flex-center-y flex-basis-auto flex-sm-half site-header-col-right site-header-main-right">
												<div class="main-menu-wrapper">
													<div class="sh-component menu-wrapper">

														 <div class="mm__menuWrapper">
															 <div class="mm__mainMenu-trigger">
																 <a href="#" class="mm__menuBurger">
																	 <span></span>
																	 <span></span>
																	 <span></span>
																 </a>
															 </div><!--/.mm__mainMenu-trigger-->
															 <ul class="mm__mainMenu clearfix">
																 <li><a class="mm__menu-link txt-nav" href=""><span>Check-Membership</span></a></li>
																 <li><a class="mm__contact active" href="{{ route('login') }}"><span>LOGIN</span></a></li>

															 </ul><!--/.mm__mainMenu-->
														 </div>
													</div>
													<!--sign up button-->
													<div class="mm__ctaButton sh-component">
														 <a href="{{ route('register') }}" class="btn btn--round btn--fullblack"><span>Sign up</span></a>
												 	</div>
												</div>
										</div>
									</div>
								</div>
						</div>
					</div>
			</header>
			<div class="mm-subheader" id="home">
					<div class="custom-width-container custom-height-container container flex">
						<div class="row flex-center xs-flex-top">
									<div class="col-md-12 col-sm-12">
										<div class="title-block">
											<h1 class="home-heading">CSZ
												<br>
												Membership
											</h1>
											<h6 class="home-subheading"> Get access Our Membership Programme </h6>
										</div>
									</div>
							</div>
					</div>
			</div><!--end subheader-->
			<!--pricing section-->
			<section id="pricing" class="pricing-section page-section bg-color--white  pgt-150 pgb-150">
				<div class="rellax rellax-third" data-rellax-percentage="0.9" style="background-image: url('images/14.jpg');">
				</div>
				<div class="container custom_width flex-center">
					<div class="row">
						<div class=" col-md-12 col-sm-12 ">
							<div class="title-block">
								<h6 class="title--large txt-light txt-center pgb-100">CHOOSE A SUITABLE MEMBERSHIP</h6>
							</div>
						</div>
						<!-- start memebrship columns -->
						<div class="col-md-4 col-sm-4 border-right">
							<div class="pricing-element">
								<div class="title-block">
									<h2 class="title--huge txt-center txt-color"><sup>$</sup>550</h2>
									<h6 class="subtitle pgb-20 txt-center txt-account">PROFESSIONAL</h6>
								</div>
								<div class="pricing-description">
                                    <h3>A person to be elected to the grade of Professional Member shall,
                                         at the time of application or nomination, satisfy the Membership Moderator that he has, by his attainments, acquired an established reputation as a professional practitioner in the field of Information Processing and meets the following criteria:
                                    </h3>
								</div>
								<div class="txt-center">
									<a href="{{ route('register') }}" class="btn btn--extralg btn--round btn--fullwhite">sign up</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 border-right">
							<div class="pricing-element">
								<div class="title-block">
									<h2 class="title--huge txt-center txt-color"><sup>$</sup>220</h2>
									<h6 class="subtitle pgb-20 txt-center txt-account">ASSOCIATE</h6>
								</div>
								<div class="pricing-description">
									<h3>A person to be elected to the grade of Associate Member shall, at the time of application or nomination, satisfy the Membership Committee that he meets the following criteria:Is sponsored by two Members of the Society who will be asked to confirm their knowledge of the candidate     </h3>
								</div>
								<div class="txt-center">
									<a href="{{ route('register') }}" class="btn btn--extralg btn--round btn--fullwhite">sign up</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 ">
							<div class="pricing-element">
								<div class="title-block">
									<h2 class="title--huge txt-center txt-color"><sup>$</sup>75</h2>
									<h6 class="subtitle pgb-20 txt-center txt-account">GRADUATE</h6>
								</div>
								<div class="pricing-description">
									<h3>A person to be elected as Graduate Member shall, at the time of application or nomination, satisfy the Membership Committee that he
                                        : Is sponsored by two Members of the Society who will be asked to confirm their knowledge of the candidate</h3>
								</div>
								<div class="txt-center">
									<a href="{{ route('register') }}" class="btn btn--extralg btn--round btn--fullwhite">sign up</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--icons section-->
			<section id="services" class="page-section pgt-200 pgb-60 bg-color--white">
				<div class="container custom_width">
					<div class="row">

						<div class="col-md-4 col-sm-4 ">
							<div class="max-width-container">
								<div class="mm-iconbox mm-iconbox--style2">
									<div class="mm-iconbox__icon-wrapper">
										<img src="img-assets/icon1.png" class="img-responsive icon-img" alt title="iconbox">
									</div>
									<div class="mm-iconbox__content-wrapper txt-black">
											<h3 class="txt-nav">Our Vision	</h3>
											<h5 class="mm-iconbox__desc txt-nav">To be the trusted industry body, anchored on professional knowledge driving the ICT ecosystem in Zimbabwe</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 ">
							<div class="max-width-container">
								<div class="mm-iconbox mm-iconbox--style2">
									<div class="mm-iconbox__icon-wrapper">
										<img src="img-assets/icon4.png" class="img-responsive icon-img" alt title="iconbox">
									</div>
									<div class="mm-iconbox__content-wrapper txt-black">
											<h3 class="txt-nav">Our Mission</h3>
											<h5 class="mm-iconbox__desc txt-nav">To champion the development of the ICT industry in Zimbabwe by establishing beneficial relationships and providing independent professional counsel for the benefit of members, government, industry and society at large.</h5>
									</div>
								</div>
							</div>
                        </div>
						<div class="col-md-4 col-sm-4 ">
                            <div class="form-group sorting-select">
                                <input class="select-checkout select-control--sort" placeholder="Enter Full Name" >
                                <h4 class="txt-nav">Enter Your Name To Check Your Membership</h4>
                            </div>
						</div>
					</div><!--end row-->
				</div>

			</section>

			<section class="facts flex bg-color--white" >
				<div class="rellax rellax-first" data-rellax-percentage="0.9" style="background-image: url('images/14.jpg');">
				</div>
                <div class="container custom_width flex-center">
					<div class="row">
						<div class=" col-md-12 col-sm-12 ">
							<div class="title-block">
								<h6 class="title--large txt-light txt-center pgb-100">CHOOSE A SUITABLE MEMBERSHIP</h6>
							</div>
						</div>
						<!-- start memebrship columns -->
						<div class="col-md-4 col-sm-4 border-right">
							<div class="pricing-element">
								<div class="title-block">
									<h2 class="title--huge txt-center txt-color"><sup>$</sup>50</h2>
									<h6 class="subtitle pgb-20 txt-center txt-account">STUDENT</h6>
								</div>
								<div class="pricing-description">
                                    <h3>A person to be elected as Student Member shall, at the time of application or nomination, satisfy the both the Chapter Committee and the Membership Committee that he:

                                        Is a bone fide student registered at a recognized institution for tertiary education and is following an approved course of study leading to a degree, diploma or professional qualification recognized by the Society.</h3>
								</div>
								<div class="txt-center">
									<a href="{{ route('register') }}" class="btn btn--extralg btn--round btn--fullwhite">sign up</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 border-right">
							<div class="pricing-element">
								<div class="title-block">
									<h2 class="title--huge txt-center txt-color"><sup>$</sup>150</h2>
									<h6 class="subtitle pgb-20 txt-center txt-account">AFFILIATE</h6>
								</div>
								<div class="pricing-description">
									<h3>A person to be elected as an Affiliate Member shall, at the time of application or nomination, satisfy both the Chapter Committee and the Membership Committee that he has a genuine interest in the development and use of computers and in the general aims of the Society.No formal academic qualifications are required for admission to this grade.</h3>
								</div>
								<div class="txt-center">
									<a href="{{ route('register') }}" class="btn btn--extralg btn--round btn--fullwhite">sign up</a>
								</div>
							</div>

						</div>
						<div class="col-md-4 col-sm-4 ">
							<div class="pricing-element">
								<div class="title-block">
									<h2 class="title--huge txt-center txt-color"><sup>$</sup>2100</h2>
									<h6 class="subtitle pgb-20 txt-center txt-account">INSTISTUTIONAL</h6>
								</div>
								<div class="pricing-description">
									<h3>A corporate or non-corporate body or other organization shall be eligible to become an INSTITUTIONAL MEMBER of  the Society provided that:
                                        It gives such evidence as the Society may require of its interests in the aims of the Society,
                                        It agrees to abide by the Codes of Ethics of the Society.</h3>
								</div>
								<div class="txt-center">
									<a href="{{ route('register') }}" class="btn btn--extralg btn--round btn--fullwhite">sign up</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!--testimonials section-->
			<section class="bg-color--white testimonial-section">
				<div class="container custom_width ">

							<div class="clients">
								<div class="title-block">
									<h6 class="title--small txt-center txt-nav">Our Institutional Members</h6>
								</div>
								<div class="row"><!--start logo row-->
									<div class="col-md-1-5 col-sm-1-5">
										<div class="img-wrapper">
											<img class="image-boxes-img img-responsive" src="images/1.jpg" alt title="client" >
										</div>
									</div>
									<div class="col-md-1-5 col-sm-1-5">
										<div class="img-wrapper">
											<img class="image-boxes-img img-responsive" src="images/2.jpg" alt title="client" >
										</div>
									</div>
									<div class="col-md-1-5 col-sm-1-5">
										<div class="img-wrapper">
											<img class="image-boxes-img img-responsive" src="images/3.jpg" alt title="client" >
										</div>
									</div>
									<div class="col-md-1-5 col-sm-1-5">
										<div class="img-wrapper">
											<img class="image-boxes-img img-responsive" src="images/4.jpg" alt title="client" >
										</div>
									</div>
									<div class="col-md-1-5 col-sm-1-5">
										<div class="img-wrapper">
											<img class="image-boxes-img img-responsive" src="images/5.jpg" alt title="client" >
										</div>
									</div>
							</div>
						</div><!--end clients-->
				</div>
			</section>
			<!--drop us a line section-->
			<section class="section-drop page-section flex bg-color--dark">
				<div class="rellax rellax-second " data-rellax-percentage="0.2" style="background-image: url('images/csz.jpeg');">
				</div>

				<div class="container custom_width container-relax flex-center">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title-block ">
								<h5 class="title--small txt-center txt-account">Get in Touch With Us.</h5>
								<h6 class="subtitle txt-center txt-account">
									Whether you’re interested in working with us or for us, we’re always happy to chat.<br>
									<br>For Inquiries:<span class="txt-color" style="font-family: georgia;font-size: 22px; font-weight: 100;">&nbsp;+263 242 250489/90</span>. </h6>

							</div>
							<div class="txt-center pgt-10">
								<a href="#" class="btn btn--extralg btn--round btn--fullwhite">Drop us a line</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Start footer -->
			<footer class="pgb-100 pgt-160  bg-color--dark">
				<div class="container custom_width">
					<div class="row footer_row">
						<div class="col-md-6 col-sm-6">
							<div class="footer-desc-cont">
								<h6 class="txt-light footer-menu-title">
									CSZ MEMBERSHIP
								</h6>
								<h5 class="footer-desc txt-light">
									The Computer Society of Zimbabwe was founded in 1974 with one objective, that of benefiting the Computer Industry and all people who work in it. The Society’s aims were to educate the general public on the use and development of Electronic Data Processing, today more widely known as Information and Communication Technologies (ICTs).
                                </h5>
							</div>
						</div>
						<div class=" col-md-2 col-sm-2">
							<div class="vertical-list">
								<h5 class="txt-light footer-menu-title">
									COMPANY
								</h5>
								<ul class="vertical-ul">
									<li>
										<a href="https://www.csz.org.zw/"><span>Our Blog</span></a>
									</li>
									<li>
										<a href="https://www.instagram.com/p/CGZo3PyMMh3/"><span>Instagram</span></a>
									</li>
									<li>
										<a href="https://www.facebook.com/ComputerSocietyofZimbabwe/"><span>Facebook</span></a>
									</li>
									<li>
										<a href="https://twitter.com/compsocietyzim?lang=en"><span>Twitter</span></a>
									</li>
								</ul>

							</div>
						</div>
					</div>
					<div class="row">
						<div class=" col-md-12 col-sm-12">
							<p class="copyright">© 2020
								<a href="lamtrust.github.io">Trust</a>
								 | ALL RIGHTS RESERVED
							</p>
						</div>
					</div>
				</div>

			</footer>
		</div><!-- /.#page_wrapper -->
		<a href="#" class="totop">TOP</a> <!--/.totop -->


	<script src="js/plugins/jquery-3.2.1.min.js"></script>
	<script src="js/plugins/bootstrap.min.js"></script>
	<!--isotope script-->
	<script src="addons/isotope/isotope.pkgd.min.js"></script>
		<script src="addons/slick/slick.min.js"></script>
	<script src="addons/imagesloaded.pkgd.min.js"></script>
	<script src="addons/rellax-master/rellax.min.js"></script>
	<!--popup script-->
	<script src="addons/Magnific-Popup/jquery.magnific-popup.js"></script>
	<!--count script-->
	<script src="addons/jquery.countTo.js"></script>
	<script src="addons/jquery.smooth-scroll.min.js"></script>
	<!-- Main template script -->
	<script src="js/script.js"></script>

	</body>

<!-- Mirrored from demos.hogash.com/membership_html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 08:29:32 GMT -->
</html>
