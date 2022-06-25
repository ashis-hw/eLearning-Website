<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>topic content</title>
	<link rel = "icon" href = "006.png" type = "image/x-icon">
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="../..//css/java_programming.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet"> 

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<script src="https://apis.google.com/js/platform.js"></script>
	<!-----------------------------------------------------------------
	------------------------------------------------------------------>
	
   

	<!-----------------------------------------------------------------
	------------------------------------------------------------------>
	


	<style type="text/css">
		#yt
		{
			margin-top: 50px;
		}

		#sidebarleftmenu
		{
				
		}

		body
		{
			

		}



		#mainpagecontent
		{
		    background-color: white;
			margin-top: 80px;
			height: auto;
			box-shadow: 5px 5px 5px 5px #ccc; 
			border-color: #ccc;
		}
		.content
		{
			color: black !important;
		}
		
		
		 html
	{
		scroll-behavior: smooth;
	}
	

</style>

	
		
	
</head>
<body>
		<!------Navigation bar ends ---->
	<nav class="navbar navbar-inverse navbar-fixed-top" style="height: 80px;">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>
               
				<!--<h1 style="color: white;margin-top: 10px;" id="myhead">Unique Developer</h1>-->
				<!--<h1 style="color: black;margin-top: 10px;" id="myhead"><button class=""openbtn"" onclick="openNav()"><i class='fa fa-eye'></i></button> </h1>
				-->
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
				   <!-- <li style="text-align:center;"><a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class='fa fa-close'>CLOSE</i></a></li>
				    <li><a  href="" class="openbtn" onclick="openNav()"><i class='fa fa-eye'></i>Open Content</a></li>-->
					<li> <a href="../../index.php">Home</a></li>
					<li> <a href="">Our Service</a></li>
					<li> <a href="">Works</a></li>
					<li> <a href="">Team</a></li>
					<li> <a href="">About</a></li>
					<li> <a href="">Carrier</a></li>
					<li> <a href="" id="our-location" class="btn-success" data-target="#mymodal" data-toggle="modal"><?php echo $_SESSION['username'];   ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>

		<!------Navigation bar ends ---->


		 <!------Side bar start---->

 
<!--	<div class="sidemenu" id="sidebarleftmenu">
		<ul class="sidemenulist">
			<li><a href="" class="crossbutton" onclick="closesidemenu()">&times;</a></li>
			<li style="background-color :orangered;"><a href="" >Home</a></li>
-->

<!--
<div id="sidebarleftmenu" class="sidemenu">
<ul class="sidemenulist">
   <li style="text-align:center;"><a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class='fa fa-close'>CLOSE</i></a></li>
   <li style="background-color :orangered;"><a href="" >Home</a></li>
-->

<!--
       
	
-->

		 <!------Side bar ends---->
		 
<!--=======================================
       ACCORDION START
==========================================-->



	<section class="faq" id="myfaq" >
	
				<div class="container">
				
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 style="margin-top:95px;"><b>
					
					<div class="typing-container">
    <span id="sentence" class="sentence">HERE YOU CAN </span>
    <span id="feature-text"></span>
    <span class="input-cursor"></span>
  </div>	
							
							</b></h2>
							<div class="sub-heading">


								<p>

								</p>
							
							</div>
						</div>					
					</div>
					
				</div> <br><br><br>
				<div class="container"style="margin-top:-55px;">
					<div class="row">
						<div class="col-md-7">
							<div class="panel-group" id="accordian">

<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'uniquedeveloper');
$course_name=$_GET['course_name'];

//$_GET['course_name'];
// unset($_GET['course_name']);
$q="select * from courses where course_name='$course_name'";
$result=mysqli_query($con,$q);
while ($res=mysqli_fetch_array($result)) {
?>


			

								<div class="panel panel-default">
									<div class="panel-heading" id="headingOne">
										<h4 class="panel-title">
											<a href="#<?php echo $res['id'] ?>" data-toggle="collapse" class="collapse" data-parent="#accordian"><?php echo $res['topic_name']; ?></a>
										</h4>
									</div>
								
									<div id="<?php echo $res['id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
									
										<div class="panel-body">
										<div class="content">
										
	
                                        
											<p>
												<?php echo $res['description']; ?>
			
											</p>
											</div>
										</div>
									</div>
								</div>
								
							
								

							<?php } ?>

							</div>
						</div>

                  <div class="freeimage" id="meimg">
							<div class="col-md-2 col-md-offset" style="margin-top:55px;">
								<img src="03.jpg">
								<img src="02.jpg">
								<img src="01.jpg">
								<img src="">
							</div>
				 </div>





					</div>
				</div>
				

			</section>				
		
<!--=======================================
       ACCORDION END
==========================================-->

         <!------java main content starts ---->
		


	
		<!------java main content Ends ---->



		<!------youtube subscribe button starts---->



		
		<!------youtube subscribe button Ends---->


	
<!--
<script>
function openNav() {
  document.getElementById("sidebarleftmenu").style.display = "block";
  document.getElementById("mainpagecontent").style.display = "block";
}

function closeNav() {
  document.getElementById("sidebarleftmenu").style.display = "none";
  document.getElementById("mainpagecontent").style.display = "block";
}
</script>
-->

<script>
function openNav() {
  document.getElementById("sidebarleftmenu").style.display = "block";
  document.getElementById("mainpagecontent").style.display = "block";
}

function closeNav() {
  document.getElementById("sidebarleftmenu").style.display = "none";
  document.getElementById("mainpagecontent").style.display = "block";
}
</script>


 <script type="text/javascript">
 	
 	var li=document.getElementsByTagName('li')[0].style="color:red";
 </script>
 
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>


<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='sunil';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}



</script type="text/javascript">

<script>
const carouselText = [
  {text: "READ TOPICS", color: "red"},
  {text: "WATCH VIDEOS", color: "orange"},
  {text: "LEARN DEPTH", color: "yellow"}
]

$( document ).ready(async function() {
  carousel(carouselText, "#feature-text")
});

async function typeSentence(sentence, eleRef, delay = 100) {
  const letters = sentence.split("");
  let i = 0;
  while(i < letters.length) {
    await waitForMs(delay);
    $(eleRef).append(letters[i]);
    i++
  }
  return;
}

async function deleteSentence(eleRef) {
  const sentence = $(eleRef).html();
  const letters = sentence.split("");
  let i = 0;
  while(letters.length > 0) {
    await waitForMs(100);
    letters.pop();
    $(eleRef).html(letters.join(""));
  }
}

async function carousel(carouselList, eleRef) {
    var i = 0;
    while(true) {
      updateFontColor(eleRef, carouselList[i].color)
      await typeSentence(carouselList[i].text, eleRef);
      await waitForMs(1500);
      await deleteSentence(eleRef);
      await waitForMs(500);
      i++
      if(i >= carouselList.length) {i = 0;}
    }
}

function updateFontColor(eleRef, color) {
  $(eleRef).css('color', color);
}

function waitForMs(ms) {
  return new Promise(resolve => setTimeout(resolve, ms))
}
</script>

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
  


</body>
</html>