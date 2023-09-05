<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arram Jobs</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha384-0lG3cFw5FvJ8uBpWGpj4MlOOwDlelpzcvr7n3D5y/A8sPk5L4fhFV+XDI7KC5F5q" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.1/css/all.min.css">


	<link rel="stylesheet" href="style.css">
    <style>
        *{
    font-family : montserrat;
}
body{
    background-color: #F8F8F8;
}
.section-padding{
    padding: 100px 0;
}
.carousel-item{
    height: 100vh;
    min-height: 300px;
}
.carousel-caption{
    bottom: 220px;
    z-index: 2;
}

.carousel-caption h2{
    font-size: 60px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-top: 25px;
    color: teal;
    font-style: bold;
}

.carousel-caption p{
    width: 60%;
    margin: auto;
    font-size: 30px;
    list-style: 1.9;
    color: darkolivegreen;
}

.carousel-inner::after{
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0%;
    left: 0%;
    /* background:; */
    z-index: 1;
}

.navbar-nav a{
    font-size: 15px;
    text-transform: uppercase;
    font-weight: 500;
}

.navbar-ligth .navbar-brand{
    color: black;
    font-size: 25px;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 2px;
}

.navbar-ligth .navbar-brand:focus,
.navbar-ligth .navbar-brand:hover{
    color: black;
}
.navbar-ligth .navbar-nav .navbar-link{
    color: black;
}
.w-100{
    height: 120vh;
}

@media only screen and (max-width:767px) {
    .navbar-nav{
        text-align: center;
    }
    .carousel-caption{
        bottom: 125px;
    }
    .carousel-caption h2{
        font-size: 17px;
    }
    .carousel-caption a {
        padding: 10px 15px;
    }
    .carousel-caption p{
        width: 100%;
        line-height:  1.6;
        font-size: 12px;
    }
    .card-sec{
        margin-top: 30px;
    }
    .about-img-img{
        padding-top: 30px;
    }
   
   
}





/* Recent-posts Section - Home Page
------------------------------*/
.recent-posts article {
  box-shadow: 0 4px 16px rgba(var(--default-color-rgb), 0.1);
  padding: 40px;
  height: 100%;
  border-radius: 10px;
  overflow: visible;
}

.recent-posts .post-img {
  max-height: 240px;
  margin: -30px -30px 15px -30px;
  overflow: hidden;
}

.recent-posts .post-category {
  font-size: 16px;
  color: rgba(var(--default-color-rgb), 0.5);
  margin-bottom: 10px;
}

.recent-posts .title {
  font-size: 20px;
  font-weight: 600;
  padding: 0;
  margin: 0 0 20px 0;
}

.recent-posts .title a {
  color: var(--secondary-color);
  transition: 0.3s;
}

.recent-posts .title a:hover {
  color: var(--primary-color);
}

.recent-posts .post-author-img {
  width: 50px;
  border-radius: 50%;
  margin-right: 15px;
}

.recent-posts .post-author {
  font-weight: 600;
  margin-bottom: 5px;
}

.recent-posts .post-date {
  font-size: 14px;
  color: rgba(var(--default-color-rgb), 0.5);
  margin-bottom: 0;
}

    </style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


	<nav class="navbar navbar-expand-lg" style="background-color: navy; padding-top: 30px; padding-bottom: 30px;">
 	 <div class="container">
	 	<!-- <img src="logo 1.jpeg" alt="Arram Jobs" width="120" height="50"> -->
         <h4 style="color: white">அறம் வேலைவாய்ப்பு</h4>
	      <!-- <a href="" style="color: white">ArramJobs</a> -->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
    	<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				<!-- <li class="nav-item">
				<a class="nav-link" href="#" style="color: white; padding-right: 40px;">Home</a>
				</li> -->
				<li class="nav-item">
				<a class="nav-link" href="#about" style="color: white; padding-right: 40px;">About Us</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#provider" style="color: white; padding-right: 40px;">Provider</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#seeker" style="color: white; padding-right: 40px;">Seeker</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#" style="color: white; padding-right: 40px;">BLOG</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#" style="color: white; padding-right: 40px;">Contact</a>
				</li>
			</ul>
	    <div>
		<!-- <form class="d-flex" role="search">
         <button class="btn btn-danger btn-lg">LogIn</button>
      	</form> -->
		<div class="dropdown" style="margin-left: 15px;">
			<button class="btn btn-light dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false">
				LogIn
			</button>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="<?php echo baseUrl . "provider/login"?>">Provider LogIn</a></li>
				<li><a class="dropdown-item" href="<?php echo baseUrl . "seekerController"?>">Seeker LogIn</a></li>
			</ul>
		</div>
	  </div>
