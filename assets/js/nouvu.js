$( function ()
{
	"use strict";
	
	$( document ).on('click', '#show_hide_password a', function ( event )
	{
		event.preventDefault();
		
		if ( $('#show_hide_password input').attr("type") == "text" )
		{
			$('#show_hide_password input').attr('type', 'password');
			$('#show_hide_password i').addClass("bx-hide");
			$('#show_hide_password i').removeClass("bx-show");
		}
		else if ( $('#show_hide_password input').attr("type") == "password" )
		{
			$('#show_hide_password input').attr('type', 'text');
			$('#show_hide_password i').removeClass("bx-hide");
			$('#show_hide_password i').addClass("bx-show");
		}
	});
});