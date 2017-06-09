
$(function() {
	$('.nav-trigger').click(function() {
		$('.side-nav').toggleClass('visible');
	});

  
  $(function () {
  $('[data-toggle="tooltip"]').tooltip("")
})
	
	
            var feed = new Instafeed({
                get: 'user',
                userId: '46534099',
                accessToken: '46534099.1f02994.3995f4253107449788ace4100057df87',
                template: "<div class='insta-col col-xs-6'><a target='_blank' href='{{link}}'><img src='{{image}}'/></a></div>",
								resolution: 'low_resolution',
                limit: 16
				
            });
            feed.run();
	
});




