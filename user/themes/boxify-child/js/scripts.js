$(document).ready(function() {

	/***************** Waypoints ******************/

	$('.wp0').waypoint(function(direction) {
	    if (direction ==='down') {
	      $(".display-1, .header-logo, .nav-toggle").fadeTo(1000, 0.2);
      }
      else {
	      $(".display-1, .header-logo, .nav-toggle").fadeTo(1000, 1);        
      }
	},{
	  offset: 250
  });

	$('.wp4').waypoint(function() {
		$('.wp4').addClass('animated fadeInRight');
	}, {
		offset: '75%'
	});

	$('.wp5').waypoint(function() {
		$('.wp5').addClass('animated fadeIn');
	}, {
		offset: '75%'
	});
	
	$('.wp6').waypoint(function() {
		$('.wp6').addClass('animated fadeInUp');
	}, {
		offset: '50%'
	});
});
