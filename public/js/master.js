$("#get_latest_product").css("bottom",$("footer").height()+100);


function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
    $("#dropdown-menu-index").hide();
    $("#dropdown-admin-index").hide();
}
var height = $("section").height();

function footerToggle(selector){
	if($( window ).width()<=767){
		$("#"+selector).slideToggle(500,function(){
			$("#get_latest_product").css("bottom",$("footer").height()+100);
			
		});
		
	}
	


}

$("#toggle").click(function(){
    $("#dropdown-menu-index").slideToggle(500);
});
$("#toggleAdmin").click(function(){
    $("#dropdown-admin-index").slideToggle(500);
});


$( window ).resize(function() {
  if($( window ).width()>=767){
		$(".footer-detail").show();
	}else{
		$(".footer-detail").hide();

	}
	$("#get_latest_product").css("bottom",$("footer").height()+100);

});


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $("#myBtn").slideDown();
    } else {
        $("#myBtn").slideUp();
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function closeMessage(){
	$("#messageForm").slideUp();
}
function openMessage(){
	$("#messageForm").slideDown();
}
function toggleMessage(){
	$("#messageForm").slideToggle();
}
