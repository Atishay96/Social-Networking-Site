<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Atishay Jain,atishay jain,atishay,jain,developer,Coder" />
  <meta name="description" content="Atishay jain is a Developer and coder who is passionate about these things and will love to do it as a profession."/>
  <meta name="author" content="Atishay Jain">
  <!--Google Analytics-->   
  <script>
  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-89277776-1', 'auto');
	ga('send', 'pageview');
  </script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
  
  <style>
  .new
  {
  	font-size: 200%;
  }
  body {
      font: 30px Montserrat, sans-serif;
      line-height: 1.8;
      color:black;
  }
  p {font-size: 22px;}
  .margin {margin-bottom: 45px;}
  .links
  {
  	color:#23a37a;
  }
  .container-fluid {
      padding-top: 10px;
      padding-bottom: 10px;
  }
  .navbar {
      padding-top: 10px;
      padding-bottom: 10px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  .bg-1 
  { 
  		padding-top: 0px;
  		padding-bottom: 10px;
   		background-image: url(pn.jpg); 
   		background-position: center;
   		background-repeat: no-repeat;
   		background-size: 100% 100%;   
   		color:#ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; 
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; 
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; 
      color: #fff;
      text-align: right;
  }
   li
   {
   		font-size: 200%;
   		list-style-type: none;
   }
   .old
   {
   		font-size: 100%;
   }
   .slideanim {visibility:hidden;}
  	.slide 
  	{
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
    }
  	@keyframes slide 
  	{
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
  <script>
  	$(document).ready(function(){
  		$("i , .links").on({
   			mouseenter: function(){
        		$(this).css("font-size", "200%");
    		}, 
    		mouseleave: function(){
        		$(this).css("font-size", "100%");
    		}
		});
  	});

  </script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" >
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="atishayjain.xyz">Hola!</a>
			</div>
			<div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#me">About Me</a></li>
						<li><a href="#lk">Past</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
			</div>
		</div>
	</nav>
	<div id="me" class="container-fluid bg-1">
		<br/><br/><br/><br/>
		<div class="row">
			<div class="col-md-4"><img src="profile.jpg" class="img-circle" alt="profile" width="50%"><br/><br/></div>
			<div class="col-md-4 text-center"><br/><br/><br/><h3>Atishay Jain</h3><h3>I'm a Coder and a Developer.</h3></div>
		</div>
		<br/>
			<p style="text-align:center">I'm from Jaipur,Rajasthan.</p>
			<p style="text-align:center">Currently pursuing my B.TECH from SRM University,Chennai.</p>
			<p style="text-align:center">Love to play with Technology.</p>
			<p style="text-align:center">Got the right Attitude.</p>
	</div>
	<div id="lk" class="container-fluid bg-2 slideanim">
		<h2>Resume &nbsp <small> <a href="Atishay.pdf"> Click here to download</a></small></h2><hr/>
		<h3> Technologies worked with in the past :</h3><br/>
		<div class="container">
			<div class="row text-center">
				<div class="col-md-4">
					<ul> 
						<li><i class="devicon-c-plain colored"></i></li>
						<li><i class="devicon-ruby-plain colored"></i></li>
						<li><i class="devicon-javascript-plain colored"></i></li>
						<li><i class="devicon-php-plain colored"></i></li>
						<li><i class="devicon-wordpress-plain"></i></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul>
						<li><i class="devicon-cplusplus-plain colored"></i></li>
						<li><i class="devicon-html5-plain-wordmark colored"></i></li>
						<li><i class="devicon-jquery-plain colored"></i></li>
						<li><i class="devicon-mysql-plain colored"></i></li>						
						
					</ul>
				</div>
				<div class="col-md-4">
					<ul>
						<li><i class="devicon-java-plain colored"></i></li>
						<li><i class="devicon-css3-plain colored"></i></li>
						<li><i class="devicon-bootstrap-plain-wordmark colored"></i></li>
						<li><i class="devicon-linux-plain"></i></li>
					</ul>
			</div>
		</div><hr/>
		<div class="jumbotron slideanim">
			<h2 style="color:#4286f4;">Links :</h2>
			<div class="row text-center">
				<div class="col-md-4">
					<h4><a href="http://auth.geeksforgeeks.org/profile.php?user=Atishay%20Jain%202" class="links">GeeksForGeeks</a></h4>
				</div>
				<div class="col-md-4">
					<h4><a href="https://in.linkedin.com/in/atishay-jain-485769100" class="links">LinkedIn</a></h4>
				</div>
				<div class="col-md-4">
					<h4><a href="https://www.facebook.com/Atishay96" class="links">Facebook</a></h4>
				</div>
			</div>
		</div>
	</div>		
		
	</div>
	<br/>
	<div id="contact" class="container bg-3 slideanim">
		<h2 style="">Contact Details</h2>	
		<form class="form-horizontal" action="https://formspree.io/jainatishay.j@gmail.com" method="POST" role="form" data-toggle="validator">
			<div class="form-group">
					<label for="usr">Name</label>
					<input type="text" class="form-control"  name="name" id="name" placeholder="Enter Name" style="width:60%" data-error="Please Enter your name" required>
			</div>
			<div class="form-group">
					<label for="Email">Email</label>
					<input type="email" class="form-control" name="_replyto" id="email" placeholder="Enter Email" style="width:60%" data-error="Please Enter your email address" required>
			</div>
			<div class="form-group">
					<label for="message">What's up?</label>
					<textarea class="form-control" rows="5" name="message" style="width:60%" placeholder="Message" data-error="What's up?" required></textarea>
			</div>
			<input class="btn btn-primary" type="submit" id="send" value="Send"	>
			
			<input type="hidden" name="_next" value="http://atishayj.in/">
		</form>
	</div>
	<footer class="container-fluid bg-4">
		<p>&copy copyrighted under section 246</p> 
	</footer>
	<script>
	$(document).ready(function(){
	 
	  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
	    if (this.hash !== "") {
	      event.preventDefault();

	      var hash = this.hash;

	      $('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 900, function(){
	   
	        window.location.hash = hash;
	      });
	    } 
	  });
	  
	  $(window).scroll(function() {
	    $(".slideanim").each(function(){
	      var pos = $(this).offset().top;

	      var winTop = $(window).scrollTop();
	        if (pos < winTop + 600) {
	          $(this).addClass("slide");
	        }
	    });
	  });
	})
	</script>
	
</body>
</html>
