<style type="text/css">
/**** Isotope filtering ****/

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

.faculty { background:#EAEBF2; width:226px; height:170px; border:1px solid #E0E2E8; margin:0 5px 5px 0;}
.faculty a { color:#227DAA; text-decoration: none;}
.faculty a:hover { color: #d96c00; }
.faculty img { display:block; }
.faculty p.phone, .faculty p.office, p.email { margin: 0; }
p.title, span.person-name { font-weight:bold; }
span.person-name { font-size:1.1em; }
ul { padding-left: 0; }
li { list-style:none;  }
#faculty-wrap { clear:both; }
#filters a { color:#222; }
#filters li { float:left; margin-right:1em;}
</style>

<?php
require('lib/scrap_faculty.php');
$faculty = new Faculty("http://www.ischool.utexas.edu", "/people/faculty.php");
$faculty_members = $faculty->faculty_members;
?>

<div id="rightcolumn" class="grid_9">

	<ul id="filters">
		<li><a href="#" data-filter="*">Alll faculty members</a></li>
		<li><a href="#" data-filter=".administrative">Administrative</a></li>
		<li><a href="#" data-filter=".full-time">Full time faculty</a></li>
		<li><a href="#" data-filter=".joint">Joint pointees</a></li>
		<li><a href="#" data-filter=".part-time">Part time faculty</a></li>
		<li><a href="#" data-filter=".assistant-instructor">Assistant instructors</a></li>
		<li><a href="#" data-filter=".emeritus">Emeritus faculty</a></li>
	</ul>
	
	<div id="faculty-wrap">
		<?php foreach ($faculty_members as $faculty): ?>

			<div class="faculty <?php echo $faculty->category; ?>">
				<div>
					<a href="<?php echo $faculty->href; ?>">
						<img src="<?php echo $faculty->src; ?>" alt="<?php echo $faculty->name; ?>" />
						<span class="person-name"><?php echo $faculty->name; ?></span>
					</a>
				</div>
				<p class="email"><?php echo $faculty->email; ?></p>
				<p class="title"><?php echo $faculty->title; ?></p>
				<p class="phone"><?php echo $faculty->phone; ?></p>
				<p class="office"><?php echo $faculty->office; ?></p>
			</div>
	
		<?php endforeach; ?>
	</div>
</div>

<script type="text/javascript">
	
	$(function() {
		$('#faculty-wrap').isotope({
			itemSelector : '.faculty', 
			layoutMode : 'cellsByRow',
			cellsByRow : {
				columnWidth: 232,
				rowHeight: 175
  		},
  		animationEngine: "best-available"
		});

		$('#filters a').click(function(){
	 	 	var selector = $(this).attr('data-filter');
			$('#faculty-wrap').isotope({ filter: selector });
			return false;
		});
	});

</script>
