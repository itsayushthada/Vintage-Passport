$(document).ready(function()  
			{
				$("a").click(function() 
				{
					var t5 = $(this).data('pqrs');
					if(t5!="city" && t5!="about")
					{
						document.getElementById("objectx").value = t5;
						document.getElementById("template2_data").submit();
					}
				});
			});