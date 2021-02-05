
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nepal Agro Yantra </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/bootstrapUp.min.css') }}" />     
		<link rel="stylesheet" type="text/css" href="{{ asset('css/isotope.css') }}" media="screen" />	
		<link rel="stylesheet" href="{{ asset('css/font/jquery.fancybox.css') }}" type="text/css" media="screen" />



	
        <!-- Styles -->
        <style>
            
            
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
        

    </head>
    <body >
    <div>@include('navbar')</div>
	

 <div class="banner-container">
       
	 <img class="banner-container" src="{{asset('storage/img/banner1.jpg')}}" >
	
 </div>
    </div>		
	<section class="sub-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Adapting Your Business</h2>
            <p> We are hear to serve you.</p>
          </div>
        </div>
      </div><!-- END container -->
    </section>
    <!--/.container-->
</section> 
<section id="aboutUs" class="page-section darkBg pDark pdingBtm30">
	<div class="container">
							    <div class="heading text-center">
								<!-- Heading -->
								<h2>About Us</h2>								 
								<p>
									Helping Clients Create the Future
								</p>
								<p>Our expertise and business intelligence to catalyze change and deliver results.</p>
							</div>
							
								<div class="row">
									<div class="col-md-4 col-sm-4">										
											<h3><i class="fa fa-desktop color"></i> &nbsp; What we do?</h3>
											<!-- Paragraph -->
											<p> content text</p>										
									</div>
									<div class="col-md-4 col-sm-4">										
											<!-- Heading -->
											<h3><i class="fa fa-cloud color"></i> &nbsp;Why choose us?</h3>
											<!-- Paragraph -->
											<p> content</p> 										
									</div>
									<div class="col-md-4 col-sm-4">										
											<!-- Heading -->
											<h3><i class="fa fa-home color"></i> &nbsp;Where are we?</h3>
											<!-- Paragraph -->
											<p>content</p> 										
									</div>
								</div>
							</div>
	<!--/.container-->
</section> 

<section id="services" class="page-section">
	<div class="container">
		    <div class="heading text-center">
								<!-- Heading -->
								<h2>Services</h2>								
								<p>description</p>
							</div>
		<section class="grid row clearfix clearfix-for-2cols">

                  <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">
                     <i class="fa fa-cogs fa-5x"></i>
                      <div class="text-content">
                        <h4>Consultant</h4>
                        <p>description..... </p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><!-- end: .grid-item -->

                  <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">
                      <i class="fa fa-bullseye fa-5x"></i>
                      <div class="text-content">
                        <h4>Reasearch and Development  </h4>
                        <p>description</p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><article class="clearfix"></article><!-- end: .grid-item -->

                  <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">  
                        <i class="fa fa-desktop fa-5x"></i>
                      <div class="text-content">
                        <h4>Trunkey Solution</h4>
                        <p>description</p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><!-- end: .grid-item -->

                  <!-- grid item -->
                  <div class="grid-item col-md-6">
                    <div class="item-content clearfix">
                      <i class="fa fa-flask fa-5x"></i>
                      <div class="text-content">
                        <h4>Agro Engineering</h4>
                        <p>description</p>
                      </div>
                    </div><!-- end: .item-content -->
                  </div><article class="clearfix"></article><!-- end: .grid-item -->

                </section>
	</div>
	<!--/.container-->
</section> 

<section id="portfolio" class="page-section section appear clearfix">	
			<div class="container">
				
		    <div class="heading text-center">
								<!-- Heading -->
								<h2>Portfolio</h2>								
								<p>description</p>
							</div>
					
                        <div class="row">
                          <nav id="filter" class="col-md-12 text-center">
                            <ul>
                              <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
                              <li><a href="#"  class="btn-theme btn-small" data-filter=".webdesign" >Trunkey Projects</a></li>
                              <li><a href="#"  class="btn-theme btn-small" data-filter=".photography">RND</a></li>
                              <li ><a href="#" class="btn-theme btn-small" data-filter=".print">Installation</a></li>
                            </ul>
                          </nav>
                          <div class="col-md-12">
                            <div class="row">
                              <div class="portfolio-items isotopeWrapper clearfix" id="3">
							  
                                <article class="col-md-4isotopeItem webdesign">
									<div class="portfolio-item">
										<img src="./images/portfolio/img1.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="./images/portfolio/img2.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-plus-circle fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4isotopeItem photography">
									<div class="portfolio-item">
										<img src="images/portfolio/img2.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img2.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-plus-circle fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>
								

                                <article class="col-md-4isotopeItem photography">
									<div class="portfolio-item">
										<img src="images/portfolio/img3.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img3.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-plus-circle fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4isotopeItem print">
									<div class="portfolio-item">
										<img src="images/portfolio/img4.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img4.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-plus-circle fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4isotopeItem photography">
									<div class="portfolio-item">
										<img src="images/portfolio/img5.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img5.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-plus-circle fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4isotopeItem webdesign">
									<div class="portfolio-item">
										<img src="images/portfolio/img6.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img6.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-plus-circle fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4isotopeItem print">
									<div class="portfolio-item">
										<img src="images/portfolio/img7.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img7.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-plus-circle fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4isotopeItem photography">
									<div class="portfolio-item">
										<img src="images/portfolio/img8.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img8.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-plus-circle fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

                                <article class="col-md-4isotopeItem print">
									<div class="portfolio-item">
										<img src="images/portfolio/img9.jpg" alt="" />
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<a href="images/portfolio/img9.jpg" class="fancybox"><h5>Project Name</h5>
												<i class="fa fa-plus-circle fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>
                                </div>
                                        
							</div>
                                     

							</div>
                        </div>
				
			</div>	
