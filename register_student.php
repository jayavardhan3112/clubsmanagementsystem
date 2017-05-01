
 
<?php 
//Start the session to see if the user is authenticated user. 
session_start(); 
 
?> 

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="IIITDMJ CLUBS">
	<meta name="author"      content="Jaivardhan">

    <title>Registration </title>
    
	    <link rel="shortcut icon" href="images/newfavicon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> 
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> 
	    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="css/animate.css" />
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	    <link rel="stylesheet" type="text/css" href="css/superfish.css" />
	    <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
	     <!-- <link rel="stylesheet" href="/~sports/css/bootstrap.min.css"> -->
	     <!--<link rel="stylesheet" href="/~sports/css/font-awesome.min.css">-->

       <!-- Custom styles for our template -->
	     <!-- <link rel="stylesheet" href="/~sports/css/bootstrap-themes.css" media="screen" > -->
	     <!-- <link rel="stylesheet" href="/~sports/css/main.css"> -->
	     <!-- <link rel="stylesheet" href="/~sports/css/jssor.css"> -->
    	 <!-- <link rel="stylesheet" href="/~sports/css/jssor-simplefade.css"> -->
	     <!-- <link rel="stylesheet" href="/~sports/css/components3.css"> -->


	    <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="https://use.fontawesome.com/d12e5f0dd2.js"></script>

	
  	   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	     <!--[if lt IE 9]>
	     <script src="/~sports/js/html5shiv.js"></script>
	     <script src="/~sports/js/respond.min.js"></script>
	     <![endif]-->

	     <style type="text/css">
             
       
              .input-field label {
     color: #000;
   }

	     	 .input-field label {
          	 color: #5a5a5a;
   			}
   	/* label focus color */
 			  .input-field input[type=text]:focus + label {
     			color: #FCC72C;
 		    }
   /* label underline focus color */
   			  .input-field input[type=text]:focus {
     			border-bottom: 1px solid #FCC72C;
     			box-shadow: 0 1px 0 0 #FCC72C;
   			}
   /* valid color */
   			  .input-field input[type=text].valid {
     			border-bottom: 1px solid #FCC72C;
   			    box-shadow: 0 1px 0 0 #FCC72C;
   			}
   /* invalid color */
   			  .input-field input[type=text].invalid {
     			border-bottom: 1px solid #FCC72C;
     			box-shadow: 0 1px 0 0 #FCC72C;
   			}
   /* icon prefix focus color */
 			  .input-field .prefix.active {
     			color: #5a5a5a;
   			}
        

	     </style>
	</head>

