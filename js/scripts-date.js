
	/*CALLING WSIWYG*/
	$('#trumbowyg-1').trumbowyg();
	$('#trumbowyg-2').trumbowyg();
	$('#trumbowyg-3').trumbowyg();
	$('#trumbowyg-4').trumbowyg();
		
/*============
  SIDE BAR
=============*/

$(function() {
	$('.nav-trigger').click(function() {
		$('.side-nav').toggleClass('visible');
	});
	
	
});

/*============
  DATE PICKER
=============*/

$(function(){
   $('.datepicker').datepicker({
      format: "D d M yyyy",
	  todayHighlight: true,
	  startDate: new Date,
	  autoclose: true
    });
});

$("#event_start_date").focus(function() {
	if($(this).val() != "") {
	   $("#more-than-one-day-holder").css('display','block');
	}
});

var first = false;
$("#event_start_date").blur(function() {
	if(!first) {
	   $("#more-than-one-day-holder").css('display','block');
		first = true;
	}
});

$(".btn-more-one-day").click(function() {
	$("#finish-day-holder").css('display',"block");
});

$(".btn-one-day").click(function(){
	$("#more-than-one-day-holder").css('display', "none");
});

/*=============
  FORM JOURNEY
===============*/

/*SPINNER*/
$(function () {
  $('.spinner .btn:first-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
  });
  
 	$('.spinner .btn:last-of-type').on('click', function() {
    	if( $('.spinner input').val() > 1){
					$('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
			}
  });
});

// Other Box Open 

$("#select-box").change(function() {
  if ($("#select-box").val() == "other") {
    $("#comment").show("100");
  }else {
    $("#comment").hide("toggle");
  }
});
  






