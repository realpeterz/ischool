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
	padding: 3px 5px;
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
	<h1>INFORMATION FOR CURRENT STUDENTS</h1>
	<p>
		 For information <em>about</em> current students, see the <a href="http://www.ischool.utexas.edu/people/">people</a> section of the website.
	</p>
	<div id="tabs_container">
		<!-- These are the tabs -->
		<ul class="tabs">
			<li class="active">
			<a href="#" rel="#tab_1_contents" class="tab"><strong>Resources</strong></a>
			</li>
			<li><a href="#" class="tab" rel="#tab_2_contents"><strong>Advising/Registration/Graduation</strong></a></li>
			<li><a href="#" class="tab" rel="#tab_3_contents"><strong>Forms|Applications</strong></a></li>
			<li><a href="#" class="tab" rel="#tab_4_contents"><strong>Living/Working in Austin</strong></a></li>
			<li><a href="#" class="tab" rel="#tab_5_contents"><strong>Technology Resources</strong></a></li>
		</ul>
		<!-- This is used so the contents don't appear to the
           right of the tabs -->
		<div class="clear">
		</div>
		<!-- This is a div that hold all the tabbed contents -->
		<div class="tab_contents_container">
			<!-- Tab 1 Contents -->
			<div id="tab_1_contents" class="tab_contents tab_contents_active">
				<ul>
					<!-- ul>li>a for this kinda link lists -->
					<li><a href="http://www.ischool.utexas.edu/admissions/funding/">Funding Resources</a></li>
					<li><a href="http://www.ischool.utexas.edu/careers/">School of Information Career Services</a></li>
					<li><a href="http://utdirect.utexas.edu/utdirect/index.WBX">UT Direct</a></li>
					<li><a href="http://www.lib.utexas.edu/">General Libraries</a></li>
					<li><a href="http://www.utexas.edu/directory/">Student, Faculty and Staff Electronic Directory</a></li>
					<li><a href="http://www.utexas.edu/student/ombuds/">Office of the Ombudsman</a></li>
					<li><a href="http://www.ischool.utexas.edu/people/groups.php">Student and Professional Groups</a></li>
					<!-- please put the absolute link in the href attribute in case we don't have time later to mess with one more level down the site. -->
				</ul>
			</div>
			<!-- Tab 2 Contents -->
			<div id="tab_2_contents" class="tab_contents">
				<ul>
					<li><a href="http://www.ischool.utexas.edu/courses/advising.php">Graduate Advising</a></li>
					<li><a href="https://www.ischool.utexas.edu/advising/">Online Advising Scheduler</a></li>
					<li><a href="http://registrar.utexas.edu/services/">ROSE Registration</a></li>
					<li><a href="http://www.ischool.utexas.edu/courses/">School of Information Courses</a></li>
					<li><a href="https://utdirect.utexas.edu/mec/cis/index.html">Course Evaluations</a></li>
					<li><a href="http://www.ischool.utexas.edu/programs/capstone/">Capstone</a></li>
					<li><a href="http://www.ischool.utexas.edu/programs/grad_pack.php">Graduation Packets</a></li>
				</ul>
			</div>
			<!-- Tab 3 Contents -->
			<div id="tab_3_contents" class="tab_contents">
				<ul>
					<li><a href="http://www.ischool.utexas.edu/forms/">All iSchool Forms</a></li>
					<li><a href="http://www.utexas.edu/ogs/pdn/" class="External">UT Graduate School Forms</a></li>
					<li><a href="http://www.utexas.edu/student/admissions/gradreadmit/" class="External">Graduate Re-Admission</a></li>
					<li>Individual Study - <a href="http://www.ischool.utexas.edu/forms/individual_study.pdf">pdf</a> | <a href="http://www.ischool.utexas.edu/forms/individual_study.doc">word</a></li>
					<li>Petition for the transfer of Graduate Credit to School of Information - <a href="http://www.ischool.utexas.edu/forms/petition_transfer.pdf">pdf</a> | <a href="http://www.ischool.utexas.edu/forms/petition_transfer.doc">word</a></li>
					<li><a href="http://www.ischool.utexas.edu/programs/specializations/eos.php">Endorsement of Specialization</a> - <a href="http://www.ischool.utexas.edu/forms/eos.pdf">pdf</a> | <a href="http://www.ischool.utexas.edu/forms/eos.doc">word</a></li>
					<li>Student Medical Release Form - <a href="http://www.ischool.utexas.edu/forms/student_medical_release.doc">word</a></li>
					<li>Student Travel Request - <a href="http://www.ischool.utexas.edu/forms/student_travel_request.doc">word</a></li>
					<li>Student Travel Release - <a href="http://www.ischool.utexas.edu/forms/student_travel_release.doc">word</a></li>
				</ul>
			</div>
			<div id="tab_4_contents" class="tab_contents">
				<ul>
					<li><a href="http://www.utexas.edu/student/housing/" class="External">Housing and Accommodations</a></li>
					<li><a href="http://www.utexas.edu/student/health/" class="External">University Health Services</a></li>
				</ul>
			</div>
			<div id="tab_5_contents" class="tab_contents tab_contents_active">
				<ul>
					<li><a href="http://www.ischool.utexas.edu/technology/tutorials/">School of Information Computing Tutorials and Instruction</a></li>
					<li><a href="http://www.utexas.edu/its/bevoware/">BevoWare</a></li>
					<li><a href="http://www.campuscomputer.com/">Campus Computer Store</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

