$(document).ready(function(){
		$('#angka1').maskMoney();
		$('#angka2').maskMoney({prefix:'US$'});
		$('#angka3').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0});
		$('#angka4').maskMoney();
		$('#input_harga').maskMoney({prefix:'Rp. ', thousands: '.', decimal: ',', precision: 0});
		$("#input_harga").keyup(function(){
		var clone = $(this).val();
		var cloned = clone.replace(/[A-Za-z$. ,-]/g, "")
		$("#output_harga_hidden").val(cloned);
		$("#output_harga_shown").val(cloned);
	});
});