</nav> 


<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="banner 1.jpeg" class="d-block w-100" alt="..." style=" opacity: 0.4;">
      <div class="carousel-caption ">
        <h2 style="font-size: 80px;"><b>Welcome</b></h2>
        <p>"Find Your Dream Job with Us"</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="pexels-fauxels-3184291.jpg" class="d-block w-100" alt="..." style=" opacity: 0.4;">
      <div class="carousel-caption ">
         <h2 style="font-size: 60px;"><b>Find Your Suitable Jobs</b></h2>
        <p>"Your Future Begins on Our Portal"</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<section id="about" class="about section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12 col-12">
				<div class="about-img">
					<img src="blog-2.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-2 justify-content-center" style="text-align: justify; font-size: medium;">
				<div class="about-text">
					<h2><b>About Arramjobs</b></h2>
					<p>At Arram Jobs, we're committed to providing comprehensive solutions that cater to the unique needs of both job seekers and employers. Our platform is designed to offer a range of valuable services and benefits, ensuring a seamless and rewarding experience for all.</p>
					<p>At Arram Jobs, we are on a mission to connect talented individuals with the career opportunities that align with their aspirations. We believe that the right job can transform lives, foster personal growth, and drive organizational success. With our innovative approach to recruitment, we aim to bridge the gap between exceptional talent and top-tier employers, creating a brighter future for both.</p>
					<!-- <a href="#" class="btn btn-warning">Learn More</a> -->
				</div>
			</div>
		</div>
	</div>
</section>


   <!-- Recent-posts Section - Home Page -->
    <section id="recent-posts" class="recent-posts" style="margin-bottom: 30px;">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
		<h1 class="text-center"><b>What does Arram Offer</b></h1>
        <!-- <p class="text-center">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6 col-1" data-aos="fade-up" data-aos-delay="100">
            <article>
			  <div class="card" style="width: 18rem; box-shadow: 0 0 11px rgba(33,33,33,.2);">
				<img src="photo-1606857521015-7f9fcf423740 (1).jpeg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title" style="font-family:Arial, Helvetica, sans-serif ;"><b>JOB SEARCHING</b></h5>
					<p class="card-text"  style="text-align:justify; padding-right: 20px; padding-top: 10px; padding-bottom: 10px;">At Arram Job Portal, we're dedicated to helping you unlock your potential. Whether you're a recent graduate starting your career or a seasoned expert seeking new challenges, we're your trusted job search partner.</p>
					<a href="#seeker" class="btn btn-primary">See More</a>
				</div>
				</div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article>
				<div class="card" style="width: 18rem; box-shadow: 0 0 11px rgba(33,33,33,.2);">
					<img src="chairs-contemporary-daylight-1170412.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><b>JOB PROVIDING</b></h5>
						<p class="card-text" style="text-align:justify; padding-right: 20px; padding-top: 10px; padding-bottom: 10px;">At Arram Job Providing, our team is dedicated to understanding your staffing needs and delivering tailored solutions. With industry knowledge, we ensure you find the right talent and build lasting connections fostering success.</p>
						<a href="#provider" class="btn btn-primary">See More</a>
					</div>
					</div>
            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

				<div class="card" style="width: 18rem; box-shadow: 0 0 11px rgba(33,33,33,.2);">
					<img src="R.jpeg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><b>ARRAM UNIQUE FEATURES</b></h5>
						<p class="card-text"  style="text-align:justify; padding-right: 20px; padding-bottom: 15px;">Arram Job Providing stands out with unique features redefining recruitment. Our platform uses cutting-edge algorithms to match skills, culture, and personality for ideal candidate-employer pairings.</p>
						<a href="#about" class="btn btn-primary">See More</a>
					</div>
					</div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>

    </section><!-- End Recent-posts Section -->
	