<body>
		
    <div id="fh5co-wrapper">
		  <div id="fh5co-page">
		    <div id="fh5co-header">
			   <header id="fh5co-header-section">
				    <div class="container" style="min-width:90%">
				    	<div class="nav-header">
			     			<nav id="fh5co-menu-wrap" style="background: url('images/bg.png') repeat;" role="navigation">
					       		<ul class="sf-menu" id="fh5co-primary-menu">
							
						<!-- <div id="wrap">
						  <form action="search/search.php" method="get" role="search" autocomplete="on">
						  	<input id="search" name="query" type="text" placeholder="What're we looking for ?">
						  	<input id="search_submit" value="1" type="submit">
						  </form>
						</div> -->    
    

           

				<li>
							<a href="#" class="fh5co-sub-ddown sf-with-ul">UPDATES</a>
								<ul class="fh5co-sub-menu">
									<li><a href="indexad1d.html?r=about/news">NEWS</a></li>
									<li><a href="indexd810.html?r=events/gc">UPCOMING</a></li>
								</ul>
						</li>

						<li><a href="#" class="fh5co-sub-ddown sf-with-ul">EVENTS</a>
							<ul class="fh5co-sub-menu">
								<li><a href="index5232.html?r=events/calendar">CALENDAR</a></li>
								<li><a href="indexefb0.html?r=events/trip">FESTS</a></li>
								<li><a href="index360b.html?r=events/workshop">WORKSHOPS</a></li>
					   	</ul>
						</li>

						<li>
							<a href="#" class="fh5co-sub-ddown sf-with-ul">CLUBS</a>
								 <ul class="fh5co-sub-menu">
										<li><a href="technical.html">TECHNICAL<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                       <ul class="fh5co-sub-menu">
                        <li><a href="index5232.html?r=events/calendar">PROGRAMMING</a></li>
                        <li><a href="indexefb0.html?r=events/trip">ASTRONOMY</a></li>
                        <li><a href="index360b.html?r=events/workshop">ELECTRONICS</a></li>
                        <li><a href="index360b.html?r=events/workshop">FILM MAKING</a></li>
                        <li><a href="index360b.html?r=events/workshop">MANAGEMENT</a></li>
                        <li><a href="index360b.html?r=events/workshop">ROBOTICS</a></li>
                       
                       <li><a href="index360b.html?r=events/workshop">AUTOMOTIVE</a></li>
                       <li><a href="index360b.html?r=events/workshop">PHOTOGRAPHY</a></li>
                       <li><a href="index360b.html?r=events/workshop">CAD</a></li>
                       </ul>
 										<li ><a href="cultural.html">CULTURAL<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                  <ul class="fh5co-sub-menu">
                        <li><a href="index5232.html?r=events/calendar">DANCE</a></li>
                        <li><a href="indexefb0.html?r=events/trip">LITERARY</a></li>
                        <li><a href="index360b.html?r=events/workshop">MUSIC</a></li>
                        <li><a href="index360b.html?r=events/workshop">DRAMATICS</a></li>
                        <li><a href="index360b.html?r=events/workshop">ARTS</a></li>
                  </ul>
            </li>
 										   <li ><a href="sports.html">SPORTS<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        <ul class="fh5co-sub-menu">
                          <li><a href="index5232.html?r=events/calendar">CRICKET</a></li>
                          <li><a href="indexefb0.html?r=events/trip">BASKETBALL</a></li>
                          <li><a href="index360b.html?r=events/workshop">CHESS</a></li>
                          <li><a href="index360b.html?r=events/workshop">FOOTBALL</a></li>
                          <li><a href="index360b.html?r=events/workshop">VOLLEYBALL</a></li>
                          <li><a href="index360b.html?r=events/workshop">TABLE TENNIS</a></li>
                          <li><a href="index360b.html?r=events/workshop">CARROM</a></li>
                          <li><a href="index360b.html?r=events/workshop">BADMINTON</a></li>
                          <li><a href="index360b.html?r=events/workshop">LAWN TENNIS</a></li>
                          <li><a href="index360b.html?r=events/workshop">ATHLETICS</a></li>
                        </ul>
                       </li>
 									       </ul>
                    </li>
								</li>

								<li><a href="index4da3.html?r=archive/gallery">GALLERY</a></li>


							 <li ><a href="#" class="fh5co-sub-ddown sf-with-ul">PEOPLE</a>
							   <ul class="fh5co-sub-menu">
							    <li><a href="index5888.html?r=archive/halloffame">HALL OF FAME</a></li>
				
							   <li><a href="index0afd.html?r=profile&amp;letter=A">STUDENT COUNCIL</a></li>
							   <li><a href="indexef1e.html?r=about/officers">STAFF</a></li>

						  	</ul>
						    </li>						
							</ul>
						</nav>
					</div>
				</div>
			</header>

		</div>





		<div class="fh5co-overlay" style=" height: 80px;"></div>
<div id="fh5co-blog-section" class="fh5co-section-gray">
	<div class="container" style="margin-top:40px;">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h2>REGISTRATION</h2>
			</div>
		</div>
	</div>
    
    
    
	<div class="container">
		<div class="row">
			
			<form method="post" action="edit_account.php">
				<div class="input-field col s12 m6" style="width:60%; margin-left: 20%">
						<select name="club[]" class="icons" style="width:50%; margin-left:80%">
								<option value="" disabled selected>CLUB</option>
								<option value="gsec">CLUB</option>
								<option value="web">PROGRAMMING</option>
								<option value="Adventure and Rolling Sports">ASTRONOMY</option>
								<option value="Aquatics">ELECTRONICS</option>
								<option value="Athletics">FILM MAKING</option>
								<option value="Badminton">MANAGEMENT</option>
								<option value="Basketball">ROBOTICS</option>
								<option value="Board Games">AUTOMOTIVE</option>
								<option value="Cricket">PHOTOGRAPHY</option>
								<option value="Football">CAD</option>
								<option value="Hockey">DANCE</option>
								<option value="Indian Games">LITERARY</option>
								<option value="Lawn Tennis">MUSIC</option>
								<option value="Squash">DRAMATICS</option>
								<option value="Table Tennis">ARTS</option>
								<option value="Volleyball">VOLLEYBALL</option>
								<option value="Weightlifting">CRICKET</option>
                                <option value="Weightlifting">BASKETBALL</option>
                                <option value="Weightlifting">CHESS</option>
                                <option value="Weightlifting">FOOTBALL</option>
	                           <option value="Weightlifting">TABLE TENNIS</option>
                                <option value="Weightlifting">CARROM</option>
                                <option value="Weightlifting">BADMINTON</option>
                            <option value="Weightlifting">LAWNTENNIS</option>
                            <option value="Weightlifting">ATHLETICS</option>
                    </select>
                    <br>
				</div>
			
					<div class="row" style="width:30%; margin-left:30%">
						<input name="rollno" class="form-control" type="tel" placeholder="YOUR ROLLNO">
                        <br>
					</div>
					<br>
                  <div class="row">
    
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="fname" id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">First Name</label>
        </div>
        <div class="input-field col s6">
           <input name="lname" type="text" class="validate">
          <label >Last Name</label>
        </div>
      </div>
  </div>
         <div class="input-field col s6"style="width:50%; margin-left:28%">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Telephone</label>
               <br><br>
        </div>
              
                <div class="row" style="width:50%; margin-left:30%">
						<input name="emailid" class="form-control" type="email" placeholder="YOUR EMAILID">
					</div>
                <br>
					<div class="row" style="width:50%; margin-left:30%">
						<input name="dob" class="form-control" type="date" placeholder="DATE OF BIRTH">
				
                </div>
                
				<br>
        
  <div class="input-field col s12 m6"style="width:80%; margin-left:10%">
    <select class="icons" name="hall">
      <option value="" disabled selected>Choose your option</option>
      <option name="hall" data-icon="images/image1.jpg" class="circle">Hall Of Residence 1</option>
      <option name="hall" data-icon="images/image2.jpg" class="circle">Hall Of Residence 3</option>
      <option name="hall" data-icon="images/image3.jpg" class="circle">Hall Of Residence 4</option>
    </select>
    <label>HALL OF RESIDENCE</label>
  </div>
            
            
