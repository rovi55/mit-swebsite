<!DOCTYPE html>
<html class="no-js">

<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<title>MIT SWE | Board </title>
		<meta name="keywords" content="MIT SWE, MIT, Society of Women Engineers, MIT Society of Women Engineers" />
		<meta name="description" content="Massachusetts Institute of Technology Society of Women Engineers is the largest diversity student organization on campus and aims to inspire younger generations about engineering, encourage the notion of diversity in engineering, and determine and advocate for the needs of women engineers at MIT and in the professional world." />
		<!-- global styles -->
		<link rel="stylesheet" href="../../css/bootstrap.css">
		<link rel="stylesheet" href="../../css/footer-distributed.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="../../css/mt-global.css">
<!-- 		page specific styles -->	
		<link rel="stylesheet" href="../css/styles_board.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>

<body class="page  page--home">

	<header class="siteHeader  strip">
	    <div class="wrapper">
	        <!-- Logo -->
	        <a href="../../home/" class="branding"><img src="../../images/SWE_Logo_MIT-horz.png" alt="(MITSWE) SWE Logo"></a>

	         <!-- Primary site Nav -->
	        <a href="#siteNav" class="hamburger  js-menuLink">
			    <span class="hamburger-bun  hamburger-bun--top"></span>
			    <span class="hamburger-patty"></span>
			    <span class="hamburger-bun  hamburger-bun--btm"></span>
			</a>

		<nav id="siteNav" class="navbar  primaryNav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
		    <ul class="primaryNav-list">

		        <!-- START: Only visible on mobile -->
		       <!--  <li class="navItem  navItem--supportNumber">
		                            <a class="supportNumber" href="tel:+18775784000">877.578.4000</a>
		                    </li> -->
<!-- 		        <li class="navItem  navItem--login">
		            <a class="loginLink" href="https://ac.mediatemple.net/login.mt?redirect=home.mt"><span>Members Only</span></a>
		        </li> -->
		        <!-- END: Only visible on mobile -->


		       	<!-- Web Hosting -->
		        <!--  About -->
		        <li class="navItem  hasDropdown  js-hasDropdown">
		            <a class="js-dropdownTrigger" href="../../about/"><span>About</span></a>

		            <div class="navDropdown">
		                <ul class="nav  nav--stacked" style="clear:both">
		                    <li class="navItem"><a href="../../about/board">Board Members</a></li>
		                    <li class="navItem"><a href="../../about/national_swe_membership">National SWE</a></li>
		                </ul>
		            </div>
		        </li>

		        <!-- Outreach -->
		        <li class="navItem  hasDropdown  js-hasDropdown ">
		            <a class="js-dropdownTrigger" href="../../outreach/"><span >Outreach</span></a>

					 <div class="navDropdown">
		                <ul class="nav  nav--stacked">
		                    <li class="navItem"><a href="../../outreach/elementary_school">Elementary School</a></li> 
		                    <li class="navItem"><a href="../../outreach/middle_school">Middle School</a></li> 
		                    <li class="navItem"><a href="../../outreach/high_school">High School</a></li> 
		                    <li class="navItem"><a href="../../outreach/special_events">Special Events</a></li> 
		                    <li class="navItem"><a href="../../outreach/resources">Resources</a></li> 

		                </ul>
		            </div>
		        </li>

		        <!-- Corporate -->
		        <li class="navItem hasDropdown  js-hasDropdown">
		            <a class="js-dropdownTrigger" href="../../corporate/"><span>Corporate</span></a>
		            <div class="navDropdown">
		                <ul class="nav  nav--stacked">
		                    <li class="navItem"><a href="../../corporate/banquet/">Career Fair Banquet</a></li>
		                    <li class="navItem"><a href="../../corporate/resume_database/">Resume Database</a></li>
		                </ul>
		            </div>
		        </li>

		        <!-- Calendar -->
		        <li class="navItem ">
		            <a href="../../calendar/"><span>Calendar</span></a>
		        </li>

		        <!--  News -->
		        <li class="navItem ">
		            <a href="../../news/"><span>News</span></a>
		        </li>

		        <!-- Contact Us -->
		        <li class="navItem ">
		            <a href="../../contact/"><span>Contact Us</span></a>
		        </li>		        

				<!-- Members Only -->
		        <li class="navItem  hasDropdown  js-hasDropdown">
		            <a class="js-dropdownTrigger" href="../../members/"><span>For Members</span></a>
		            <div class="navDropdown">
		                <ul class="nav  nav--stacked">
		                    <li class="navItem"><a href="../../members/section_resources">Section Resources</a></li>
		                    <li class="navItem"><a href="../../members/resume_upload">Resume Upload</a></li>
		                    <li class="navItem"><a href="http://swe.mit.edu/wiki">Board Wiki</a></li>
		                </ul>
		            </div>
		        </li>
		    </ul>
		</nav>