<!-- Six Reasons For People Choosing Us -->
    
	<div class="section services section-padding" id="services" style="background-color:  #D6D3D1	;">
		<div class="container" style="padding-top:30px;">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h4 ><b>Why Choose Us</b></h4>
						<p style="font-size: 50px;">Six Reasons For People Choosing Us</p>
					</div>
				</div>
			</div>

<!-- card1-3 strat -->
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4 mb-lg-5">
					<div class="card-sec text-white text-center pb-4" style="background-color: #FAFAFA;  box-shadow: 0 0 11px rgba(33,33,33,.2);" >
						<div class="card-body-s" style="padding-top: 30px;">
							<i class="bi bi-phone" style="color: black; font-size: 30px;"></i>
							<h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 33px; color: black;">Mobile Accessibility</h4>
							<p class="lead" style="color: black; font-size: 16px; padding-left: 20px; padding-right: 20px; text-align: justify;">Mobile accessibility aims to remove barriers, enhance user experiences, and enable all users, including those with disabilities and those using mobile devices exclusively, to access and interact with job listings, apply for positions, and navigate the portal's features effortlessly.</p>

						</div>             
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4 mb-lg-5">
					<div class="card-sec text-white text-center pb-4" style="background-color: #FAFAFA; box-shadow: 0 0 11px rgba(33,33,33,.2); ">
						<div class="card-body-s" style="padding-top: 30px;">
                            <i class="bi bi-book-fill" style="color: black; font-size: 30px;"></i>
							<h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 10px; color: black;"> Accredited</h4>
							<p class="lead" style="color: black; font-size: 16px; padding-left: 20px; padding-right: 20px; text-align: justify;">An accredited job portal connects job seekers and employers after obtaining official recognition and certification from accrediting bodies. Accreditation involves evaluating the portal's operations, features, and compliance with industry standards, legal regulations, and ethics.</p>

						</div>             
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4 mb-lg-5">
					<div class="card-sec text-white text-center pb-4" style="background-color: #FAFAFA;  box-shadow: 0 0 11px rgba(33,33,33,.2); ">
						<div class="card-body-s" style="padding-top: 30px;">
                            <i class="bi bi-laptop-fill" style="color: black; font-size: 30px;"></i>
							<h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 38px; color: black;">User-friendly Interface</h4>
							<p class="lead" style="color: black; font-size: 16px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px; text-align: justify;">A job portal's user-friendly interface prioritizes easy navigation, clarity, and effectiveness, benefiting the job seekers and the employers by simplifying the search for their employment opportunities and hiring processes.</p>

						</div>             
					</div>
				</div>
			</div>
<!-- card1-3 end -->

<!-- card2-3 strat -->
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4 mb-lg-5">
					<div class="card-sec text-white text-center pb-4" style="background-color: #FAFAFA; box-shadow: 0 0 11px rgba(33,33,33,.2);">
						<div class="card-body-s" style="padding-top: 30px;">                            
                            <i class="bi bi-subtract" style="color: black;  font-size: 30px;"></i>
							<h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 10px; color: black;">Extensive Job opportunities</h4>
							<p class="lead" style="color: black; font-size: 16px; padding-bottom: 5px; padding-left: 20px; padding-right: 20px; text-align: justify;">An abundance of 'extensive job opportunities' signifies a robust job market, offering plentiful prospects. This is highly advantageous for job seekers, career changers, and professionals aiming to explore new roles or industries, facilitating diverse career growth.</p>

						</div>             
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4 mb-lg-5">
					<div class="card-sec text-white text-center pb-1" style="background-color: #FAFAFA; box-shadow: 0 0 11px rgba(33,33,33,.2);">
						<div class="card-body-s" style="padding-top: 30px;">
							<i class="bi bi-shield-shaded" style="color: black; font-size: 30px;"></i>
							<h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 10px; color: black;">Quick Response</h4>
							<p class="lead" style="color: black; font-size: 16px; padding-left: 20px; padding-right: 20px; text-align: justify;">Quick response" in a job portal refers to the prompt and timely feedback or acknowledgment provided to job seekers or employers when they take certain actions or submit applications within the platform. This feature is designed to enhance the user experience by ensuring that users receive immediate confirmation. </p>

						</div>             
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4 mb-lg-5">
					<div class="card-sec text-white text-center pb-4" style="background-color: #FAFAFA; box-shadow: 0 0 11px rgba(33,33,33,.2);">
						<div class="card-body-s" style="padding-top: 30px;">
							<i class="bi bi-tablet-landscape" style="color: black; font-size: 30px;"></i>
							<h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 10px; color: black;">Advanced search and filtering </h4>
							<p class="lead" style="color: black; font-size: 16px; padding-left: 20px; padding-right: 20px; text-align: justify;">The goal of advanced search and filtering features in a jobs portal is to empower job seekers to pinpoint job listings that align closely with their unique preferences and qualifications, saving time and increasing the likelihood of finding the most suitable job opportunities. </p>

						</div>             
					</div>
				</div>
			</div>
