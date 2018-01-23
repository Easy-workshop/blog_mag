<?php
require_once("../Include/DB.php");
?>

<!DOCTYPE html>

<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->

<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->

<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->

<!--[if !(IE 7) | !(IE 8) | !(IE 9)  ]><!-->
<html lang="fr">
<!--<![endif]-->



<head>
<title>Mag.ma </title>
<meta charset="UTF-8" />
<link rel="shortcut icon" href="images/favicon.png" title="Favicon"/>
<meta name="viewport" content="width=device-width" />

<link rel='stylesheet' id='magz-style-css'  href='style.css' type='text/css' media='all' />
<link rel='stylesheet' id='swipemenu-css'  href='css/swipemenu.css' type='text/css' media='all' />
<link rel='stylesheet' id='flexslider-css'  href='css/flexslider.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='css/bootstrap.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-responsive-css'  href='css/bootstrap-responsive.css' type='text/css' media='all' />
<link rel='stylesheet' id='simplyscroll-css'  href='css/jquery.simplyscroll.css' type='text/css' media='all' />
<link rel='stylesheet' id='jPages-css'  href='css/jPages.css' type='text/css' media='all' />
<link rel='stylesheet' id='rating-css'  href='css/jquery.rating.css' type='text/css' media='all' />
<link rel='stylesheet' id='ie-styles-css'  href='css/ie.css' type='text/css' media='all' />
<link rel='stylesheet' id='Roboto-css'  href='http://fonts.googleapis.com/css?family=Roboto' type='text/css' media='all' />

<script type='text/javascript' src="js/jquery-1.10.2.min.js"></script>
<script type='text/javascript' src='js/html5.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script type='text/javascript' src='js/jquery.flexslider.js'></script>
<script type='text/javascript' src='js/jquery.flexslider.init.js'></script>
<script type='text/javascript' src='js/jquery.bxslider.js'></script>
<script type='text/javascript' src='js/jquery.bxslider.init.js'></script>
<script type='text/javascript' src='js/jquery.rating.js'></script>
<script type='text/javascript' src='js/jquery.idTabs.min.js'></script>
<script type='text/javascript' src='js/jquery.simplyscroll.js'></script>
<script type='text/javascript' src='js/fluidvids.min.js'></script>
<script type='text/javascript' src='js/jPages.js'></script>
<script type='text/javascript' src='js/jquery.sidr.min.js'></script>
<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

		<!-- END -->

</head>

<body>

<div id="page">

	<header id="header" class="container">
		<div id="mast-head">
			<div id="logo">
			<a href="index.html" title="Magazine" rel="home"><img src="images/logo.png" alt="Mag.ma" /></a>
			</div>
		</div>

				
        <nav class="navbar navbar-inverse clearfix nobot">
						
			<a id="responsive-menu-button" href="#swipe-menu">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>		
			</a>	

            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse" id="swipe-menu-responsive">

			<ul class="nav">
				
				<li>
				<span id="close-menu">
					<a href="#" class="close-this-menu">Close</a>
						<script type="text/javascript">
							jQuery('a.sidr-class-close-this-menu').click(function(){
								jQuery('div.sidr').css({
									'right': '-476px'
								});
								jQuery('body').css({
								'right': '0'
								});							
							});
						</script>
					
				</span>
				</li>
								
				<li><a href="index.php"><img src="images/home.png" alt="Magazine"></a></li>
				<!--
				<li class="dropdown"><a href="index.html">Home</a>
					<ul class="sub-menu">
						<li><a href="#.html">#</a></li>
						<li><a href="#.html">#</a></li>
						<li><a href="#.html">#</a></li>
					</ul>
				</li>
				-->
                <?php 
				// partie:1 menu 
				$sqlcat="select * from categorie";
				$resultcat = mysql_query($sqlcat);
				while($data = mysql_fetch_assoc($resultcat)) {
				//echo  "<li><a href=\"Archives_Magazine.php\">".$data["titre"]."</a></li>";
				echo  "<li><a href=\"Archives_Magazine.php?nomcategorie=".$data["titre"]."\">".$data["titre"]."</a></li>";
				
								}
				 
				    ?>
                <!--
                <li><a href="#.html">Actualité</a></li>
   				<li><a href="#.html">Art-Culture</a></li>                    			                <li><a href="#.html">Auto-Moto</a></li>
                <li><a href="#.html">Femme</a></li>
                <li><a href="#.html">Homme</a></li>
                <li><a href="#.html">Informatique</a></li>
				-->
                
                
               
            </div><!--/.nav-collapse -->
			
        </nav><!-- /.navbar -->
			
	</header><!-- #masthead -->

	<div id="headline" class="container">
	<div class="row-fluid">
		
		
				<?php 
				//partie:2 partie haute afficher (4 articles affichage de juste les titres) bon désign
				$sqlart="select * from article LIMIT 4";
				$resultart = mysql_query($sqlart);
				while($data = mysql_fetch_assoc($resultart)) {
                   echo "<div class=\"span3\">";
                   echo " <article class=\"post\">";
		echo "<a href=\"#\" title=".$data["titre"]."rel=\"bookmark\">
		<img width=\"225\" height=\"136\" src=".$data["contenuimage"]." class=\"thumb\" alt=".$data["contenuimage"]." />	</a>";

			
				
		echo "<div class=\"entry\">
					<h3><a href=\"#\" title=".$data["titre"]. " rel=\"bookmark\">".$data["titre"]."</a></h3>
					<p>5 months ago </p>
				</div>";
				
			echo "<div class=\"clearfix\"></div>
			</article></div>" ;

	
				
				}
				
				
				    ?>
                
                
                
				

		<!--
		<div class="span3">
			<article class="post">
				<a href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark">
				<img width="225" height="136" src="images/photodune-3517559-idea-s-225x136.jpg" class="thumb" alt="photodune-3517559-idea-s" />
				</a>
				<div class="entry">
					<h3><a href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark">Nam nibh arcu tristique eget pretiu...</a></h3>
					<p>5 months ago </p>
				</div>
				<div class="clearfix"></div>
			</article>
		</div>

		<div class="span3">
			<article class="post">
				<a href="#" title="Permalink to Aliquam quam lectus pulvinar urna leo dignissim lorem" rel="bookmark">
				<img width="225" height="136" src="images/shutterstock_2114081-225x136.jpg" class="thumb" alt="shutterstock_2114081" />
				</a>
				<div class="entry">
					<h3><a href="#" title="Permalink to Aliquam quam lectus pulvinar urna leo dignissim lorem" rel="bookmark">Aliquam quam lectus pulvinar urna l...</a></h3>
					<p>6 months ago </p>
				</div>
				<div class="clearfix"></div>
			</article>
		</div>

		<div class="span3">
			<article class="post">
				<a href="#" title="Permalink to Phasellus scelerisque massa molestie iaculis lectus pulvinar" rel="bookmark">
				<img width="225" height="136" src="images/shutterstock_109209743-225x136.jpg" class="thumb" alt="shutterstock_109209743" />
				</a>
				<div class="entry">
					<h3><a href="#" title="Permalink to Phasellus scelerisque massa molestie iaculis lectus pulvinar" rel="bookmark">Phasellus scelerisque massa molesti...</a></h3>
					<p>6 months ago </p>
				</div>
				<div class="clearfix"></div>
			</article>
		</div>	
		
