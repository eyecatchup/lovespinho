// When the DOM is ready.
// Done by: Jonathan Fontes
$(function (){

	/* mixpanel */
	mixpanel.track("Visit");

	/* menu header clicked track */
	mixpanel.track_links( '#logoheader', 'Logo Clicked' );

	if( $('.blueberry')[0] != null )
	{
		$('.blueberry').blueberry();
	}

	if( $('.mixpanel')[0] != null )
	{
		$(".mixpanel").on('click',function (){
			var attr = $(this).data('attr'),
			obj = $(this).data('obj') || {};

			mixpanel.track( attr , JSON.parse(obj));
		});
		
	}

	if ( $('.mixpanellink')[0] != null )
	{
		$(".mixpanellink").on('click', function () {
			//var attr = $(this).data('attr');
			//mixpanel.track_links( attr );
		});
	}
	
	

});