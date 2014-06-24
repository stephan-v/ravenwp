
/*  #Responsive menu slide up and down when clicked
================================================== */

$( document ).ready(function() {
	$("#dropdown-btn").click(function () {
	if ( $( "#dropdown-links:first" ).is( ":hidden" ) ) {
		$( "#dropdown-links" ).slideDown( "slow" );
	} else {
		$( "#dropdown-links" ).slideUp("slow");
	}
	});
});

/*  #Jquery Tooltip
================================================== */

$(function() {
    $(".services-table").tooltip({
    	track: true,
    });
});