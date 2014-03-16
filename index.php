<?php
$user = $_SESSION["authenticatedUser"];
ob_start();
session_start();
if (isset($_SESSION["admin"])) {
	header("Location: ./administration.php");
	//if a user is already logged in this session is declared so that when the user clicks the login page it takes you directly to the member page
	exit ;
	// exit to stop the rest of your page (index.php for example) from processing.
}
elseif (isset($_SESSION["authenticatedUser"])) {
	header("Location: ./index_active.php");
	//if a user is already logged in this session is declared so that when the user clicks the login page it takes you directly to the member page
	exit ;
	// exit to stop the rest of your page (index.php for example) from processing.
}
else
{
?>
<!DOCTYPE html>

<html>
	<head>

		<meta name="google-translate-customization" content="c51d907e179ea0d2-4fc984fcf51d5b33-gfb004726b848a8c9-16">
		</meta>
		<meta charset="utf-8">
		<meta name = "viewport" content = "width=device-width, initial scale = 1.0">
		<title>Index</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" />

		<link rel="stylesheet" href="css/style.css" type="text/css" />
			<link rel="stylesheet" href="css/style_foot.css" type="text/css" />

		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

	</head>

	<body>

		<div class= "container">

			<!-- end of header-->
			<header class = "row">
				<div class="span12">

					<nav class ="navbar">
						<div class= "navbar-inner">
							<a href="#" class="brand">HOME</a>

							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"
							> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

							<div class= "nav-collapse collapse">
								<!-- makes menu responsive -->
								<ul class= "nav">
									<li class= "divider-vertical"></li>
									<li>
										<a href= "index.php"> <i class="icon-home icon-white"></i> Home</a>
									</li>
									<li class= "divider-vertical"></li>
									<li>
										<a href= "blog.php">Blog <i class="icon-comment icon-white"></i></a>
									</li>
									<li class= "divider-vertical"></li>

									<li>
										<a href= "games_page.php">Games <i class="icon-gamepad icon-large icon-white"></i></a>
									</li>
									<li class= "divider-vertical"></li>

									<li>
										<a href= "about.php">About <i class="icon-info-sign icon-white"></i></a>
									</li>
									<li class= "divider-vertical"></li>

									<li class= "dropdown">
										<!-- drop down menu -->

										<a href= "#" class= "dropdown-toggle" data-toggle= "dropdown"> <i class="icon-user icon-white"></i>Connect <b class= "caret"></b> </a>
										<ul class= "dropdown-menu">
											<li>
												<a href= "www.twitter.com">Twitter</a>
											</li>
											<li>
												<a href= "#">Facebook</a>
											</li>
											<li>
												<a href= "#">Google+</a>
											</li>
											<li class= "divider"></li>
											<li>
												<a href= "#">Contact</a>
											</li>
										</ul>

									</li>
									<li class= "divider-vertical"></li>
								</ul>
							</div>

						</div>
					</nav>
				</div>
			</header>

			<div class ="row" id="main-content">

				<div class= "span4" id="sidebar">
					<!-- span2 when login works proper -->

					<blockquote>
						<p>
							the only place for your gaming needs
						</p>
						<small>Game-Central</small>
					</blockquote>

					<div class="well">

						<!--original login/ register-->

						<!--	<form>
						<fieldset>
						<legend>Login</legend>
						<input type="text" class="input-block-level" placeholder="Username" >
						<input type="text" class="input-block-level" placeholder="Password" >
						<label class="checkbox">
						<input type="checkbox">Remember Me
						</label>
						<div class="pull-right">
						<input type="submit" class="btn btn-primary" value="login" >

						<a class= "btn btn-info" href="#register" role="button" data-toggle="modal">Register</a>
						</div>
						</fieldset>
						</form> 		-->

						<!--end of new login-->

						<div class="tabbable tabs-left">
							<!--page content -->

							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#one" data-toggle="tab">One </a>
								</li>
								<!--active -->
								<li class="">
									<a href="#two" data-toggle="tab">Two </a>
								</li>
								<li class="">
									<a href="#three" data-toggle="tab">Three </a>
								</li>
							</ul>

							<div class="tab-content">

								<div class="tab-pane active" id="one">
									<!--active -->

									<p>
										Tumblr wayfarers asymmetrical, pug gastropub Tonx sustainable farm-to-table. 90's XOXO Wes Anderson, post-ironic gentrify Williamsburg bicycle rights lomo yr. Chambray sartorial quinoa, iPhone ennui organic t
										<br>
										Tumblr wayfarers asymmetrical, pug gastropub Tonx sustainable farm-to-table. 90's XOXO Wes Anderson, post-ironic gentrify Williamsburg bicycle rights lomo yr. Chambray sartorial quinoa, iPhone ennui organic
									</p>
									<br>
									<!--end of new register-->

								</div>

								<div class="tab-pane" id="two">
									<p>
										Tumblr wayfarers asymmetrical, pug gastropub Tonx sustainable farm-to-table. 90's XOXO Wes Anderson, post-ironic gentrify Williamsburg bicycle rights lomo yr. Chambray sartorial quinoa, iPhone ennui organic
									</p>

								</div>

								<div class="tab-pane" id="three">
									<p>
										Tumblr wayfarers asymmetrical, pug gastropub Tonx sustainable farm-to-table. 90's XOXO Wes Anderson, post-ironic gentrify Williamsburg bicycle rights lomo yr. Chambray sartorial quinoa, iPhone ennui organic
									</p>
								</div>

							</div>

						</div>

					</div>

					<div class="accordion" id="questions">
						<!-- acordion 1 -->

						<div class="accordion-group">

							<div class="accordion-heading">

								<a class="accordion-toggle btn" data-toggle="collapse" data-parent="#questions"
								href="#who">HTML 5 Video Player</a>

							</div>

							<div id="who" class="accordion-body collapse">

								<div class="accordion-inner">

									<video controls poster="./images/machinima.png" width="350" height="400">
										<source type="video/mp4" src="./video/mine.mp4">

										<track kind="subtitles" srclang="en" src="./media/sintel_en.srt">
										<track kind="subtitles" srclang="ru" src="./media/sintel_ru.srt">
									</video>

								</div>

							</div>

						</div>

						<div class="accordion-group">
							<!-- acordion 2 -->

							<div class="accordion-heading">

								<a class="accordion-toggle btn" data-toggle="collapse" data-parent="#questions"
								href="#what">Gamespot RSS Feed</a>

							</div>

							<div id="what" class="accordion-body collapse">

								<div class="accordion-inner">

									<?php
									$html = "";
									$url = "http://www.gamespot.com/feeds/mashup/";
									$xml = simplexml_load_file($url);
									for ($i = 0; $i < 10; $i++) {

										$title = $xml -> channel -> item[$i] -> title;
										$link = $xml -> channel -> item[$i] -> link;
										$description = $xml -> channel -> item[$i] -> description;
										$pubDate = $xml -> channel -> item[$i] -> pubDate;

										$html .= "<a href='$link'><h3>$title</h3></a>";
										$html .= "$description";
										$html .= "<br />$pubDate<hr />";
									}
									echo $html;
									?>
								</div>

							</div>

						</div>

						<div class="accordion-group">
							<!-- acordion 3 -->

							<div class="accordion-heading">

								<a class="accordion-toggle btn" data-toggle="collapse" data-parent="#questions"
								href="#why">CountDown Till XMAS!!!</a>

							</div>

							<div id="why" class="accordion-body collapse">

								<div class="accordion-inner">


								</div>

							</div>

						</div>

						<div class="accordion-group">
							<!-- acordion 4 -->

							<div class="accordion-heading">

								<a class="accordion-toggle btn" data-toggle="collapse" data-parent="#questions"
								href="#how">Translate the Website</a>

							</div>

							<div id="how" class="accordion-body collapse">

								<div class="accordion-inner">

									<div id="google_translate_element"></div>
									<script type="text/javascript">
										function googleTranslateElementInit() {
											new google.translate.TranslateElement({
												pageLanguage : 'en',
												layout : google.translate.TranslateElement.InlineLayout.SIMPLE
											}, 'google_translate_element');
										}
									</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

								</div>

							</div>

						</div>

					</div>
				</div><!-- accordian -->

				<div class= "span8">

					<div id="slider" class="carousel slide">
						<!-- image 1 defualt -->

						<div class="carousel-inner">

							<div class="item active">
								<!-- active makes default image -->

								<img src="./images/gta5home.jpg">

								<div class="carousel-caption">

									<h4>GTA V</h4>

									<p>
										Welcome to Los Santos.
									</p>

								</div>

							</div>

							<div class="item">
								<!-- image 2 -->

								<img src="./images/walking.jpg">

								<div class="carousel-caption">

									<h4>Walkling Dead</h4>

									<p>
										Walking Dead Available Now.
									</p>

								</div>

							</div>

							<div class="item">
								<!-- image 3 -->

								<img src="./images/nintendo.jpg">

								<div class="carousel-caption">

									<h4>Nintendo</h4>

									<p>
										Its A Me MARIO!!!!.
									</p>

								</div>

							</div>

						</div>

						<!-- controls for the sliders -->
						<a class="left carousel-control " href="#slider" data-slide="prev">&lsaquo;</a>
						<a class="right carousel-control " href="#slider" data-slide="next">&rsaquo;</a>

					</div>

					<div class="tabbable tabs-top">
						<!--page content -->

						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#login" data-toggle="tab">Login </a>
							</li>
							<li class="">
								<a href="#register" data-toggle="tab">Register </a>
							</li>
							<!--active -->
							<li class="">
								<a href="#info" data-toggle="tab">More Info? </a>
							</li>
						</ul>

						<div class="tab-content">

							<div class="tab-pane active" id="login">
								<p>
									Fill Fields Below to Login
								</p>
								<form action="login_redirect.php" method="post">
									<!--CONTENT-TABS new login-->
									<legend>
										Login
									</legend>
									<label>UserName :</label>

									<input type="text" name="username" class="input-block-level" placeholder="Username"/>
									<br />
									<label>Password :</label>
									<input type="password" name="password" class="input-block-level" placeholder="Password"/>
									<br/>
									<input type="submit" class="btn btn-primary" value=" Login "/>
									<br />

									<?php
									echo $_SESSION["message"];
									//error messages and or other messages displayed here
									?>
									
								</br>	
									
									<?php
									if(isset($_GET['login_error'])){
									echo "Input Error... Please Re-check Fields";
									}
									?>
									
								</form>

							</div>

							<div class="tab-pane " id="register">
								<!--active -->

								<p>
									Fill Fields Below to Register
								</p>
								<form action="register_redirect.php" method="post">
									<!--CONTENT-TABS new register-->
									<fieldset>
										<legend>
											Register
										</legend>

										<label>UserName :</label>
										<input type="text" name="username" class="input-block-level" placeholder="Username"/>
										<br />

										<label>Password :</label>
										<input type="password" name="password" class="input-block-level" placeholder="Password"/>
										<br/>

										<label>Email :</label>
										<input type="text" name="email" class="input-block-level" placeholder="Email"/>
										<br/>
										
										<label>City :</label>
										<input type="text" name="city" class="input-block-level" placeholder="City"/>
										<br/>

										<label>State/County :</label>
										<input type="text" name="state" class="input-block-level" placeholder="State/County"/>
										<br/>

										<label>Country :</label>
										<input type="text" name="country" class="input-block-level" placeholder="Country"/>
										<br/>

										<input type="submit" class= "btn btn-info" value=" Registration "/>
										<br />
								</form>
                                <?php
									if(isset($_GET['error'])){
									echo "Input Error... Please Re-check Fields";
									}
									?>
								<!--end of new register-->

							</div>

							<div class="tab-pane" id="info">
								<p>
									contentcontentcontentcontentcontentcontent
								</p>
							</div>

						</div>

					</div>

				</div>
				<footer class="row"></footer>

			</div>
			<!-- end of container -->

			<div id="register" class="modal hide fade" aria-labelledby="modalLabel" aria-hidden="true">
				<!-- regiter form -->

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						<i class="icon-remove icon-white"></i>
					</button>
					<h3 id="modalLabel">Register</h3>
				</div>

				<div class="modal-body">

					<p class="label label-info">
						Required
					</p>
					<!-- required fields -->

					<form>
						<div class="controls controls-row" >
							<input type="text" class="span2" placeholder="First Name">
							<input type="text" class="span2" placeholder="Last Name">

							<select class="span1">
								<option>1</option>
								<option>2</option>
								<option>3</option>

							</select>

						</div>

						<div class="controls control-group info">
							<input type="text" class="span5" placeholder="Username" id="inputinfo">
							<input type="text" class="span5" placeholder="Email" id="inputinfo">
							<input type="text" class="span5" placeholder="Confirm Email" id="inputinfo">
						</div>

					</form>

				</div>

				
				<div class="modal-footer">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">
						Cancel
					</button>
					<!-- cancel register button -->
					<button class="btn btn-success">
						Register
					</button>
				</div>

				
				
			</div>

		
               
			
			<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
			<script src="js/bootstrap.js"></script>
			<script type="text/javascript">
				$("#tip").tooltip();
			</script>
	</body>
</html>
<?php
}
?>
