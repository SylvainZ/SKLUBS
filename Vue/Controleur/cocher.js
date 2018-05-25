
function cocher(){
	
	
		for(i=0;i<document.F1.length;i++) 
		{ 
			if (document.F1.elements[0].checked==true)
			{
				if(document.F1.elements[i].name=="message") 
				document.F1.elements[i].checked=true; 
			}
			else{
				if(document.F1.elements[i].name=="message") 
				document.F1.elements[i].checked=false;
			}
	
		}
}
		