-->
	
</div>
</div>

	<div id="intr" class="container">
		<div class="row-fluid">
			<div class="brnews span9">
				<h3>News en vrac</h3>
				<ul id="scroller">
					<!--partie:3 text défilant mettre les fêtes marocaines et francaise-->
					
					<li><p><a href="#" title="Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem" rel="bookmark"><span class="title">fêtes Marocaine <b>2018</b> : Manifeste de l'Indépendance :11 Janvier | Al mawlid : 20 Novembre | Fête du travail : 1er Mai | Aid EL-Fitr : 15 Juin</a></p></li>
					<li><p><a href="#" title="Permalink to Suspen disse auctor dapibus neque pulvinar urna leo" rel="bookmark"><span class="title">fêtes France <b>2018</b> : Lundi de Pâques 2018 : 2 avril | Fête du travail : 1 mai | Victoire 1945 2018 : 8 mai | Ascension 2018 :10 mai </a></p></li>
					<li><p><a href="#" title="Permalink to Porta lorem ipsum dolor sit amet, consectetur adipiscing risus" rel="bookmark"><span class="title">à faire...</a></p></li>
				</ul>
			</div>
		
		<div class="search span3"><div class="offset1">
			<form method="get" id="searchform" action="#">
				<p><input type="text" value="Search here..." onfocus="if ( this.value == 'Search here...' ) { this.value = ''; }" onblur="if ( this.value == '' ) { this.value = 'Search here...'; }" name="s" id="s" />
				<input type="submit" id="searchsubmit" value="Search" /></p>
			</form>
		</div></div>
		</div>
	</div>

	<div id="content" class="container">

		<div id="main" class="row-fluid">
			<div id="main-left" class="span8">
				<div id="slider" class="clearfix">
					<div id="slide-left" class="flexslider span8">
						<ul class="slides">
							
                            <?php
							//partie:4 la carouselle 
				
				
				$sqlart2="select * from article Limit 4";
				$resultart2 = mysql_query($sqlart2);
				while($data = mysql_fetch_assoc($resultart2)) {
                 echo "<li data-thumb=".$data["contenuimage"]."> <a href=\"Archives_Magazine.php\" title=".$data["titre"]." rel=\"bookmark\">";	
				 echo "<img width=\"546\" height=\"291\" src=".$data["contenuimage"]." alt=\"photodune-3834701-laughing-girl-xs\" /> </a>";
                 echo" <div class=\"entry\">
									<h4>".$data["titre"]."</h4>
									<p>".substr($data["contenutxt"],0,100)."</p>
								</div>
							</li>
				
				";
				}
				
				?>
                            
                            
                            
								
						<!--		

							<li data-thumb="images/photodune-2043745-college-student-s-225x136.jpg">
								<a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">
								<img width="546" height="291" src="images/photodune-2043745-college-student-s-225x136.jpg" alt="photodune-2043745-college-student-s" />
								</a>
								<div class="entry">
									<h4>Donec consectetuer ligula vulputate sem tristique cursus...</h4>
									<p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dignissim ant...</p>
								</div>
							</li>
							
							<li data-thumb="images/shutterstock_123603871-546x291.jpg">
								<a href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">
								<img width="546" height="291" src="images/shutterstock_123603871-546x291.jpg" alt="gallery-1" />
								</a>
								<div class="entry">
									<h4>Quisque sodales viverra ornare vitae libero ac risus...</h4>
									<p>Quisque sodales viverra ornare. Aenean posuere lacus sed facilisis gravida. Morb...</p>
								</div>
							</li>
							
							<li data-thumb="images/shutterstock_109209743-225x136.jpg">
								<a href="#" title="Permalink to Vestibulum auctor dapibus neque pulvinar urna leo" rel="bookmark">
								<img width="546" height="291" src="images/shutterstock_109209743-225x136.jpg" alt="shutterstock_109209743" />
								</a>
								<div class="entry">
									<h4>Vestibulum auctor dapibus neque pulvinar urna leo...</h4>
									<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing erat, qui...</p>
								</div>
							</li>
						</ul>
	-->
    				</div>



					<div id="slide-right" class="span4">
						<h3>Les news populaires</h3>
							<ul>
								<?php
							
				$sqlartpop="select * from article limit 4";
				$resultpop = mysql_query($sqlartpop);
				while($data = mysql_fetch_assoc($resultpop)) {
				
				echo "<li><a href=\"#\" title=".$data["titre"]." rel=\"bookmark\"><h4 class=\"post-title\">".$data["titre"]."</h4></a></li>";
				
				}
				
							
							?>
                          <!--      
                                
								<li><a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark"><h4 class="post-title">Donec consectetuer ligula vulputate sem tristique ...</h4></a></li>
								<li><a href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark"><h4 class="post-title">Quisque sodales viverra ornare vitae libero ac ris...</h4></a></li>
								<li><a href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark"><h4 class="post-title">Nam nibh arcu tristique eget pretium vitae libero ...</h4></a></li>
						-->
                        	</ul>
                            <div class="clear"></div>
					</div>
				</div>
				
				<div id="home-top">
					<h3 class="title"><span>Hot Stuff</span></h3>
					
                    <ul class="bxslider">
						
                        <?php
							
				$sqlartStuff="select * from article";
				$resultStuff = mysql_query($sqlartStuff);
				while($data = mysql_fetch_assoc($resultStuff)) {
                        
                 echo " <li><a class=\"image_thumb_zoom\" href=\"#\" title=".$data["titre"]." rel=\"bookmark\"><img width=\"225\" height=\"136\" src=".$data["contenuimage"]." alt=\"photodune-2043745-college-student-s\" /></a>";
				 
			echo "<h4 class=\"post-title clearfix\"><img class=\"post-icon\" alt=\"Text post\" src=\"images/text.png\"><a href=\"#\" title=".$data["titre"]." rel=\"bookmark\">".$data["contenutxt"]."</a></h4>";
				  
		echo 	"<div class=\"meta clearfix\">
								<span class=\"date\">Julyyy 11, 2013</span>
								<div class=\"ratings\">
									<input class=\"star\" type=\"radio\" name=\"home-top-rating-1\" value=\"1\" disabled=\"disabled\"/>
									<input class=\"star\" type=\"radio\" name=\"home-top-rating-1\" value=\"2\" disabled=\"disabled\"/>
									<input class=\"star\" type=\"radio\" name=\"home-top-rating-1\" value=\"3\" disabled=\"disabled\" checked=\"checked\"/>
									<input class=\"star\" type=\"radio\" name=\"home-top-rating-1\" value=\"4\" disabled=\"disabled\"/>
									<input class=\"star\" type=\"radio\" name=\"home-top-rating-1\" value=\"5\" disabled=\"disabled\"/>
								</div>
							</div>
						</li>		  
				  ";
				  
				  }
				
				?>      
                       
							

						<!--
                        <li><a class="image_thumb_zoom" href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark">
							<img width="225" height="136" src="images/shutterstock_2114081-225x136.jpg" alt="photodune-3517559-idea-s" />
							</a>
							<h4 class="post-title clearfix">
								<img class="post-icon" alt="Gallery post" src="images/image.png">
								<a href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark">Nam nibh arcu tristique eget pretiu...</a>
							</h4>
							<div class="meta clearfix">
								<span class="date">July 2, 2013</span>
								<div class="ratings">
									<input class="star" type="radio" name="home-top-rating-2" value="1" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-2" value="2" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-2" value="3" disabled="disabled" checked="checked"/>
									<input class="star" type="radio" name="home-top-rating-2" value="4" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-2" value="5" disabled="disabled"/>
								</div>
							</div>
						</li>
						<li><a class="image_thumb_zoom" href="#" title="Permalink to Aliquam quam lectus pulvinar urna leo dignissim lorem" rel="bookmark">
							<img width="225" height="136" src="images/shutterstock_109209743-225x136.jpg" alt="shutterstock_2114081" />
							</a>
							<h4 class="post-title clearfix">
								<img class="post-icon" alt="Photo" src="images/photo.png">
								<a href="#" title="Permalink to Aliquam quam lectus pulvinar urna leo dignissim lorem" rel="bookmark">Aliquam quam lectus pulvinar urna l...</a>
							</h4>
							<div class="meta clearfix">
								<span class="date">June 16, 2013</span>
								<div class="ratings">
									<input class="star" type="radio" name="home-top-rating-3" value="1" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-3" value="2" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-3" value="3" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-3" value="4" disabled="disabled" checked="checked"/>
									<input class="star" type="radio" name="home-top-rating-3" value="5" disabled="disabled"/>
								</div>
      						</div>
						</li>
						<li><a class="image_thumb_zoom" href="#" title="Permalink to Phasellus scelerisque massa molestie iaculis lectus pulvinar" rel="bookmark">
							<img width="225" height="136" src="images/shutterstock_109209743-225x136.jpg" class="attachment-post-thumbnail wp-post-image" alt="shutterstock_109209743" />
							</a>
							<h4 class="post-title clearfix">
								<img class="post-icon" alt="Video post" src="images/vid.png">
								<a href="#" title="Permalink to Phasellus scelerisque massa molestie iaculis lectus pulvinar" rel="bookmark">Phasellus scelerisque massa molesti...	</a>
							</h4>
							<div class="meta clearfix">
								<span class="date">June 2, 2013</span>											
								<div class="ratings">
									<input class="star" type="radio" name="home-top-rating-4" value="1" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-4" value="2" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-4" value="3" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-4" value="4" disabled="disabled" checked="checked"/>
									<input class="star" type="radio" name="home-top-rating-4" value="5" disabled="disabled"/>
								</div>
      						</div>
						</li>
				
                -->
                	</ul>
				</div>
				
				<div id="home-middle" class="clearfix">
					<div class="left span6">
						<h3 class="title"><a href="#" title="Game News"><span>Game News</span></a></h3>
						<div class="row-fluid">	
							
							<article class="post">
								<a class="image_thumb_zoom" href="#" title="Permalink to Integer vitae libero ac risus egestas placerat urna" rel="bookmark">
								<img width="371" height="177" src="images/shutterstock_58382248-371x177.jpg" class="attachment-post-first wp-post-image" alt="shutterstock_58382248" />
								</a>
								<h4 class="post-title">
								<a href="#" title="Permalink to Integer vitae libero ac risus egestas placerat urna" rel="bookmark">Integer vitae libero ac risus egest...</a>
								<span class="date">July 11, 2013</span>
								</h4>
								<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing erat, quis bibendum enim congue porttitor. E...</p>
							</article>


