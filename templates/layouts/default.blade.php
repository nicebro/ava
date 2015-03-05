<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>@yield('title')</title>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
		<link href="assets/css/normalize.css" rel="stylesheet">
		<link href="assets/css/styles.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.sequence.min.js"></script>
	</head>
<body>

<div id="wrapper">
	<div class="header-wrapper">
		<div class="top-header">
			<div class="container">
				<div class="pull-left"><em>Trusted Employment Law Counsel</em></div>
				<div class="pull-right">(919) 251-6008</div>
			</div>
		</div>
		<div id="header" class="row">
			<div class="container">
				<div class="row">
					<div class="col-1-6">
						<div class="logo">
							<a href="#"><img src="assets/images/logo.png" alt="The Noble Law Firm" class="normal_logo"></a>
						</div>
					</div>
					<div class="col-5-6">
						<div id="open-nav">&#9776;</div>
						<div id="nav">
							<ul>
								<li><a href="http://thenoblelaw.com/">Home</a>
								</li>
								<li class="dropdown"><a href="http://thenoblelaw.com/labor-and-employment-law-firm-chapel-hill-nc/">About</a>
									<ul>
										<li><a href="http://thenoblelaw.com/employment-law-attorneys/">Team</a></li>
										<li><a href="http://thenoblelaw.com/testimonials/">Testimonials</a></li>
										<li><a href="http://thenoblelaw.com/labor-and-employment-law-firm-chapel-hill-nc/videos/">Videos</a></li>
										<li><a href="http://thenoblelaw.com/privacy-policy/">Privacy Policy</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="http://thenoblelaw.com/services/">Services</a>
									<ul>
										<li class="dropdown"><a href="http://thenoblelaw.com/services/employee-rights/">For Employees</a>
											<ul>
											<li><a href="http://thenoblelaw.com/services/employee-rights/employment-contracts/">Counseling New &amp; Departing Employees</a></li>
											<li><a href="http://thenoblelaw.com/services/employee-rights/employment-discrimination/">Employment Discrimination</a></li>
											<li><a href="http://thenoblelaw.com/services/employee-rights/sexual-harassment/">Sexual Harassment</a></li>
											<li><a href="http://thenoblelaw.com/services/employee-rights/wrongful-discharge/">Wrongful Discharge</a></li>
											<li><a href="http://thenoblelaw.com/services/employee-rights/family-and-medical-leave/">Family and Medical Leave</a></li>
											<li><a href="http://thenoblelaw.com/services/employee-rights/negligent-hiring-and-retention/">Negligent Hiring and Retention</a></li>
											<li><a href="http://thenoblelaw.com/services/employee-rights/retaliation/">Retaliation</a></li>
											<li><a href="http://thenoblelaw.com/services/employee-rights/wage-and-hour-disputes/">Wage and Hour Disputes</a></li>
											<li><a href="http://thenoblelaw.com/services/employee-rights/libel-and-defamation/">Defamation (Libel &amp; Slander)</a></li>
											<li><a href="http://thenoblelaw.com/services/employee-rights/whistleblower-rights/">Whistleblower Rights</a></li>
											<li><a href="http://thenoblelaw.com/services/employee-rights/non-compete-agreements/">Non-Compete Agreements</a></li>
											</ul></li>
										<li class="dropdown"><a href="http://thenoblelaw.com/employment-practices-audit/">For Employers</a>
											<ul>
											<li><a href="http://thenoblelaw.com/employment-practices-audit/employment-practices-program/">Employment Practices Program</a></li>
											<li><a href="http://thenoblelaw.com/employment-practices-audit/best-practices-systems/">Improve and Control Employment Systems</a></li>
											<li><a href="http://thenoblelaw.com/employment-practices-audit/business-litigation/">Business Tort Litigation</a></li>
											</ul></li>
									</ul>
								</li>
								<li><a href="http://thenoblelaw.com/employment-legal-advice-nc/">Consultations</a>
								</li>
								<li><a href="http://thenoblelaw.com/labor-and-employment-law-resources/">Employment Law Resources</a>
								</li>
								<li class="dropdown"><a href="http://thenoblelaw.com/employment-law-blog/">Noble Notes</a>
									<ul>
										<li><a href="http://thenoblelaw.com/noble-notes-for-employees/">Noble Notes for Employees</a></li>
										<li><a href="http://thenoblelaw.com/noble-notes-for-employers/">Noble Notes for Employers</a></li>
										<li><a href="http://thenoblelaw.com/employment-law-blog/news/">News</a></li>
									</ul>
								</li>
								<li><a href="http://thenoblelaw.com/contact-noble-law-firm/">Contact</a>
								</li>
							</ul>
						</div> <!-- #nav -->
					</div>
				</div>
			</div>  
		</div>
	</div>

	@yield('content') 

	<div id="pre-footer">
		<div class="container">
			<div class="row">
				<div class="col-1-4">
					<div class="block disclaimer">
						<h3>Disclaimer</h3>
						<p><em>The information provided on this website does not constitute legal advice or otherwise create an attorney-client relationship.</em></p>
					</div>
					<div class="block social">
						<h3>Get Social</h3>
						<a class="facebook" href="#" target="blank" data-tooltip="Facebook"></a>
						<a class="twitter" href="#" target="blank" data-tooltip="Twitter"></a>
						<a class="google" href="#" target="blank" data-tooltip="Google"></a>
						<a class="linkedin" href="#" target="blank" data-tooltip="LinkedIn"></a>
					</div>
				</div>
				<div class="col-1-4">
					<div class="block blog">
						<h3>The Noble Notes Blog</h3>
						<ul>
							<li><a href="#">Color Discrimination in the Absence of Race Discrimination</a></li>
							<li><a href="#">Facing Prison for Accessing Former Employer’s Database</a></li>
							<li><a href="#">An Expensive FMLA Policy Mistake</a></li>
							<li><a href="#">Workplace Productivity Killers</a></li>
						</ul>
					</div>
					<div class="block subscribe">
						<h3>Subscribe to our blog</h3>
						<form action="#" method="post" target="popupwindow">
						<input type="text" placeholder="Your email here" value="" name="email">
						<input type="submit" class="button default" value="Subscribe">    
					</form>
					</div>
				</div>
				<div class="col-1-4">
					<div class="block contact">
						<h3>Contact</h3>
						<p>308 West Rosemary Street, Suite 303 Chapel Hill, NC</p>
						<p>T: (919) 251-6008<br>F: (919) 869-2079<br><a href="mailto:example@eample.com">Email</a></p>
					</div>
					<div class="block subscribe2">
						<h3>Subscribe to our newsletter</h3>
						<p class="web">Web: <a href="#">click here to subscribe</a></p>
					</div>
				</div>
				<div class="col-1-4">
					<div class="block quick-links">
						<h3>Quick Links</h3>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Consultations</a></li>
							<li><a href="#">Employment Law Resources</a></li>
							<li><a href="#">Noble Notes</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="container">    		
			<p>Copyright 2014 The Noble Law Firm, PLLC. | All Rights Reserved | Powered by <a href="#">Hummingbird Creative Group</a>  |  <a href="#">Privacy Policy</a></p>
		</div>
	</div>
<script type="text/javascript" src="/assets/js/scripts.js"></script>
</div>

</body>
</html>