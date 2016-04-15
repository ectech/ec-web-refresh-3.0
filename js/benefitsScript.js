function flipButton(el){
	"use strict";
    var id = $(el).parents(".flip-box").attr('id'); // get the id of the card to flip
    
	// unflip all other boxes first, so that there can only be one flipped at a time
	// have to unflip the front and back simultaneously (this fix is specifically to target Safari)
	$(".flip-box:not('div#" + id + "')").removeClass("flipFront"); 
	$(".flip-box:not('div#" + id + "')").removeClass("flipBack");
	
	//flips the front and back simulatenously again (aimed at Safari)
	document.querySelector("#" + id).classList.toggle("flipFtont");
	document.querySelector("#" + id).classList.toggle("flipBack");	
}