<?php
							
				$sqlartGame="select * from article";
				$resultGame = mysql_query($sqlartGame);
				while($data = mysql_fetch_assoc($resultGame)) {
				
				
				echo "<article class=\"post\">
								<div class=\"entry clearfix\">
									<a href=\"#\" title=".$data["contenutxt"]."  rel=\"bookmark\">
									<img width=\"225\" height=\"136\" src=".$data["contenuimage"]."   class=\"thumb\" alt=\"photodune-3834701-laughing-girl-xs\" />
									<h4 class=\"post-title\">".$data["titre"]."</h4>
									</a>
									<p>".$data["contenutxt"]."</p>
									<div class=\"meta\">
										<span class=\"date\">July 11, 2013</span>
									</div>
								</div>
							</article>";
				
				
				
				}
				
			?>


							
<!--
							<article class="post">
								<div class="entry clearfix">
									<a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">
									<img width="225" height="136" src="images/photodune-2043745-college-student-s-225x136.jpg" class="thumb" alt="photodune-2043745-college-student-s" />
									<h4 class="post-title">Donec consectetuer ligula vulputate...</h4>
									</a>
									<p>Nam nibh arcu, tristique eget pretium se...</p>
									<div class="meta">
										<span class="date">July 11, 2013</span>
									</div>
								</div>
							</article>
