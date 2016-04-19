

	/* Reference to the firebase forge */
	fb_url = "https://jainakshat.firebaseio.com/hire-enquiry/";
	
	function writeData(type,a,b,c,d,e,f) {
		$('#load-form').height($('#hire2-form').height());
		$('#load-done-form').height($('#hire2-form').height());
		$('#hire2-form').fadeOut();
  		$('#hire1-form').fadeOut();
  		$('#load-form').fadeIn();
		if(type == 1) {
			var fb = new Firebase(fb_url+"person/");
			fb.push({
				first_name : a,
				last_name : b,
				email : c,
				phone : d,
				place : e,
				text : f
			}, function(error) {
				if (error) {
  					showMsg();
  				} else {
  					$('#load-form').fadeOut();
  					$('#load-done-form').fadeIn();
  				}
			});
		}
		else {
			var fb = new Firebase(fb_url+"company/");
			fb.push({
				first_name : a,
				last_name : b,
				email : c,
				phone : d,
				company_name : e,
				text : f
			}, function(error) {
				if (error) {
  					showMsg();
  				} else {
  					$('#load-form').fadeOut();
  					$('#load-done-form').fadeIn();
  				}
			});	
		}
	}
	
	


