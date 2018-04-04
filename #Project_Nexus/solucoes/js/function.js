function overImage(a,b)
	{
	$(a).hover(function()
	{
	$(this).find(b).css({"opacity":0.9,"-webkit-transform":"scale(1,1)","-ms-transform":"scale(1,1)","-moz-transform":"scale(1,1)","transform":"scale(1,1)"});
	
	},function()
	{
	$(this).find(b).css({"opacity":0,"-webkit-transform":"scale(0,0)","-ms-transform":"scale(0,0)","-moz-transform":"scale(0,0)","transform":"scale(0,0)"});
	}
	)
	
	}
	$(document).ready(function()
	{
	
	overImage("div.picture-info","div.shym-overlay")
	$("#owl-team").owlCarousel({ 
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items : 5,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [979,4],
    stopOnHover : true,
    pagination : false,
    
});

overImage("div.shym-picture-detail-wrap","div.shym-overlay")
$("div.team").hover(function()
{

$(this).find("div.over").css("height","100%")
},function()
{
$(this).find("div.over").css("height","0px")
}
)	
	}
	)
	/*preloader*/
	$(window).load(function() {
    $(".shym-preloader").delay(100).fadeOut(600);
  });
	(function($) {
      window.scrollReveal = new scrollReveal();
    })();