</section> 

<section id="team" class="page-section">
	<div class="container">
							<div class="heading text-center">
								<!-- Heading -->
								<h2>Our Team</h2> 
								<p> Meet our expertise</p>
							</div>
							<!-- Team Member's Details -->
							<div class="team-content">
								<div class="row">
									<div class="col-md-3 col-sm-6 col-xs-6">
										<!-- Team Member -->
										<div class="team-member pDark">
											<!-- Image Hover Block -->
											<div class="member-img">
												<!-- Image  -->
												<img class="img-responsive" src="{{asset('storage/img/logo.jpeg')}}" alt=""> 
											</div>
											<!-- Member Details -->
											<h3>Er. Binod Giri</h3>
											<!-- Designation -->
											<span class="pos">CEO</span>
                                            <div class="descrition">
                                                <p></p>
                                                </div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6">
										<!-- Team Member -->
										<div class="team-member pDark">
											<!-- Image Hover Block -->
											<div class="member-img">
												<!-- Image  -->
												<img class="img-responsive" src="{{asset('storage/img/logo.jpeg')}}" alt=""> 
											</div>
											<!-- Member Details -->
											<h3>Er. Prakash C Baral</h3>
											<!-- Designation -->
											<span class="pos">Director</span>
                                            <div class="descrition">
                                                <p></p>
                                                </div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6">
										<!-- Team Member -->
										<div class="team-member pDark">
											<!-- Image Hover Block -->
											<div class="member-img">
												<!-- Image  -->
												<img class="img-responsive" src="{{asset('storage/img/logo.jpeg')}}" alt=""> 
											</div>
											<!-- Member Details -->
											<h3>Pawan Poudel</h3>
											<!-- Designation -->
											<span class="pos">Manager</span>
                                            <div class="descrition">
                                                <p></p>
                                                </div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6">
										<!-- Team Member -->
										<div class="team-member pDark">
											<!-- Image Hover Block -->
											<div class="member-img">
												<!-- Image  -->
												<img class="img-responsive" src="{{asset('storage/img/logo.jpeg')}}" alt=""> 
											</div>
											<!-- Member Details -->
											<h3>Babita Giri</h3>
											<!-- Designation -->
											<span class="pos">Accountant</span>
                                            <div class="descrition">
                                                <p></p>
                                                </div>
										</div>
									</div>
								</div>
							</div>
						</div>
	<!--/.container-->
</section> 

<section id="contactUs" class="page-section">
	<div class="container">
    
		<div class="row">
                <div class="heading text-center">
								<!-- Heading -->
								<h2>Contact Us</h2> 
								<p>Short description</p>
							</div>
						<div class="col-sm-12">
								<div id="mapWrapper" class="mb30" style="position: relative; maring-bottom:20px; background-color: rgb(229, 227, 223); overflow: hidden; -webkit-transform: translateZ(0px);">
									<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
										<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
										var setting = {"height":540,"queryString":"Pokhara, Nepal","place_id":"ChIJ_3YDv3uTlTkRZCGAJTuCz_Y","satellite":false,"centerCoord":[28.229768027470783,83.9566183],"cid":"0xf6cf823b25802164","lang":"en","cityUrl":"/nepal/pokhara-26757","cityAnchorText":"Map of Pokhara, Lalitpur, Nepal","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"260970"};
										var d = document;
										var s = d.createElement('script');
										s.src = 'https://1map.com/js/script-for-user.js?embed_id=260970';
										s.async = true;
										s.onload = function (e) {
										  window.OneMap.initMap(setting)
										};
										var to = d.getElementsByTagName('script')[0];
										to.parentNode.insertBefore(s, to);
									  })();</script></div>
								</div><br/>
							</div>
            </div>

					<div class=" contactusform">
                        			
								<form method="post" action="" id="contactfrm" role="form">

									<div class="col-sm-4"> 
										<div class="form-group">
											<label for="name">Name</label>
											<input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" title="Please enter a valid email address">
										</div>
										<div class="form-group">
											<label for="phone">Phone</label>
											<input name="phone" class="form-control required digits" type="tel" id="phone" size="30" value="" placeholder="Enter  Phone Number" title="Please enter a valid phone number (at least 10 characters)">
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label for="comments">Comments</label>
											<textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
										</div>	
										<button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit" style="background-color:green;"> Submit</button>		
										<div class="result"></div>										
									</div>                        									
								</form>
							</div>
        </div>
	<!--/.container-->
</section>
        
    </body>
<div>@include('footer')</div>
</html>
