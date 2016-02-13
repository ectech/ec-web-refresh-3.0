function flipButton(el){
	"use strict";
    var id = $(el).parents(".flip-box").attr('id'); // get the id of the card to flip
    $(".flip-box:not('div#" + id + "')").removeClass("flip"); // unflip all other boxes first, so that there can only be one flipped at a time
    
	document.querySelector("#" + id).classList.toggle("flip");	
}