<!-- 
        <div id="siteNav" class="navbar  primaryNav rightNav">
		    <ul class="nav  headerNav  u-pullRight">
				
		           
	        </ul>
        </div>
	    </div> <!-- /.wrapper -->
	    <div class="navDropdown--background offPage"></div> 


	</header> <!-- /.siteHeader --> 


    <div class="jumbotron">
      <div class="container">
      </div>
    </div>

    <div class="learn-more">
	  <div class="container">
	  	<h4 style="font-size: 30px; text-align: center"><span style="color: #20bc7e;"><strong>SWE Board</strong></span></h4><br><br>
	  	<?php
            $dbh = mysql_connect('sql.mit.edu', 'swe', 'zam52fin')or die('Could not connect: ' . mysql_error() . '<br />');

            mysql_select_db("swe+board") or die("No database selected.");
            
            include_once 'database.php';

            $query = "SELECT * FROM exec2016"; 

            $result = mysql_query($query) or die(mysql_error());

            while($row = mysql_fetch_array($result)){

                echo "<a href=\"#TB_inline?height=240&width=310&inlineId=" . $row['first'] . $row['last'] . $row['year'].  "\" class=\"thickbox\">";
	
                echo "<div class=\"phototext-div100\" onmouseover=\"this.className='phototext-div70'\" onmouseout=\"this.className='phototext-div100'\" style=\"margin: 14px; float: left; background: black url(photos/". $row['file'] .") no-repeat center center;\";>";
                echo "<span id=\"phototext-span\">" . $row['first']. "</span><br>";
                echo "</div>";

                echo "</a>";
                echo "<div id=\"" . $row['first'] . $row['last'] . $row['year']. "\" style=\"display:none\">"; 

                echo "<div style=\"float: left; width: 150px; height: 230px;\"><img src=\"photos/" . $row['file'] . "\" width=150></div>";
                echo "<div style=\"float: right; width: 150px; line-height: 1.4em; color: #444444; font-size: 13px;\"><span class=\"date\">" . $row['first']. " ". $row['last']. "." . "</span><br />";
                echo "<b>Position:</b> " . $row['position'] . "<br />";
                echo "<b>Year: </b>" . $row['year']. "<br /><b>Course: </b>". $row['course'] . "<br />";
                echo "<b>Fun fact: </b>". $row['fact'] . "</div>";

                //echo "<p style=\"text-align:center\"><a onclick=\"tb_remove()\" style=\"\"/>close</p> ";
                echo "</div>"; 
                //echo "<br /><br />";

            }
		?>
		<div class="row">
                  <div class="col-md-2">
                        <h3>Exec</h3>
                        <p>President:<br>Lynn Takeshita<br>
                        <br>
			Administrative Officer:<br>Erin Hong<br>
                        <br>
			Financial Officer:<br>Michelle Tai<br>
			<br>
			Technology Officer:<br>Lisette Tellez<br>
                        <br>
			VP Outreach:<br>Emma Castanos<br>
                        <br>
			VP Outreach:<br>Teresa de Figueiredo<br>
                        <br>
			VP Campus Relations:<br>Joanna Han<br>
                        <br>
			VP Corporate:<br>Christiane Adcock<br>
			<br>
                        VP Membership:<br>Marisa Rozzi
                        </p>
                  </div>
	  	  <div class="col-md-2">
			<h3>Outreach</h3>
			<p>Middle School Outreach Chairs:<br>
			Jeanie Pearson<br>
			Victoria Dean<br>
			<br>
			High School Outreach Chairs:<br>
			Allison Nguyen<br>
			Ana Maria Vargas<br>
			Shivani	Chauhan<br>
			<br>
			WiSE Chairs:<br>
			Avira Som<br>
			Zareen Choudhury<br>
			<br>
			Girl Scouts Outreach Chairs:<br>
			Ellen O'Connell<br>
			Rebecca Grekin<br>
			<br>
			KEYS Chairs:<br>
			Celine Qiu<br>
			Hannah Thel<br>
			Rebecca Gallivan<br>
			<br>
			Off-Campus Education Chairs:<br>
			Jennifer McCleary<br>
			Joy Yu<br>
			Reva Ranka<br>
			<br>
			Events Outreach Coordinators:<br>
			Jenny Xu<br>
			Margaret Bertoni<br>
			<br>
			Festival Chairs:<br>
			Monica Pham<br>
			Yanisa Techagumthorn<br>
			<br>
			CodeIt Chair:<br>
			Kelsey Wong</p>
		  </div>
		  <div class="col-md-2">
			<h3>Campus Relations</h3>
			<p>Marketing and Media Coordinators:<br>
			Amanda Wu<br>
			Chaaru Deb<br>
			<br>
			Campus Representatives:<br>
			Liz Cox<br>
			Kerrie Greene<br>
			<br>
			Department Liaisons:<br>
			Jae Hyun Kim<br>
			Morgan Matranga</p>
	     	  </div>
		  <div class="col-md-2">
			<h3>Career Development</h3>
			<p>Career Development Chairs:<br>
			Alisha Saxena<br>
			Amy Huang<br>
			Katherine Wang<br>
			Siena Scigliuto<br>
			Stephanie Chou</p>
		  </div>
		  <div class="col-md-2">
			<h3>Membership</h3>
			<p>Membership Development Chairs:<br>
			Geneva Werner<br>
			Michele Miao<br>
			<br>
			Internal Mentorship Chairs:<br>
			Hannah Huynh<br>
			Jessica Chen<br>
			<br>
			External Relations Chairs:<br>
			Judy Wang<br>
			Sophie Blackburn</p>
		  </div>
		  <div class="col-md-2">
                        <h3>Technology</h3>
                        <p>Technology Chairs:<br>
                        Baula Xu<br>
                        Nancy Hung</p>
                  </div>		  
	    </div>
	  </div>
	</div>

</div></div></td></tr>


	<div id="footer">
		<footer class="footer-distributed">
			<div class="footer-right">

				<a href="https://www.facebook.com/swe.mit/"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/mitswe"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/mitswe/"><i class="fa fa-instagram"></i></a>
			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="../../home/">Home</a>
					<a href="../../about/">About</a>
					<a href="../../outreach/">Outreach</a>
					<a href="../../corporate/">Corporate</a>
					<a href="../../calendar/">Calendar</a>
					<a href="../../news/">News</a>
					<a href="../../contact/">Contact</a>
					<a href="../../members/">Members Only</a>
				</p>

				<p>MIT Society of Women Engineers &copy; 2016</p>
			</div>

		</footer>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script src="../../js/mt-global.js"></script>


	</body>

</html>
