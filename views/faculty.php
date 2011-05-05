<div id="rightcolumn" class="grid_9">
<h1>FACULTY DIRECTORY</h1>
<ul id="filters">
		<li><a id="getall" href="#" data-filter="*">All faculty members</a></li>
		<li><a href="#" data-filter=".administrative">Administrative</a></li>
		<li><a href="#" data-filter=".full-time">Full time faculty</a></li>
				<br />
		<li><a href="#" data-filter=".joint">Joint pointees</a></li>
		<li><a href="#" data-filter=".part-time">Part time faculty</a></li>
		<li><a href="#" data-filter=".assistant-instructor">Assistant instructors</a></li>
		<li><a href="#" data-filter=".emeritus">Emeritus faculty</a></li>
</ul>

<ul class="box" id="faculty-wrap">
</ul>
<?php ###  Script to insert faculty info to CouchDB #####
/*$couch_dsn = "http://realpeterz:zwb1982626@realpeterz.cloudant.com/";
$couch_db = "faculty";

require_once "lib/php_on_couch/couch.php";
require_once "lib/php_on_couch/couchClient.php";
require_once "lib/php_on_couch/couchDocument.php";

require('lib/scrap_faculty.php');

$faculty = new Faculty("http://www.ischool.utexas.edu", "/people/faculty.php");
$faculty_members = $faculty->faculty_members;


$client = new couchClient($couch_dsn,$couch_db);

foreach ($faculty_members as $faculty):

try {
	$response = $client->storeDoc($faculty);
} catch (Exception $e) {
	echo "Something weird happened: ".$e->getMessage()." (errcode=".$e->getCode().")\n";
	exit(1);
}

echo "CouchDB created a unique identifier ".$response->id."<br />";

endforeach; */
?>



<!-- <?php


$couch_dsn = "http://realpeterz:zwb1982626@realpeterz.cloudant.com/";
$couch_db = "faculty";

require_once "lib/php_on_couch/couch.php";
require_once "lib/php_on_couch/couchClient.php";
require_once "lib/php_on_couch/couchDocument.php";

$client = new couchClient($couch_dsn,$couch_db);

try {
	$faculty = $client->getDoc('p155');
} catch (Exception $e) {
	if ( $e->code() == 404 ) {
		echo "Document not found\n";
	} else {
		echo "Error: ".$e->getMessage()." (errcode=".$e->getCode().")\n";
	}
	exit(1);
}
?> -->

<!-- <div class="faculty <?php echo $faculty->category; ?>">
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
</div> -->






<!-- <?php
	require('lib/scrap_faculty.php');
	$faculty = new Faculty("http://www.ischool.utexas.edu", "/people/faculty.php");
	$faculty_members = $faculty->faculty_members;
?> -->

<!-- <div id="rightcolumn" class="grid_9">

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
</div> -->

</div>

<script id="facultyTemplate" type="text/x-jquery-tmpl">

			<li class="faculty ${category}">
						<a href="${href}">
							<img src="${src}" alt="${name}" />
							 <span class="person-name">${name}</span>
						</a>
						 <p class="email"><a href="mailto:${email}">${email}</a></p>
						 <p class="title">${title}</p>
						 <p class="phone">${phone}</p>
						 <p class="office">${office}</p>
			</li>
</script>


<script type="text/javascript">

	$(function() {

		jQuery.getScript( 'js/jquery.tmpl.min.js' , function(){ //loading jQuery templating library
			$.ajax({
						type: 'GET',
						url: "https://realpeterz:zwb1982626@realpeterz.cloudant.com/faculty/_design/faculty/_view/all",
						dataType: "jsonp",
						success: function(json){
								var persons = [];
								$.each(json.rows, function(i, person){
									persons.push(person.value);
								})


								// Compile the inline template as a named template
								var facultyTemplate = $( "#facultyTemplate" ).template();


								// Render the movies data using the named template: "summaryTemplate"
								$.tmpl( facultyTemplate, persons ).appendTo( "ul.box" );




									$(function() {
										$('#faculty-wrap').isotope({
											itemSelector : '.faculty',
											layoutMode : 'fitRows',
											animationEngine: "best-available"
										});
									});

									$('#filters a').click(function(){
								 	 	var selector = $(this).attr('data-filter');
										$('#faculty-wrap').isotope({ filter: selector });
										return false;
									});


						} // end of success callback
			}); // end of Ajax
		});


	});
</script>

