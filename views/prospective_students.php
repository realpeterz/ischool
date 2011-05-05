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
	<h1>INFORMATION FOR PROSPECTIVE STUDENTS</h1>
	<div id="tabs_container">
		<!-- These are the tabs -->
		<ul class="tabs">
			<li class="active">
			<a href="#" class="tab" rel="#tab_1_contents"><strong>Welcome</strong></a>			</li>
		  <li><a href="#" class="tab" rel="#tab_2_contents"><strong>Overview</strong></a></li>
			<li><a href="#" class="tab" rel="#tab_3_contents"><strong>Academics</strong></a></li>
			<li><a href="#" class="tab" rel="#tab_4_contents"><strong>Getting Started</strong></a></li>
			<li><a href="#" class="tab" rel="#tab_5_contents"><strong>Resources for Prospective Students</strong></a></li>
		</ul>
		<!-- This is used so the contents don't appear to the
           right of the tabs -->
		<div class="clear">
		</div>
		<!-- This is a div that hold all the tabbed contents -->
		<div class="tab_contents_container">
			<!-- Tab 1 Contents -->
			<div id="tab_1_contents" class="tab_contents tab_contents_active">
				<p>There are many reasons why you might consider our school for your graduate education. We provide a top ranked ALA-accredited master's degree, and the nation's #1 program in archives and preservation. Our faculty is widely known for expertise in such diverse areas as information architecture, records management, and librarianship. We are located in beautiful downtown Austin, on a campus which contains some of the world's finest collections of art, literature, and photographs. Our program is small, selective, and flexible, allowing you to tailor your degree to your needs. Check out the following links for a range of resources relevant to students considering our school.</p>

  <p>If you have any questions, feel free to send an email to <a href="mailto:info@ischool.utexas.edu">info@ischool.utexas.edu</a></p>
			</div>
			<!-- Tab 2 Contents -->
			<div id="tab_2_contents" class="tab_contents">
				<ul>

      <li><a href="http://www.ischool.utexas.edu/about/history.php">School of Information History and Tradition</a></li>

      <li><a href="http://www.utexas.edu/index.php">About the University of Texas at Austin</a></li>

      <li><a href="http://www.ischool.utexas.edu/about/location.php">Location and Directions</a></li>

      <li><a href="http://www.ischool.utexas.edu/technology/">Computing Facilities and Resources</a></li>

    </ul>

			</div>
			<!-- Tab 3 Contents -->
			<div id="tab_3_contents" class="tab_contents">
				 <ul>

      <li><a href="http://www.ischool.utexas.edu/programs/">Academic Programs</a></li>

      <li><a href="http://www.ischool.utexas.edu/people/faculty.php">Faculty Directory</a></li>

      <li><a href="http://www.ischool.utexas.edu/people/specializations.php">List of Faculty Specializations</a></li>

      <li><a href="http://www.ischool.utexas.edu/research/">Research at the School of Information</a></li>

    </ul>
			</div>
			<div id="tab_4_contents" class="tab_contents">
				<ul>

      <li><a href="http://www.ischool.utexas.edu/admissions/">Admissions Requirements and Procedures</a></li>

      <li><a href="http://www.ischool.utexas.edu/orientation/">New Student Orientation</a></li>

      <li><a href="http://www.utexas.edu/business/accounting/sar/t_f_rates.html">Tuition and Fees</a></li>

      <li><a href="http://www.ischool.utexas.edu/admissions/funding/">Funding Resources</a></li>

    </ul>

			</div>
			<div id="tab_5_contents" class="tab_contents tab_contents_active">
				<ul>

      <li><a href="http://www.utexas.edu/about-ut/life-in-austinhousing.html">Housing and Accommodations in Austin</a></li>

      <li><a href="http://www.utexas.edu/maps/">Campus Map</a></li>

    </ul>
			</div>
		</div>
	</div>
</div>

