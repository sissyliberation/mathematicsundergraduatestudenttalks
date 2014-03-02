$(document).ready(function(){
	$('.jumbotron').height('150px');
	var $xml;
	$.ajax({
	    type:     "GET",
	    url:      "http://gdata.youtube.com/feeds/api/videos?author=UTMathTalks", 
	    dataType: "xml",
	    async: false,
	    success: function(data){
	        $xml = $(data);
	    }
	});

	if ( $($xml).find('entry').length > 0) {
		$($xml).find('entry').each(function() {
			var tmp = $(this).find('id').text().split("/").pop();
			$('.videos').append(
				'<div class="row">'+
					'<div class="col-md-6 col-sm-6">'+
						'<iframe width="100%" src="http://www.youtube.com/embed/'+tmp+'" frameborder="0" allowfullscrean></iframe>'+
					'</div>'+
					'<div class="col-md-6 col-sm-6">'+
						'<h1>'+$(this).find('title').text()+'</h1>'+
						'<h3>'+$(this).find('content').text()+'</h3>'+
					'</div></div><hr>');
		});

		$('iframe').height($('iframe').width()*.65);
	}
	else {
		$('.videos').append('<div class="row"><div class="col-md-12 col-sm-12"><h1>Sorry</h1><p>We are working on uploading the content. It will be here shortly.</p></div></div>');
	}
});