-->
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="right span6">
						
						<h3 class="title"><a href="#" title="Sport News"><span>Sport News</span></a></h3>
							<div class="row-fluid">
								
								
								<?php
							
				$sqlartsport="select * from article LIMIT 3";
				$resultsport = mysql_query($sqlartsport);
				while($data = mysql_fetch_assoc($resultsport)) {
				
				 echo "<class=\"post\">
									<a class=\"image_thumb_zoom\" href=\"#.html\" title=".$data["titre"]." rel=\"bookmark\">
									<img width=\"371\" height=\"177\" src=".$data["contenuimage"]." class=\"attachment-post-first wp-post-image\" alt=\"gallery-1\" />
									</a>
									<h4 class=\"post-title\">
									<a href=\"#\" title=".$data["contenuimage"]." rel=\"bookmark\">".$data["contenutxt"]."</a>
									<span class=\"date\">July 2, 2013</span>
									</h4>
									<p>".$data["contenutxt"]."</p>
								</article>";
				
				}
								
					?>			
								


						<!--		<article class="post">
									<div class="entry clearfix">
										<a href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark">
										<img width="225" height="136" src="images/photodune-3517559-idea-s-225x136.jpg" class="thumb wp-post-image" alt="photodune-3517559-idea-s" />
										<h4 class="post-title">Nam nibh arcu tristique eget pretiu...</h4>
										</a>
										<p>Nam nibh arcu, tristique eget pretium se...</p>
										<div class="meta">
											<span class="date">July 2, 2013</span>
										</div>
									</div>
								</article>

								<article class="post">
									<div class="entry clearfix">
										<a href="#" title="Permalink to Vestibulum auctor dapibus neque pulvinar urna leo" rel="bookmark">
										<img width="225" height="136" src="images/shutterstock_109209743-225x136.jpg" class="thumb wp-post-image" alt="shutterstock_109209743" />
										<h4 class="post-title">Vestibulum auctor dapibus neque pul...</h4>
										</a>
										<p>Fusce aliquet non ipsum vitae scelerisqu...</p>
										<div class="meta">
											<span class="date">June 14, 2013</span>
										</div>
									</div>
								</article>
-->
								<div class="clearfix"></div>

							</div>
					</div>

				</div>

				<div id="home-bottom" class="clearfix">
					
					
					
					<h3 class="title"><a href="#" title="Fashion News"><span>Fashion News à résoudre le souci des img</span></a></h3>	
					<div class="row-fluid">	
						<div class="span6">
						
						<?php
							
				$sqlartFashion="select * from article LIMIT 3";
				$resultFashion = mysql_query($sqlartFashion);
				
				
				while($data = mysql_fetch_assoc($resultFashion)) {
						
						echo "		<article class=\"post\">
								<a class=\"image_thumb_zoom\" href=\"#.html\" title=\"Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem\" rel=\"bookmark\">
								<img width=\"371\" height=\"177\" src=".$data["contenuimage"]."  alt=\"shutterstock_134257640\" />
								</a>
								<h4 class=\"post-title\">
								<a href=\"#.html\" title=\"Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem\" rel=\"bookmark\">".$data["titre"]."</a>
								<span class=\"date\">August 12, 2013</span>
								</h4>
								<p>".$data["contenutxt"]."</p>
							</article>
						</div>

						<div class=\"span6\">
							<article class=\"post\">
								<div class=\"entry clearfix\">
									<a href=\"#.html\" title=\"Permalink to Suspen disse auctor dapibus neque pulvinar urna leo\" rel=\"bookmark\">
									<img width=\"225\" height=\"136\" src=".$data["contenuimage"]."  class=\"thumb\" alt=\"shutterstock_70184773\" />
									<h4 class=\"post-title\">".$data["titre"]."</h4>
									</a>
									<p>".$data["contenutxt"]."</p>
									<div class=\"meta\">
										<span class=\"date\">August 11, 2013</span>
									</div>
								</div>
							</article>";
						
				}		
				?>		
						
<!--						
						<article class="post">
								<div class="entry clearfix">
									<a href="#" title="Permalink to Aenean dignissim dignissim lorem pellentesque felis risus" rel="bookmark">
									<img width="225" height="136" src="images/shutterstock_58382248-225x136.jpg" class="thumb" alt="shutterstock_58382248" />
									<h4 class="post-title">Aenean dignissim dignissim lorem pe...</h4>
									</a>
									<p>Fusce aliquet non ipsum vitae scelerisqu...</p>
									<div class="meta">
										<span class="date">July 2, 2013</span>
									</div>
								</div>
							</article>
							<article class="post">
									<div class="entry clearfix">
										<a href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">
										<img width="225" height="136" src="images/shutterstock_123603871-225x136.jpg" class="thumb" alt="gallery-1" />
										<h4 class="post-title">Quisque sodales viverra ornare vita...</h4>
										</a>
										<p>Quisque sodales viverra ornare. Aenean p...</p>
										<div class="meta">
											<span class="date">July 2, 2013</span>
										</div>
									</div>
							</article>
-->
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

			</div><!-- #main-left -->

		<div id="sidebar" class="span4">

			<div id="tabwidget" class="tabnav tab-container"> 
				<ul id="tabnav" class="clearfix"> 
					<li><h3><a href="#tab1" class="selected"><img src="images/view-white-bg.png" alt="Popular">Popular</a></h3></li>
					<li><h3><a href="#tab2"><img src="images/time-white.png" alt="Recent">Recent</a></h3></li>
				    <li><h3><a href="#tab3"><img src="images/komen-putih.png" alt="Comments">Comments</a></h3></li>
				</ul> 

			<div id="tab-content">
			
	 		<div id="tab1" style="display: block; ">
				<ul id="itemContainer" class="recent-tab">
					
					
					
					<?php
							
				$sqlartPopular="select * from article";
				$resultPopular = mysql_query($sqlartPopular);
				while($data = mysql_fetch_assoc($resultPopular)) {
					
					
					echo " <li>
						<a href=\"#.html\"><img width=\"225\" height=\"136\" src=".$data["contenuimage"]."  class=\"thumb\" alt=\"shutterstock_134257640\" /></a>
						<h4 class=\"post-title\"><a href=\"#.html\">".$data["titre"]."</a></h4>
						<p>".$data["contenutxt"]."</p>
						<div class=\"clearfix\"></div>				
					</li> ";
				}
					?>
					
					
					