<div class="row" style="width:50%; margin-left:30%">GENDER
    <p>
      <input name="group1" type="radio" id="test1" value="M" />
      <label for="test1">Male</label>
    </p>
    <p>
      <input name="group1" type="radio" id="test2" value="F"/>
      <label for="test2">Female</label>
    </p>
    <br>
    
        </div>

        <div class="input-field col s12 m6"style="width:60%; margin-left:20%">
    <select class="icons" name="branch">
      <option value="" disabled selected>Choose your Branch</option>
      <option value="" data-icon="images/cse.png.jpg" name="branch" class="circle">CSE</option>
      <option value="" data-icon="images/ece.jpg.jpg" name="branch" class="circle">ECE</option>
      <option value="" data-icon="images/me.jpg" name="branch" class="circle">ME</option>
    </select>
    <label>BRANCH</label>
  </div>
        
        
				<div class="row" >
					<div class="col-sm-12">
						<textarea name="msg" placeholder="Type your message here..." class="form-control" rows="9"></textarea>
					</div>
				</div>
				<br>
				<label><span class="text-danger">*</span>All fields are compulsory</label>
				<div class="row">
					<div class="text-right">
                       
						<button class="waves-effect waves-yellow btn" style="background-color:#FCC72C;" ><input type="submit" name="submit" value="REGISTER"></button>
					</div>
				</div>
    
			</form>
		</div>
	</div>
</div>




<footer>
			<div id="footer" style="padding-top:10px;padding-bottom:2px;">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<h4>JOIN US ON:</h4>
							<p class="fh5co-social-icons">
                				<a href="https://twitter.com/iiitdmj_sports"  target="_blank"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
                				<a href="https://facebook.com/iiitdmj_sports"  target="_blank"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
								<a href="https://youtube.com/iiitdmj_sports"  target="_blank"><i class="fa fa-youtube-play fa-3x"></i></a>
							</p>
							<p><a style="color:inherit" href="index6c4f.html?r=about/askasecy" title="Feedback/suggestions/complaints"> ASK A SECY </a></p>
							<p align="center">Designed by<br> Jayavardhan | Srikar | Deepak</p>
							<p><a href="indexa292.html?r=about/contact">Contact us</a></p>
							<p><a href="assets/view/map.jpg" target="_blank">Map</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

</div>



  	      <!-- jQuery -->
           <script src="js/jquery.min.js"></script>
      	  <!-- jQuery Easing -->
           <script src="js/jquery.easing.1.3.js"></script>
          <!-- Bootstrap -->
        	<script src="js/bootstrap.min.js"></script>
        	<!-- Waypoints -->
        	<script src="js/jquery.waypoints.min.js"></script>
        	<!-- Stellar -->
        	<script src="js/jquery.stellar.min.js"></script>
        	<!-- Superfish -->
        	<script src="js/hoverIntent.js"></script>
        	<script src="js/superfish.js"></script>
          <!-- Main JS (Do not remove) -->
        	<script src="js/main.js"></script>
          <script src="code.jquery.com/jquery-2.1.1.min.js"></script>
          <script src="js/materialize.js"></script>
          <script src="js/init.js"></script>
        
    <script>  $(document).ready(function() {
    $('select').material_select();
  });</script>

	</body>


</html>
