$(function(){


		$("dd").hide();
		$("#yoga img").fadeTo(0, 0.5); //fade yoga image


		$("form.form-search").submit(function(e){
			e.preventDefault();
			var search_str = document.topsearch.search.value;
			window.location = "http://www.googlesyndicatedsearch.com/u/ischool?hl=en&domains=www.ischool.utexas.edu&ie=ISO-8859-1&q="+search_str+"&btnG=Search&sitesearch=www.ischool.utexas.edu";

		});


		// sider bar accordion

		$("#navilist dt span.expand").mouseenter(function(){
			$(this).not('.expand_down').addClass('expand_up_hover');
			if ($(this).is('.expand_down')) $(this).addClass('expand_down_hover');
		});

		$("#navilist dt span.expand").mouseout(function(){
			$(this).not('.expand_down').removeClass('expand_up_hover');
			if ($(this).is('.expand_down')) $(this).removeClass('expand_down_hover');
		});

		$("#navilist dt span.expand").click(function(){
			$("#navilist dd:visible").slideUp("slow");
			$('span.expand').removeClass('expand_down expand_up_hover expand_down_hover').addClass('expand_up');
			var sub_menu = $(this).parent().next();
			if (sub_menu.is(":hidden")) {
				$(this).parent().next().slideDown("slow");
				$(this).removeClass('expand_up  expand_up_hover expand_down_hover').addClass('expand_down');
			}
			return false;
		});




		// navigation hilighting for current page on the leftbar
		if ( ( subsite = window.location.search.match(/\?subsite=(.*?)($|(?=&))/) ) && (window.location.search.match(/\&page=(.*$)/) == null) )
		{
			$("a[data-location='"+subsite[1]+"']").parent('dt').addClass('active');
			$("a[data-location='"+subsite[1]+"']").prev("span").trigger("click");

		}


		if( page = window.location.search.match(/\&page=(.*$)/) )
		{

			$("a[data-page='"+page[1]+"']").css("color", "#CB5726");
			var item = $("a[data-page='"+page[1]+"']").parents('dd').prev('dt');
			item.addClass('active');
			item.find('span.expand').trigger("click");

		}



		// JSON data for slider


		var data = [
			{
				image: 'images/photo1.jpg',
				title: 'iSchool1',
				description: 'ischool',
				link: '#'
			},
			{
				image: 'images/photo2.jpg',
				title: 'iSchool2',
				description: 'ischool',
				link: '#'
			},
			{
				image: 'images/photo3.jpg',
				title: 'iSchool3',
				description: 'ischool',
				link: '#'
			},
			{
				image: 'images/photo4.jpg',
				title: 'iSchool4',
				description: 'ischool',
				link: '#'
			},
			{
				image: 'images/photo5.jpg',
				title: 'iSchool5',
				description: 'ischool',
				link: '#'
			}

		]; // data to pass in galleria slider


		// caption data

		var Caption = {

			getFileName: function(str){
					var regex = /images\/.*(?=\.[(jpg)|(gif)|(png)])/,
					    filename = regex.exec(str),
					    photoname = filename[0].substring(7);
					return photoname;
					//return filename;
			},

			files: [
					{
						photo: "photo1",
						content: "<b>W</b>elcome to The School of Information at The University of Texas at Austin. Information is a valuable social resource, and we educate the professionals who will ensure its continuity, usability, and accessibility - now and into the future."
					},
					{
						photo: "photo2",
						content: "<b>T</b>he IT Lab staff provides helpful information and assistance on a variety of subjects. IT Lab Hours are <strong>Monday-Thursday</strong>:<br />8:30 a.m.-10 p.m.<br /><strong>Friday</strong>: 9 a.m.-4 p.m.<br /><strong>Saturday</strong>: 12-6 p.m.<br /><strong>Sunday</strong>: 1-5 p.m."
					},
					{
						photo: "photo3",
						content: "<b>P</b>rofessor Karen Pavelka instructs students in the Book Lab. The Cultural Heritage and Information Preservation Society (CHIPS) hosts Preservation Week at the iSchool April 24-30."
					},
					{
						photo: "photo4",
						content: "<b>O</b>n the fifth floor of the iSchool, students will find a friendly staff and distinguished faculty, who are eager to teach and help students."
					},
					{
						photo: "photo5",
						content: "<b>T</b>he iSchool is located in the UT Administration (UTA) Building, two blocks south of UT's main campus at 1616 Guadalupe Street, across the street from the Clay Pit restaurant and Dog & Duck pub."
					}

				]

		};


// home page slider

		$('#slider').galleria({
			data_source: data,
			width: 480,
			height: 320,
			thumbnails: true,
			extend: function(options) {


				$.each(Caption.files, function(i, e){
        		$("<p class='caption' id="+ this.photo +">"+this.content+"</p>").appendTo("#caption");
        });

				$("#"+Caption.files[0].photo).show().css("top", 0).addClass("showing");

        // listen to when an image is shown
        this.bind('image', function(e) {

					  var photoname = Caption.getFileName(e.imageTarget.src),
					  		$currentCap = $("#"+photoname);

					  			$('.showing').animate({ left:300 },100, function(){
					  				$(this).css({"top":320, "left":0, "display":"none"}).removeClass("showing");
					  				$currentCap.show().animate({ top: 0 }, 300).addClass("showing");

					  			});


          });
    	}
	    }); // end of galleria slider



});