<!--
				<li>
						<a href="#"><img width="225" height="136" src="images/photodune-2043745-college-student-s-225x136.jpg" class="thumb" alt="photodune-2043745-college-student-s" /></a>
						<h4 class="post-title"><a href="#">Donec consectetuer ligula vulpu...</a></h4>
						<p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dig...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/photodune-3517559-idea-s-225x136.jpg" class="thumb" alt="photodune-3517559-idea-s" /></a>
						<h4 class="post-title"><a href="#">Nam nibh arcu tristique eget pr...</a></h4>
						<p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dig...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/shutterstock_123603871-225x136.jpg" class="thumb" alt="gallery-1" /></a>
						<h4 class="post-title"><a href="#">Quisque sodales viverra ornare ...</a></h4>
						<p>Quisque sodales viverra ornare. Aenean posuere lacus sed facilisis gra...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/photodune-3834701-laughing-girl-xs-225x136.jpg" class="thumb" alt="photodune-3834701-laughing-girl-xs" /></a>
						<h4 class="post-title"><a href="#">wppmsk ,djdjdjjdjdkfkkfkg,...</a></h4>
						<p>Fusce aliquet non ipsum vitae scelerisque. Nullam wagggjjkkkkkkkkk</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/shutterstock_2114081-225x136.jpg" class="thumb" alt="shutterstock_2114081" /></a>
						<h4 class="post-title"><a href="#">Aliquam quam lectus pulvinar ur...</a></h4>
						<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/shutterstock_70184773-225x136.jpg" class="thumb" alt="shutterstock_70184773" /></a>
						<h4 class="post-title"><a href="#">Suspen disse auctor dapibus neq...</a></h4>
						<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/shutterstock_70787161-225x136.jpg" class="thumb" alt="shutterstock_70787161" /></a>
						<h4 class="post-title"><a href="#">Porta lorem ipsum dolor sit ame...</a></h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer place...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/shutterstock_58382248-225x136.jpg" class="thumb" alt="shutterstock_58382248" /></a>
						<h4 class="post-title"><a href="#">Integer vitae libero ac risus e...</a></h4>
						<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing...</p>
						<div class="clearfix"></div>				
					</li>
						
	-->				<script type="text/javascript">
						jQuery(document).ready(function($){

							/* initiate the plugin */
							$("div.holder").jPages({
							containerID  : "itemContainer",
							perPage      : 3,
							startPage    : 1,
							startRange   : 1,
							links		   : "blank"
							});
						});		
					</script>

				</ul>
				
				<div class="holder clearfix"></div>
				<div class="clear"></div>

			<!-- End most viewed post -->		  

			</div><!-- /#tab1 -->
 
			<div id="tab2" style="display: none;">	
				<ul id="itemContainer2" class="recent-tab">
					
					<?php
							
				$sqlartRecent="select * from article";
				$resultrecent = mysql_query($sqlartRecent);
				while($data = mysql_fetch_assoc($resultrecent)) {
				
				echo "<li>
						<a href=\"#\"><img width=\"225\" height=\"136\" src=".$data["contenuimage"]." class=\"thumb\" alt=\"shutterstock_134257640\" /></a>
						<h4 class=\"post-title\"><a href=\"#.html\">".$data["titre"]."</a></h4>
						<p>".$data["contenutxt"]."</p>
						<div class=\"clearfix\"></div>	
					</li>";
				}
				?>
					
					
					<!--
					
					<li>
						<a href="#"><img width="225" height="136" src="images/shutterstock_70184773-225x136.jpg" class="thumb" alt="shutterstock_70184773" /></a>
						<h4 class="post-title"><a href="#">Suspen disse auctor dapibus neq...</a></h4>
						<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing...</p>
						<div class="clearfix"></div>	
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/shutterstock_70787161-225x136.jpg" class="thumb" alt="shutterstock_70787161" /></a>
						<h4 class="post-title"><a href="#">Porta lorem ipsum dolor sit ame...</a></h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer place...</p>
						<div class="clearfix"></div>	
					</li>
				-->
				</ul> 	 
			</div><!-- /#tab2 --> 

			<div id="tab3" style="display: none; ">
				<ul>
					
					<?php
							
				$sqlartComment="select * from article";
				$resultComment = mysql_query($sqlartComment);
				while($data = mysql_fetch_assoc($resultComment)) {
				
				echo "<li><span class=\"author\">Magazine Author</span> on <a href=\"#.html\" title=\" View comment \">Lorem Ipsum is simply dummy te</a></li>";
				
				}
				?>	
					
					
					<!--
					<li><span class="author">Magazine Author</span> on <a href="#" title=" View comment ">Lorem Ipsum is simply dummy te</a></li>
					<li><span class="author">Magazine Author</span> on <a href="#" title=" View comment ">Lorem Ipsum is simply dummy te</a></li>
					<li><span class="author">magazine</span> on <a href="#" title=" View comment ">This is threaded comment level</a></li>
					<li><span class="author">magazine</span> on <a href="#" title=" View comment ">This is threaded comment syste</a></li>
				-->
				</ul>
			</div><!-- /#tab2 --> 
	
			</div><!-- /#tab-content -->

			</div><!-- /#tab-widget --> 

			<div class="widget widget_latestpost">
				<h3 class="title"><span>Recent Posts</span></h3>
				<div class="latest-posts widget">
					
					
					
					<?php
							
				$sqlartRecent="select * from article";
				$resultRecent = mysql_query($sqlartRecent);
				while($data = mysql_fetch_assoc($resultRecent)) {
				
				
			
					echo " <div class=\"latest-post clearfix\">
						<a href=\"#\"><img width=\"225\" height=\"136\" src=".$data["contenuimage"]."  class=\"thumb fl\" alt=\"shutterstock_134257640\" title=\"\" /></a>
						<h4><a href=\"#\" rel=\"bookmark\" title=".$data["titre"].">".$data["contenutxt"]."</a></h4>
						<div class=\"post-time\">August 12, 2013</div>
						<div class=\"ratings\" style=\"float: none\">
							<input class=\"star\" type=\"radio\" name=\"recent-post-1\" value=\"1\" disabled=\"disabled\"/>
							<input class=\"star\" type=\"radio\" name=\"recent-post-1\" value=\"2\" disabled=\"disabled\"/>
							<input class=\"star\" type=\"radio\" name=\"recent-post-1\" value=\"3\" disabled=\"disabled\"/>
							<input class=\"star\" type=\"radio\" name=\"recent-post-1\" value=\"4\" disabled=\"disabled\" checked=\"checked\"/>
							<input class=\"star\" type=\"radio\" name=\"recent-post-1\" value=\"5\" disabled=\"disabled\"/>
						</div>
					</div>";
					}
					?>
					
					<!--
					<div class="latest-post clearfix">
						<a href="#"><img width="225" height="136" src="images/shutterstock_134257640-225x136.jpg" class="thumb fl" alt="shutterstock_134257640" title="" /></a>
						<h4><a href="#" rel="bookmark" title="Lectus non rutrum pulvinar urna leo dignissim lorem">Lectus non rutrum pulvinar urna leo</a></h4>
						<div class="post-time">August 12, 2013</div>
						<div class="ratings" style="float: none">
							<input class="star" type="radio" name="recent-post-1" value="1" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-1" value="2" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-1" value="3" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-1" value="4" disabled="disabled" checked="checked"/>
							<input class="star" type="radio" name="recent-post-1" value="5" disabled="disabled"/>
						</div>
					</div>
					
					
					<div class="latest-post clearfix">
						<a href="#"><img width="225" height="136" src="images/shutterstock_70184773-225x136.jpg" class="thumb fl" alt="shutterstock_70184773" title="" /></a>
						<h4><a href="#" rel="bookmark" title="Suspen disse auctor dapibus neque pulvinar urna leo">Suspen disse auctor dapibus neque</a></h4>
						<div class="post-time">August 11, 2013</div>
						<div class="ratings" style="float: none">
							<input class="star" type="radio" name="recent-post-2" value="1" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-2" value="2" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-2" value="3" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-2" value="4" disabled="disabled" checked="checked"/>
							<input class="star" type="radio" name="recent-post-2" value="5" disabled="disabled"/>
						</div>
					</div>

					<div class="latest-post clearfix">
						<a href="#"><img width="225" height="136" src="images/shutterstock_70787161-225x136.jpg" class="thumb fl" alt="shutterstock_70787161" title="" /></a>
						<h4><a href="#" rel="bookmark" title="Porta lorem ipsum dolor sit amet, consectetur adipiscing risus">Porta lorem ipsum dolor sit amet</a></h4>
						<div class="post-time">August 2, 2013</div>
						<div class="ratings" style="float: none">
							<input class="star" type="radio" name="recent-post-3" value="1" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-3" value="2" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-3" value="3" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-3" value="4" disabled="disabled" checked="checked"/>
							<input class="star" type="radio" name="recent-post-3" value="5" disabled="disabled"/>
						</div>
					</div>

					
					-->
					
				</div>
			</div>

			<div class="widget widget_latestpost"><h3 class="title"><span>Technology News</span></h3>
				<div class="latest-posts">
					<article class="post">
						<a class="image_thumb_zoom" href="#" title="Permalink to Porta lorem ipsum dolor sit amet, consectetur adipiscing risus" rel="bookmark">
						<img width="371" height="177" src="images/shutterstock_70787161-371x177.jpg" class="attachment-post-first wp-post-image" alt="shutterstock_70787161" />
						</a>
						<h4 class="post-title">
						<a href="#" title="Permalink to Porta lorem ipsum dolor sit amet, consectetur adipiscing risus" rel="bookmark">Porta lorem ipsum dolor sit amet, c...</a>
						<span class="date">August 2, 2013</span>
						</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer placerat id augue non dapibus. Morbi ut ipsum cond...</p>
					</article>
				
				
				<?php
							
				$sqlartTechnology ="select * from article";
				$resultTechnology = mysql_query($sqlartTechnology);
				while($data = mysql_fetch_assoc($resultTechnology )) {
				echo "
				<article class=\"post\">
						<div class=\"entry clearfix\">
							<a href=\"#\" title=".$data["titre"]." rel=\"bookmark\">
							<img width=\"225\" height=\"136\" src=".$data["contenuimage"]." class=\"thumb\" alt=\"photodune-2043745-college-student-s\" />
							<h4 class=\"post-title\">".$data["titre"]."</h4>
							</a>
							<p>".$data["contenutxt"]."</p>
							<div class=\"meta\">
								<span class=\"date\">July 11, 2013</span>
							</div>
						</div>
					</article>
				";
				}
				?>
				
				
				
				<!--
					<article class="post">
						<div class="entry clearfix">
							<a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">
							<img width="225" height="136" src="images/photodune-2043745-college-student-s-225x136.jpg" class="thumb" alt="photodune-2043745-college-student-s" />
							<h4 class="post-title">Donec consectetuer ligula vulputate...</h4>
							</a>
							<p>Nam nibh arcu, tristique eget pretium se...</p>
							<div class="meta">
								<span class="date">July 11, 2013</span>
							</div>
						</div>
					</article>

					<article class="post">
						<div class="entry clearfix">
							<a href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">
							<img width="225" height="136" src="images/shutterstock_123603871-225x136.jpg" class="thumb" alt="gallery-1" />
							<h4 class="post-title">Quisque sodales viverra ornare vita...</h4></a>
							<p>Quisque sodales viverra ornare. Aenean p...</p>
							<div class="meta">
								<span class="date">July 2, 2013</span>
							</div>
						</div>
					</article>
			
