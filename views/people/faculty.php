<div id="rightcolumn" class="grid_9 faculty">
<h1>FACULTY DIRECTORY</h1>
<ul id="filters">
		<li><a class="active" id="getall" href="#" data-filter="*">All faculty members</a></li>
		<li><a href="#" data-filter=".administrative">Administrative</a></li>
		<li><a href="#" data-filter=".full-time">Full time faculty</a></li>
		<div class="clearfloat"></div>
		<li><a href="#" data-filter=".joint">Joint pointees</a></li>
		<li><a href="#" data-filter=".part-time">Part time faculty</a></li>
		<li><a href="#" data-filter=".assistant-instructor">Assistant instructors</a></li>
		<li><a href="#" data-filter=".emeritus">Emeritus faculty</a></li>
</ul>

<ul class="box" id="faculty-wrap">
</ul>
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

        $('#filters a').click(function(){
            $('#filters a').removeClass('active');
            $(this).addClass('active');
        });

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
											animationEngine: "best-available",
											getSortData : {
                                                personname : function ( $elem ) {
                                                return $elem.find('.person-name').text();
                                                }
                                            },
                                            sortBy: 'personname'
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

