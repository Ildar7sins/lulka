
$(function() {
 
$(window).scroll(function() {
 
if($(this).scrollTop() != 0) {
 
$('#toTop').fadeIn();
 
} else {
 
$('#toTop').fadeOut();
 
}
 
});
 
$('#toTop').click(function() {
	$('#toTop').animate({"bottom": "+=800px"}, 800);
	$('body,html').animate({scrollTop:0},800);
	$('#toTop').fadeOut();
	$('#toTop').animate({"bottom": "-=800px"}, 1600);
//$('#toTop').animate({top:100%},800);
 
});


});