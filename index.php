







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images\download.jfif">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons"/>      
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/i.js"></script>

    <link rel="stylesheet" href="all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="aos.css" rel="stylesheet">

    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
      body{
        font-family: poppins black;
      }
      @media only screen and (min-width:768px) {
        .dropdown:hover .dropdown-menu{
        display:block;
      }
      }




      
      
      .card{
border: 0.5px solid rgb(214, 202, 202);
border-left: transparent;
border-right: transparent;
border-bottom: transparent;
      }
      .card:hover{
        border: 5px solid rgb(255, 255, 255);
      }
      /* li a{
        text-decoration: none;
        
      }
      li a::after{
        content: '';
        width: 0;
        height: 3px;
        background-color: rgb(113, 113, 113);
        margin: auto;
        display: block  ;
      }
      li a:hover::after{
        width: 100%;
        transition: width 0.3s linear;
      } */
        {
        font-weight: bolder;
      }

      /* *{
    overflow: hidden;
    color: white;
    background: black;
} */
.button{
    width: 200px;
    height: 50px;
    background: linear-gradient(360deg, transparent, #fff);
    position:relative;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    margin-top:-5px;
}
.button:before{
    content: "";
    position: absolute;
    left: 0;
    top: 0; 
    width: 0;
    height: 0;
    border-top: 2px solid black;
    border-right: 2px solid black;
    animation: border-top-right 2s 
    infinite alternate;
}
.button:after{
    content: "";
    position: absolute;
    right: 0;
    bottom: 0;
    width: 0;
    height: 0;
    border-bottom: 2px solid black;
    border-left: 2px solid black;
    animation: border-bottom-left 2s 
    infinite alternate;
}
@keyframes border-top-right{
    0%{ width: 0px; height: opx;}
    25%{width:200px;height: 0px;}
    50%{width:200px;height: 48px;}
    100%{width:200px;height: 48px;}
}
@keyframes border-bottom-left{
    /* 0%{ width: 0px; height: opx; opacity:0 ;}
    50%{ width: 0px; height: opx; opacity:0 ;}
    50.1%{ width: 0px; height: opx; opacity:1 ;} */
    75%{width:200px;height: 0px; opacity: 1;}
    100%{width:200px;height:  48px; opacity:1 ;}
}.button:hover{
  background-color:rgb(84, 143, 233);
  
}


/* *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body{
  background: #1D212B;
} */

section{
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

section:nth-child(1){
  color: #fff;
}

section:nth-child(2){
  color: #1D212B;
  background: #fff;
}

section:nth-child(3){
  color: #fff;
}

section:nth-child(4){
  color: #1D212B;
  background: #fff;
}

section .container{
  margin: 100px;
}

section h1{
  font-size: 60px;
}

section h2{
  font-size: 40px;
  text-align: center;
  text-transform: uppercase;
}

section .cards{
  display: flex;
}

section .cards .text-card{
  /* #2696E9 */
  background: transparent;
  margin: 20px;
  padding: 20px;
}

/* section .cards .text-card h3{
  font-size: 30px;
  text-align: center;
  text-transform: uppercase;
  margin-bottom: 10px;
} */

@media (max-width: 900px){
  section h1{
    font-size: 40px;
  }

  section .cards{
    flex-direction: column;
  }
}

.reveal{
  position: relative;
  transform: translateY(150px);
  opacity: 0;
  transition: all 2s ease;
}

.reveal.active{
  transform: translateY(0px);
  opacity: 1;
}


/* #003049 */
.text-wrapper{
            display: flex;
            justify-content: flex-start;
            background: rgb(35, 30, 30);
            overflow: hidden;

        }
        h1{

            font-size: 20px;
            text-transform: uppercase;
            color:white;
            -web-text-stroke-width:0.1px;
            -web-text-stroke-color:#fff;
            text-stroke-color:#fff;
            white-space:nowrap;
            padding: 0 6rem;
            letter-spacing: 1px;
            animation:move-rtl 6000ms linear infinite ;
        }
        @keyframes move-rtl {
            0%{
                transform: translateX(0);
            }
            100%{
                transform: translateX(-100%);
            }
        }



        .overlay {
          margin-top:88px;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color:white;
  /* #008CBArgb(123, 119, 119) */
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}




/* .overlay{
  position: absolute;
  bottom:0;
  left: 0;
  right: 0;
  background-color:rgba(0,0,0,0.75);
  overflow:hidden;
  width:30%;
  height:0;
  transition:.5s ease;
}
.text-card:hover .overlay{
  height:100%;
}
p{
width:100%;
margin-top:30%;
position:absolute;
text-align:center;
transform:rotate(-5deg)skewX(-5deg);
} */
.had{
  color:black;
}
.had:hover{
color:gray;
}


span {
  color: #002adf;
}

.iconsContainer {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 80vh;
}

.iconsContainer .icons {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 4rem 3rem;
}

.iconsContainer .icons .bi {
  cursor: pointer;
  font-size: 40px;
  padding: 1.5rem 2rem;
  border-radius: 50%;
  background-image: linear-gradient(to right, gray, #ffcc99);
  background-size: 200%;
  transition: background 0.3s ease-in-out;
}

.iconsContainer .icons .bi:hover {
  background-position: right;
}



.set-div-3 h1{
    color: #000;
    font-weight: 800;
}
.set-div-3 p{
    color: #777777;
    font-weight: 500;
    margin-top: 20px;
    font-size: 14px;
}
.set-div-3 a{
    background-color: #162a2b;
    border: none;
    border-radius: 30px;
    padding: 8px 20px;
    margin-top: 20px;
    outline: none;
    color: #fff;
    text-decoration: none;
    display: inline-block;
    font-weight: 600;
    transition: all 0.4s ease-in-out;
}
.set-div-3 a:hover{
    background-color: # ;
}
.set-div-5{
    text-align: center;
}
.set-div-5 h1 span{
    color: #c8bcc0;
}






    </style>
</head>
<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
  <div class="container">
 <nav class="navbar p-fixed sticky-top navbar-expand-lg navbar-light bg-white  " style="background-color: rgb(244, 233, 223); font-family: sans-serif;" >
 
  <div class="container">

    <a ><img src="images\web-development.png" alt="" style="border-radius: 60px;" height="70px"></a>
    <a  class="navbar-brand" style="translate: 10px; font-family: sans-serif;font-size: x-large;font-weight: 10px;color: rgb(0, 0, 0);" href="#hom">   ABDULLAH 
      FAROOQ</a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav " style="translate: 70px;">
     
		<li class="nav-item dropdown">
			<a href="#skill"  class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown">
		SKILLS
			</a>
			<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <li><a class="dropdown-item" href="#skill">FRONT-END-DEVELOPMENT</a></li>
			  <li><a class="dropdown-item" href="#">OFFICE AUTOMATION</a></li>
			  <li><a class="dropdown-item" href="#resume">UI/UX DESIGN</a></li>
			  <li><a class="dropdown-item" href="#">WORDPRESS</a></li>
			  <li><a class="dropdown-item" href="#">PHP/MYSQL</a></li>
			  <li><hr class="dropdown-divider"></li>
			  <li><a class="dropdown-item" href="#skill">LANGUAGES</a></li>
  
			  
  
			</ul>
		  </li>  
        <li class="nav-item">
          <a href="#resume" class="nav-link">      RESUME</a>
        </li>

        <li class="nav-item dropdown">
          
          <a href="#project" class="nav-link" >
          PROJECTS
          </a>
      
        </li>
        <li class="nav-item dropdown">
          
          <a href="#services" class="nav-link" >
          SERVICES
          </a>
      
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#about">
      ABOUT
          </a>
        
        </li>  
        


        <a href="#cont" style="text-decoration: none;color: black; translate: 8px;"><div class="button" >CONTACT </div></a>

      
    </div>
  </div>
</nav>












<div class="  container reveal row">




	<div class="col-sm-6">
		<div class="">
		  <div class="card-body"id="top">
			<!-- <center><h5 class="card-title" >Abdullah </h5></center> -->
			<h2 style="font-style: inherit;font-size:xx-large;color: rgb(67, 106, 116); font-family: Georgia, 'Times New Roman', Times, serif;">I am a skilled and innovative <br> professional Front End Developer</h2>
			<p class="card-text">
				I have skills that are currently used by Designers for creating modernized <br> and good designed websites. 
				I have a talent for investigating and researching different <br> processes to offer different improvements and solution for the benefit of the organization...</p>
			<a href="#about" class="btn btn-primary" >More About me..</a>
		  </div>
		</div>
	  </div>
	<div class="col-sm-5" style=" translate:60px;">
	  <div class="">
		<div class="">
    <center>	<img  src="images\FOUNDATION-e-LEARNING.png" style="border-radius: 10px;" class="img-fluid rounded-start" style="height: 330px;" alt="..."></center>
		</div>
	  </div>
	</div>
</div>
    <section  class="set-bg-4" id="resume" style="background-color: rgb(255, 255, 255);">
      <div class="container reveal">
        <h2 data-aos="zoom-in" data-aos-duration="300" class="aos-init" style="font-style: inherit;font-size:xx-large;color: rgb(30, 74, 83); font-family: Arial, Helvetica, sans-serif;">TECH SKILLS</h2>
		<center><p data-aos="zoom-in" data-aos-duration="600" class="aos-init">Skills play a vital role in determining the success and effectiveness of a designer.</p></center>
        <div class="cards set-div-3 set-div-5">
          <div class="text-card"> 
       <center>   <h3 data-aos="zoom-in" data-aos-duration="300" class="aos-init" style="font-style: inherit;font-size:x-large;color: rgb(30, 74, 83); font-family: Arial, Helvetica, sans-serif;">FRONT END DEVELOPMENT WEB DESIGNING</h3></center>
            <p  data-aos="zoom-in" data-aos-duration="600" class="aos-init">I can work with various programming languages such as HTML, CSS, and JavaScript to bring your designs to life.</p>
            <img  data-aos="zoom-in" data-aos-duration="600" class="aos-init" src="images\10798281_19362653.jpg"  width="100%" height="200px" style="translate:8px;"  alt="">
</div> 
          <div class="text-card">
            <center><h3 data-aos="zoom-in" data-aos-duration="300" class="aos-init" style="font-style: inherit;font-size:x-large;color: rgb(30, 74, 83); font-family: Arial, Helvetica, sans-serif;">WEB DEVELOPMENT <br> BACK END	</h3></center>
            <p  data-aos="zoom-in" data-aos-duration="600" class="aos-init">I create websites that are functional, efficient, and secure like PHP,MYSQL ,SQL SERVER, LARAVEL OR WORDPRESS</p>
            <img  data-aos="zoom-in" data-aos-duration="600" class="aos-init"  src="images\full-stack-web-developer.svg" width="100%" height="200px" alt="">
          </div>
        </div>
      </div>
    </section>

 <section class="set-bg-4" style="background-color: rgb(255, 255, 255); margin-top:-80px;" id="skill">
		<div class="container reveal " >
		  <h2 data-aos="zoom-in" data-aos-duration="600" class="aos-init"   style="font-family: Arial, Helvetica, sans-serif; font-size: 50px;">LANGUAGES AND FRAMEWORKS</h2>
		  <center><p data-aos="zoom-in" data-aos-duration="600" class="aos-init" > Skills play a vital role in determining the success and effectiveness of a designer.</p></center>
		  <div class="cards ">
			<div class="text-card"> 
			<!-- <h3>Web Designing</h3>
			  <p>I work with various programming languages such as HTML, CSS, and JavaScript to bring your designs to life.</p> -->
			  <img  data-aos="zoom-in" data-aos-duration="300" class="aos-init" src="images\html.png"  width="90%" height="100px" style="translate:8px;"  alt="">
			</div>
		<div class="text-card">
	
				<img data-aos="zoom-in" data-aos-duration="600" class="aos-init"  src="images\css-3.png"  width="90%" height="100px"   alt="">
				
	
				
			  </div>
			  <div class="text-card">
				<img data-aos="zoom-in" data-aos-duration="600" class="aos-init"  src="images\java-script.png"  width="90%" height="100px"   alt="">
				
	
				
			  </div>

			<div class="text-card">
			
			  <img data-aos="zoom-in" data-aos-duration="600" class="aos-init"  src="images\bootstrap-logo.svg"  width="90%" height="100px"   alt="">
			  
  
			  
			</div>
			<div class="text-card">
			  <center><img  data-aos="zoom-in" data-aos-duration="600" class="aos-init" src="images\php.png	" width="90%" height="100px" alt=""></center>
			</div>
		  </div>
		</div>

	  </section>







	  


	
    <script type="text/javascript"> 
    window.addEventListener('scroll', reveal);

    function reveal(){
      var reveals = document.querySelectorAll('.reveal');

      for(var i = 0; i < reveals.length; i++){

        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop < windowheight - revealpoint){
          reveals[i].classList.add('active');
        }
        else{
          reveals[i].classList.remove('active');
        }
      }
    }
    </script>





<!-- <fieldset style="border: 1px solid black;"></fieldset> -->
<!-- </div><br><br><br> -->





































<section class="set-bg-4 " style="background-color: rgb(255, 255, 255); margin-top: -130px;" id="project">
	<div class="container reveal">
	  <h2  data-aos="zoom-in" data-aos-duration="600" class="aos-init"  style="font-family: Arial, Helvetica, sans-serif; font-size: 50px;" >PROJECTS</h2>
	  <center><p data-aos="zoom-in" data-aos-duration="600" class="aos-init">Some of my recent Projects created:</p></center>
	  <div class="cards">
		<div class="text-card"> 
	 <center>   <h3 data-aos="zoom-in" data-aos-duration="600" class="aos-init">MOON TEXTILES</h3></center>
		<center>  <p data-aos="zoom-in" data-aos-duration="600" class="aos-init">MOON TEXTILE is a website where user can visit their company services, facilities & availablity of your demands and contact with the company! </p></center>
		  <img data-aos="zoom-in" data-aos-duration="300" class="aos-init" src="images\Screenshot 2023-11-06 065143.png"  width="100%" height="230px" style="translate:8px;"  alt="">
<!--            
		  <div class="overlay">
  <div class="text" ><a href=""style="text-decoration: none;"><h2 class="had" > 
	KNITTING
  </h2></a><br><br> <a href=""style=" text-decoration: none;"><h2 class="had">STITICHING</h2></a> <br><br><a href="" style=" text-decoration: none;"><h2 class="had" >PRINTING</h2></a></div>
</div> -->
		</div>
		<!-- <div class="text-card">
		  <h3>KNITTING</h3>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		  <img src="images\download.jpg"  width="100%" height="200px"   alt="">
		  

		  
		</div> -->
		<div class="text-card">
		  <center><h3 data-aos="zoom-in" data-aos-duration="600" class="aos-init">WEB DEVELOPMENT <br> BACK END	</h3></center>
		  <p  data-aos="zoom-in" data-aos-duration="600" class="aos-init">I create websites that are functional, efficient, and secure like PHP,MYSQL ,SQL SERVER, LARAVEL OR WORDPRESS</p>
		  <img data-aos="zoom-in" data-aos-duration="600" class="aos-init" src="images\Screenshot 2023-11-06 132652.png" width="100%" height="200px" alt="">
		</div>
	  </div>
	</div > 
  </section>






<section class="set-bg-4">
<div class="row row-cols-1 row-cols-md-3 g-4 set-div-3 set-div-5 container ">
  <div class="col  ">
    <div class="card h-100">
      <img data-aos="zoom-in" data-aos-duration="300" class="aos-init" src="images\4a5235_43a477c4822947a5bdebaf6247304813~mv2.png  " class="card-img-top" alt="...">
      <div class="card-body">
       <center> <h4 data-aos="zoom-in" data-aos-duration="300" class="aos-init"  class="card-title">Web Designing</h5></center>
        <p data-aos="zoom-in" data-aos-duration="300" class="aos-init"  class="card-text" >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div data-aos="zoom-in" data-aos-duration="300" class="aos-init"  class="card-footer">
        <small  class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img data-aos="zoom-in" data-aos-duration="300" class="aos-init" src="images\html-system-websites-concept_23-2150323552.avif" class="card-img-top" alt="...">
      <div class="card-body">
        <center><h4 data-aos="zoom-in" data-aos-duration="300" class="aos-init" data-aos="zoom-in" data-aos-duration="300" class="aos-init"  class="card-title">Development</h5></center>
        <p data-aos="zoom-in" data-aos-duration="300" class="aos-init"  class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div data-aos="zoom-in" data-aos-duration="300" class="aos-init"  class="card-footer">
        <small   class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img data-aos="zoom-in" data-aos-duration="300" class="aos-init"  src="images\gradient-ui-ux-background_23-2149047011.avif" class="card-img-top" alt="...">
      <div class="card-body">
      <center> <h5 data-aos="zoom-in" data-aos-duration="300" class="aos-init"  class="card-title">UI/UX Design</h5></center>
        <p data-aos="zoom-in" data-aos-duration="300" class="aos-init"  class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This cn.</p>
      </div>
      <div data-aos="zoom-in" data-aos-duration="300" class="aos-init" class="card-footer">
        <small   class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>

</section>





  <div class=" container reveal row " style="margin-top:-80px;">
  <center> <h2  id="about" style="font-family: Arial, Helvetica, sans-serif; font-size: 50px;">ABOUT</h2></center>

  
  




    <div class="col-sm-6">
      <div class="">
        <div class="card-body">
        <!-- <center><h5 class="card-title" >Abdullah </h5></center> -->
        <h2 style="font-style: inherit;font-size:xx-large;color: rgb(30, 74, 83); font-family: Arial, Helvetica, sans-serif;"> My Mission <br> <h2 style="font-style: inherit;font-size:x-large;color: rgb(120, 172, 182); font-family: Arial, Helvetica, sans-serif;">"Our fears reveal what we care about the most"<br></h2>
        <p class="card-text" style="font-family: Arial, Helvetica, sans-serif;" >
          My mission of being a Full-Stack Developer leading the company to success by leveraging their technical expertise. I am a skilled and innovative professional with a strong passion for creating efficient and visually appealing websites. I have a deep understanding of coding languages such as HTML, CSS, JavaScript,PHP and Laravel as well as skills that are currently used by Designers for creating modernized  and good designed websites.I have good communication skill and confidence in front of an audience.I have a talent for investigating and researching different processes to offer different improvements and solution for the benefit of the organization.</p>
        <!-- <a href={resume} download="Resume" >
          <script>
          <Rbtncontainer resumeBtn={resumeBtn}>
            <ResumeButton
            fontBig
            big
            RprimaryContact={RprimaryContact}>
            </ResumeButton>
            </Rbtncontainer>
        </script>
          Download CV</a> -->
          <a href="images\cvf.pdf"><button>Download CV</button></a>
        </div>
      </div>
      </div>
    <div class="col-sm-5">
      <div class="">
      <div class="">
      <center>	<img src="images\100085141_2870101879883346_4368497728813006848_nn.jpg" style="border-radius: 10px;" class="img-fluid rounded-start" style="height: 100%; width: 100px;" alt="..."></center>
  
      </div>
      </div>
    </div>
  
  
  
  
    </div>
  
  
  

















<!-- <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <img src="images\pailung-single-jersey-knitting-machines-500x500.webp" alt=""  width="100%" height="390px">
        <center><h2 class="card-title">NEW FABRIC KNITTING SETUP   </h2></center>
      <center>  <p class="card-text" >With supporting text below as a natural lead-in to additional content.</p></center>
        <a href="#" class="btn btn-dark mt-2">  Go somewhere</a>
      </div>
    </div>
  </div> -->
  <!-- <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <img src="images\download (4).jpg"  width="100%" height="390px">
        <center><h2 class="card-title">NEW FABRIC KNITTING SETUP   </h2></center>

        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-dark">Go somewhere</a>
      </div>
    </div>
  </div> -->
</div>
<br><br>
<fieldset style="border: 0.5px solid black;" ></fieldset><br><br>
<div>
<center><h2 class="hone" id="cont" style="font-family: Arial, Helvetica, sans-serif; font-size: 50px;"  >CONTACT US</h1></center></div>
&nbsp;

<section class="my-5" style="" >
  <!-- <div class="py-5">
  </div> -->
  <div class="w-50 m-auto "> 
    <form action="" method="POST">
      <div class="form-group">
        <label for="">Username :</label>
        <input type="text" name="Name" autocomplete="off" class="form-control"required>
      </div>
      <div class="form-group">
        <label for="">Email :</label>
        <input type="email" name="Email" autocomplete="off" class="form-control" id="" required>
      </div>
      <div class="form-group">
        <label for="">Address:</label>
        <input type="text" name="address" autocomplete="off" class="form-control" id="" required>
      </div>
      <div class="form-group">
        <label for="">Comments :</label>
        <textarea name="comment" class="form-control" id="" cols="30" rows="10" ></textarea>
      </div><br>
      <button type="submit" name="submit_form" class="btn btn-dark">Submit</button>
    </form>
  </div>
</section></div>



<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
<!-- <center><a href="#top" style="text-decoration: none;">BACK TO   TOP</a></center> -->
<!-- <center>  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115723.95393361895!2d66.94390296936032!3d24.98741947592774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb341335c27d611%3A0xadeb9261ebc87fa8!2sAl%20Shams%20Textile!5e0!3m2!1sen!2s!4v1686123721254!5m2!1sen!2s" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
</div> -->
<!-- <div>
    <h3 id="coord-1"></h3>
    <h3 id="coord-2"></h3>
</div>
<button id="btn">get location</button> -->

<script>
    let showPosition= function(pos){

        let lat=pos.coords.latitude
        let long=pos.coords.longitude

        alert("latitude:" + lat +"longiyutde: " + long)

        document.getElementById("coord-1").innerHTML= "latitude:" + lat
        document.getElementById("coord-2").innerHTML= "longitude:" + long

        maplink=`https://www.google.com/maps?q=${lat},${long}&output=embed`;

        let map=document.getElementById("map") 
        map.setAttribute("src", maplink);
    }
     document.getElementById("btn").onclick=function(){
        if (navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition)
        }else{
            alert("your browers doesn't support this API")
        }
     }



</script>

<fieldset style="border: 0.5px solid black;" ></fieldset><br><br>

<!-- <footer> -->
<!-- <img src="images\2022-09-20.jpg" width="10%" >
 <a href="" style="color: white;">   <p class="p-3  text-black text-center">MOONENTERPRISES@GMAIL.COM <br><br>MOONENTERPRISES@GMAIL.COM
</p></a>
<div >
Moon Enterprises was established in 2018 and has become a staple within the Pakistan apparel industry  as a manufacturer with a primary focus in knitted  garments for many buying agents.
links\ -->

<div class="container row row-cols-1 row-cols-md-3 g-4">
<div class="col">
    <div class="">
      <!-- <img src="images\2022-09-20.jpg" > -->
      <div class="card-body">
        <center><h2>let's Talk</h1>
<a href="#cont">CONTACT ME</a> 
<h3>My Email</h3>
<a href="">abdullahfarooqedu@gmail.com</a>       
<h3>My Phone</h3>
<a href="">03181256764</a>     
<h3>Github</h3>
<a href="">github.com/abdullahwa
  ghi/AbdullahWaghjee.gihub.io </a>     
</center>

      </div>
    </div>
  </div>

  <!-- <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Our Fabrics</h5>
*Cotton <br>
*Polyester <br>
*Canvas <br>
*Poly-Cotton <br>
*Digital Print <br>
*Fleece <br>
*Jersey <br>
*Pant Fabric <br>
*T-Shirt Fabrics <br>
*Fabric For Shorts <br>
*Outdoorwear <br>
*Solid <br>
*Sportswear Fabric <br>
Sustainable Fabrics
Technical Fabrics
Twill
Denim
Beachwear/Swimwear
Ethnic Wear
Upholstery Fabric
Spandex
Outerwear Fabric.</p>
      </div>
    </div>
  </div>
   -->

   
  <!-- <div class="col">
    <div class="card">
      <div class="card-body">
      <div class="container"> -->
    <!-- <h1>Use <span>Bootstrap Icons</span> Offline</h1> -->
    <!-- <div class="iconsContainer">
      <div class="icons" style="margi">
        <div class="icon"><i class="bi bi-envelope"style="color:rgb(141, 69, 204);"  ></i></div>
         
         <div class="icon"><i class="bi bi-github"></i></div>
         <div class="icon"><a href=""><i class="bi bi-facebook"></i></a></div>
      
        <div class="icon"><i class="bi bi-youtube" style="color:red;"></i></div> -->
        <!-- <div class="icon"><i class="bi bi-twitter"></i></div> -->
        <!-- <div class="icon"><i class="bi bi-apple"></i></div> -->
        <!-- <div class="icon"><i class="bi bi-calendar3-range-fill"></i></div> -->
        <!-- <div class="icon"><i class="bi bi-chat-heart-fill"></i></div>  -->
      <!-- </div>
    </div>
  </div>
      </div>
    </div>
  </div>
</div> -->



<?php 
include('connection.php');
if(isset($_POST['submit_form'])  ) {
   $Name = $_POST['Name'];
   $Email = $_POST['Email'];
   $address = $_POST['address'];
   $comment = $_POST['comment'];
   $query = "INSERT INTO `my web`(`Name`, `Email`, `address`, `comment`) VALUES ('$Name','$Email','$address','$comment')";
   $run = mysqli_query($con,$query);
   echo $run;
  //  if($run){
  //    header('location:lists.php');
  //  }
  //  else{
  //   echo "<script>alert ('not good')</script>";
  //  }
}

?>











<!-- <div class="card bg-dark text-white">
  <img src="images\images (2).jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <form>
      <div class="mb-3" id="contactus">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address" style=" background-color: transparent; color: black;border: 2px solid black;width: 40vh;">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1"placeholder="Enter Email Address" style=" background-color: transparent; color: black;border: 2px solid black;width: 40vh;">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form></div>
</div>
 -->


<!-- <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src=" images\download (6).jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
       -->
       <p>Copyright © 2023 All rights reserved by ABDULLAH FAROOQ WAGHJEE</p>\



       <script src="all.min.js.download" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="jquery-3.7.1.js.download" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="aos.js.download"></script>
    <script src="min.js.download"></script>
</body>
</html>