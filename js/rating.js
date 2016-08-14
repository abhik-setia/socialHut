//var star1=document.getElementsByClassName(give_rating1);
var clicked=false;
$('.give_rating1').hover(function() {
	$('.rating_1').css('width', '13%');
}, function() {
	/* Stuff to do when the mouse leaves the element */
		if(!clicked)
		$('.rating_1').css('width', '0%');
});

$('.give_rating1').click(function(event) {
	/* Act on the event */
		$('.rating_1').css('width', '13%');
		clicked=true;
});

$('.give_rating2').hover(function() {
	$('.rating_1').css('width', '26%');
}, function() {
	/* Stuff to do when the mouse leaves the element */
			if(!clicked)
		$('.rating_1').css('width', '0%');
});
$('.give_rating2').click(function(event) {
	/* Act on the event */
		$('.rating_1').css('width', '26%');
		clicked=true;
});
$('.give_rating3').hover(function() {
	$('.rating_1').css('width', '39%');
}, function() {
	/* Stuff to do when the mouse leaves the element */
			if(!clicked)
		$('.rating_1').css('width', '0%');
});
$('.give_rating3').click(function(event) {
	/* Act on the event */
		$('.rating_1').css('width', '39%');
		clicked=true;
});
$('.give_rating4').hover(function() {
	$('.rating_1').css('width', '52%');
}, function() {
	/* Stuff to do when the mouse leaves the element */
		if(!clicked)
		$('.rating_1').css('width', '0%');
});
$('.give_rating4').click(function(event) {
	/* Act on the event */
		$('.rating_1').css('width', '52%');
clicked=true;
});
$('.give_rating5').hover(function() {
	$('.rating_1').css('width', '65%');
}, function() {
	/* Stuff to do when the mouse leaves the element */
		if(!clicked)
		$('.rating_1').css('width', '0%');
});
$('.give_rating5').click(function(event) {
	/* Act on the event */
		$('.rating_1').css('width', '65%');
clicked=true;
});