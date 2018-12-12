function previewImagem(){
	var imagem = $('#form').querySelector('input[name=arquivo]').files[0];
	var preview = $('#form').querySelector('img');
	
	var reader = new FileReader();
	
	reader.onloadend = function () {
		preview.src = reader.result;
	}
	
	if(imagem){
		reader.readAsDataURL(imagem);
	}else{
		preview.src = "";
	}
}