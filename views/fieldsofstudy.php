

<div id="rightcolumn" class="grid_9">

	<div id="rightcolumncontent" class="clearfix">

		<h3>Select a Field of Study:</h3>
		<br />

		<!-- a list of disciplines to choose from-->
		<ul id="fieldsofstudy" class="option-set floated clearfix">
			<li><a href="#contentbox" data-filter=".msoldcore">| Old Master's Core Curriculum |</a></li>
			<li><a href="#contentbox" data-filter=".msnewcore">| New Master's Core Curriculum |</a></li>
			<li><a href="#contentbox" data-filter=".phdcore">| Doctoral Core Curriculum |</a></li>

			<!-- clear:both interrupts the float:left function, acting as a line break for the list items -->
			<div style="clear:both;"></div>
			<li><a href="#contentbox" data-filter=".undergrad">| Undergraduate Minor |</a></li>
			<div style="clear:both;"></div>
			<li><a href="#contentbox" data-filter=".archives">| Archives and Records Enterprise |</a></li>
			<li><a href="#contentbox" data-filter=".business">| Business Information Services |</a></li>
			<li><a href="#contentbox" data-filter=".collections">| Collections |</a></li>
			<li><a href="#contentbox" data-filter=".digitallibraries">| Digital Libraries |</a></li>
			<div style="clear:both;"></div>
			<li><a href="#contentbox" data-filter=".health">| Health Information Services |</a></li>
			<li><a href="#contentbox" data-filter=".history">| History |</a></li>
			<li><a href="#contentbox" data-filter=".usability">| Information Architecture, Usability, and Design |</a></li>
			<div style="clear:both;"></div>
			<li><a href="#contentbox" data-filter=".ir">| Information Retrieval |</a></li>
			<li><a href="#contentbox" data-filter=".legal">| Legal Information Services |</a></li>

			<!-- this option is broken into several subcategories using a submenu that triggers with hover-->
			<li>
				<a href="#">| Librarianship >> |</a>
				<ul class="subnavlist">
					<li><a href="#contentbox" data-filter=".academic">Academic</a></li>
					<li><a href="#contentbox" data-filter=".public">Public</a></li>
					<li><a href="#contentbox" data-filter=".school">School</a></li>
					<li><a href="#contentbox" data-filter=".special">Special</a></li>
				</ul>
			</li>

			<li><a href="#contentbox" data-filter=".management">| Management and Administration |</a></li>
			<div style="clear:both;"></div>
			<li><a href="#contentbox" data-filter=".museums">| Museum Curation |</a></li>
			<li><a href="#contentbox" data-filter=".organizing">| Organizing Information, Cataloging, and Metadata |</a></li>
			<li><a href="#contentbox" data-filter=".policy">| Policy |</a></li>

			<li>
				<a href="#">| Preservation Studies >> |</a>
				<ul class="subnavlist">
					<li><a href="#contentbox" data-filter=".audio">Audio Preservation</a></li>
					<li><a href="#contentbox" data-filter=".book">Book Conservation</a></li>
					<li><a href="#contentbox" data-filter=".digitalpreservation">Digital Preservation</a></li>
				</ul>
			</li>

			<li><a href="#contentbox" data-filter=".research">| Research Methods |</a></li>
			<li><a href="#contentbox" data-filter=".webdesign">| Web Design, Databases, and Computer Programming |</a></li>
		</ul>

	</div>

	<!-- contentbox is the gray box with rounded corners -->
	<div id="contentbox" name="contentbox">
		<p id="topparagraph">
			<a id="returntotop" href="#topnav">RETURN TO TOP</a>
		</p>

		<!-- photobox is the space where an image displays -->
		<div id="photobox">
			<p style= "border:1px solid #E0E2E8;">
				<img src="images/fieldsofstudy/iSchool_exterior.jpg" name="fieldpic" id="fieldpic" height="415" width="658" alt="" />
			</p>

			<!-- textfirstbox is the transparent gray box behind textfirstcontent's opaque text-->
			<div id="textfirstbox">
			</div>

			<!-- textfirstcontent is stacked right on top of textfirstbox. This text needs
			its own div or it inherits the transparency of textfirstbox.-->
			<div id="textfirstcontent">
				<h3>What We Study at the School of Information:</h3>
				<p>This page provides suggestions for ways to conceptualize the courses offered at the School of Information.
				These disciplines are merely suggestions; all required coursework is represented in the "core curriculum" categories.
				</p>
			</div>
		</div>

	<!-- the Isotope jQuery script, which sorts and animates div sections representing boxes
	depending on the discipline chosen by the user, happens inside the following section-->
	<div id="fields-wrap">

	<!-- the labels after "fields" connect each box to one of the links in the "fieldsofstudy" unordered list above.
	These div boxes act as links with onclick; the user there doesn't have to click on the words within each box. -->
	<div class="fields msoldcore" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2215';">
      <p class="number">INF 180J</p>
      <h3 class="title">Introduction to Information Studies</h3>
    </div>

	<div class="fields msoldcore management" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=193';">
      <p class="number">INF 387C</p>
      <h3 class="title">Managing Information Organizations</h3>
    </div>

	<div class="fields msoldcore research" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=251';">
      <p class="number">INF 397C</p>
      <h3 class="title">Introduction to Research in Information Studies</h3>
    </div>

	<div class="fields msoldcore organizing" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=164';">
      <p class="number">INF 384C</p>
      <h3 class="title">Organizing Information</h3>
    </div>

	<div class="fields msoldcore usability" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=153';">
      <p class="number">INF 382C</p>
      <h3 class="title">Understanding and Serving Users</h3>
    </div>

	<div class="fields msnewcore policy" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=358';">
      <p class="number">INF 380C</p>
      <h3 class="title">Information in Social and Cultural Context</h3>
    </div>

	<div class="fields msnewcore history" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=337';">
      <p class="number">INF 380E</p>
      <h3 class="title">Perspectives on Information</h3>
    </div>

	<div class="fields msnewcore research" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=336';">
      <p class="number">INF 397C</p>
      <h3 class="title">Understanding Research</h3>
    </div>

	<div class="fields phdcore" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=265';">
      <p class="number">INF 391D.8</p>
      <h3 class="title">Introduction to Doctoral Research and Theory I</h3>
    </div>

	<div class="fields phdcore" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=266';">
      <p class="number">INF 391D.9</p>
      <h3 class="title">Introduction to Doctoral Research and Theory II</h3>
    </div>

	<div class="fields undergrad" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=290';">
      <p class="number">INF 304D</p>
      <h3 class="title">Introduction to Information Studies</h3>
    </div>

	<div class="fields undergrad policy" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=291';">
      <p class="number">INF 315E</p>
      <h3 class="title">Information and Culture</h3>
    </div>

	<div class="fields undergrad" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=269';">
      <p class="number">INF 331C</p>
      <h3 class="title">Beyond Google</h3>
    </div>

	<div class="fields archives" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=214';">
      <p class="number">INF 389J</p>
      <h3 class="title">Appraisal and Selection of Records</h3>
    </div>

	<div class="fields archives collections academic public book" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=236';">
      <p class="number">INF 393C</p>
      <h3 class="title">Conservation of Library and Archival Material</h3>
    </div>

	<div class="fields archives digitallibraries history legal academic public school special museums policy digitalpreservation" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=331';">
      <p class="number">INF 390C</p>
      <h3 class="title">Copyright: Legal and Cultural Perspectives</h3>
    </div>

	<div class="fields archives" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=312';">
      <p class="number">INF 389R</p>
      <h3 class="title">Introduction to Archival Enterprise I</h3>
    </div>

	<div class="fields archives" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=313';">
      <p class="number">INF 389S</p>
      <h3 class="title">Introduction to Archival Enterprise II</h3>
    </div>

	<div class="fields archives digitallibraries digitalpreservation" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=213';">
      <p class="number">INF 389G</p>
      <h3 class="title">Introduction to Electronic and Digital Records</h3>
    </div>

	<div class="fields archives" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=211';">
      <p class="number">INF 389E</p>
      <h3 class="title">Introduction to Records Management</h3>
    </div>

	<div class="fields archives digitallibraries digitalpreservation special organizing" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=163';">
      <p class="number">INF 382R</p>
      <h3 class="title">Introduction to Scientific and Technical Data Collections</h3>
    </div>

	<div class="fields archives academic public museums digitalpreservation" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=229';">
      <p class="number">INF 392E</p>
      <h3 class="title">Introductory Technology and Structure of Records Materials: Materials in Archives, Libraries and Museums</h3>
    </div>

	<div class="fields archives digitallibraries digitalpreservation" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=233';">
      <p class="number">INF 392K</p>
      <h3 class="title">Problems in Permanent Retention of Electronic Records</h3>
    </div>

	<div class="fields business special" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=162';">
      <p class="number">INF 382P</p>
      <h3 class="title">Competitive Intelligence Resources and Strategies</h3>
    </div>

	<div class="fields business management special usability" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=332';">
      <p class="number">INF 387M</p>
      <h3 class="title">Information Marketing</h3>
    </div>

	<div class="fields business special" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=161';">
      <p class="number">INF 382N</p>
      <h3 class="title">Information Resources in Business</h3>
    </div>

	<div class="fields collections digitallibraries museums digitalpreservation" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2299';">
      <p class="number">INF 385T</p>
      <h3 class="title">Collecting New Media</h3>
    </div>

	<div class="fields collections digitallibraries academic museums digitalpreservation" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=311';">
      <p class="number">INF 385U</p>
      <h3 class="title">Digital Media Collections</h3>
    </div>

	<div class="fields digitallibraries usability museums webdesign" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=175';">
      <p class="number">INF 385H</p>
      <h3 class="title">Digital Media Design</h3>
    </div>

	<div class="fields digitallibraries academic collections digitalpreservation history policy" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=283';">
      <p class="number">INF 385S</p>
      <h3 class="title">Digital Libraries</h3>
    </div>

	<div class="fields digitallibraries academic research" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=286';">
      <p class="number">INF 397.3</p>
      <h3 class="title">Digital Libraries Research</h3>
    </div>

	<div class="fields digitallibraries digitalpreservation history" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=282';">
      <p class="number">INF 385R</p>
      <h3 class="title">Survey of Digitization</h3>
    </div>

	<div class="fields health special" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2436';">
      <p class="number">INF 385V</p>
      <h3 class="title">Health Informatics</h3>
    </div>

	<div class="fields health special" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2242';">
      <p class="number">INF 385N</p>
      <h3 class="title">Informatics: Consumer Health Informatics</h3>
    </div>

	<div class="fields health special" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=270';">
      <p class="number">INF 382K</p>
      <h3 class="title">Information Resources in the Health Sciences</h3>
    </div>

	<div class="fields usability" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=172';">
      <p class="number">INF 385E</p>
      <h3 class="title">Information Architecture and Design</h3>
    </div>

	<div class="fields usability webdesign" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2320';">
      <p class="number">INF 385T</p>
      <h3 class="title">Methods of Design Synthesis</h3>
    </div>

	<div class="fields usability" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2307';">
      <p class="number">INF 385T</p>
      <h3 class="title">Natural User Interfaces</h3>
    </div>

	<div class="fields usability" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=177';">
      <p class="number">INF 385K</p>
      <h3 class="title">Projects in Human-Computer Interaction</h3>
    </div>

	<div class="fields undergrad usability" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=297';">
      <p class="number">INF 350E.1</p>
      <h3 class="title">Technologies of the Book</h3>
    </div>

	<div class="fields usability" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=181';">
      <p class="number">INF 385P</p>
      <h3 class="title">Usability</h3>
    </div>

	<div class="fields ir" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=280';">
      <p class="number">INF 384H</p>
      <h3 class="title">Concepts of Information Retrieval</h3>
    </div>

	<div class="fields ir" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2375';">
      <p class="number">INF 385T</p>
      <h3 class="title">Data-Intensive Text Processing with MapReduce</h3>
    </div>

	<div class="fields history museums" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=197';">
      <p class="number">INF 388E</p>
      <h3 class="title">Historical Museums: Context and Practice</h3>
    </div>

	<div class="fields history" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=183';">
      <p class="number">INF 386</p>
      <h3 class="title">History of Information and Society</h3>
    </div>

	<div class="fields undergrad policy" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=293';">
      <p class="number">INF 327E</p>
      <h3 class="title">Information and People: We Like to Watch: Surveillance</h3>
    </div>

	<div class="fields undergrad policy" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=146';">
      <p class="number">INF 312</p>
      <h3 class="title">Information in Cyberspace</h3>
    </div>

	<div class="fields policy" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=217';">
      <p class="number">INF 390N</p>
      <h3 class="title">Information Policy: New Media Technologies & Culture</h3>
    </div>

	<div class="fields policy" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=333';">
      <p class="number">INF 383E</p>
      <h3 class="title">Interpreting Implicit Information on the Web</h3>
    </div>

	<div class="fields history policy special" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2391';">
      <p class="number">INF 385T</p>
      <h3 class="title">iSpy: LIS, Espionage, and World of Intelligence Gathering</h3>
    </div>

	<div class="fields policy" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2437';">
      <p class="number">INF 385T</p>
      <h3 class="title">Knowledge Ecologies</h3>
    </div>

	<div class="fields policy" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2392';">
      <p class="number">INF 385T</p>
      <h3 class="title">Social Media for Information Specialists</h3>
    </div>

	<div class="fields legal special" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=284';">
      <p class="number">INF 388K.6</p>
      <h3 class="title">Law Libraries</h3>
    </div>

	<div class="fields legal special" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=279';">
      <p class="number">INF 382H</p>
      <h3 class="title">Legal Information Resources</h3>
    </div>

	<div class="fields academic public school collections" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=165';">
      <p class="number">INF 384D</p>
      <h3 class="title">Collection Management</h3>
    </div>

	<div class="fields academic" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=200';">
      <p class="number">INF 388K.2</p>
      <h3 class="title">Academic Libraries</h3>
    </div>

	<div class="fields academic collections public school special" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=154';">
      <p class="number">INF 382D</p>
      <h3 class="title">Introduction to Information Resources and Services</h3>
    </div>

	<div class="fields academic public school" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=264';">
      <p class="number">INF 382S</p>
      <h3 class="title">Library Instruction and Information Literacy</h3>
    </div>

	<div class="fields academic public school" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=152';">
      <p class="number">INF 382L</p>
      <h3 class="title">Information Resources and Services: Reader's Advisory</h3>
    </div>

	<div class="fields undergrad public school" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=150';">
      <p class="number">INF 322T</p>
      <h3 class="title">Children's Literature</h3>
    </div>

	<div class="fields public school" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=327';">
      <p class="number">INF 382U</p>
      <h3 class="title">Electronic Resources for Children and Youth</h3>
    </div>

	<div class="fields collections public school" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=156';">
      <p class="number">INF 382F</p>
      <h3 class="title">Materials for Young Adults</h3>
    </div>

	<div class="fields collections public school" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=155';">
      <p class="number">INF 382E</p>
      <h3 class="title">Materials for Children</h3>
    </div>

	<div class="fields public" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=199';">
      <p class="number">INF 388K.1</p>
      <h3 class="title">Public Libraries</h3>
    </div>

	<div class="fields school" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=206';">
      <p class="number">INF 388R</p>
      <h3 class="title">Practicum in School Libraries</h3>
    </div>

	<div class="fields school management" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=195';">
      <p class="number">INF 388C</p>
      <h3 class="title">School Library Management</h3>
    </div>

	<div class="fields public school" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=320';">
      <p class="number">INF 382V</p>
      <h3 class="title">Visual Resources for Youth</h3>
    </div>

	<div class="fields management" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2386';">
      <p class="number">INF 387</p>
      <h3 class="title">Administration: Community Relations</h3>
    </div>

	<div class="fields management" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2306';">
      <p class="number">INF 387</p>
      <h3 class="title">Administration: Managing Projects and Leading Change in Information Organization</h3>
    </div>

	<div class="fields management audio book digitalpreservation" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=231';">
      <p class="number">INF 392G</p>
      <h3 class="title">Management of Preservation Programs</h3>
    </div>

	<div class="fields organizing" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2252';">
      <p class="number">INF 385T</p>
      <h3 class="title">Crowdsourcing: Theory/Methods</h3>
    </div>

	<div class="fields organizing" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2311';">
      <p class="number">INF 385T</p>
      <h3 class="title">Description and Metadata Seminar</h3>
    </div>

	<div class="fields audio book" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2249';">
      <p class="number">INF 385T</p>
      <h3 class="title">Conservation Lab Techniques for Non-Specialists</h3>
    </div>

	<div class="fields audio" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2278';">
      <p class="number">INF 392L</p>
      <h3 class="title">Introduction to Audio Preservation and Reformatting</h3>
    </div>

	<div class="fields audio book digitalpreservation" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2352';">
      <p class="number">INF 385T</p>
      <h3 class="title">Politics of Preservation</h3>
    </div>

	<div class="fields book history" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=203';">
      <p class="number">INF 388K.5</p>
      <h3 class="title">Rare Book and Special Collections</h3>
    </div>

	<div class="fields book history" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2393';">
      <p class="number">INF 385T</p>
      <h3 class="title">Studies in Book Arts</h3>
    </div>

	<div class="fields book" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=335';">
      <p class="number">INF 393C</p>
      <h3 class="title">Treatment Techniques for Flat Paper</h3>
    </div>

	<div class="fields book" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=237';">
      <p class="number">INF 393C.1</p>
      <h3 class="title">Book Laboratory I</h3>
    </div>

	<div class="fields research" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=220';">
      <p class="number">INF 391D</p>
      <h3 class="title">Fundamentals of Inquiry in Information Studies</h3>
    </div>

	<div class="fields webdesign" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=179';">
      <p class="number">INF 385M</p>
      <h3 class="title">Database Management</h3>
    </div>

	<div class="fields webdesign" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2303';">
      <p class="number">INF 385T</p>
      <h3 class="title">Designing Dynamic Web Pages</h3>
    </div>

	<div class="fields webdesign" onclick="location.href='http://www.ischool.utexas.edu/courses/course_details.php?CourseID=151';">
      <p class="number">INF 380K</p>
      <h3 class="title">Internet Applications</h3>
    </div>

	<div class="fields webdesign" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2382';">
      <p class="number">INF 385T</p>
      <h3 class="title">Introduction to Java Programming</h3>
    </div>

	<div class="fields webdesign" onclick="location.href='http://www.ischool.utexas.edu/courses/class_details.php?ClassID=2302';">
      <p class="number">INF 385T</p>
      <h3 class="title">Introduction to Programming</h3>
    </div>

	<!-- end fields wrap -->
	</div>

