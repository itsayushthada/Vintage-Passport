$(document).ready(function () 
				{
					var elementPosition = $('#search_bar').offset();

					$(window).scroll(function () 
					{
						if ($(window).scrollTop() > elementPosition.top) 
						{
							$('#search_bar').css('position', 'fixed').css('top', '0');
						} 
						else 
						{
							$('#search_bar').css('position', 'static');
						}
					});
				});