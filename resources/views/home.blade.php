@extends('layout.front_end_layout')
@section('content')
<!-- About -->
<div class="about-me" id="skill"> 
	<h3 class="text-center slideanim">My Skills</h3>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<div class="mydetails slideanim text-center">
					<img class="img-circle img-responsive" src="{{asset('assets/images/main.jpg')}}" alt="Generic placeholder image" width="200" height="200">
					<h3>Shishir Sharma</h3>
					<p>Web Developer</p>
					<div class="social-icons">
						<a href="https://www.facebook.com/shishir.sharma.372" alt="Facebook" title="Facebook" target="_blank"><span class="facebook"></span></a>
						<!--<a href="#" alt="Twitter" title="Twitter"><span class="twitter"></span></a>-->
						<a href="https://in.linkedin.com/in/shishirsharmaphp" alt="Linkedin" title="Linkedin"  target="_blank"><span class="linkedin"></span></a>
						<a href="https://plus.google.com/+shishirsharmabandikui" alt="Google+" title="Google+"  target="_blank"><span class="googleplus"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="myskills slideanim">
					<h3 class="text-center">My Skills Info</h3>
					<p class="skill-text">I am Cakephp bootstrap and CodeIgniter and Zend framework2 expert.I have 5+ year experience in Cakephp and CodeIgniter and Zend framework2 and SVN, XML-based services ( SOAP, JSON, RSS ),SSL(Certificates), SVN, GIT, Cron tasks ,Front End Web development and UI design (CSS3, HTML5, Responsive) and more. I have 5+ years of IT experience and are able to handle big enterprise kind of applications.I have a healthy sense of humor. Am a native English Speaker.</p>
					<div class="skill-info"> 
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td><h4>Core PHP</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>90%</p></td>
									</tr>
									<tr>
										<td><h4>Cake PHP</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>90%</p></td>
									</tr>
									<tr>
										<td><h4>Codeignator</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>90%</p></td>
									</tr>
									<tr>
										<td><h4>Zend Framework</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>90%</p></td>
									</tr>									
									<tr>
										<td><h4>Ajax</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>90%</p></td>
									</tr>
									<tr>
										<td><h4>Jquery</h4></td>
										<td><span class="longline4"></span><span class="shortline4"></span></td>
										<td><p>80%</p></td>
									</tr>
									<tr>
										<td><h4>Angular Js(Basic Knowledge)</h4></td>
										<td><span class="longline1"></span><span class="shortline1"></span></td>
										<td><p>50%</p></td>
									</tr>
									<tr>
										<td><h4>Phonegap</h4></td>
										<td><span class="longline1"></span><span class="shortline1"></span></td>
										<td><p>50%</p></td>
									</tr>	
									<tr>
										<td><h4>CSS3</h4></td>
										<td><span class="longline1"></span><span class="shortline1"></span></td>
										<td><p>50%</p></td>
									</tr>
									
								</tbody>
							</table>
						</div>	
					</div>
				</div>	
			</div>
		</div>	
	</div>	
</div>
<!-- /About -->
<!-- Portfolio -->
	<div class="myportfolio" id="portfolio">
		<h3 class="text-center slideanim">My Portfolio</h3>
		<p class="text-center slideanim">My Recent Projects , Just "Click" on them to know More.</p>
		<section class="vertical" id="grid3d">
				<div class="grid-wrap">
					<div class="grid">
						<figure><img class="slideanim" src="{{asset('assets/images/1.jpg')}}" alt="img01"/></figure>
						<figure><img class="slideanim" src="{{asset('assets/images/2.jpg')}}" alt="img05"/></figure>
						<figure><img class="slideanim" src="{{asset('assets/images/3.jpg')}}" alt="img08"/></figure>
						<figure><img class="slideanim" src="{{asset('assets/images/4.jpg')}}" alt="img02"/></figure>
						<figure><img class="slideanim" src="{{asset('assets/images/5.jpg')}}" alt="img04"/></figure>
						<figure><img class="slideanim" src="{{asset('assets/images/6.jpg')}}" alt="img03"/></figure>
						<figure><img class="slideanim" src="{{asset('assets/images/7.jpg')}}" alt="img09"/></figure>
						<figure><img class="slideanim" src="{{asset('assets/images/8.jpg')}}" alt="img06"/></figure>
						<figure><img class="slideanim" src="{{asset('assets/images/9.jpg')}}" alt="img07"/></figure>
					</div>
				</div><!-- /grid-wrap -->
				<div class="content">
					<div>
						<div class="content-img"><img src="{{asset('images/1-1.jpg')}}" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Classy Coming Soon</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="{{asset('images/2-2.jpg')}}" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">404 Error Page</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="{{asset('images/3-3.jpg')}}" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Credit Card Validation</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="{{asset('images/4-4.jpg')}}" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Eshop Product Detail Widget</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="{{asset('images/5-5.jpg')}}" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Model Profile Widget</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="{{asset('images/6-6.jpg')}}" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Flat Under Construction</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="{{asset('images/7-7.jpg')}}" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Impressive Under Construction</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="{{asset('images/8-8.jpg')}}" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Profile Widget</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<div>
						<div class="content-img"><img src="{{asset('images/9-9.jpg')}}" class="img-responsive" alt="my projects"></div>
						<h3 class="content-text">Travel Reservation Widget</h3>
						<p class="content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					</div>
					<span class="loading"></span>
					<span class="icon close-content"></span>
				</div>
			</section>
		</div>	
