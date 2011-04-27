<style type="text/css">
.faculty { background:#EAEBF2; width:150px; height:122px; border:1px solid #E0E2E8; margin:0 5px 5px 0; padding:0 5px 0 5px;}
.faculty a { color:#227DAA; text-decoration: none;}
.faculty a:hover { color: #d96c00; }
.faculty img { display:block; }
.faculty p.phone, .faculty p.office, p.email { margin: 0; }
p.title, span.person-name { font-weight:bold; }
span.person-name { font-size:1.1em; }
.title {font-size:0.9em;}
ul { padding-left: 0; }
li { list-style:none;  }
#faculty-wrap { clear:both; }


#photobox {
z-index:1;
}

#contentbox {
background-color:#bfbfbf;
border-radius: 10px;
padding: 20px;
z-index:0;
}

#textfirstbox {
background-color:#555;
z-index:5;
position: absolute;
top:268px;
right:35px;
filter:alpha(opacity=65);
opacity:0.65;
width: 200px;
height: 380px;
}

#textfirstcontent {
color: white;
text-size: 0.8 em;
font-family: sans-serif;
filter:alpha(opacity=100);
opacity:1.0;
z-index:6;
position: absolute;
top:268px;
right:45px;
width:180px;
line-height: 200%;
}

#textbox {
background-color:#555;
z-index:5;
position: absolute;
top:525px;
right:36px;
filter:alpha(opacity=65);
opacity:0.65;
width: 630px;
height: 130px;
}

#textcontent {
color: white;
text-size: 0.8 em;
font-family: sans-serif;
filter:alpha(opacity=100);
opacity:1.0;
z-index:6;
position: absolute;
top:525px;
right:46px;
width:610px;
height: 130px;
line-height: 200%;
}

#options {
  padding-bottom: 1.0em;
}

#options h3 {
  margin: 10px 0 0 0;
  font-size: 15px;
  font-family: sans-serif;
  color: #7a551a;
}

#options h4 { 
  font-weight: bold;
}

#rightcolumn #filters a {
   font-size: 1.05em;
   color: #d88d17;
   background: #fff;
   font-family: sans-serif;
   padding: 0.25em 0.6em;
   margin-bottom: 0.2em;
}

#rightcolumn #filters a:hover {
   color: #7a551a;
}

#rightcolumn #filters a:selected {
   font-style: italic;  
   color: #7a551a;
}

#options ul {
  margin: 0;
  list-style: none;
  padding-left: 0;
}

#options .floated li {
  float: left;
}

#options li a {
  display: inline-block;
  padding: 0.25em 0.6em;
  text-decoration:none;
  margin-bottom: 0.2em;
}

#options li a:hover {
 
}

#options li a:active {
  
}

/*
#options .floated li:first-child a {
  border-radius: 7px 0 0 7px;
  border-left: none;
}

#options .floated li:last-child a {
  border-radius: 0 7px 7px 0;
}
*/

#options .option-set li a {
  font-size: 1.05em;
  color: #d88d17;
  font-family: sans-serif;
}

#options .option-set li a:hover {
color: #7a551a;
}

#options .option-set li a.selected {
  font-style: italic;  
  color: #7a551a;
}

#options .option-combo {
  display: inline-block;
  float: left;
  margin-right: 10px;
}

#options .option-combo ul {
  margin-right: 20px;
  display: inline-block;
}

#options .option-combo h2,
#options .option-combo h4 {
  line-height: 34px;
  margin-bottom: 0;
  margin-right: 5px;
  display: inline-block;
  vertical-align: top;
}

/*** submenu options ***/

ul.navlist {
margin: 0;
list-style: none;
padding-left: 0;
}

ul.navlist li a {
  display: inline-block;
  text-decoration:none;
  padding: 0.25em 0.6em;
  margin-bottom: 0.2em;
}

ul.navlist li { float: left; }

ul.navlist li a
{
font-size: 1.05em;
color: #d88d17;
font-family: sans-serif;
background-color: white;
}

ul.navlist li a:hover
{
color: #7a551a;
background-color: white;
}


ul.subnavlist { display: none; }
ul.subnavlist li { float: none; }

ul.subnavlist li a
{
padding: 0px;
margin: 0px;
}

ul.navlist li:hover ul.subnavlist
{
display: block;
position: absolute;
font-size: 1.05em;
padding-top: 5px;
filter:alpha(opacity=93);
opacity:0.93;
}

ul.navlist li:hover ul.subnavlist li a
{
display: block;
width: 10em;
padding: 2px;
}

ul.navlist li:hover ul.subnavlist li a:before { content: " >> "; }


