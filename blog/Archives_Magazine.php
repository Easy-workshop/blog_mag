<?php
require_once("Include/DB.php");
?>
<!DOCTYPE html>
<!-- saved from url=(0064)http://demo.minimalthemes.net/magazine-static/fashion-news.html# -->
<html lang="fr"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Archives | Magazine</title>

<link rel="shortcut icon" href="http://demo.minimalthemes.net/magazine-static/images/favicon.png" title="Favicon">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" id="magz-style-css" href="Archives_Magazine_files/style.css" type="text/css" media="all">
<link rel="stylesheet" id="swipemenu-css" href="Archives_Magazine_files/swipemenu.css" type="text/css" media="all">
<link rel="stylesheet" id="bootstrap-css" href="Archives_Magazine_files/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" id="bootstrap-responsive-css" href="Archives_Magazine_files/bootstrap-responsive.css" type="text/css" media="all">
<link rel="stylesheet" id="simplyscroll-css" href="Archives_Magazine_files/jquery.simplyscroll.css" type="text/css" media="all">
<link rel="stylesheet" id="jPages-css" href="Archives_Magazine_files/jPages.css" type="text/css" media="all">
<link rel="stylesheet" id="rating-css" href="Archives_Magazine_files/jquery.rating.css" type="text/css" media="all">
<link rel="stylesheet" id="ie-styles-css" href="Archives_Magazine_files/ie.css" type="text/css" media="all">
<link rel="stylesheet" id="Roboto-css" href="Archives_Magazine_files/css" type="text/css" media="all">

<script type="text/javascript" src="Archives_Magazine_files/jquery-1.10.2.min.js.téléchargement"></script>
<script type="text/javascript" src="Archives_Magazine_files/html5.js.téléchargement"></script>
<script type="text/javascript" src="Archives_Magazine_files/bootstrap.min.js.téléchargement"></script>
<script type="text/javascript" src="Archives_Magazine_files/jquery.rating.js.téléchargement"></script>
<script type="text/javascript" src="Archives_Magazine_files/jquery.idTabs.min.js.téléchargement"></script>
<script type="text/javascript" src="Archives_Magazine_files/jquery.simplyscroll.js.téléchargement"></script>
<script type="text/javascript" src="Archives_Magazine_files/fluidvids.min.js.téléchargement"></script>
<script type="text/javascript" src="Archives_Magazine_files/jPages.js.téléchargement"></script>
<script type="text/javascript" src="Archives_Magazine_files/jquery.sidr.min.js.téléchargement"></script>
<script type="text/javascript" src="Archives_Magazine_files/jquery.touchSwipe.min.js.téléchargement"></script>
<script type="text/javascript" src="Archives_Magazine_files/jquery.swipemenu.init.js.téléchargement"></script>
<script type="text/javascript" src="Archives_Magazine_files/custom.js.téléchargement"></script>

		<!-- END -->

<style>.jp-invisible { visibility: hidden !important; } .jp-hidden { display: none !important; }</style></head>

<body style="">

