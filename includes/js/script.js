/*

My Custom JS
============

Author:  Brad Hussey
Updated: August 2013
Notes:	 Hand coded for Udemy.com

*/

$(function() {
	
	$('#alertMe').click(function(e) {
		
		e.preventDefault();
		
		$('#successAlert').slideDown();
		
	});
	
	$('a.pop').click(function(e) {
		e.preventDefault();
	});
	
	$('a.pop').popover();
	
	$('[rel="tooltip"]').tooltip();
	
	
});






//About page


$(document).ready(function()
{
    $('.contact').click(function (e) 
    {
        $('.card').toggleClass('active');
        $('.banner').toggleClass('active');
        $('.photo').toggleClass('active');
        $('.social-media-banner').toggleClass('active');
        $('.email-form').toggleClass('active');  
        var buttonText = $('button.contact#main-button').text();
        if (buttonText === 'back')
        {
            buttonText = 'click to get in touch';
            $('button.contact#main-button').text(buttonText);
        }
        else
        {
            buttonText = 'back';
            $('button.contact#main-button').text(buttonText);
        }
    });
});
//turn on to make the photo follow mouse
// $(document).ready(function()
// {
//     $(document).mousemove(function( event ) 
//     {
//         var docWidth = $(document).width();
//         var docHeight = $(document).height();
//         var xValue = (event.clientX/docWidth)*100;
//         var yValue = (event.clientY/docHeight)*100;
//         $('.photo').css('background-position', xValue+'%,'+yValue+'%');
//     });
// });