-->
			</div>
			</div>
			
			<div class="video-box widget row-fluid">
				<h3 class="title"><span style="background-color: #;color: #;">Videos Gallery</span></h3>		
				<iframe width="369" height="188" src="https://www.youtube.com/embed/Ud_a5n77h8Y" frameborder="0" allowfullscreen></iframe>
				<ul>
					
					<?php
							
				$sqlartVideos="select * from article";
				$resultVideos = mysql_query($sqlartVideos);
				while($data = mysql_fetch_assoc($resultVideos)) {
				
				echo "<li>
					<a href=\"#\" title=".$data["titre"]." rel=\"bookmark\">
					<img width=\"225\" height=\"136\" src=".$data["contenuimage"]." alt=\"shutterstock_134257640\" />
					</a>
					</li>";
				
				}
				?>
					
					<!--
					<li>
					<a href="#" title="Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem" rel="bookmark">
					<img width="225" height="136" src="images/shutterstock_134257640-225x136.jpg" alt="shutterstock_134257640" />
					</a>
					</li>
						
					<li>
					<a href="#" title="Permalink to Vestibulum volutpat tortor libero sodales leo mauris ut lectus" rel="bookmark">
					<img width="225" height="136" src="images/photodune-3517559-idea-s-225x136.jpg" alt="photodune-3517559-idea-s" />
					</a>
					</li>
						
					<li>
					<a href="#" title="Permalink to Vivamus ultrices luctus nunc sem sit amet interdum consectetuer" rel="bookmark">
					<img width="225" height="136" src="images/photodune-2043745-college-student-s-225x136.jpg" alt="photodune-2043745-college-student-s" />
					</a>
					</li>
					
					<li>
					<a href="#" title="Permalink to Phasellus scelerisque massa molestie iaculis lectus pulvinar" rel="bookmark">
					<img width="225" height="136" src="images/shutterstock_109209743-225x136.jpg" alt="shutterstock_109209743" />
					</a>
					</li>
				-->
				</ul>
        	</div>
        				
		</div><!-- sidebar -->
		
		<div class="clearfix"></div>

		<div id="gallery">
			<h3 class="title"><span>All News Gallery</span></h3>
				<ul class="gallery">

				<?php
							
				$sqlartGallery="select * from article";
				$resultGallery= mysql_query($sqlartGallery);
				while($data = mysql_fetch_assoc($resultGallery)) {
				
				echo " <li>
					<a class=\"image_thumb_zoom\" href=\"#.html\" title=".$data["titre"]." rel=\"bookmark\">
					<img width=\"225\" height=\"136\" src= ".$data["contenuimage"]." alt=\"shutterstock_58382248\" />
					</a>
					<a href=\"#.html\" title=".$data["titre"]." rel=\"bookmark\">
					<h4 class=\"post-title clearfix\"><img class=\"post-icon\" alt=\"Text post\" src=\"images/text.png\"> ".$data["contenutxt"]."</h4></a>
					<div class=\"meta clearfix\">
						<span class=\"date\">July 30, 2013</span>
					</div>
					</li>";
				}
				?>
				<!--
				<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Fusce pellentesque suscipit nibh massa porta molestie iaculis" rel="bookmark">
					<img width="225" height="136" src="images/shutterstock_58382248-225x136.jpg" alt="shutterstock_58382248" />
					</a>
					<a href="#" title="Permalink to Fusce pellentesque suscipit nibh massa porta molestie iaculis" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Text post" src="images/text.png"> Fusce pellentesque suscipit nibh ma...</h4></a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>

					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Praesent placerat risus quis pellentesque suscipit nibh ultricies nulla" rel="bookmark">
					<img width="225" height="136" src="images/shutterstock_70184773-225x136.jpg" alt="shutterstock_70184773" />
					</a>
					<a href="#" title="Permalink to Praesent placerat risus quis pellentesque suscipit nibh ultricies nulla" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Gallery post" src="images/image.png"> Praesent placerat risus quis pellen...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>
					
					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Integer malesuada commodo nulla ligula vulputate sem tristique" rel="bookmark">
					<img width="225" height="136" src="images/shutterstock_109209743-225x136.jpg" alt="shutterstock_109209743" />
					</a>
					<a href="#" title="Permalink to Integer malesuada commodo nulla ligula vulputate sem tristique" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Photo" src="images/photo.png"> Integer malesuada commodo nulla lig...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>
					
					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Vestibulum volutpat tortor libero sodales leo mauris ut lectus" rel="bookmark">
					<img width="225" height="136" src="images/photodune-3517559-idea-s-225x136.jpg" alt="photodune-3517559-idea-s" />
					</a>
					<a href="#" title="Permalink to Vestibulum volutpat tortor libero sodales leo mauris ut lectus" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Video post" src="images/vid.png"> Vestibulum volutpat tortor libero s...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>
					
					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Fusce accumsan mollis eros amet interdum consectetuer" rel="bookmark">
					<img width="225" height="136" src="images/shutterstock_2114081-225x136.jpg" alt="shutterstock_2114081" />
					</a>
					<a href="#" title="Permalink to Fusce accumsan mollis eros amet interdum consectetuer" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Text post" src="images/text.png"> Fusce accumsan mollis eros amet int...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>
					
					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Quisque fermentum penatibus et magnis dis parturient montes" rel="bookmark">
					<img width="225" height="136" src="images/shutterstock_58382248-225x136.jpg" alt="shutterstock_58382248" />
					</a>
					<a href="#" title="Permalink to Quisque fermentum penatibus et magnis dis parturient montes" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Gallery post" src="images/image.png"> Quisque fermentum penatibus et magn...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>
					
					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Proin malesuada adipiscing lacus imperdiet nibh feugiat" rel="bookmark">
					<img width="225" height="136" src="images/shutterstock_134257640-225x136.jpg" alt="shutterstock_134257640" />
					</a>
					<a href="#" title="Permalink to Proin malesuada adipiscing lacus imperdiet nibh feugiat" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Photo" src="images/photo.png"> Proin malesuada adipiscing lacus im...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>
					
					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Vivamus ultrices luctus nunc sem sit amet interdum consectetuer" rel="bookmark">
					<img width="225" height="136" src="images/photodune-2043745-college-student-s-225x136.jpg" alt="photodune-2043745-college-student-s" />
					</a>
					<a href="#" title="Permalink to Vivamus ultrices luctus nunc sem sit amet interdum consectetuer" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Video post" src="images/vid.png"> Vivamus ultrices luctus nunc sem si...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 18, 2013</span>
					</div>
	</li>