<!-- card2 3 end -->
		</div>
	</div>


	<!-- seeker -->

	<!-- <section id="seeker" class="seeker section-padding" style="background-color: #f7fee7">
	<div class="container" >
		<div class="row">
			<div class="col-lg-4 col-md-12 col-12">
				<div class="seeker-img">
					<img src="blog-2.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-0 justify-content-center" >
				<div class="seeker-text">
					<p class="fs-1">Seeker</p>
					<p style="text-align: justify; padding-right: 60px;">At Arram Job Portal, our unwavering commitment is to empower individuals to realize their utmost potential. Regardless of where you stand in your career journey—whether you're a recent graduate venturing into the professional landscape, a seasoned professional yearning for fresh challenges, or somewhere in between—we are your steadfast companion in the job search expedition. With our comprehensive platform, you gain access to a wealth of opportunities, career resources, and expert guidance to navigate the ever-evolving job market. We prioritize your aspirations, offering support and solutions tailored to your unique needs. </p>
					<a href="#" class="btn btn-warning">Learn More</a>
				</div>
			</div>
		</div>
	</div>
</section> -->


<section id="about" class="about section-padding" style="background-color: #f7fee7">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12 col-12">
				<div class="about-img">
					<img src="blog-2.jpg" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-2 justify-content-center" style="text-align: justify; font-size: medium;">
				<div class="about-text">
					<p class="fs-1">Seeker</p>
					<p>At Arram Job Portal, our unwavering commitment is to empower individuals to realize their utmost potential. Regardless of where you stand in your career journey—whether you're a recent graduate venturing into the professional landscape, a seasoned professional yearning for fresh challenges, or somewhere in between—we are your steadfast companion in the job search expedition. With our comprehensive platform, you gain access to a wealth of opportunities, career resources, and expert guidance to navigate the ever-evolving job market. We prioritize your aspirations, offering support and solutions tailored to your unique needs. </p>
					<a href="#" class="btn btn-warning">Learn More</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- seeker -->

	<!-- provider -->

	<section id="about" class="about section-padding" style="background-color: #ede9fe">
	<div class="container">
		<div class="row">
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-2 justify-content-center" style="text-align: justify; font-size: medium;">
					<div class="about-text">
						<p class="fs-1">Provider</p>
						<p>At Arram Job Providing, we firmly believe that the key to a prosperous organization lies in having the right people onboard. Be it team expansion, project initiation, or the need for specialized skills, we serve as your dependable partner in talent acquisition. With our extensive network and expertise, we identify and connect you with top-notch professionals who fit your unique requirements. Our commitment to excellence ensures that you receive candidates who not only meet but exceed your expectations. We're dedicated to streamlining your recruitment process, saving you time and resources, so you can focus on what you do best - achieving your business goals.</p>
						<a href="#" class="btn btn-warning">Learn More</a>
					</div>
			    </div>
				<div class="col-lg-4 col-md-12 col-12">
				<div class="about-img-img">
					<img src="blog-4.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- provider -->

  <!-- Team section -->
  <section id="team" class="team section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-header text-center pb-5">
                    <p style="font-size: 50px;">Team</p>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, voluptatem?</p> -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 col-lg-3" id="card-sf">
				<div class="card text-center">
					<div class="card-body">
						<img src="team-6.jpg" alt="" class="img-fluid rounded-circle">
						<h3 class="card-title py-2">Person 1</h3>
						<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, in.</p>

						<p class="socials">
							<i class="bi bi-twitter text-dark mx-1"></i>
							<i class="bi bi-facebook text-dark mx-1"></i>
							<i class="bi bi-linkedin text-dark mx-1"></i>
							<i class="bi bi-instagram text-dark mx-1"></i>
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card text-center">
					<div class="card-body">
						<img src="team-3.jpg" alt="" class="img-fluid rounded-circle">
						<h3 class="card-title py-2">Person 2</h3>
						<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, in.</p>

						<p class="socials">
							<i class="bi bi-twitter text-dark mx-1"></i>
							<i class="bi bi-facebook text-dark mx-1"></i>
							<i class="bi bi-linkedin text-dark mx-1"></i>
							<i class="bi bi-instagram text-dark mx-1"></i>
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card text-center">
					<div class="card-body">
						<img src="team-4.jpg" alt="" class="img-fluid rounded-circle">
						<h3 class="card-title py-2">Person 3</h3>
						<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, in.</p>

						<p class="socials">
							<i class="bi bi-twitter text-dark mx-1"></i>
							<i class="bi bi-facebook text-dark mx-1"></i>
							<i class="bi bi-linkedin text-dark mx-1"></i>
							<i class="bi bi-instagram text-dark mx-1"></i>
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card text-center">
					<div class="card-body">
						<img src="team-1.jpg" alt="" class="img-fluid rounded-circle">
						<h3 class="card-title py-2">Person 4</h3>
						<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, in.</p>

						<p class="socials">
							<i class="bi bi-twitter text-dark mx-1"></i>
							<i class="bi bi-facebook text-dark mx-1"></i>
							<i class="bi bi-linkedin text-dark mx-1"></i>
							<i class="bi bi-instagram text-dark mx-1"></i>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
  </section>

