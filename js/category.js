function findCategory(itext)
{
	var cat="";
	
	var city = new Array("Mumbai","Jaipur","Udaipur","Kolkata","Amritsar","PortBlair","Agra","Hyderabad",
						 "Bengaluru","Pune","Delhi","Goa","Manali","Shimla","Bodh Gaya","Shrinagar",
						 "Varanasi","Kanyakumari","Trivandrum","Ladakh","Agra","Dehradun");
						 
	var events = new Array("Road to Ultra India","Sufi Route","Timeout 72 Hours","Junoon Trekking Camp",
						   "Mahakala Chakra Puja","Dosmoche Festival","Vaikuntha Chaturdashi",
						   "Cape Comorin Festival","Subah-E-Banaras","International Film Festival",
						   "Zee Jaipur Literature Festival","Zee Jaipur Jewellery Show","Ed Sheeran Divide Tour",
						   "Eat.Drink.Art","Greater Ladakh Road trip","Puja Party at Swissotel",
						   "15 Ann. Santoshm South Films","Sufi Route","Timeout 72 Hours","Junoon Treking Camp",
						   "Maha Kala Chakra Puja","Dosmoche Festival","Vaikuntha Chaturdashi","Cape Comorin Festival",
						   "Subah-E-Banaras","Punjabi Jalsa","Vibrations","International Film Festival","Agra Half Marathon");
						   
	var hotels = new Array("Oberoi Rajvilas","Rambagh Palace","Taj Lake Palace","JW Marriott","Taj Mahal Palace",
						   "Royal Orchids Hotel Suits","Taj Bangalore","Hyatt Regency","Radisson Hyderabad",
						   "Hotel Madhuban","Hotel Madhuban","Vivanta By Taj","The Oberoi Cecil",
						   "Sinclair Bay View Resort","The Leela Palace","Grand Hyatt Goa","Snow Valley Resorts Manali",
						   "Lumbini International","Ladakh Sarai","The Lalit Grand Place","Hotel the Gopinivas Grand",
			               "Radisson Hotel Varanasi","Ramada Amritsar","Oberoi Amarvilas");
						   
	var tspot = new Array("Amber Fort","Fateh Sagar lake","Hazi Ali Dargah","Rajiv Gandhi Zoological park",
						  "SavanaDurga","Sunderban","Golconda","Tapkeshwar Temple","Padmanabhaswamy Temple",
						  "Napier Museum","Trivandrum Zoo","Ridge","Jakhoo Temple","Mall Road","Cellular Jail",
						  "Zonal","Anthropological Museum","Chidiya Tapu","India Gate","Qutub Minar","Red fort",
						  "Basilica of Born Jesus","Palolem Beach","Solang Valley","Hadimba Temple","Rohtang Pass",
						  "Mahabodhi Temple","Thai Monastery","Tibetan Refugee Market","Pangong Lake","Leh Palace",
						  "Shanti Stupa","Shalimar Bagh","Shikara Ride","Mughal Garden","Vivekananda Rock Memorial",
						  "Thiruvalluvar Statue","Kumari Amman Temple","Kashi Vishwanath Temple","Dasashwamedha Ghat",
						  "Assi Ghat","Taj Mahal");
						  
	var found=0;
	for(var i=0; i<city.length ; i++)
	{
		if(city[i]==itext)
		{
			found=1;
			cat="city";
			break;
		}
	}
	
	if(found==0)
		for(var i=0; i<events.length ; i++)
		{
			if(events[i]==itext)
			{
				found=1;
				cat="events";
				break;
			}
		}
	
	if(found==0)
		for(var i=0; i<hotels.length ; i++)
		{
			if(hotels[i]==itext)
			{
				found=1;
				cat="hotels";
				break;
			}
		}
	
	if(found==0)
		for(var i=0; i<tspot.length ; i++)
		{
			if(tspot[i]==itext)
			{
				found=1;
				cat="tspot";
				break;
			}
		}
	return cat;
}