-->
	</ul>
		</div>

		</div><!-- #main -->

		</div><!-- #content -->

	<footer id="footer" class="row-fluid">
		<div id="footer-widgets" class="container">
			<div class="footer-widget span3 block1">
				<div class="widget widget_latestpost">
					<h3 class="title"><span>Latest News</span></h3>
					<div class="latest-posts widget">
						
						<?php
							
				$sqllastnews="select * from article";
				$resultlastnews = mysql_query($sqllastnews);
				while($data = mysql_fetch_assoc($resultlastnews)) {
				
				echo "<div class=\"latest-post clearfix\">
				<a href=\"#\"><img width=\"225\" height=\"136\" src=".$data["contenuimage"]." class=\"thumb fl\" alt=\"shutterstock_134257640\" title=\"\" /></a>
				<h4><a href=\"#.html\" rel=\"bookmark\" title=".$data["titre"].">".$data["titre"]."</a></h4>
				<div class=\"post-time\">August 12, 2013</div>
				<div class=\"ratings\" style=\"float: none\">
				<input class=\"star\" type=\"radio\" name=\"footer-latest-post-1\" value=\"1\" disabled=\"disabled\"/>
				<input class=\"star\" type=\"radio\" name=\"footer-latest-post-1\" value=\"2\" disabled=\"disabled\"/>
				<input class=\"star\" type=\"radio\" name=\"footer-latest-post-1\" value=\"3\" disabled=\"disabled\"/>
				<input class=\"star\" type=\"radio\" name=\"footer-latest-post-1\" value=\"4\" disabled=\"disabled\" checked=\"checked\"/>
				<input class=\"star\" type=\"radio\" name=\"footer-latest-post-1\" value=\"5\" disabled=\"disabled\"/>
				</div>
				</div>";
				}
				?>