<div id="page">

	<header id="header" class="container">
		<div id="mast-head">
			<div id="logo">
			<a href="http://demo.minimalthemes.net/magazine-static/index.html" title="Magazine" rel="home"><img src="Archives_Magazine_files/logo.png" alt="Magazine"></a>
			</div>
		</div>

				
        <nav class="navbar navbar-inverse clearfix nobot">
						
			<a id="responsive-menu-button" href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#swipe-menu">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>		
			</a>	

            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse" id="swipe-menu-responsive">

			<ul class="nav">
				
				<li>
				<span id="close-menu">
					<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" class="close-this-menu">Close</a>
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
				$sqlcat="select * from categorie";
				$resultcat = mysql_query($sqlcat);
				while($data = mysql_fetch_assoc($resultcat)) {
				echo  "<li><a href=\"Archives_Magazine.php\">".$data["titre"]."</a></li>";
				}
				 
				    ?>
            </div><!--/.nav-collapse -->
			
        </nav><!-- /.navbar -->
			
	</header><!-- #masthead -->

	<div id="headline" class="container">
	<div class="row-fluid">
		
        
 <?php 
				$sqlart="select * from article";
				$resultart = mysql_query($sqlart);
				while($data = mysql_fetch_assoc($resultart)) {
                   echo "<div class=\"span3\">";
                   echo " <article class=\"post\">";
		echo "<a href=\"#\" title=".$data["titre"]."rel=\"bookmark\">
		<img width=\"225\" height=\"136\" src=".$data["contenuimage"]." class=\"thumb\" alt=".$data["contenuimage"]." />	</a>";

			
				
		echo "<div class=\"entry\">
					<h3><a href=\"#\" title=".$data["contenutxt"]. "rel=\"bookmark\">".$data["titre"]."</a></h3>
					<p>5 months ago </p>
				</div>";
				
			echo "<div class=\"clearfix\"></div>
			</article></div>" ;

	
				
				}
				
				
				    ?>
		
	</div>
	</div>




	<div id="intr" class="container">
		<div class="row-fluid">
			<div class="brnews span9">
				<h3>News en vrac</h3>
				<div class="simply-scroll simply-scroll-container"><div class="simply-scroll-clip">
				<ul id="scroller" class="simply-scroll-list" style="width: 2750px;">
					<li><p><a href="#" title="Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem" rel="bookmark"><span class="title">xxxxxxxxxxxx...</a></p></li>
					<li><p><a href="#" title="Permalink to Suspen disse auctor dapibus neque pulvinar urna leo" rel="bookmark"><span class="title">Le Nouvel An : 1er Janvier | Manifeste de l'Indépendance : 11 Janvier | Al mawlid : 20 Novembre | Fête du travail : 1er Mai</span> qqqqqqqqqqqqqq...</a></p></li>
					<li><p><a href="#" title="Permalink to Porta lorem ipsum dolor sit amet, consectetur adipiscing risus" rel="bookmark"><span class="title">vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv...</a></p></li>
				</ul>
				</div>
				</div>
			</div>
		
		<div class="search span3"><div class="offset1">
			<form method="get" id="searchform" action="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">
				<p><input type="text" value="Search here..." onfocus="if ( this.value == &#39;Search here...&#39; ) { this.value = &#39;&#39;; }" onblur="if ( this.value == &#39;&#39; ) { this.value = &#39;Search here...&#39;; }" name="s" id="s" vk_17d03="subscribed">
				<input type="submit" id="searchsubmit" value="Search"></p>
			</form>
		</div></div>
		</div>
	</div>

	<div id="content" class="container">

		<div id="main" class="row-fluid">
			<div id="main-left" class="span8">
			<div class="entry-header">
				<h3>Category Archives: <span>Fashion News</span></h3>
			</div><!-- .archive-header -->
				
				<article class="post">
					
						
                        <?php 
				
				$sqlartgroup="select * from article ar,categorie cat where cat.idcategorie=ar.idcategorie";
				$resultartgroup = mysql_query($sqlartgroup);
				while($data = mysql_fetch_assoc($resultartgroup)) {
				
				echo " <h2 class=\"entry-title\"><span class=\"the_title\"><a href=\"#.html#\" title=\"Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem\" rel=\"bookmark\">".$data["titre"]."</a></span>";
				
				echo " <span class=\"entry-cat\"><a href=\"#.html#\" title=\"View all posts in Fashion News\" rel=\"category tag\">".$data["titre"]."</a></span></h2>";
					
				echo " <div class=\"entry-meta row-fluid\">
						<ul class=\"clearfix\">
							<li><img alt=\"\" src=\"Archives_Magazine_files/avatar.png\" height=\"15\" width=\"15\"><a href=\"#.html#\" title=\"Posts by Admin\" rel=\"author\">Admin</a></li>
							<li><img src=\"Archives_Magazine_files/time.png\" alt=\"\">August 12, 2013</li>
							<li><img src=\"Archives_Magazine_files/view-bg.png\" alt=\"\">5726 </li>
							<li><img src=\"Archives_Magazine_files/komen.png\" alt=\"\"><a href=\"#.html#\" title=".$data["titre"].">0 Comment</a></li>
							<li class=\"tagz\"><img src=\"Archives_Magazine_files/tags-icon.png\" alt=\"\"><a href=\"#.html\" rel=\"tag\">Grid</a><br></li>
						</ul>
					</div>";	
				
				
				echo  " <div class=\"entry-content\">
						<a href=\"#.html\" title=".$data["titre"]." rel=\"bookmark\">
						<p><img width=\"774\" height=\"320\" src=\"Archives_Magazine_files/shutterstock_134257640-774x320.jpg\" alt=\"shutterstock_134257640\"></p>
						</a>
						<p>".$data["contenutxt"]."
						</p><p class=\"moretag\"><a href=\"#.html\"> Read more</a></p>
					</div>
				</article>";
				
				
				
				
				}

					?>
                        
                       
						
					
										
					
				<!--
				<article class="post">
					<h2 class="entry-title">
						<span class="the_title"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Permalink to Suspen disse auctor dapibus neque pulvinar urna leo" rel="bookmark">Suspen disse auctor dapibus neque pulvinar urna leo</a></span>
						<span class="entry-cat"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html" title="View all posts in Fashion News" rel="category tag">Fashion News</a></span>
					</h2>
					<div class="entry-meta row-fluid">
						<ul class="clearfix">
							<li><img alt="" src="Archives_Magazine_files/avatar.png" height="15" width="15"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Posts by Admin" rel="author">Admin</a></li>
							<li><img src="Archives_Magazine_files/time.png" alt="">August 11, 2013</li>
							<li><img src="Archives_Magazine_files/view-bg.png" alt="">1545 </li>
							<li><img src="Archives_Magazine_files/komen.png" alt=""><span>Comments Off</span></li>
							<li class="tagz"><img src="Archives_Magazine_files/tags-icon.png" alt=""><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" rel="tag">Magazine</a><br></li>
						</ul>
					</div>						
					<div class="entry-content">
						<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Permalink to Suspen disse auctor dapibus neque pulvinar urna leo" rel="bookmark">
						<p><img width="774" height="320" src="Archives_Magazine_files/shutterstock_70184773-774x320.jpg" alt="shutterstock_70184773"></p>
						</a>
						<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing erat, quis bibendum enim congue porttitor. Etiam bibendum nibh at tincidunt varius. Fusce gravida tortor sit amet mauris scelerisque rhoncus. Aliquam erat volutpat. Nunc fringilla ligula non felis convallis tempus. Nunc id pulvinar nibh. Suspendisse mattis lobortis tellus non semper. In a suscipit nisl, et blandit
						</p><p class="moretag"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#"> Read more</a></p>
					</div>
				</article>
				
				<article class="post">
					<h2 class="entry-title">
						<span class="the_title"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Permalink to Aenean dignissim dignissim lorem pellentesque felis risus" rel="bookmark">Aenean dignissim dignissim lorem pellentesque felis risus</a></span>
						<span class="entry-cat"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html" title="View all posts in Fashion News" rel="category tag">Fashion News</a>, <a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="View all posts in Game News" rel="category tag">Game News</a></span>
					</h2>
					<div class="entry-meta row-fluid">
						<ul class="clearfix">
							<li><img alt="" src="Archives_Magazine_files/avatar.png" height="15" width="15"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Posts by Admin" rel="author">Admin</a></li>
							<li><img src="Archives_Magazine_files/time.png" alt="">July 2, 2013</li>
							<li><img src="Archives_Magazine_files/view-bg.png" alt="">583 </li>
							<li><img src="Archives_Magazine_files/komen.png" alt=""><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Comment on Aenean dignissim dignissim lorem pellentesque felis risus">0 Comment</a></li>
							<li class="tagz"><img src="Archives_Magazine_files/tags-icon.png" alt=""><a href="http://magazine.themedesigner.in/tag/themes/" rel="tag">Themes</a><br></li>
						</ul>
					</div>						
					<div class="entry-content">
						<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Permalink to Aenean dignissim dignissim lorem pellentesque felis risus" rel="bookmark">
						<p><img width="774" height="320" src="Archives_Magazine_files/shutterstock_58382248-774x320.jpg" alt="shutterstock_58382248"></p>
						</a>
						<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing erat, quis bibendum enim congue porttitor. Etiam bibendum nibh at tincidunt varius. Fusce gravida tortor sit amet mauris scelerisque rhoncus. Aliquam erat volutpat. Nunc fringilla ligula non felis convallis tempus. Nunc id pulvinar nibh. Suspendisse mattis lobortis tellus non semper. In a suscipit nisl, et blandit
						</p><p class="moretag"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#"> Read more</a></p>
					</div>
				</article>
				
				<article class="post">
					<h2 class="entry-title">
						<span class="the_title"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">Quisque sodales viverra ornare vitae libero ac risus</a></span>
						<span class="entry-cat"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html" title="View all posts in Fashion News" rel="category tag">Fashion News</a>, <a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="View all posts in Sport News" rel="category tag">Sport News</a>, <a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="View all posts in Technology" rel="category tag">Technology</a></span>
					</h2>
					<div class="entry-meta row-fluid">
						<ul class="clearfix">
							<li><img alt="" src="Archives_Magazine_files/avatar.png" height="15" width="15"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Posts by Admin" rel="author">Admin</a></li>
							<li><img src="Archives_Magazine_files/time.png" alt="">July 2, 2013</li>
							<li><img src="Archives_Magazine_files/view-bg.png" alt="">2477 </li>
							<li><img src="Archives_Magazine_files/komen.png" alt=""><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Comment on Quisque sodales viverra ornare vitae libero ac risus">0 Comment</a></li>
							<li class="tagz"><img src="Archives_Magazine_files/tags-icon.png" alt=""><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" rel="tag">WordPress</a><br></li>
						</ul>
					</div>						
					<div class="entry-content">
						<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">
						<p><img width="774" height="320" src="Archives_Magazine_files/shutterstock_123603871-774x320.jpg" alt="gallery-1"></p>
						</a>
						<p>Quisque sodales viverra ornare. Aenean posuere lacus sed facilisis gravida. Morbi auctor consectetur mauris a ultrices. Quisque sed justo sollicitudin, facilisis quam non, euismod felis. Aliquam interdum quam sed odio ultrices viverra. Ut turpis risus, rutrum ut odio eget, iaculis vestibulum enim. Sed id mollis ligula. Aliquam sapien elit, vestibulum at erat eu, consequat tincidunt
						</p><p class="moretag"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#"> Read more</a></p>
					</div>
				</article>
				
				<article class="post">
					<h2 class="entry-title">
						<span class="the_title"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Permalink to Phasellus scelerisque massa molestie iaculis lectus pulvinar" rel="bookmark">Phasellus scelerisque massa molestie iaculis lectus pulvinar</a></span>
						<span class="entry-cat"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html" title="View all posts in Fashion News" rel="category tag">Fashion News</a></span>
					</h2>
					<div class="entry-meta row-fluid">
						<ul class="clearfix">
							<li><img alt="" src="Archives_Magazine_files/avatar.png" height="15" width="15"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Posts by Admin" rel="author">Admin</a></li>
							<li><img src="Archives_Magazine_files/time.png" alt="">June 2, 2013</li>
							<li><img src="Archives_Magazine_files/view-bg.png" alt="">1171 </li>
							<li><img src="Archives_Magazine_files/komen.png" alt=""><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Comment on Phasellus scelerisque massa molestie iaculis lectus pulvinar">0 Comment</a></li>
						</ul>
					</div>						
					<div class="entry-content">
						<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" title="Permalink to Phasellus scelerisque massa molestie iaculis lectus pulvinar" rel="bookmark">
						<p><img width="774" height="320" src="Archives_Magazine_files/shutterstock_109209743-774x320.jpg" alt="shutterstock_109209743"></p>
						</a>
						<p>Phasellus scelerisque massa porta molestie iaculis. Praesent in consectetur magna. Nunc blandit diam ligula, eu cursus tellus tempus in. Donec scelerisque sollicitudin tempor. Nunc eget suscipit lorem. Etiam non tempor urna. Suspendisse vehicula ante sit amet diam euismod, eu aliquam justo vulputate. In venenatis ligula eget aliquam sodales. Nam porta, magna a sollicitudin tincidunt, erat
						</p><p class="moretag"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#"> Read more</a></p>
					</div>
				</article>
