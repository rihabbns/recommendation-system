<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Clavier7</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/font-awesome.css" rel="stylesheet"> 


<script src="js/jquery.min.js"></script> 

<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body> 
	<?php echo("bienvenue ".$_SESSION["users"]."!" ); ?>
	<!-- header modal -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input name="Email" placeholder="Email Address" type="text" required="">						
													<input name="Password" placeholder="Password" type="password" required="">										
													<div class="sign-up">
														<input type="submit" value="Sign in"/>
													</div>
												</form>
											</div>
										</div> 
									</div>	 
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input placeholder="Name" name="Name" type="text" required="">
													<input placeholder="Email Address" name="Email" type="email" required="">	
													<input placeholder="Password" name="Password" type="password" required="">	
													<input placeholder="Confirm Password" name="Password" type="password" required="">
													<div class="sign-up">
														<input type="submit" value="Create Account"/>
													</div>
												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">OR</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Sign in with</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="http://localhost/web/">Gaming Store<span>Meilleurs offres</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart cart box_1"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>   
			</div>  
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="http://localhost/web/" class="act" style="padding-left: 180px">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>PC Gamer</h6>
											<li><a href="http://localhost/web/products.php">PC Gamer Bureau</a></li>
											<li><a href="http://localhost/web/products1.php">Smartphones  <span>New</span></a></li> 
											
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Accessories</h6>
											<li><a href="http://localhost/web/products2.php">Claviers Gamer</a></li>
											
										</ul>
									</div>
									
									
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="http://localhost/web/about.php">About Us</a></li> 
						
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner10">
		<div class="container">
			<h2></h2>
		</div>
	</div>
	<!-- //banner -->   
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="http://localhost/web/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Single Page</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->  
	<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 single-left">
				<div class="flexslider">
					<ul class="slides">
						
						<li data-thumb="images/c.jpg">
						   <div class="thumb-image"> <img src="images/claviers/7.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
						</li> 
					</ul>
				</div>
				<!-- flexslider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
					<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
				<!-- flexslider -->
				<!-- zooming-effect -->
					<script src="js/imagezoom.js"></script>
				<!-- //zooming-effect -->
			</div>
			<div class="col-md-8 single-right">
				<h3>Clavier Gamer Mécanique</h3>
				<form  method="post">         
	<button type="submit" name="button1"  class="btn btn-primary">Vote</button>
	<div class="w3ls_mobiles_grid_right_grid2_right">
							<select name="select_item" class="select_item">
							
								<option selected="selected" value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						  </div>
	

	</form>
                          <?php 
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname="psrec";

                          // Create connection
                             $conn = new mysqli($servername, $username, $password,$dbname);

                         // Check connection
                         if ($conn->connect_error) {
                           die("Connection failed: " . $conn->connect_error);
                            }
                           
                            if (isset($_POST['button1']))
                            {
                            $users=$_SESSION["users"];
                            $note=$_POST['select_item'];
                            $nomprod="c7";
                            $sql = "INSERT INTO notes (refu, refp, note)
                                        VALUES ('$users','$nomprod', $note)";

                                             if (mysqli_query($conn, $sql)) 
                                             {
                                                      echo "<i>merci pour votre vote</i>";
                                             } 
                                             else 
                                             {
                                             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                               }
                            }




                            ?>
						
					

					         </span>
				         </div>
				<div class="description">
					<h5><i>Description</i></h5>
					<p>Clavier Gamer Mécanique SHARKOON Skiller Mech - Connectivité: Filaire - Clavier mécanique AZERTY standard de 107 touches - Une prise en main instantanée pour les pros du gaming - Éclairage RVB - Diffé  .</p>
				</div>
				<div class="color-quality">
					
					<div class="color-quality-right">
						<h5>quantité :</h5>
						 <div class="quantity"> 
							<div class="quantity-select">                           
								<div class="entry value-minus1">&nbsp;</div>
								<div class="entry value1"><span>1</span></div>
								<div class="entry value-plus1 active">&nbsp;</div>
							</div>
						</div>
						<!--quantity-->
								<script>
								$('.value-plus1').on('click', function(){
									var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
									divUpd.text(newVal);
								});

								$('.value-minus1').on('click', function(){
									var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
									if(newVal>=1) divUpd.text(newVal);
								});
								</script>
							<!--quantity-->

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="simpleCart_shelfItem">
					<p><span>$1000</span> <i class="item_price">$1000</i></p>
					<form action="#" method="post">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="add" value="1"> 
						<input type="hidden" name="w3ls_item" value="Smart Phone"> 
						<input type="hidden" name="amount" value="450.00">   
						<button type="submit" class="w3ls-cart">Ajouter au panier</button>
					</form>
				</div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div> 
	<!-- Related Products -->

	<div class="w3l_related_products">
		<div class="container">
			<h3>Produits Similaires</h3>
			<ul id="flexiselDemo2">

			<!--block php -->	
			<?php 
			$filename = 'C:\wamp\www\web\images\claviers\testclaviers.txt';
			$simmat = []; 
			if (($h = fopen("{$filename}", "r")) !== FALSE) 
             {
  
                 while (($data = fgetcsv($h,1000, ",")) !== FALSE) 
             {
   
                   $simmat[] = $data;		
             }

                 fclose($h);
             }
             class Pc {

             	 public $modele;
             	 public $prix;
             	 public $lien;
             	 public $singledir;

  				function Pc($modele,$prix,$lien,$singledir) {
   				 $this->modele = $modele;
   				 $this->prix = $prix;
   				 $this->lien = $lien;
   				 $this->singledir=$singledir;
  					}
				}
				
             $pcsarray=array
             (new Pc('modele 1','1500','images/claviers/1.jpg','singleclavier1'),new Pc('modele 2','1500','images/claviers/2.jpg','singleclavier2'),new Pc('modele 3','1500','images/claviers/3.jpg','singleclavier3'),new Pc('modele 4','1500','images/claviers/4.jpg','singleclavier4'),new Pc('modele 5','1500','images/claviers/5.jpg','singleclavier5'),new Pc('modele 6','1500','images/claviers/6.jpg','singleclavier6'),new Pc('modele 7','1500','images/claviers/7.jpg','singleclavier7'),new Pc('modele 8','1500','images/claviers/8.jpg','singleclavier8'),new Pc('modele 9','1500','images/claviers/9.jpg','singleclavier9'),new Pc('modele 10','1500','images/claviers/10.jpg','singleclavier10'),new Pc('modele 11','1500','images/claviers/11.jpg','singleclavier11'),new Pc('modele 12','1500','images/claviers/12.jpg','singleclavier12'),new Pc('modele 13','1500','images/claviers/13.jpg','singleclavier13'));

             $sim = array_column($simmat,6);
                    for($x = 0; $x < count($sim)-1; $x++)
                    {  
                    	if (($sim[$x]>0.32) && ($sim[$x]<1))

                          {   
                                 echo ' <html> <li>
					<div class="w3l_related_products_grid">
						<div class="">
							<div class="">
								<img src="'.$pcsarray[$x]->lien.'" alt="mafamesh" class="img-responsive" />
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="'.$pcsarray[$x]->singledir.'.php">'.$pcsarray[$x]->modele.'</a></h5>
							<div class="simpleCart_shelfItem"> 
								<p class="flexisel_ecommerce_cart"><i class="item_price">'.$pcsarray[$x]->prix.'</i></p> 
							</div>
						</div>
					</div>
				</li></html>';
                          }
                    }
			?>	
			
			</ul>
			
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo2").flexisel({
							visibleItems:4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>

	<!-- //single -->
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Envoyez-nous vos commentaires! et recevez nos actualités!.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 
</body>
</html>