.isotope-item {
  z-index: 2;
}
.isotope-hidden.isotope-item {
  pointer-events: none;
  z-index: 1;
}  
.isotope,
.isotope .isotope-item {
 /* change duration value to whatever you like */
 -webkit-transition-duration: 0.8s;
    -moz-transition-duration: 0.8s;
         transition-duration: 0.8s;
}

.isotope {
 -webkit-transition-property: height, width;
    -moz-transition-property: height, width;
         transition-property: height, width;
}

.isotope .isotope-item {
 -webkit-transition-property: -webkit-transform, opacity;
    -moz-transition-property:    -moz-transform, opacity;
         transition-property:         transform, opacity;
}
.clearfix:before, .clearfix:after { content: "\0020"; display: block; height: 0; visibility: hidden; }
.clearfix:after { clear: both; }
.clearfix { zoom: 1; }


</style>

<div id="rightcolumn" class="grid_9">
	
	<section id="options" class="clearfix"> 
 
		<h3>Select a Field of Study:</h3>
		<br />

		<ul id="filters" class="option-set floated clearfix">
			<li><a href="#contentbox" data-filter=".msoldcore">| Old Master's Core Curriculum |</a></li>
			<li><a href="#contentbox" data-filter=".msnewcore">| New Master's Core Curriculum |</a></li>
			<li><a href="#contentbox" data-filter=".phdcore">| Doctoral Core Curriculum |</a></li>
			<li><a href="#contentbox" data-filter=".archives">| Archives and Records Enterprise |</a></li>
			<li><a href="#contentbox" data-filter=".business">| Business Information Services |</a></li>
			<li><a href="#contentbox" data-filter=".collections">| Collections |</a></li>
			<li><a href="#contentbox" data-filter=".digitallibraries">| Digital Libraries |</a></li>
			<li><a href="#contentbox" data-filter=".health">| Health Information Services |</a></li>
			<li><a href="#contentbox" data-filter=".history">| History |</a></li>
			<li><a href="#contentbox" data-filter=".usability">| Information Architecture, Usability, and Design |</a></li>
			<li><a href="#contentbox" data-filter=".ir">| Information Retrieval |</a></li>
			<li><a href="#contentbox" data-filter=".legal">| Legal Information Services |</a></li>
			
			
				<ul class="navlist">
					<li id="active"><a href="#" id="current">| Librarianship >> |</a> 
					<ul class="subnavlist">
						<li id="subactive"><a href="#contentbox" id="subcurrent" data-filter=".academic">Academic</a></li>
						<li id="subactive"><a href="#contentbox" id="subcurrent" data-filter=".public">Public</a></li>
						<li id="subactive"><a href="#contentbox" id="subcurrent" data-filter=".school">School</a></li>
					</ul>
					</li>
				</ul>

			
			<li><a href="#contentbox" data-filter=".management">| Management and Administration |</a></li>
			<li><a href="#contentbox" data-filter=".museums">| Museum Curation |</a></li>
			<li><a href="#contentbox" data-filter=".organizing">| Organizing Information, Cataloging, and Metadata |</a></li>
			<li><a href="#contentbox" data-filter=".policy">| Policy |</a></li>	
			
				<ul class="navlist">
					<li id="active"><a href="#" id="current">| Preservation Studies >> |</a> 
					<ul class="subnavlist">
						<li id="subactive"><a href="#contentbox" id="subcurrent" data-filter=".audio">Audio Preservation</a></li>
						<li id="subactive"><a href="#contentbox" id="subcurrent" data-filter=".book">Book Conservation</a></li>
						<li id="subactive"><a href="#contentbox" id="subcurrent" data-filter=".digitalpreservation">Digital Preservation</a></li>
					</ul>
					</li>
				</ul>
				
			<li><a href="#contentbox" data-filter=".research">| Research Methods |</a></li>
			<li><a href="#contentbox" data-filter=".webdesign">| Web Design, Databases, and Computer Programming |</a></li>
		</ul>
	
	</section>
	
	<div id="contentbox" name="contentbox">
		<p style="margin:0; padding:0;">
			<a style="text-decoration:none; color:white; font-size: 1.15em;" href="#topnav">RETURN TO TOP</a>
		</p>
	
		<div id="photobox">
			<p style= "border:1px solid #E0E2E8;">
				<img src="images/iSchool_exterior.jpg" name="fieldpic" id="fieldpic" height="415" width="658" alt="" />
			</p>
		</div>
		
		<div id="textfirstbox">
		</div>
		<div id="textfirstcontent">
			<h3>What We Study at the School of Information:</h3>
			<p>This page provides descriptions of the fields of study within the School of Information 
			and links to course web pages relevant to those fields. 
			Get started by clicking a link above.</p>
		</div>
	
	<div id="faculty-wrap"> 
    
	<div class="faculty msoldcore"> 
      <p class="number">INF 180J</p> 
      <h3 class="title">Introduction to Information Studies</h3> 
    </div>
	  
	<div class="faculty msoldcore management"> 
      <p class="number"><a href="http://www.ischool.utexas.edu/courses/course_details.php?CourseID=193" target="_blank">INF 387C</a></p> 
      <h3 class="title"><a href="http://www.ischool.utexas.edu/courses/course_details.php?CourseID=193" target="_blank">Managing Information Organizations</a></h3> 
    </div>
	  
	<div class="faculty msoldcore research"> 
      <p class="number">INF 397C</p> 
      <h3 class="title">Introduction to Research in Information Studies</h3> 
    </div>
	  
	<div class="faculty msoldcore organizing"> 
      <p class="number">INF 384C</p> 
      <h3 class="title">Organizing Information</h3> 
    </div>
	  
	<div class="faculty msoldcore usability"> 
      <p class="number">INF 382C</p> 
      <h3 class="title">Understanding and Serving Users</h3> 
    </div>
	  
	<div class="faculty msnewcore policy"> 
      <p class="number">INF 380C</p> 
      <h3 class="title">Information in Social and Cultural Context</h3> 
    </div>
	  
	<div class="faculty msnewcore history"> 
      <p class="number">INF 380E</p> 
      <h3 class="title">Perspectives on Information</h3> 
    </div>
	  
	<div class="faculty msnewcore research"> 
      <p class="number">INF 397C</p> 
      <h3 class="title">Understanding Research</h3> 
    </div>
	
	<div class="faculty archives"> 
      <p class="number">INF 389J</p> 
      <h3 class="title">Appraisal and Selection of Records</h3> 
    </div>
	
	<div class="faculty archives collections academic public book"> 
      <p class="number">INF 393C</p> 
      <h3 class="title">Conservation of Library and Archival Material</h3> 
    </div>
	
	<div class="faculty archives digitallibraries history legal academic public school museums policy digitalpreservation"> 
      <p class="number">INF 390C</p> 
      <h3 class="title">Copyright: Legal and Cultural Perspectives</h3> 
    </div>
	
	<div class="faculty archives"> 
      <p class="number">INF 389R</p> 
      <h3 class="title">Introduction to Archival Enterprise I</h3> 
    </div>
	  
	<div class="faculty archives"> 
      <p class="number">INF 389S</p> 
      <h3 class="title">Introduction to Archival Enterprise II</h3> 
    </div>
	  
	<div class="faculty archives digitallibraries digitalpreservation"> 
      <p class="number">INF 389G</p> 
      <h3 class="title">Introduction to Electronic and Digital Records</h3> 
    </div>
	  
	<div class="faculty archives"> 
      <p class="number">INF 389E</p> 
      <h3 class="title">Introduction to Records Management</h3> 
    </div>
	  
	<div class="faculty archives digitallibraries digitalpreservation organizing"> 
      <p class="number">INF 382R</p> 
      <h3 class="title">Introduction to Scientific and Technical Data Collections: Introduction to Management and Preservation of Scientific Data</h3> 
    </div>
	  
	<div class="faculty archives academic public museums digitalpreservation"> 
      <p class="number">INF 392E</p> 
      <h3 class="title">Introductory Technology and Structure of Records Materials: Materials in Archives, Libraries and Museums</h3> 
    </div>
	  
	<div class="faculty archives digitallibraries digitalpreservation"> 
      <p class="number">INF 392K</p> 
      <h3 class="title">Problems in Permanent Retention of Electronic Records</h3> 
    </div>
	  
	<div class="faculty business"> 
      <p class="number">INF 382P</p> 
      <h3 class="title">Competitive Intelligence Resources and Strategies</h3> 
    </div>
	  
	<div class="faculty business management usability"> 
      <p class="number">INF 387M</p> 
      <h3 class="title">Information Marketing</h3> 
    </div>
	  
	<div class="faculty business"> 
      <p class="number">INF 382N</p> 
      <h3 class="title">Information Resources in Business</h3> 
    </div>
	  
	<div class="faculty collections digitallibraries museums digitalpreservation"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: Collecting New Media</h3> 
    </div>
	  
	<div class="faculty collections digitallibraries academic museums digitalpreservation"> 
      <p class="number">INF 385U</p> 
      <h3 class="title">Digital Media Collections</h3> 
    </div>
	  
	<div class="faculty digitallibraries usability museums webdesign"> 
      <p class="number">INF 385H</p> 
      <h3 class="title">Digital Media Design</h3> 
    </div>
	  
	<div class="faculty digitallibraries academic collections digitalpreservation history policy"> 
      <p class="number">INF 385S</p> 
      <h3 class="title">Digital Libraries</h3> 
    </div>
	  
	<div class="faculty digitallibraries academic research"> 
      <p class="number">INF 397.3</p> 
      <h3 class="title">Digital Libraries Research</h3> 
    </div>
	  
	<div class="faculty digitallibraries digitalpreservation history"> 
      <p class="number">INF 385R</p> 
      <h3 class="title">Survey of Digitization</h3> 
    </div>
	  
	<div class="faculty health"> 
      <p class="number">INF 385V</p> 
      <h3 class="title">Health Informatics</h3> 
    </div>
	  
	<div class="faculty health"> 
      <p class="number">INF 385N</p> 
      <h3 class="title">Informatics: Consumer Health Informatics</h3> 
    </div>
	  
	<div class="faculty health"> 
      <p class="number">INF 382K</p> 
      <h3 class="title">Information Resources in the Health Sciences</h3> 
    </div>
	  
	<div class="faculty usability"> 
      <p class="number">INF 385E</p> 
      <h3 class="title">Information Architecture and Design</h3> 
    </div>
	  
	<div class="faculty usability webdesign"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: Methods of Design Synthesis</h3> 
    </div>
	  
	<div class="faculty usability"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: Natural User Interfaces</h3> 
    </div>
	  
	<div class="faculty usability"> 
      <p class="number">INF 385K</p> 
      <h3 class="title">Projects in Human-Computer Interaction</h3> 
    </div>
	  
	<div class="faculty usability"> 
      <p class="number">INF 350E.1</p> 
      <h3 class="title">Technologies of the Book</h3> 
    </div>
	  
	<div class="faculty usability"> 
      <p class="number">INF 385P</p> 
      <h3 class="title">Usability</h3> 
    </div>
	  
	<div class="faculty ir"> 
      <p class="number">INF 384H</p> 
      <h3 class="title">Concepts of Information Retrieval</h3> 
    </div>
	  
	<div class="faculty ir"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: Data-Intensive Text Processing with MapReduce</h3> 
    </div>
	
	<div class="faculty history museums"> 
      <p class="number">INF 388E</p> 
      <h3 class="title">Historical Museums: Context and Practice</h3> 
    </div>
	   
	<div class="faculty history"> 
      <p class="number">INF 386</p> 
      <h3 class="title">History of Information and Society</h3> 
    </div>
	  
	<div class="faculty policy"> 
      <p class="number">INF 327E</p> 
      <h3 class="title">Information and People: We Like to Watch: Surveillance</h3> 
    </div>
	  
	<div class="faculty policy"> 
      <p class="number">INF 312</p> 
      <h3 class="title">Information in Cyberspace</h3> 
    </div>
	  
	<div class="faculty policy"> 
      <p class="number">INF 390N</p> 
      <h3 class="title">Information Policy: New Media Technologies & Culture</h3> 
    </div>
	  
	<div class="faculty policy"> 
      <p class="number">INF 383E</p> 
      <h3 class="title">Interpreting Implicit Information on the Web</h3> 
    </div>
	  
	<div class="faculty history policy"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: iSpy: LIS, Espionage, and World of Intelligence Gathering</h3> 
    </div>
	  
	<div class="faculty policy"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: Knowledge Ecologies</h3> 
    </div>
	  
	<div class="faculty policy"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: Social Media for Information Specialists</h3> 
    </div>
	  
	<div class="faculty legal"> 
      <p class="number">INF 388K.6</p> 
      <h3 class="title">Law Libraries</h3> 
    </div>
	  
	<div class="faculty legal"> 
      <p class="number">INF 382H</p> 
      <h3 class="title">Legal Information Resources</h3> 
    </div>
	  
	<div class="faculty academic public school collections"> 
      <p class="number">INF 384D</p> 
      <h3 class="title">Collection Management</h3> 
    </div>
	  
	<div class="faculty academic"> 
      <p class="number">INF 388K.2</p> 
      <h3 class="title">Academic Libraries</h3> 
    </div>
	  
	<div class="faculty academic collections public school"> 
      <p class="number">INF 382D</p> 
      <h3 class="title">Introduction to Information Resources and Services</h3> 
    </div>
	  
	<div class="faculty academic public school"> 
      <p class="number">INF 382S</p> 
      <h3 class="title">Library Instruction and Information Literacy</h3> 
    </div>
	 
	<div class="faculty academic public school"> 
      <p class="number">INF 382L</p> 
      <h3 class="title">Information Resources and Services: Reader's Advisory</h3> 
    </div>
	 
	<div class="faculty public school"> 
      <p class="number">INF 322T</p> 
      <h3 class="title">Children's Literature</h3> 
    </div>
	 
	<div class="faculty public school"> 
      <p class="number">INF 382U</p> 
      <h3 class="title">Electronic Resources for Children and Youth</h3> 
    </div>
	 
	<div class="faculty collections public school"> 
      <p class="number">INF 382F</p> 
      <h3 class="title">Materials for Young Adults</h3> 
    </div>
	  
	<div class="faculty collections public school"> 
      <p class="number">INF 382E</p> 
      <h3 class="title">Materials for Children</h3> 
    </div>
	 
	<div class="faculty public"> 
      <p class="number">INF 388K.1</p> 
      <h3 class="title">Public Libraries</h3> 
    </div>
	
	<div class="faculty school"> 
      <p class="number">INF 388R</p> 
      <h3 class="title">Practicum in School Libraries</h3> 
    </div>
	 
	<div class="faculty school management"> 
      <p class="number">INF 388C</p> 
      <h3 class="title">School Library Management</h3> 
    </div>
	 
	<div class="faculty public school"> 
      <p class="number">INF 382V</p> 
      <h3 class="title">Visual Resources for Youth</h3> 
    </div>
	 
	<div class="faculty management"> 
      <p class="number">INF 387</p> 
      <h3 class="title">Administration: Community Relations</h3> 
    </div>
	 
	<div class="faculty management"> 
      <p class="number">INF 387</p> 
      <h3 class="title">Administration: Managing Projects and Leading Change in Information Organization</h3> 
    </div>
	 
	<div class="faculty management audio book digitalpreservation"> 
      <p class="number">INF 392G</p> 
      <h3 class="title">Management of Preservation Programs</h3> 
    </div>
	 
	<div class="faculty organizing"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: Crowdsourcing: Theory/Methods</h3> 
    </div>
	 
	<div class="faculty organizing"> 
      <p class="number">INF 389J</p> 
      <h3 class="title">Special Topics in Information Science: Description and Metadata Seminar</h3> 
    </div>
	 
	<div class="faculty audio book"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: Conservation Lab Techniques for Non-Specialists</h3> 
    </div>
	 
	<div class="faculty audio"> 
      <p class="number">INF 392L</p> 
      <h3 class="title">Introduction to Audio Preservation and Reformatting</h3> 
    </div>
	 
	<div class="faculty audio book digitalpreservation"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: Politics of Preservation</h3> 
    </div>
	 
	<div class="faculty book history"> 
      <p class="number">INF 388K.5</p> 
      <h3 class="title">Rare Book and Special Collections</h3> 
    </div>
	 
	<div class="faculty book history"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: Studies in Book Arts</h3> 
    </div>
	 
	<div class="faculty book"> 
      <p class="number">INF 393C</p> 
      <h3 class="title">Treatment Techniques for Flat Paper</h3> 
    </div>
	 
	<div class="faculty research"> 
      <p class="number">INF 391D</p> 
      <h3 class="title">Fundamentals of Inquiry in Information Studies</h3> 
    </div>
	 
	<div class="faculty webdesign"> 
      <p class="number">INF 385M</p> 
      <h3 class="title">Database Management</h3> 
    </div>
	 
	<div class="faculty webdesign"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: Designing Dynamic Web Pages</h3> 
    </div>
	 
	<div class="faculty webdesign"> 
      <p class="number">INF 380K</p> 
      <h3 class="title">Internet Applications</h3> 
    </div>
	 
	<div class="faculty webdesign"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: Introduction to Java Programming</h3> 
    </div>
	 
	<div class="faculty webdesign"> 
      <p class="number">INF 385T</p> 
      <h3 class="title">Special Topics in Information Science: Introduction to Programming</h3> 
    </div>
	
	<!-- end faculty wrap -->
	</div>