<!-- end contentbox -->
</div>
<!-- end rightcolumn -->
</div>

<script type="text/javascript">

	// changes the tall photo caption to a wide caption along the bottom of the photo by changing a div class
	function longCaption(){
		document.getElementById('textfirstbox').id="textbox";
		document.getElementById('textfirstcontent').id="textcontent";
	}

	// this isn't actually used, but would do the opposite of the function above.
	function tallCaption() {
		document.getElementById('textbox').id="textfirstbox";
		document.getElementById('textcontent').id="textfirstcontent";
	}

	// within the "fields-wrap" div, each subsequent div is sorted and animated by isotope, a jquery script.
	// the isotope script is saved in the js folder.
	$(function() {
		$('#fields-wrap').isotope({
			layoutMode : 'cellsByRow',
			cellsByRow : {
				columnWidth: 165,
				rowHeight: 127
  		},
		animationEngine: "best-available"  //different browsers will use different animation effects
		});

		// as isotope animates the course boxes, the following script will
		// use the text of the chosen discipline to change the photo caption.
		$('#rightcolumncontent a').click(function(){
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
				$("#textfirstcontent p").html('The following is a list of courses required for Doctoral students. Here is a <a href="http://www.ischool.utexas.edu/forms/phd_handbook.pdf" target="_blank">link</a> to the Doctoral Student Handbook, which explains the requirements for doctoral students.');
				$("#textfirstcontent h3").text("Doctoral Core Curriculum");
				$("#textcontent p").html('The following is a list of courses required for Doctoral students. Here is a <a href="http://www.ischool.utexas.edu/forms/phd_handbook.pdf" target="_blank">link</a> to the Doctoral Student Handbook, which explains the requirements for doctoral students.');
				$("#textcontent h3").text("Doctoral Core Curriculum");
			}

			else if (link_title=="| Undergraduate Minor |")
			{
				$("#textfirstcontent p").html('The School of Information supports an undergraduate minor in Information Studies. Students completing the minor\'s requirements receive a certificate from the iSchool.  Here is a <a href="http://www.ischool.utexas.edu/programs/minor.php" target="_blank">link</a> to a webpage explaining our undergraduate minor program in detail.');
				$("#textfirstcontent h3").text("Undergraduate Minor");
				$("#textcontent p").html('The School of Information supports an undergraduate minor in Information Studies. Students completing the minor\'s requirements receive a certificate from the iSchool.  Here is a <a href="http://www.ischool.utexas.edu/programs/minor.php" target="_blank">link</a> to a webpage explaining our undergraduate minor program in detail.');
				$("#textcontent h3").text("Undergraduate Minor");
			}

			else if (link_title=="| Archives and Records Enterprise |")
			{
				$("#textfirstcontent p").text("Students studying archives and records enterprises learn how to process and administer archives collections and perform records management for various types of institutions. Relevant coursework addresses preserving and providing access to archival documents and institutional records.");
				$("#textfirstcontent h3").text("Archives and Records Enterprise");
				$("#textcontent p").text("Students studying archives and records enterprises learn how to process and administer archives collections and perform records management for various types of institutions. Relevant coursework addresses preserving and providing access to archival documents and institutional records.");
				$("#textcontent h3").text("Archives and Records Enterprise");
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

			else if (link_title=="Special")
			{
				$("#textfirstcontent p").text("Special libraries include law libraries, news libraries, government libraries, corporate libraries, museum libraries, and medical libraries. The School of Information offers coursework that is relevant to each of these types of institutions.");
				$("#textfirstcontent h3").text("Special Librarianship");
				$("#textcontent p").text("Special libraries include law libraries, news libraries, government libraries, corporate libraries, museum libraries, and medical libraries. The School of Information offers coursework that is relevant to each of these types of institutions.");
				$("#textcontent h3").text("Special Librarianship");
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

			//we don't want clicking on the librarianship or preservation studies links to do anything,
			//since those categories are broken into subcategories

			if (link_title != "| Librarianship >> |" && link_title != "| Preservation Studies >> |")
			{
				$('#fieldpic').fadeTo(0, 0.0);       //fades image to total transparency instantly
				var selector = $(this).attr('data-filter');
				$('#fields-wrap').isotope({ filter: selector });

				//IMPORTANT: every image must have a name matching the "data-filter" of its corresponding link.
				//Every image must also be a .jpg file for this script to work as it is currently written.

				document.fieldpic.src = "images/fieldsofstudy/" + selector.substring(1) + ".jpg";

				$('#fieldpic').fadeTo(1000, 0.75);   //returns image to semi-opacity in one second
				longCaption();                       //changes the position of the photo caption
			}

		});

	});

	// switches class of course box, triggers with a mouse hover
	$("#rightcolumn .fields").hover(
	  function() {
	    $(this).removeClass("fields");$(this).addClass("bluelinks");
	  },
	  function() {
	    $(this).removeClass("bluelinks");$(this).addClass("fields");
	  }
	);

    // switches selected class on buttons
    $('#rightcolumncontent').find('.option-set a').click(function(){
      var $this = $(this);

      // don't proceed if already selected
      if ( !$this.hasClass('selected') ) {
          $this.parents('.option-set').find('.selected').removeClass('selected');
          $this.addClass('selected');
        }

    });

</script>