<!--						
						<div class="latest-post clearfix">
							<a href="#"><img width="225" height="136" src="images/shutterstock_134257640-225x136.jpg" class="thumb fl" alt="shutterstock_134257640" title="" /></a>
							<h4><a href="#" rel="bookmark" title="Lectus non rutrum pulvinar urna leo dignissim lorem">Lectus non rutrum pulvinar urna leo...</a></h4>
							<div class="post-time">August 12, 2013</div>
							<div class="ratings" style="float: none">
								<input class="star" type="radio" name="footer-latest-post-1" value="1" disabled="disabled"/>
								<input class="star" type="radio" name="footer-latest-post-1" value="2" disabled="disabled"/>
								<input class="star" type="radio" name="footer-latest-post-1" value="3" disabled="disabled"/>
								<input class="star" type="radio" name="footer-latest-post-1" value="4" disabled="disabled" checked="checked"/>
								<input class="star" type="radio" name="footer-latest-post-1" value="5" disabled="disabled"/>
							</div>
						</div>

						<div class="latest-post clearfix">
						<a href="#"><img width="225" height="136" src="images/shutterstock_70184773-225x136.jpg" class="thumb fl" alt="shutterstock_70184773" title="" /></a>
						<h4><a href="#" rel="bookmark" title="Suspen disse auctor dapibus neque pulvinar urna leo">Suspen disse auctor dapibus neque p...</a></h4>
						<div class="post-time">August 11, 2013</div>
							<div class="ratings" style="float: none">
								<input class="star" type="radio" name="footer-latest-post-2" value="1" disabled="disabled"/>
								<input class="star" type="radio" name="footer-latest-post-2" value="2" disabled="disabled"/>
								<input class="star" type="radio" name="footer-latest-post-2" value="3" disabled="disabled"/>
								<input class="star" type="radio" name="footer-latest-post-2" value="4" disabled="disabled" checked="checked"/>
								<input class="star" type="radio" name="footer-latest-post-2" value="5" disabled="disabled"/>
							</div>
						</div>

						<div class="latest-post clearfix">
						<a href="#"><img width="225" height="136" src="images/shutterstock_70787161-225x136.jpg" class="thumb fl" alt="shutterstock_70787161" title="" /></a>
						<h4><a href="#" rel="bookmark" title="Porta lorem ipsum dolor sit amet, consectetur adipiscing risus">xxxxxxxx...........</a></h4>
						<div class="post-time">August 2, 2013</div>
							<div class="ratings" style="float: none">
								<input class="star" type="radio" name="footer-latest-post-3" value="1" disabled="disabled"/>
								<input class="star" type="radio" name="footer-latest-post-3" value="2" disabled="disabled"/>
								<input class="star" type="radio" name="footer-latest-post-3" value="3" disabled="disabled"/>
								<input class="star" type="radio" name="footer-latest-post-3" value="4" disabled="disabled" checked="checked"/>
								<input class="star" type="radio" name="footer-latest-post-3" value="5" disabled="disabled"/>
							</div>
						</div>
					
					-->
					</div>
				</div>
			</div>
			
			<div class="footer-widget span3 block2">
				<div class="widget">
					<h3 class="title"><span>Latest Tweets</span></h3>
					<div class="magz-twitter-tweet">
						<a href="http://twitter.com/envato"><img class="twit-pic" src="images/envato.png" alt=""></a>
						<div class="twit-entry">&quot;RT <a href="http://twitter.com/SayersM">@SayersM</a> "Envato is here <a href="http://twitter.com/#!/search?q=%23YOW13">#YOW13</a>! http://t.co/FqARi13BlN" <a href="http://twitter.com/#!/search?q=%23lanyardlife">#lanyardlife</a>&quot;<div class="magz-twitter-tweet-time" id="magz-twitter-tweet-time-1">4 hours ago</div></div>
						<div class="clearfix"></div>
					</div>
					<div class="magz-twitter-tweet">
						<a href="http://twitter.com/envato"><img class="twit-pic" src="images/envato.png" alt=""></a><div class="twit-entry">&quot;RT <a href="http://twitter.com/MicrolancerBeta">@MicrolancerBeta</a>: Want a cool t-shirt? Of course you do! We're giving away Microlancer t-shirts while stocks last. Learn more: http://t.â€¦&quot;<div class="magz-twitter-tweet-time" id="magz-twitter-tweet-time-2">4 hours ago</div></div>
						<div class="clearfix"></div>
					</div>
				
					<div id="magz-twitter-follow-link"><a target="_blank" href="http://twitter.com/envato">Follow Twitter</a></div>
				</div>
			</div>
			
			<div class="footer-widget span3 block3">
				<div class="widget">
					<h3 class="title"><span>Tag Cloud</span></h3>
					<div class="tagcloud">
						<a href='#'>Blog</a>
						<a href='#'>Framework</a>
						<a href='#'>Grid</a>
						<a href='#'>Magazine</a>
						<a href='#'>Mobile</a>
						<a href='#'>Responsive</a>
						<a href='#'>Sidebar</a>
						<a href='#'>Themes</a>
						<a href='#'>WordPress</a>
					</div>
				</div>
			</div>
			
			<div class="footer-widget span3 block4">
				<div class="widget">
					<h3 class="title"><span>Social Media</span></h3>
						<div class="socmed clearfix">		
							<ul>
								<li>
									<a href="#"><img src="images/rss-icon.png" alt=""></a>
									<h4>RSS</h4>
									<p>Subscribe</p>
								</li>
								<li>
									<a href="#"><img src="images/twitter-icon.png" alt=""></a>
									<h4>37005</h4>
									<p>Followers</p>
								</li>
								<li>
									<a href="#"><img src="images/fb-icon.png" alt=""></a>
									<h4>109</h4>
									<p>Fans</p>
								</li>
							</ul>
						</div>
				</div>
			</div>
			
			<div class="footer-widget span6 block5">
				<img class="footer-logo" src="images/footer-logo.png" alt="Magazine">
					<div class="footer-text">
						<h4>About Magazine</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididu... </p>
					</div><div class="clearfix"></div>
			</div>

		</div><!-- footer-widgets -->

	
		<div id="site-info" class="container">
		
			<div id="footer-nav" class="fr">
				<ul class="menu">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>

			<div id="credit" class="fl">
				<p>All Right Reserved by Mag.ma</p>
			</div>

		</div><!-- .site-info -->
		
	</footer>

</div><!-- #wrapper -->

<?php mysql_close(); ?>
</body>


</html>