<!-- Footer -->
<footer class="text-center text-lg-start text-muted" style="background-color: #131D3B;">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block" style="color:white ;">
      <h5>Get connected with us on social networks:</h5>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/Arram.2019?mibextid=ZbWKwL" class="me-4 link-secondary">
        <i class="fab fa-facebook-f" style="color: white;"></i>
      </a>
      <a href="https://www.youtube.com/@arramcharitytrust" class="me-4 link-secondary">
        <i class="fab fa-youtube" style="color: white;"></i>
      </a>
      <a href="https://www.instagram.com/arramcharitytrust/?utm_source=qr&igshid=ZDc4ODBmNjlmNQ%3D%3D" class="me-4 link-secondary">
        <i class="fab fa-instagram" style="color: white;"></i>
      </a>
    </div>
    <!-- Right -->
  </section>	
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class=""  >
    <div class="container text-center text-md-start" style="margin-top: 40px;">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h3 class="text-uppercase fw-bold mb-4" style="color: #EF4444;">
            <i class="fas fa-gem  me-3 " style="color: #EF4444;" ></i>ARRAM JOBS
          </h3  style="color: white;">
          <p  style="color: white;">Arram Jobs has rapidly emerged as a trusted partner in the recruitment industry. Our journey began with a simple yet powerful idea
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <!-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"> -->
          <!-- Links -->
          <!-- <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div> -->
        <!-- Grid column -->

        <!-- Grid column --> 
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4" style="color: #EF4444;">
            Useful links
          </h5>
          <p  style="color: white;">
            <a href="#about" class="text-reset" style="text-decoration: none;">About Us</a>
          </p>
          <p style="color: white;">
            <a href="#seeker" class="text-reset" style="text-decoration: none;">Seeker</a>
          </p>
          <p style="color: white;">
            <a href="#provider" class="text-reset" style="text-decoration: none;">Provider</a>
          </p>
          <p style="color: white;">
            <a href="" class="text-reset" style="text-decoration: none;">Blog</a>
          </p>
		  <p style="color: white;">
            <a href="" class="text-reset" style="text-decoration: none;">Contact</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4" style="color: #EF4444;">Contact</h5>
          <p style="color: white;"><i class="fas fa-home me-3" style="color: white;"></i>H-72, Periyar Nagar, Erode.</p>
          <p style="color: white;">
            <i class="fas fa-envelope me-3"  style="color: white;"></i>
          arramjobs@gmail.com
          </p>
          <p style="color: white;"><i class="fas fa-phone me-3" style="color: white;"></i> +91 75581 11555</p>
          <!-- <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p> -->
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="color: white;">
    © 2023 Copyright:
    <a class="text-reset fw-bold"  style="color: white; text-decoration: none;" href="https://arramjobs.in/">Arramjobs.in</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
</html>