$(document).ready(function(){
	if($(window).width() > 768){
		$('.block-cases').masonry({
	  		itemSelector: '.cases-link img'
		});
	}
});
