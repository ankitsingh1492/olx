var pagetop, menu, yPos;
function yScroll(){
    pagetop = document.getElementById('pagetop');
    menu = document.getElementById('menu');
    content = document.getElementById('content');
    logo = document.getElementById('logo-top')
    
    yPos = window.pageYOffset;
    if (yPos > 250){
	  pagetop.style.height ="36px";
	  pagetop.style.paddingTop = "8px";
	  menu.style.height ="0px";
	  content.style.height ="0px";
	  logo.style.height="0px";
	  logo.style.width="0px";
	  drp.style.marginTop="-48px";

	} else {
	  pagetop.style.height ="120px";
	  pagetop.style.paddingTop = "50px";
	  menu.style.height ="43px";
	  content.style.height ="60%"
	  content.style.paddingTop ="5px"
	   logo.style.height="140px";
	   logo.style.width="140px";
	   drp.style.marginTop="0px";

	}

}
window.addEventListener("scroll", yScroll);

