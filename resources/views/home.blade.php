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
					<p>Full Stack Developer</p>
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
					<p class="skill-text">I Skilled in end-to-end development of software products from requirement analysis to system study, designing, coding, testing, debugging, documentation and Implementation.I have Strong analytical, problem solving & organizational abilities. Possess a flexible & detail oriented attitude.I am always willed to learn new things & i am hard worker.I am Providing support in conducting case / system / process study for project planning, scoping, estimation and tracking.I understand the technical & functional specifications.I am Interacted with team members and clients at onsite on daily basis and discussing about advancements and needs in the module.I am Support smooth implementation and testing of the application at client location.I am Ensuing post-implementation, enhancement and maintenance support to client.I have experience to worked in agile methodology.I have experience of Scrum.
					</p>
					<div class="skill-info"> 
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td><h4>Programming Language</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>Core PHP, PHP 7, HTML5, CSS</p></td>
									</tr>	
									<tr>
										<td><h4>PHP Framework</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>Cakephp, Yii,Laraval, Codeigniter</p></td>
									</tr>	
									<tr>
										<td><h4>Web service</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>REST</p></td>
									</tr>
									<tr>
										<td><h4>Scripting Language</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>Javascript, Ajax, JQuery, JSON , Angular, Node Js</p></td>
									</tr>
									<tr>
										<td><h4>Data Base</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>MYSQL, Firebase, Mongodb</p></td>
									</tr>
									<tr>
										<td><h4>Third-Party APIs Integration</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>Google, Facebook, Twitter </p></td>
									</tr>
									<tr>
										<td><h4>Payment Gateways</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>Paypal, Authorize.net,Traseury Integration,IDBI</p></td>
									</tr>
									<tr>
										<td><h4>Application Environments</h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>Apache , Nginx</p></td>
									</tr>
									<tr>
										<td><h4>Version Control System </h4></td>
										<td><span class="longline5"></span><span class="shortline5"></span></td>
										<td><p>Git, SVN</p></td>
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
		<p class="text-center slideanim">Worked on Projects in Previous or Current Company , Just "Click" on them to know More.</p>
		
		<section class="vertical" id="grid3d">
				<div class="grid-wrap">
					<div class="grid">
						<figure>
						<div style="text-align:left"><b>Project : -</b> <a href="https://msy.uk.gov.in/" target="_blank">https://msy.uk.gov.in/</a> ( YII Framework ) (Working For Uttarakhand Govt. )
							<br>
							<b>Project Overview:</b> To encourage entrepreneurship among the enterprising youth, migrants returned to Uttarakhand due to COVID-19, skilled and unskilled artisans, handicraftsmen and educated urban and rural unemployed persons, loan facility or financial assistance through Nationalized/ Scheduled Commercial Banks, State Co-operative Banks/ Regional Rural Banks to establish enterprise, service or business shall be provided under the guiding principles of "Mukhyamantri Swarozgar Yojana".
							<br><b>Activities Performed: </b>
							<ul>
								<li>Preparation of functional requirement specification and system requirement specification</li>
								<li>Providing support in conducting case / system / process study for project planning, scoping, estimation and tracking </li>
								<li>Understanding the technical & functional specifications </li>
								<li>Interacting with team members and clients at onsite on daily basis and discussing about advancements and needs in the module</li>
								<li>Maintaining or updating the website once it is completed by adding new content, illustrations or features & coordinating with other people, such as designers and writers, to help maintain the website.</li>
							</ul>	
						</div>
						</figure>
						<figure>
						<div style="text-align:left"><b>Project : -</b> <a href="https://investuttarakhand.com" target="_blank">https://investuttarakhand.com</a> ( YII Framework ) (Working For Uttarakhand Govt. )
							<br>
							<b>Project Overview:</b> The Single Window Clearance System portal is a single window facilitation mechanism for investor. The portal is a medium of information for investors on Government policies, incentive schemes and the availability of infrastructure.
							<br><b>Activities Performed: </b>
							<ul>
								<li>Preparation of functional requirement specification and system requirement specification</li>
								<li>Develop dynamic CAF ( In-Principle Approval ) using form builder and worked on process flow</li>
								<li>Roll-out of application</li>
								<li>Handling technical issues from the team</li>
								<li>Form builder update functionality </li>
								<li>Development of architecture and interoperability framework realization roadmap, including scope and nature</li>
								<li>Update design and development and implementation of department dashboard on Single Window Clearance Portal</li>
								<li>Mobile application web API</li>
								<li>Set up of framework for investment promotion for entire Investor Life Cycle</li>
								<li>Development of architecture and interoperability framework realization roadmap, including scope and nature </li>
								<li>User Registration & User management & authentication</li>
								<li>Development of API Services for Single Sign On</li>
								<li>Department onboard on Single Window Clearance Portal: (1) Legal Metrology (2) Film Shooting, (3)Information Technology Development Organisation (4) Education (5)Treasury Integration</li>
							</ul>	
						</div>
						</figure>					
						<figure>
						<div style="text-align:left"><b>Project : -</b> <a href="https://www.sixthcontinent.com" target="_blank">https://www.sixthcontinent.com</a> (HTML, CSS, Angular JS)
							<br>
							<b>Project Overview:</b> This is online ecommerce web application.
							<br><b>Activities Performed: </b>
							<ul>
								<li>Providing support in conducting case / system / process study for project planning, scoping, estimation and tracking</li>
								<li>Understanding the technical & functional specifications  </li>
								<li>Interacting with team members and clients at onsite on daily basis and discussing about advancements and needs in the module</li>
								<li>Maintaining or updating the website once it is completed by adding new content, illustrations or features & coordinating with other people, such as designers and writers, to help maintain the website.</li>
							</ul>	
						</div>
						</figure>
						<figure>
						<div style="text-align:left"><b>Project : -</b> <a href="http://motorjunkeez.com " target="_blank">http://motorjunkeez.com </a> (HTML, CSS, JS, JQuery, AJAX, CAKEPHP)
							<br>
							<b>Project Overview:</b> Motorjunkeez.com is a social utility that unites motor enthusiasts around the world. Motorjunkeez.com allows you to show your ride–enabling you to tell the complete story about the vehicles you’re passionate about.
							<br><b>Activities Performed: </b>
							<ul>
								<li>Program, test and debug web applications</li>
								<li>Set up of environment for development</li>
								<li>Set up version control system</li>
								<li>Requirement Implementation</li>
							</ul>	
						</div>
						</figure>
						<figure>
						<div style="text-align:left"><b>Project : -</b> <a href="https://www.prshots.com" target="_blank">https://www.prshots.com </a> HTML, CSS, JS, JQuery, AJAX, CODEIGNITER)
							<br>
							<b>Project Overview:</b>PRShots is the leading royalty-free image library dedicated to serving the press.
							<br><b>Activities Performed: </b>
							<ul>
								<li>Program, test and debug web applications</li>
								<li>Set up of environment for development</li>
								<li>Set up version control system</li>
								<li>Coordinate with other designers and programmers to develop web projects</li>
								<li>Research and propose software programs that are compatible to the future technologies</li>
							</ul>	
						</div>
						</figure>
						<figure>
						<div style="text-align:left"><b>Project : -</b> <a href="http://www.oricom.com.au" target="_blank">- http://www.oricom.com.au </a> (HTML, CSS, JS, JQuery, AJAX, CAKEPHP)
							<br>
							<b>Project Overview:</b> Its product offering website divided into 4 distinct areas; Oricom Baby, Oricom Phone, Oricom 2Way etc
							<br><b>Activities Performed: </b>
							<ul>
								<li>Program, test and debug web applications</li>
								<li>Set up of environment for development</li>
								<li>Set up version control system</li>
								<li>Requirement Implementation</li>
								<li>Design and Implementation of requirement</li>
							</ul>	
						</div>
						</figure>
						<!--<figure><img class="slideanim" src="{{asset('assets/images/6.jpg')}}" alt="img03"/></figure>
						<figure><img class="slideanim" src="{{asset('assets/images/7.jpg')}}" alt="img09"/></figure>
						<figure><img class="slideanim" src="{{asset('assets/images/8.jpg')}}" alt="img06"/></figure>
						<figure><img class="slideanim" src="{{asset('assets/images/9.jpg')}}" alt="img07"/></figure>-->
					</div>
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
					<p class="skill-text">Working in <b>Ernst Young </b>from December 2019</p>		
					<p class="skill-text">Worked with <b>Interra Information Technologies </b> in dehradun March 2012 to June 2018</p>		
					<p class="skill-text">Worked with <b>Octal Infosolution Pvt. Ltd </b> in jaipur as a Sr. software developer March 2012 to June 2018.</p>		
					<!--<p class="skill-text">Worked With Truworth InfoTech Pvt Ltd, Jaipur as a software developer August 2010 to March 2012.</p>-->
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