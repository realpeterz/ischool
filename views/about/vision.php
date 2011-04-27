    <script type="text/javascript" src="jquery-1.2.6.min.js"></script>
    <script type="text/javascript">
	jQuery(function($){

 // Set up a listener so that when anything with a class of 'tab' 
 // is clicked, this function is run.
 
 
 $('#load').html($(".tab_contents_active").html()).hide().slideDown();
  
 $('.tab').click(function () {

  // Remove the 'active' class from the active tab.
 $('#tabs_container > .tabs > li.active')
	  .removeClass('active');
	  
  // Add the 'active' class to the clicked tab.
  $(this).parent().addClass('active');

  // Remove the 'tab_contents_active' class from the visible tab contents.
  /*$('#tabs_container > .tab_contents_container > div.tab_contents_active')
	  .removeClass('tab_contents_active');

  // Add the 'tab_contents_active' class to the associated tab contents.
  $(this.rel).addClass('tab_contents_active');*/
  
  $('#load').html($(this.rel).html()).hide().slideDown();
  window.location.hash = this.rel;
	return false;
 });
 
 
 var section = window.location.hash;
 if ($(section).length && $("a[rel='"+section+"']").length) 
 {
 		$("a[rel='"+section+"']").trigger('click');
 }
 
 
 
});
    </script>
    <style type="text/css">

#tabs_container {
	width: 700px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}

#tabs_container ul.tabs {
	list-style: none;
	border-bottom: 1px solid #ccc;
	/*height: 21px;*/
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
	background-color: #CCCCCC;
	color:#D35634;
	font-size:14px;
}
#tabs_container ul.tabs li.active a {
	background-color: #fff;
	padding-top: 4px;
	color:#6193CC;
}


div.clear {
	clear: both;
}

.tab_contents_container { display:none; }

#load { 
	border: 1px solid #ccc;
	border-top: none;
	padding: 10px; 
}
	
	
</style>

<div id="rightcolumn" class="grid_9 programs">
<div id="tabs_container">
      
      <!-- These are the tabs -->
      <ul class="tabs">
        <li class="active">
          <a href="#" rel="#tab_1_contents" class="tab"><strong>Our Vision</strong></a>
        </li>
        <li><a href="#" class="tab" rel="#tab_2_contents"><strong>Our Mission</strong></a></li>
        <li><a href="#" class="tab" rel="#tab_3_contents"><strong>Programs and Resources</strong></a></li>
        <li><a href="#" class="tab" rel="#tab_4_contents"><strong>Careers</strong></a></li>
        <li><a href="#" class="tab" rel="#tab_5_contents"><strong>Challenges and Needs</strong></a></li>
      </ul>
      
      <!-- This is used so the contents don't appear to the 
           right of the tabs -->
      <div class="clear"></div>
      
      
      <div id="load">
      	
      </div>
      
      
      <!-- This is a div that hold all the tabbed contents -->
      <div class="tab_contents_container">
    
        <!-- Tab 1 Contents -->
        <div id="tab_1_contents" class="tab_contents tab_contents_active">
          <p>The School of Information aims to be the premier research and education program for 21st century information professionals who will apply the theoretical and practical knowledge necessary to preserve the past, manage the present, and design the future.</p>
        </div>
    
        <!-- Tab 2 Contents -->
        <div id="tab_2_contents" class="tab_contents">
          <p>
		At the School of Information, we are committed to making a difference in the lives of citizens by enabling and supporting the curation, organization and experience of information in ways that enhance lives.
	</p>
	<p>
		<strong>We believe:</strong>
	</p>
	<ul>
		<li>Humans are the center of the information life cycle</li>
		<li>Information technologies must serve the needs of their users</li>
		<li>Access to information for all citizens is a requirement of a civil society</li>
		<li>Information systems should augment human and organizational capabilities</li>
		<li>Information quality raises ethical issues worthy of deep study</li>
		<li>Our cultural heritage requires our active engagement in matters of management, policy and preservation</li>
	</ul>
        </div>
    
        <!-- Tab 3 Contents -->
        <div id="tab_3_contents" class="tab_contents">
         <p>The School of Information accomplishes its mission through the following specific programs and resources:
	</p>
	<p>Programs:</p>
	<ul>
		<li>A PhD program for information researchers, scholars and advanced information managers</li>
		<li>A Master of Science program in Information Studies for top-level information professionals in archival enterprise, information architecture, information policy, information systems design and management, information usability, librarianship, multimedia design, museum work, preservation and conservation, and records management</li>
		<li>General information study coursework for undergraduates and graduates in other fields of study</li>
		<li>Special programs in school library certification and youth information services</li>
		<li>A Certificate of Advanced Study, and endorsement of specialization and continuing education programs for life-long learning</li>
	</ul>
	<p>
		<strong>Resources:</strong>
	</p>
	<ul>
		<li>A faculty comprised of leaders in research, instruction, and service</li>
		<li>Excellent facilities and technological resources for research and instruction</li>
		<li>Unparalleled educational and information resources of the University of Texas at Austin and of the metropolitan Austin area</li>
		<li>More than 50 scholarships and 70 teaching assistantships awarded annually, and current annual grants that total several hundred thousand dollars</li>
		<li>Collaborations with academic units in the humanities, sciences, social sciences and engineering, with other professional schools and with both government and high-tech agencies and organizations</li>
		</li>
	</ul>
        </div>
       <div id="tab_4_contents" class="tab_contents">
       <p>
		Career opportunities for information professionals are constantly increasing in number. In addition to research and teaching, they include thousands of positions as information providers, information managers, information system designers and creators, and information policy experts.
	</p>
	<p>
		Many positions have well-developed legacies and traditions from the past (for example, archival work; academic, public, school and special librarianship; museum work; preservation and conservation; records management); many have been created during the past two decades (digital information system design, creation and management, multimedia production, information architecture and usability, information policy); and many (yet unnamed) will come into existence through the natural evolution of social structures and technological advances.
	</p>
	<p>
		Careers of these kinds occur in both private and public realms, in for-profit and not-for-profit environments, in entrepreneurial development and social service, and in virtually every known field of study.
	</p>
       </div> 
    <div id="tab_5_contents" class="tab_contents">
    	<p>
		The greatest challenges facing the information society are to understand in some fundamental way the extraordinary complexity of information and to discover principles and processes that will manage its immense volume and tap its promise for enhancing our lives. The most critical need is to engage the best and brightest people who thrive on such challenges:
	</p>
	<ul>
		<li>People who place humans at the center of the information life cycle</li>
		<li>People who understand that information has as much to do with content as with technological prowess</li>
		<li>People who are committed to exploring information complexity in order to discover the human and technological principles and processes that underlie it</li>
		<li>People who are energized by a vision of a diverse society in which access to relevant information is not merely a luxury but a requirement</li>
		<li>People who are dedicated to the creation of new forms of information systems that can augment human and organizational capabilities</li>
		<li>People who are sensitive to and driven to improve legal and ethical aspects of information access</li>
		<li>People who recognize the cultural and social importance of our information heritage and institutions, and the necessity of preserving and disseminating the human cultural record</li>
		<li>People who are enthusiastic about careers that facilitate the management and application of information to the everyday lives of individuals and organizations</li>
	</ul>
	<p>
		At the School of Information, we are committed to making a difference in the lives of citizens by shaping information realities that are accessible, useful, usable, and sustainable. <em>Are you type i?</em>
	</p>

    </div>
      </div>
    </div></div>
