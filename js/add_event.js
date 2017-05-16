var markers = [];
$(document).ready(function() {
    var lng = -37.817782;
    var lat = 144.967221;

    if ($("#lat_long").val() != '') {
        var parts = $("#lat_long").val().split(',');
        lng= parts[0];
        lat= parts[1];
    }
    var longlat = new google.maps.LatLng(lng, lat);

    var mapOptions = {
        zoom: 12,
        center: new google.maps.LatLng(lng, lat)
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);
    if ($("#lat_long").val() != '') {
        var marker = new google.maps.Marker({
            position: longlat,
            map: map
        });
        markers.push(marker);
    }
    map.setCenter(longlat);

    if($("#event_location").length > 0) {
        var defaultBounds = new google.maps.LatLngBounds(
            new google.maps.LatLng(-18.720356, 112.923270),
            new google.maps.LatLng(-43.165724, 152.259580));
        var input =document.getElementById('event_location');
        searchBox = new google.maps.places.Autocomplete((input),{bounds: defaultBounds});

        google.maps.event.addListener(searchBox, 'place_changed', function () {
        console.log("place_changed");
            var places = searchBox.getPlace();
            if (markers.length > 0) {
                for (var i = 0, marker; marker = markers[i]; i++) {
                    marker.setMap(null);
                }
            }
            markers = [];

            var bounds = new google.maps.LatLngBounds();
            var place = places;
console.log(place);
            var marker = new google.maps.Marker({
                map: map,
                title: place.name,
                position: place.geometry.location
            });
           
             if($("#event_location").val() != "") {
             	if($(".map_holder").css("display") != "block") {
             			  $(".map_holder").css('display',"block");
             			  google.maps.event.trigger(map, 'resize');
             			 }
             	}
  map.setCenter(place.geometry.location);
            var ev_state = "";
            $.each(place['address_components'], function (i, item) {
                if (item.types[0] == 'administrative_area_level_1') {
                    ev_state = item.long_name;
                }
            });
            $("#state").val(ev_state);
        });
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
/**
 * Created by chrisgrant on 16/5/17.
 */
