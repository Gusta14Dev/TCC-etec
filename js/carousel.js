$(function() {
	var largura = $(document).width();
	if(largura <= 576){
		var itens = 1;
	}else if(largura > 576 && largura <= 768){
		var itens = 2;
	}else if(largura > 768 && largura <= 992){
		var itens = 3;
	}else{
		var itens = 4;
	}
	$("#carrossel"). jCarouselLite({
	    btnPrev: '.prev', 
	    btnNext: '.next',
	    visible: itens
	})
})