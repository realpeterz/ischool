$(function(){
		//$(".slogan").lettering('words');
		
		/*$(".past").lettering().children("span").css({'display':'inline-block', '-moz-transform':'rotate(-25deg)', '-webkit-transform':'rotate(-25deg)', '-o-transform':'rotate(-25deg)'});
		$(".present").lettering().children("span").css({'display':'inline-block', '-moz-transform':'scale(1.2, 1.2)', '-webkit-transform':'rotate(-25deg)', '-o-transform':'rotate(-25deg)'});
		$(".future").lettering().children("span").css({'display':'inline-block', '-moz-transform':'rotate(25deg)', '-webkit-transform':'rotate(25deg)', '-o-transform':'rotate(25deg)'});*/
		
		//Galleria.loadTheme('js/themes/classic/galleria.classic.min.js'); //loading galleria theme
		
		$("dd").hide();
		$("#yoga img").fadeTo(0, 0.5); //fade yoga image
		
		
		// sider bar accordion
		$("dt a").click(function(){
			$("dd:visible").slideUp("slow");
			var sub_menu = $(this).parent().next();
			if (sub_menu.is(":hidden"))
				$(this).parent().next().slideDown("slow");
			return false;
		}); 
		
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
			}
			
		]; // data to pass in galleria slider
		
		
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
						content: "<b>C</b>orem et, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo dolores et ea rebum."
					},
					{ 
						photo: "photo2",
						content: "<b>D</b>orem ipsum dolor s voluptua. At vero eos et accusam et justo dolores et ea rebum."
					},
					{ 
						photo: "photo3",
						content: "<b>S</b>orem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et do"
					},
					{ 
						photo: "photo4",
						content: "<b>F</b>consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed dnonumy eirmod tempor invidunt ut labore et dolore magn"
					}
				]
			
		};
				
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
        /*Galleria.log(this) // the gallery instance
        Galleria.log(options)*/ // the gallery options

        // listen to when an image is shown
        this.bind('image', function(e) {
        	
        	
        	

           // Galleria.log(e); // the event object may contain custom objects, in this case the main image
            //Galleria.log(regex.exec(e.imageTarget.src)); // the current image
						
					  var photoname = Caption.getFileName(e.imageTarget.src),
					  		$currentCap = $("#"+photoname);
					  			$('.showing').animate({ left:300 },100, function(){
					  				$(this).css({"top":320, "left":0, "display":"none"}).removeClass("showing");
					  				$currentCap.show().animate({ top: 0 }, 300).addClass("showing");
					  				
					  			});
					  			
					  			
					  		
								
								
						//$currentCap.animate(params, duration, easing, function(){
						//	top:
					//	});
						
            // lets make galleria open a lightbox when clicking the main image:
           /*****  say something  *****/
        });
    	}
		}); // end of galleria slider
		
		
			
});