<!-- /Portfolio -->
<!-- Gallery -->
<!--<div class="mygallery" id="gallery">
	<h3 class="text-center slideanim">My Gallery</h3>
	<div class="text-center"> 
		<a href="images/me1-1.jpg" title="My Image Gallery"><img src="images/me1.jpg" alt="example-1" class="img-responsive slideanim"></a> 
		<a href="images/me2-2.jpg" title="My Image Gallery"><img src="images/me2.jpg" alt="example-2" class="img-responsive slideanim"></a> 
		<a href="images/me3-3.jpg" title="My Image Gallery"><img src="images/me3.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="images/me4-4.jpg" title="My Image Gallery"><img src="images/me4.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="images/me5-5.jpg" title="My Image Gallery"><img src="images/me5.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="images/me6-6.jpg" title="My Image Gallery"><img src="images/me6.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="images/me7-7.jpg" title="My Image Gallery"><img src="images/me7.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="images/me8-8.jpg" title="My Image Gallery"><img src="images/me8.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="images/me9-9.jpg" title="My Image Gallery"><img src="images/me9.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="images/me10-10.jpg" title="My Image Gallery"><img src="images/me10.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="images/me11-11.jpg" title="My Image Gallery"><img src="images/me11.jpg" alt="example-3" class="img-responsive slideanim"></a>
		<a href="images/me12-12.jpg" title="My Image Gallery"><img src="images/me12.jpg" alt="example-3" class="img-responsive slideanim"></a>	
	</div>

</div>	-->
<!-- Gallery -->
<div class="about-me" id="about"> 
	<h3 class="text-center slideanim">About Me</h3>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<div class="mydetails slideanim text-center">
					<img class="img-circle img-responsive" src="{{asset('assets/images/me2.jpg')}}" alt="Generic placeholder image" width="200" height="200">
					<h3>Shishir Sharma</h3>
					<p>Web Developer</p>
					<div class="social-icons">
						<a href="https://www.facebook.com/shishir.sharma.372" alt="Facebook" title="Facebook" target="_blank"><span class="facebook"></span></a>
						<!--<a href="#" alt="Twitter" title="Twitter"><span class="twitter"></span></a>-->
						<a href="https://in.linkedin.com/in/shishirsharmaphp" alt="Linkedin" title="Linkedin"  target="_blank"><span class="linkedin"></span></a>
						<a href="https://plus.google.com/+shishirsharmabandikui" alt="Google+" title="Google+"  target="_blank"><span class="googleplus"></span></a>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<h2 class="text-center">Academic Qualification</h3>
				<div class="myskills slideanim">					
					<p class="skill-text">M.C.A (Master of Computer Application) from Rohtak University 2011.</p>				
					<p class="skill-text">M.Sc. (Information Technology) from Rajasthan University 2010.</p>				
					<p class="skill-text">Graduate in B.Sc. (science, math) from Rajasthan University 2006.</p>				
					<p class="skill-text">12th in (science, math) from Rajasthan board 2003.</p>
				</div>	
			</div>
			<div class="col-md-8 col-xs-12">
				<h2 class="text-center">Working  Experience</h3>
				<div class="myskills slideanim">					
					<p class="skill-text">Working in Octal Infosolution Pvt Ltd, Jaipur as a Sr. software developer since March 2012</p>		
					<p class="skill-text">Working With Truworth InfoTech Pvt Ltd, Jaipur as a software developer August 2010 to March 2012.</p>
				</div>	
			</div>
			<div class="col-md-8 col-xs-12">
				<h2 class="text-center">Hobbies & General Info</h3>
				<div class="myskills slideanim">					
					<p class="skill-text">Cricket, Chess, Listening Songs, Reading books, Movies.</p>				
					<p class="skill-text">DOB: 15-october-1987</p>
				</div>	
			</div>
		</div>	
	</div>	
</div>
	
@endsection