	
$(document).ready(function(){
  $("#meet_the_team_submenu2").hover(function(){  	
    $("#meet_the_team_subsub").stop().css("display","block");
     $("#meet_the_team_subsub").stop().css("left","150px");
     $("#meet_the_team_subsub").stop().css("top","60px");
    },function(){  
    $("#meet_the_team_subsub").stop().css("display","none");
     $("#meet_the_team_subsub").stop().css("left","0px");
    
  });
  $("#meet_the_team_subsub").hover(function(){  	
    $("#meet_the_team_subsub").stop().css("display","block");
     $("#meet_the_team_subsub").stop().css("left","150px");
    $("#meet_the_team_subsub").stop().css("top","60px");
    },function(){  
    $("#meet_the_team_subsub").stop().css("display","none");
     $("#meet_the_team_subsub").stop().css("left","0px");
    
  });
});
function load(img) {
	$('#lightBox,#image').fadeIn(300);
	$("body").css("overflow", "hidden");
	$('#image').empty().html("<img src='images/loading.gif' class='loader'>");
	//$('#image').html('<a href="#" id="prev" onclick="prev('+img+');">Prev</a><img class="img_slide" src="images/iitkgpmun12/'+img+'.jpg" width="auto" height="100%" align="middle" style="margin:auto"/><a href="#" id="nxt" onclick="nxt('+img+');">Next</a>');
	load1(img);
}
function load1(img){
	$('#image').empty();
	$('#image').load('image.php?img='+img);
}
function clse() {
	$("#image").stop();
	$("#lightBox,#image").fadeOut(300);
	$('#image').empty();
	$("body").css("overflow", "auto");
}
function clseESC(e) {
	var unicode=e.keyCode? e.keyCode : e.charCode;
	if(unicode==27) clse();
}
function nxt(id){
	if(id==7) load1(1);
	else load1(id+1);
}
function prev(id){
	if(id==1) load1(7);
	else load1(id-1);
}
function dispOther(v){
	if(v=="Other (Please mention if not included)"){
		$('#row_other').fadeIn('slow');
		$('#entry_11').removeAttr("name");
		$('#other').attr("name","course");
	}
	else{
		$('#row_other').fadeOut('slow');
		$('#other').removeAttr("name");
		$('#entry_11').attr("name","course");
	}
}