-->
			</div><!-- #main-left -->

		<div id="sidebar" class="span4">

			<div id="tabwidget" class="widget tab-container"> 
				<ul id="tabnav" class="clearfix"> 
					<li><h3><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#tab1" class="selected"><img src="Archives_Magazine_files/view-white-bg.png" alt="Popular">Popular</a></h3></li>
					<li><h3><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#tab2"><img src="Archives_Magazine_files/time-white.png" alt="Recent">Recent</a></h3></li>
				    <li><h3><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#tab3"><img src="Archives_Magazine_files/komen-putih.png" alt="Comments">Comments</a></h3></li>
				</ul> 

			<div id="tab-content">
			
	 		<div id="tab1" style="display: block;">
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


					
					<script type="text/javascript">
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
				
				<div class="holder clearfix"><a class="jp-previous jp-disabled">← previous</a><a class="jp-current"></a><span class="jp-hidden">...</span><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" class=""></a><span class="jp-hidden">...</span><a></a><a class="jp-next">next →</a></div>
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
					
					
					
				
				
				
				
				</div>
			</div>

			<div class="widget widget_latestpost"><h3 class="title"><span>Technology News</span></h3>
				<div class="latest-posts">
					<article class="post">
						<a class="image_thumb_zoom" href="#.html#" title="Permalink to Porta lorem ipsum dolor sit amet, consectetur adipiscing risus" rel="bookmark">
						<img width="371" height="177" src="Archives_Magazine_files/shutterstock_70787161-371x177.jpg" class="attachment-post-first wp-post-image" alt="shutterstock_70787161">
						</a>
						<h4 class="post-title">
						<a href="#.html#" title="Permalink to Porta lorem ipsum dolor sit amet, consectetur adipiscing risus" rel="bookmark">Porta lorem ipsum dolor sit amet, c...</a>
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
				
					
			


			</div>
			</div>
			
			
			
			<div class="video-box widget row-fluid">
				<h3 class="title"><span style="background-color: #;color: #;">Videos Gallery</span></h3>		
				<iframe width="369" height="188" src="Archives_Magazine_files/pkRB5xC1Cw8.html" frameborder="0" allowfullscreen=""></iframe>
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
					
					
					
				
				
				
				
				
				</ul>
        	</div>
        				
		</div><!-- sidebar -->
		
		<div class="clearfix"></div>

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
				
				
					
					
					
					</div>
				</div>
			</div>
			
			<div class="footer-widget span3 block2">
				<div class="widget">
					<h3 class="title"><span>Latest Tweets</span></h3>
					<div class="magz-twitter-tweet">
						<a href="http://twitter.com/envato"><img class="twit-pic" src="Archives_Magazine_files/envato.png" alt=""></a>
						<div class="twit-entry">"RT <a href="http://twitter.com/SayersM">@SayersM</a> "Envato is here <a href="http://twitter.com/#!/search?q=%23YOW13">#YOW13</a>! http://t.co/FqARi13BlN" <a href="http://twitter.com/#!/search?q=%23lanyardlife">#lanyardlife</a>"<div class="magz-twitter-tweet-time" id="magz-twitter-tweet-time-1">4 hours ago</div></div>
						<div class="clearfix"></div>
					</div>
					<div class="magz-twitter-tweet">
						<a href="http://twitter.com/envato"><img class="twit-pic" src="Archives_Magazine_files/envato(1).png" alt=""></a><div class="twit-entry">"RT <a href="http://twitter.com/MicrolancerBeta">@MicrolancerBeta</a>: Want a cool t-shirt? Of course you do! We're giving away Microlancer t-shirts while stocks last. Learn more: http://t.…"<div class="magz-twitter-tweet-time" id="magz-twitter-tweet-time-2">4 hours ago</div></div>
						<div class="clearfix"></div>
					</div>
				
					<div id="magz-twitter-follow-link"><a target="_blank" href="http://twitter.com/envato">Follow Twitter</a></div>
				</div>
			</div>
			
			<div class="footer-widget span3 block3">
				<div class="widget">
					<h3 class="title"><span>Tag Cloud</span></h3>
					<div class="tagcloud">
						<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">Blog</a>
						<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">Framework</a>
						<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">Grid</a>
						<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">Magazine</a>
						<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">Mobile</a>
						<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">Responsive</a>
						<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">Sidebar</a>
						<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">Themes</a>
						<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">WordPress</a>
					</div>
				</div>
			</div>
			
			<div class="footer-widget span3 block4">
				<div class="widget">
					<h3 class="title"><span>Social Media</span></h3>
						<div class="socmed clearfix">		
							<ul>
								<li>
									<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#"><img src="Archives_Magazine_files/rss-icon.png" alt=""></a>
									<h4>RSS</h4>
									<p>Subscribe</p>
								</li>
								<li>
									<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#"><img src="Archives_Magazine_files/twitter-icon.png" alt=""></a>
									<h4>37005</h4>
									<p>Followers</p>
								</li>
								<li>
									<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#"><img src="Archives_Magazine_files/fb-icon.png" alt=""></a>
									<h4>109</h4>
									<p>Fans</p>
								</li>
							</ul>
						
						
						
						</div>
				</div>
			</div>
			
			<div class="footer-widget span6 block5">
				<img class="footer-logo" src="Archives_Magazine_files/footer-logo.png" alt="Magazine">
					<div class="footer-text">
						<h4>About Magazine</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididu... </p>
					</div><div class="clearfix"></div>
			</div>

		</div><!-- footer-widgets -->

	
		<div id="site-info" class="container">
		
			<div id="footer-nav" class="fr">
				<ul class="menu">
					<li><a href="http://demo.minimalthemes.net/magazine-static/index.html">Home</a></li>
					<li><a href="http://demo.minimalthemes.net/magazine-static/about.html">About</a></li>
					<li><a href="http://demo.minimalthemes.net/magazine-static/blog.html">Blog</a></li>
					<li><a href="http://demo.minimalthemes.net/magazine-static/contact.html">Contact</a></li>
				</ul>
			</div>

			<div id="credit" class="fl">
				<p>All Right Reserved by minimalthemes</p>
			</div>

		</div><!-- .site-info -->
		
	</footer>

