jQuery(document).ready(
function($)
{

$('#showcase').nivoSlider({
		effect:'sliceDown', //Specify sets like: 'fold,fade,sliceDown'
		slices:15,
		animSpeed:200,
		pauseTime:4000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:true, //Next & Prev
		directionNavHide:true, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		captionOpacity:0.8, //Universal caption opacity
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});

});