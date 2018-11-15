$(document).ready(function(){

	//tombol pencaharian
	$('#tombol-cari').hide();
	//event ketika keyword di tulis
	$('#keyword').on('keyup', function() {
		//munculkan icon loding
		$('.loader').show();
		//ajax menggunaka load
	// 	$('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());
		// $.get()
		$.get('ajax/mahasiswa.php?keyword=' + $('keyword').val(), function(data){

			$('#container').html(data);
			$('.loader').hide();

	});
});
});