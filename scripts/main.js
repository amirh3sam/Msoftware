 
function createXHR() { // set an XML OBJECT 
	
    var request = false;
        try {
            request = new ActiveXObject('Msxml2.XMLHTTP');
        }
        catch (err2) {
            try {
                request = new ActiveXObject('Microsoft.XMLHTTP');
            }
            catch (err3) {
		try {
			request = new XMLHttpRequest();
		}
		catch (err1) 
		{
			request = false;
		}
            }
        }
    return request;
}
 /*
function indeximage_rotate(i){
	
	
	function temp(){
		document.getElementById('indeximagediv').style.background = 'url(images/indeximage'+i+'.gif)';
		i++;
		setTimeout("document.getElementById('indeximage').src = 'images/indeximage"+i+".gif'",100);
 
		new Effect.Opacity('indeximage', {duration:2, from:0.0, to:1.0});
 

		
		if (i >= 9) i=0;
		setTimeout(temp,8000);
	}
	temp();
}
 
function banner(dom){
	var px = 0;
			
	function temp(){
		px++;
		document.getElementById(dom).style.marginLeft= px+'px';
		if(px >= 5 || px <= -5 ) {px = px * -1;}
	setTimeout(temp,900);
	}
	setTimeout(temp,100);
}	 */
 