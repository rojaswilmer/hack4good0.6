
$( document ).ready(function() {

	$(".next-btn").on("click",function(){
		var $dataImg = $('#map1').closest('[data-img]'),
		img = $dataImg.data('img');

		img = parseInt(img) + 1;
		$dataImg.data('img',img);

		if(img == 5){
			img = 1;
			$dataImg.data('img',img);
		}

		loadMap('img'+img);
	});

	$(".previous-btn").on("click",function(){
		var $dataImg = $('#map1').closest('[data-img]'),
			img = $dataImg.data('img');

		img = parseInt(img) - 1;
		$dataImg.data('img',img);

		if(img == 0){
			img = 4;
			$dataImg.data('img',img);
		}

		loadMap('img'+img);
	});



});