<!-- end contentbox -->
</div>	
<!-- end rightcolumn -->
</div>

<script type="text/javascript">
	
	function tallCaption(){
		document.getElementById('textfirstbox').id="textbox";
		document.getElementById('textfirstcontent').id="textcontent";
	}
	
	function longCaption() {
		document.getElementById('textbox').id="textfirstbox";
		document.getElementById('textcontent').id="textfirstcontent";
	}
	
	$(function() {
		$('#faculty-wrap').isotope({ 
			layoutMode : 'cellsByRow',
			cellsByRow : {
				columnWidth: 165,
				rowHeight: 127
  		}, 
		animationEngine: "best-available"
		});

		$('#options a').click(function(){
	 	 	var link_title = $(this).text();
			
			if (link_title=="| Old Master's Core Curriculum |")
			{
				$("#textfirstcontent p").text("All Masters students who began their programs in Fall 2010 or earlier must complete the following courses before graduating (13 semester credit hours)");
				$("#textfirstcontent h3").text("Old Master's Core Curriculum");
				$("#textcontent p").text("All Masters students who began their programs in Fall 2010 or earlier must complete the following courses before graduating (13 semester credit hours)");
				$("#textcontent h3").text("Old Master's Core Curriculum");
			}
			
			else if (link_title=="| New Master's Core Curriculum |")
			{
				$("#textfirstcontent p").text("All Masters students who began their programs in Fall 2010 or earlier must complete the following courses before graduating (13 semester credit hours)");
				$("#textfirstcontent h3").text("New Master's Core Curriculum");
				$("#textcontent p").text("All Masters students who began their programs in Fall 2011 or later will complete the following courses before graduating (9 semester credit hours)");
				$("#textcontent h3").text("New Master's Core Curriculum");
			}
			
			else if (link_title=="| Doctoral Core Curriculum |")
			{
				$("#textfirstcontent p").text("The following is a list of courses required for Doctoral students.");
				$("#textfirstcontent h3").text("Doctoral Core Curriculum");
				$("#textcontent p").text("The following is a list of courses required for Doctoral students.");
				$("#textcontent h3").text("Doctoral Core Curriculum");
			}
			
			else if (link_title=="| Archives and Records Enterprise |")
			{
				$("#textfirstcontent p").text("Students studying archives and records enterprises learn how to process and administer archives collections and perform records management for various types of institutions. Relevant coursework addresses preserving and providing access to archival documents and institutional records.");
				$("#textfirstcontent h3").text("Archives and Records Enterprises");
				$("#textcontent p").text("Students studying archives and records enterprises learn how to process and administer archives collections and perform records management for various types of institutions. Relevant coursework addresses preserving and providing access to archival documents and institutional records.");
				$("#textcontent h3").text("Archives and Records Enterprises");
			}
			
			else if (link_title=="| Business Information Services |")
			{
				$("#textfirstcontent p").text("Coursework in this field will teach students about the communication patterns and information resources used in business and industry. Students have the opportunity to research and analyze market trends and the financial, technical, and cultural strengths and weaknesses of companies.");
				$("#textfirstcontent h3").text("Business Information Services");
				$("#textcontent p").text("Coursework in this field will teach students about the communication patterns and information resources used in business and industry. Students have the opportunity to research and analyze market trends and the financial, technical, and cultural strengths and weaknesses of companies.");
				$("#textcontent h3").text("Business Information Services");
			}
			
			else if (link_title=="| Collections |")
			{
				$("#textfirstcontent p").text("Coursework in this field will teach students how to manage collections within libraries and other institutions, and to assess the quality of materials within those collections.");
				$("#textfirstcontent h3").text("Collections");
				$("#textcontent p").text("Coursework in this field will teach students how to manage collections within libraries and other institutions, and to assess the quality of materials within those collections.");
				$("#textcontent h3").text("Collections");
			}
			
			else if (link_title=="| Digital Libraries |")
			{
				$("#textfirstcontent p").text("Students studying digital libraries will learn about making digital copies of various types of media and making digital media accessible to users with the development of digital collections.");
				$("#textfirstcontent h3").text("Digital Libraries");
				$("#textcontent p").text("Students studying digital libraries will learn about making digital copies various types of media and making digital media accessible to users with the development of digital collections.");
				$("#textcontent h3").text("Digital Libraries");
			}
			
			else if (link_title=="| Health Information Services |")
			{
				$("#textfirstcontent p").text("Our students have the opportunity to investigate informatics movements around the world and in various disciplines and professions, such as biomedicine, nursing, public health, education, business, law, and public affairs.");
				$("#textfirstcontent h3").text("Health Information Services");
				$("#textcontent p").text("Our students have the opportunity to investigate informatics movements around the world and in various disciplines and professions, such as biomedicine, nursing, public health, education, business, law, and public affairs.");
				$("#textcontent h3").text("Health Information Services");
			}
			
			else if (link_title=="| History |")
			{
				$("#textfirstcontent p").text("Students learn about the history of information in society, from early examples of written documents to the advent of digital technology in the 20th century and its current implications.");
				$("#textfirstcontent h3").text("History in Information Studies");
				$("#textcontent p").text("Students learn about the history of information in society, from early examples of written documents to the advent of digital technology in the 20th century and its current implications, as well as the history of information agencies and related institutions.");
				$("#textcontent h3").text("History in Information Studies");
			}
			
			else if (link_title=="| Information Architecture, Usability, and Design |")
			{
				$("#textfirstcontent p").text("Relevant coursework teaches students about usability testing, various design processes, and guidelines for using information architecture to manage digital content.");
				$("#textfirstcontent h3").text("Information Architecture, Usability, and Design");
				$("#textcontent p").text("Relevant coursework teaches students about usability testing, various design processes, and guidelines for using information architecture to manage digital content.");
				$("#textcontent h3").text("Information Architecture, Usability, and Design");
			}
			
			else if (link_title=="| Information Retrieval |")
			{
				$("#textfirstcontent p").text("Our students have the opportunity to learn about search algorithms and how they are used to match documents to queries in databases.");
				$("#textfirstcontent h3").text("Information Retrieval");
				$("#textcontent p").text("Our students have the opportunity to learn about search algorithms and how they are used to match documents to queries in databases.");
				$("#textcontent h3").text("Information Retrieval");
			}
			
			else if (link_title=="| Legal Information Services |")
			{
				$("#textfirstcontent p").text("Students have the opportunity to learn to identify relevant legal information resources, perform efficient retrieval of legal information, and manage the role of technology in legal information access.");
				$("#textfirstcontent h3").text("Legal Information Services");
				$("#textcontent p").text("Students have the opportunity to learn to identify relevant legal information resources, perform efficient retrieval of legal information, and manage the role of technology in legal information access.");
				$("#textcontent h3").text("Legal Information Services");
			}
			
			else if (link_title=="Academic")
			{
				$("#textfirstcontent p").text("Relevant coursework teaches students about issues facing college and research libraries, including trends in postsecondary education.");
				$("#textfirstcontent h3").text("Academic Librarianship");
				$("#textcontent p").text("Relevant coursework teaches students about issues facing college and research libraries, including trends in postsecondary education.");
				$("#textcontent h3").text("Academic Librarianship");
			}
			
			else if (link_title=="Public")
			{
				$("#textfirstcontent p").text("Students at the School of Information are prepared to provide a wide range of services for public library institutions.");
				$("#textfirstcontent h3").text("Public Librarianship");
				$("#textcontent p").text("Students at the School of Information are prepared to provide a wide range of services for public library institutions.");
				$("#textcontent h3").text("Public Librarianship");
			}
			
			else if (link_title=="School")
			{
				$("#textfirstcontent p").text("Students may be trained and certified to serve children and young adults in school libraries around the nation.");
				$("#textfirstcontent h3").text("School Librarianship");
				$("#textcontent p").text("Students may be trained and certified to serve children and young adults in school libraries around the nation.");
				$("#textcontent h3").text("School Librarianship");
			}
			
			else if (link_title=="| Management and Administration |")
			{
				$("#textfirstcontent p").text("Students learn about management theory, concepts, processes, and practices as applied to information agencies and systems.");
				$("#textfirstcontent h3").text("Management and Administration");
				$("#textcontent p").text("Students learn about management theory, concepts, processes, and practices as applied to information agencies and systems.");
				$("#textcontent h3").text("Management and Administration");
			}
			
			else if (link_title=="| Museum Curation |")
			{
				$("#textfirstcontent p").text("Relevant coursework teaches students about the process of exhibiting works in museums, from planning through development to opening and maintenance, as well as the institutional position of museums in society.");
				$("#textfirstcontent h3").text("Museum Curation");
				$("#textcontent p").text("Relevant coursework teaches students about the process of exhibiting works in museums, from planning through development to opening and maintenance, as well as the institutional position of museums in society.");
				$("#textcontent h3").text("Museum Curation");
			}
			
			else if (link_title=="| Organizing Information, Cataloging, and Metadata |")
			{
				$("#textfirstcontent p").text("Relevant coursework introduces students to general principles and features of organizing and providing access to information, including varieties and numbers of information-bearing objects, different user concerns, metadata and metadata formats, and document representation and description.");
				$("#textfirstcontent h3").text("Organizing Information, Cataloging, and Metadata");
				$("#textcontent p").text("Relevant coursework introduces students to general principles and features of organizing and providing access to information, including varieties and numbers of information-bearing objects, different user concerns, metadata and metadata formats, and document representation and description");
				$("#textcontent h3").text("Organizing Information, Cataloging, and Metadata");
			}
			
			else if (link_title=="| Policy |")
			{
				$("#textfirstcontent p").text("Topics may include the idea of information, information in relation to technology and culture, information technology in education, information literacy and the 'digital divide,' information and communication technology, information and gender, public information policy, and information organization and preservation.");
				$("#textfirstcontent h3").text("Policy in Information Studies");
				$("#textcontent p").text("Topics may include the idea of information, information in relation to technology and culture, information technology in education, information literacy and the 'digital divide,' information and communication technology, information and gender, public information policy, and information organization and preservation.");
				$("#textcontent h3").text("Policy in Information Studies");
			}
			
			else if (link_title=="Audio Preservation")
			{
				$("#textfirstcontent p").text("Our students can learn about issues in the care and preservation of recordings, focusing on the economics of audio preservation and reformatting, noise reduction and stabilization, and stability concerns of modern media for storage of sound.");
				$("#textfirstcontent h3").text("Audio Preservation");
				$("#textcontent p").text("Our students can learn about issues in the care and preservation of recordings, focusing on the economics of audio preservation and reformatting, noise reduction and stabilization, and stability concerns of modern media for storage of sound.");
				$("#textcontent h3").text("Audio Preservation");
			}
			
			else if (link_title=="Book Conservation")
			{
				$("#textfirstcontent p").text("Students use a book lab to learn paper repair techniques, conservation and library bookbinding, and design and specifications through detailed practice and study of historical and modern conservation book materials and construction techniques.");
				$("#textfirstcontent h3").text("Book Conservation");
				$("#textcontent p").text("Students use a book lab to learn paper repair techniques, conservation and library bookbinding, and design and specifications through detailed practice and study of historical and modern conservation book materials and construction techniques.");
				$("#textcontent h3").text("Book Conservation");
			}
			
			else if (link_title=="Digital Preservation")
			{
				$("#textfirstcontent p").text("Coursework concerns management systems, interoperability and the importance of standards, copyright and other legal issues, metadata basics digital preservation, and specific digitization processes for documents, images, video, and sound.");
				$("#textfirstcontent h3").text("Digital Preservation");
				$("#textcontent p").text("Coursework concerns management systems, interoperability and the importance of standards, copyright and other legal issues, metadata basics digital preservation, and specific digitization processes for documents, images, video, and sound.");
				$("#textcontent h3").text("Digital Preservation");
			}
			
			else if (link_title=="| Research Methods |")
			{
				$("#textfirstcontent p").text("Students study the nature of social science and empirical research and its role in library and information science, perform critical evaluations of research in the literature, and learn qualitative and quantitative data collection and analysis techniques, including descriptive and inferential statistics.");
				$("#textfirstcontent h3").text("Research Methods");
				$("#textcontent p").text("Students study the nature of social science and empirical research and its role in library and information science, perform critical evaluations of research in the literature, and learn qualitative and quantitative data collection and analysis techniques, including descriptive and inferential statistics.");
				$("#textcontent h3").text("Research Methods");
			}
			
			else if (link_title=="| Web Design, Databases, and Computer Programming |")
			{
				$("#textfirstcontent p").text("Students at the School of Information have the opportunity to create and evaluate Web pages using current technologies, such as XTHML/HTML5, CSS, JavaScript, AJAX, Flash, SQL, and PHP. Coursework includes principles and practices of database management and database design.");
				$("#textfirstcontent h3").text("Web Design, Databases, and Computer Programming");
				$("#textcontent p").text("Students at the School of Information have the opportunity to create and evaluate Web pages using current technologies, such as XTHML/HTML5, CSS, JavaScript, AJAX, Flash, SQL, and PHP. Coursework includes principles and practices of database management and database design.");
				$("#textcontent h3").text("Web Design, Databases, and Computer Programming");
			}
			
			if (link_title != "| Librarianship >> |" && link_title != "| Preservation Studies >> |")
			{
			$('#fieldpic').fadeTo(0, 0.0);
			var selector = $(this).attr('data-filter');
			$('#faculty-wrap').isotope({ filter: selector });
			document.fieldpic.src = "images/fieldsofstudy/" + selector.substring(1) + ".jpg";
			$('#fieldpic').fadeTo(1000, 0.75);
			tallCaption();
			}
			
			});
			//return false;
		});
	
	
// switches selected class on buttons
      $('#options').find('.option-set a').click(function(){
        var $this = $(this);
 
        // don't proceed if already selected
        if ( !$this.hasClass('selected') ) {
          $this.parents('.option-set').find('.selected').removeClass('selected');
          $this.addClass('selected');
        }
 
      });
	  
	//	function transDiv(){
	//		var theheight=document.getElementById('transcontent').offsetHeight;
	//		document.getElementById('translayer').style.height=theheight+'px';
	//	}
	//		window.onload=transDiv;
	//		setInterval("transDiv()",1); //this handles text resizing through the users browser

</script>
