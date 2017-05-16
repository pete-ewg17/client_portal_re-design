$(document).ready(function() {
	 if($("#address").length > 0) {
    	 var input =document.getElementById('address');
    	  searchBox = new google.maps.places.Autocomplete((input),{types: ['geocode']});
    	searchBox.addListener('place_changed', fillInAddress);
    }
     function fillInAddress() {
    var place = searchBox.getPlace();
        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          var str = $("#"+addressType).data('st');
          if($("#"+addressType).length > 0){
            var val = place.address_components[i][str];
            document.getElementById(addressType).value = val;
            }
        }
  }
});


$("body").on('click','.form-next-btn',function(e) {
	var unlock = $(this).data('unlock');
	var this_form = $(this).closest('.form-event');
	console.log(unlock);
	if(validate_form(this_form)) {
		$(this).closest('.collapse').collapse('hide');
		var next = $("#"+unlock);
		if(unlock != "") {
		console.log("slide");
			$("#"+unlock).collapse('show');
		}
	} else {
		alert("Please enter your details to continue");
	}
});

function validate_form(form_id) {
	return true;
}

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
