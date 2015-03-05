@extends('tpl::layouts.default')
@section('title', $page->title . ' - ' . $settings->title)
@section('content')
<div id="sequence">
	<ul class="sequence-canvas">
		<li class="animate-in">
			<div class="slide-1"><img src="assets/images/transparent4.jpg" alt=""></div>
			<div class="slide-1-text-1">Clarity at Work.</div>
			<div class="slide-1-text-2">Highly Efficient and Transparent .</div>
			<div class="slide-1-text-3"><span>As a small firm, we are nimble and efficient. With a commitment to advancements in technology and project management principles, Noble Law works to quickly and efficiently meet our clients' needs, often outpacing our big law counterparts.</span></div>
			<div class="slide-1-text-4"><a class="button large default" href="#" target="_blank">LEARN MORE</a></div>
		</li>
		<li>
			<div class="slide-2"><img src="assets/images/arrow2.jpg" alt=""></div>
			<div class="slide-1-text-1">Clarity at Work.</div>
		</li>
		<li>
			<div class="slide-3"><img src="assets/images/eye3.jpg" alt=""></div>
		</li>
		<li>
			<div class="slide-4"><img src="assets/images/handbg.png"></div>
			<div class="slide-4-image-1"><img src="assets/images/hand.png"></div>
		</li>
		<div class="sequence-next sequence-button"></div>
		<div class="sequence-prev sequence-button"></div>
	</ul>
</div>

<div id="content">	
	<div class="container">
		<h1>Employment Lawyers Providing Forward-Thinking, Trusted Counsel</h1>
		<p>The employment lawyers who work with The Noble Law Firm have extensive experience in&nbsp;<strong>litigation</strong>. &nbsp;As a small firm, we are nimble and efficient. &nbsp;With a commitment to advancements in&nbsp;<strong>technology&nbsp;</strong>&nbsp;and project management principles, Noble Law works to quickly and efficiently meet our clients’ needs, often outpacing our big law counterparts.</p>
		<div class="row employee">
			<div class="col-1-2">
				<div class="heading">
					<div class="icon"><img src="assets/images/group_icon.png" alt=""></div>
					<div class="title">For Employees</div>
				</div>
				<div class="content">
				<p>Many of our clients come to us because they’ve had a particularly troubling experience at work unlike any they’ve had before. Some workplace behaviors are so outside the norm that they have been prohibited by law. We work with clients who have experienced discrimination, sexual harassment, retaliation, denial of fair or promised compensation, denial of reasonable accommodations or family and medical leave, or wrongful termination. For these clients, we provide clarity on the facts and law and a comprehensive plan for resolution of the problem.&nbsp;<span class="more"><a href="#" target="">Learn More</a></span></p>
				</div>
			</div>
			<div class="col-1-2">
				<div class="heading">
					<div class="icon"><img src="assets/images/desk_icon.png" alt=""></div>
					<div class="title">For Employers</div>
				</div>
				<div class="content">We provide clarity to employers by helping them maintain compliance and develop best practices. Our straightforward legal advice helps employers adapt to evolving employment laws so that they can conduct business with confidence and integrity. &nbsp;We work with our business clients to develop, measure, analyze, improve, and control employment practices in order to improve employee relations and minimize litigation risk. &nbsp;Because we advocate for employees in litigation, our unique perspective adds value to our counsel of business clients, which helps to keep them and their employees happy and thriving.&nbsp;<span class="more"><a href="#" target="">Learn More</a></span>
				</div>
			</div>
		</div>
		<div class="subscribe-box">
			<a href="#" target="blank" class="button large default">Subscribe to our email list</a>
			<h2>Get the latest insights, tips and news from our legal team.</h2>
			<p>Subscribe to our email list today to receive information on a number of employment law topics.</p>
		</div>
		<div class="row about">
			<div class="col-1-2">
				<div class="title">
				<h2>About The Noble Law Firm</h2>
				<div class="sep-container"><div class="sep"></div></div>
				</div>
				<dl class="accordion">
					<dt><a href="">Our Company Mission</a></dt>
					<dd>The Noble Law Firm provides <em><strong>clarity at work</strong></em>. Founded in 2009, The Noble Law Firm in Chapel Hill, NC provides forward-thinking, trusted employment law counsel and assertive representation on key employment issues to individuals experiencing problems in their employment relationship and companies wishing to execute “best practices” to improve their employee relations and minimize litigation exposure. <a title="About" href="#"><b>Learn more &gt;</b></a>
					</dd>
					<dt><a href="">Our Team</a></dt>
					<dd>The employment lawyers who work with The Noble Law Firm have extensive experience in&nbsp;litigation. As a former prosecutor in New York, Laura Noble spent more time in a courtroom than many lawyers experience in a lifetime. Nick J. Sanservino defended Fortune 500 companies in labor and employment matters at some of the country’s largest law firms before joining The Noble Law Firm. Don Davis offers a different type of experience, serving&nbsp;as a successful consumer bankruptcy attorney for four years, and then returning to his passion for employment law by joining The Noble Law Firm. <a title="Meet The Team" href="#"><b>Learn more &gt;</b></a>
					</dd>
					<dt><a href="">What Clients Say</a></dt>
					<dd>“Nick and Laura worked hard and believed in us when no one else would. They gave us amazing guidance and were always on our side. They think outside the box and are very creative.” – A.R.&nbsp;<a title="Testimonials" href="/testimonials/"><b>Learn more &gt;</b></a>
					</dd>
					<dt><a href="">Videos</a></dt>
					<dd>This video series gives a general overview of the services of The Noble Law Firm. Topics include “Employees: What to Expect”, “Employers: What to Expect”, “Estimating Costs”, and “Taking on Larger Firms” <a title="Videos" href="#">Learn more &gt;</a>
					</dd>
					<dt><a href="">What Clients Say</a></dt>
					<dd>“Nick and Laura worked hard and believed in us when no one else would. They gave us amazing guidance and were always on our side. They think outside the box and are very creative.” – A.R.&nbsp;<a title="Testimonials" href="/testimonials/"><b>Learn more &gt;</b></a>
					</dd>
				</dl>
			</div>
			<div class="col-1-2">	
				<div class="image">
					<a href="#">
						<img src="assets/images/meet_the_team_2.jpg" alt="">
					</a>
					<div class="image-shadow left"></div>
					<div class="image-shadow right"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop