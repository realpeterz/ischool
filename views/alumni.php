<script type="text/javascript">
	$(document).ready(function(){
 // Set up a listener so that when anything with a class of 'tab'
 // is clicked, this function is run.
 $('.tab').click(function () {
  // Remove the 'active' class from the active tab.
  $('#tabs_container > .tabs > li.active')
	  .removeClass('active');
  // Add the 'active' class to the clicked tab.
  $(this).parent().addClass('active');
  // Remove the 'tab_contents_active' class from the visible tab contents.
  $('#tabs_container > .tab_contents_container > div.tab_contents_active')
	  .removeClass('tab_contents_active');
  // Add the 'tab_contents_active' class to the associated tab contents.
  $(this.rel).addClass('tab_contents_active');
 });
});
    </script>
<style type="text/css">
a:active {
	outline: none;
}
a:focus {
	-moz-outline-style: none;
}
#tabs_container {
	width: 700px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
#tabs_container ul.tabs {
	list-style: none;
	border-bottom: 1px solid #ccc;
	height: 21px;
	margin: 0;
}
#tabs_container ul.tabs li {
	float: left;
}
#tabs_container ul.tabs li a {
	padding: 3px 10px;
	display: block;
	border-left: 1px solid #ccc;
	border-top: 1px solid #ccc;
	border-right: 1px solid #ccc;
	margin-right: 2px;
	text-decoration: none;
	background-color: #efefef;
}
#tabs_container ul.tabs li.active a {
	background-color: #fff;
	padding-top: 4px;
}
div.tab_contents_container {
	border: 1px solid #ccc;
	border-top: none;
	padding: 10px;
}
div.tab_contents {
	display: none;
}
div.tab_contents_active {
	display: block;
}
div.clear {
	clear: both;
}
</style>
<div id="rightcolumn" class="grid_9 programs">
	<h1>INFORMATION FOR ALUMNI</h1> <!-- use h2 for all headings please -->

<p>For information <em>about</em> alumni, see the <a href="http://www.ischool.utexas.edu/people/">people</a> section of the website.</p> <!-- wrap any paragraph in p tags please -->
<p>Please keep your alumni records up to date using the <a href="https://www.texasexes.org/login/login.asp" class="External">online change of address form</a></p>
	<div id="tabs_container">
		<!-- These are the tabs -->
		<ul class="tabs">
			<li class="active">
			<a href="#" rel="#tab_1_contents" class="tab"><strong>News and Updates</strong></a>
			</li>
			<li><a href="#" class="tab" rel="#tab_2_contents"><strong>Opportunities</strong></a></li>
			<li><a href="#" class="tab" rel="#tab_3_contents"><strong>Associations</strong></a></li>

		</ul>
		<!-- This is used so the contents don't appear to the
           right of the tabs -->
		<div class="clear">
		</div>
		<!-- This is a div that hold all the tabbed contents -->
		<div class="tab_contents_container">
			<!-- Tab 1 Contents -->
			<div id="tab_1_contents" class="tab_contents tab_contents_active">
				<p><a href="http://www.ischool.utexas.edu/about/enews/index.php">Alumni E-News</a><br>
	To subscribe, simply send an e-mail to the <a href="mailto:alumni-updates@ischool.utexas.edu">alumni updates mailing list</a>. After subscribing, you will receive a confirmation e-mail.To complete the process you will need to reply to this confirmation e-mail.</p>

	<p><a href="http://www.ischool.utexas.edu/careers/alumni_careers.php">Alumni Careers</a><br>
	Keep track of the careers of your fellow alumni.</p>


	<p><a href="http://www.ischool.utexas.edu/people/alumni_profiles.php">Alumni Profiles</a><br>
	News about alumni and their stories. </p>
			</div>
			<!-- Tab 2 Contents -->
			<div id="tab_2_contents" class="tab_contents">
				<p><a href="http://www.ischool.utexas.edu/careers/">School of Information Career Services</a><br>
	Find a job or hire a School of Information student.</p>


	<p><a href="http://www.ischool.utexas.edu/programs/capstone/">Capstone Professional Experience Project</a><br>
	Suggest a Professional Experience Project (PEP) or find a School of Information intern.</p>

	<p><a href="http://www.ischool.utexas.edu/development/">Development Office</a><br>
	Help support the School of Information. There are many ways to give. Visit the Development Office to learn more.</p>

			</div>
			<!-- Tab 3 Contents -->
			<div id="tab_3_contents" class="tab_contents tab_contents_active">
				 <p><a href="http://www.ischool.utexas.edu/~betaeta/">Beta Eta Chapter, Beta Phi Mu</a><br>

	The international scholastic honor society for library and information science</p>

	<p><a href="http://www.texasexes.org/">Ex-Students' Association</a><br>
	Look up alumni on the Ex-Students' Association directory. You must register as an alumni with the service to perform searches, but the service and e-mail forwarding are free.</p>
			</div>


		</div>
	</div>
</div>

