// JavaScript Document

$(document).ready(function(e) {
    var animate_width = $('#side_nav_cont').width();
	$('#side_nav_cont').animate({right: '-'+animate_width},500);
	$('#side_nav_toggle2').animate({right: '-'+animate_width},10);
	
	$('#side_nav_toggle').click(function(e) {
        e.preventDefault();
		$(this).animate({right: '-'+animate_width},500);
		$('#side_nav_toggle2').animate({right: animate_width},800);
		$('#side_nav_toggle2').animate({right: animate_width},500);
		$('#side_nav_cont').animate({right: '0px'},800);
		
    });
	
	$('#side_nav_toggle2').click(function(e) {
        e.preventDefault();
		$(this).animate({right: '-'+animate_width},500);
		$('#side_nav_toggle').animate({right: '0px'},200);
		$('#side_nav_toggle').animate({right: '0px'},500);
		$('#side_nav_cont').animate({right: '-'+animate_width},800);
		
    });
	
	//view button position
	/*var linksSpace = $('.links').css('padding-left');
	alert(linksSpace);
	$('.mid_links a.view').css('left',linksSpace);*/
	
	if(window.innerWidth<941){
		var menus = $('#side_nav_cont ul').html();
		$('#nav').append(menus);
	}
	
	
	
	//Top Scroll
  var scrollTop = jQuery(".scrollTop");
  jQuery(window).scroll(function() {
	  
    // declare variable
    var topPos = jQuery(this).scrollTop();	
    if (topPos > 200) {
      jQuery(scrollTop).css("opacity", "1");

    } else {
      jQuery(scrollTop).css("opacity", "0");
    }

  }); 
  jQuery(scrollTop).click(function() {	  
    jQuery('html, body').animate({
      scrollTop: 0
    }, 1000);
    return false;
	});//Top Scroll End
	
	
});

window.onresize = function(){
	if(window.innerWidth<941){
		var menus = $('#side_nav_cont ul').html();
		$('#nav').append(menus);
	}
}