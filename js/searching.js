function searching()
{
	
	var itext = document.getElementById("iname").value;
	var found = 0;
	
	var cat=findCategory(itext);
	
	if(cat!="")
		found = 1;
	
	if(found==0)
	{
		var win =window.open("https://www.google.com/".itext , "_blank");
		win.focus();
	}
	
	else if(found==1)
	{
		document.getElementById("object1").value = itext;
		document.getElementById("object2").value = cat;
		document.getElementById("template_data").submit();
	}
}