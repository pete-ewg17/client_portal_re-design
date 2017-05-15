/*============
  SIDE BAR
=============*/

$(document).ready(function() {
	$('.nav-trigger').click(function() {
		$('.side-nav').toggleClass('visible');
	});
});


/*============
  DATE PICKER
=============*/

$(document).ready(function(){
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

function validate_form(form_id) {
	return true;
}

$("body").on('click','.form-next-btn',function(e) {
	var unlock = $(this).data('unlock');
	var this_form = $(this).closest('form-event');
	if(validate_form(this_form)) {
		$("#"+unlock).removeClass('disable');	
	} else {
		alert("Please enter your details to continue");
	}
});

$("#cbx").change(function(){
	if($(this).prop("checked")) {
		var box = $(this).closest(".event-details").find(".form-event");
		if($(box).hasClass("disable")) {
		   $(box).removeClass("disable");
		}
	} else {
		var b = $(this).closest(".event-details").find(".form-event");
		if(!$(b).hasClass('disable')) {
			b.addClass("disable");
		}
	}
});








