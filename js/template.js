$(document).ready(function()  
			{
				$("p").click(function() 
				{
					var t2 = $(this).data('abcd');
					document.getElementById("object1").value = t2;
					var cat = findCategory(t2);
					document.getElementById("object2").value = cat;
					document.getElementById("template_data").submit();
				});
			});