</div><!-- #wrapper -->



<div id="sidr-right" class="sidr right"><div class="sidr-inner">

			<ul class="sidr-class-nav">
				
				<li>
				<span id="sidr-id-close-menu">
					<a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" class="sidr-class-close-this-menu">Close</a>
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
								
				<li><a href="http://demo.minimalthemes.net/magazine-static/index.html"><img src="Archives_Magazine_files/home.png" alt="Magazine"></a></li>
				<li class="sidr-class-dropdown"><a href="http://demo.minimalthemes.net/magazine-static/index.html" class="sidr-class-dropdown-toggle sidr-class-disabled">Home<b class="sidr-class-caret"></b></a>
					<ul class="sidr-class-sub-menu sidr-class-dropdown-menu">
						<li><a href="http://demo.minimalthemes.net/magazine-static/magazine2.html">Homepage 2</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/blog.html">Homepage 3</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/shop-page.html">Homepage 4</a></li>
					</ul>
				</li>
				<li><a href="http://demo.minimalthemes.net/magazine-static/about.html">About</a></li>
				<li class="sidr-class-dropdown"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html##" class="sidr-class-dropdown-toggle sidr-class-disabled">Page Templates<b class="sidr-class-caret"></b></a>
					<ul class="sidr-class-sub-menu sidr-class-dropdown-menu">
                        <li><a href="http://demo.minimalthemes.net/magazine-static/index.html">Magazine 1</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/magazine2.html">Magazine 2</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/shop-page.html">Magazine 3</a></li>
						<li class="sidr-class-dropdown"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" class="sidr-class-dropdown-toggle sidr-class-disabled">Blog Page<b class="sidr-class-caret"></b></a>
							<ul class="sidr-class-sub-menu sidr-class-dropdown-menu">
								<li><a href="http://demo.minimalthemes.net/magazine-static/blog.html">Blog</a></li>
								<li><a href="http://demo.minimalthemes.net/magazine-static/blog-left.html">Blog Left</a></li>
								<li><a href="http://demo.minimalthemes.net/magazine-static/blog-right.html">Blog Right</a></li>
								<li><a href="http://demo.minimalthemes.net/magazine-static/single-post.html">Single Blog</a></li>
							</ul>
						</li>
                        <li class="sidr-class-dropdown"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" class="sidr-class-dropdown-toggle sidr-class-disabled">Shop Page<b class="sidr-class-caret"></b></a>
							<ul class="sidr-class-sub-menu sidr-class-dropdown-menu">
								<li><a href="http://demo.minimalthemes.net/magazine-static/shop-page.html">Shop</a></li>
								<li><a href="http://demo.minimalthemes.net/magazine-static/shop-detail.html">Shop Detail</a></li>
								<li><a href="http://demo.minimalthemes.net/magazine-static/cart.html">Cart Page</a></li>
								<li><a href="http://demo.minimalthemes.net/magazine-static/checkout.html">Checkout Page</a></li>
								<li><a href="http://demo.minimalthemes.net/magazine-static/account.html">Account Page</a></li>
							</ul>
						</li>
                        <li><a href="http://demo.minimalthemes.net/magazine-static/fullwidth.html">Fullwidth</a></li>
                        <li><a href="http://demo.minimalthemes.net/magazine-static/features.html">Features</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/contact.html">Contact</a></li>
                        <li><a href="http://demo.minimalthemes.net/magazine-static/author.html">Author Pages</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/404.html">Error 404</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/fullwidth.html">Full Width</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/gallery-2col.html">Galleries – 2 Columns</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/gallery-3col.html">Galleries – 3 Columns</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/gallery-4col.html">Galleries – 4 Columns</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/sitemap.html">Site Map</a></li>
					</ul>
				</li>
                <li class="sidr-class-dropdown"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html##" class="sidr-class-dropdown-toggle sidr-class-disabled">Shortcodes<b class="sidr-class-caret"></b></a>
					<ul class="sidr-class-sub-menu sidr-class-dropdown-menu">
						<li><a href="http://demo.minimalthemes.net/magazine-static/accordion.html">Accordion</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/blockquotes.html">Blockquotes</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/button.html">Buttons</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/column.html">Columns</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/dropcap.html">Dropcaps</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/heading.html">Heading</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/tabs.html">Tabs</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/tables.html">Tables</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/warning.html">Warning</a></li>
					</ul>
				</li>
				<li class="sidr-class-dropdown"><a href="http://demo.minimalthemes.net/magazine-static/blog.html" class="sidr-class-dropdown-toggle sidr-class-disabled">Blog<b class="sidr-class-caret"></b></a>
					<ul class="sidr-class-sub-menu sidr-class-dropdown-menu">
						<li><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html">Fashion News</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">Game News</a></li>
						<li><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">Sport News</a></li>
						<li class="sidr-class-dropdown"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" class="sidr-class-dropdown-toggle sidr-class-disabled">Technology<b class="sidr-class-caret"></b></a>
							<ul class="sidr-class-sub-menu sidr-class-dropdown-menu">
								<li><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html">Fashion News</a></li>
								<li><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">Game News</a></li>
								<li><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">Sport News</a></li>
								<li><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#">Technology</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="sidr-class-dropdown"><a href="http://demo.minimalthemes.net/magazine-static/fashion-news.html#" class="sidr-class-dropdown-toggle sidr-class-disabled">Shop Page<b class="sidr-class-caret"></b></a>
                    <ul class="sidr-class-sub-menu sidr-class-dropdown-menu">
                        <li><a href="http://demo.minimalthemes.net/magazine-static/shop-page.html">Product Page</a></li>
                        <li><a href="http://demo.minimalthemes.net/magazine-static/shop-detail.html">Product Detail</a></li>
                        <li><a href="http://demo.minimalthemes.net/magazine-static/cart.html">Cart Page</a></li>
                        <li><a href="http://demo.minimalthemes.net/magazine-static/checkout.html">checkout</a></li>
                        <li><a href="http://demo.minimalthemes.net/magazine-static/order.html">Order Detail</a></li>
                    </ul>
                </li>
				<li><a href="http://demo.minimalthemes.net/magazine-static/contact.html">Contact</a></li>
			</ul>
            </div></div></body></html>