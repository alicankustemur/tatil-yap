$(document).ready(function(){


	//price list position

	if($(window).width() > 1200){
		
		$("#tab_hotel").click(function(){
			$(".priceList").css("bottom","90px");
		});

		$("#tab_tour").click(function(){
			$(".priceList").css("bottom","10px");
		});

		$("#tab_plane").click(function(){
			$(".priceList").css("bottom","10px");
		});

	}

	$(".priceListRow").click(function(){
		window.location = "http://alicankustemur.github.io/tatil-yap";
	});


	if($(window).width() < 768){
		$("div").remove("#holiday-special");
	}else{
		$("#holiday-special").css("display","block");
	}

            
});