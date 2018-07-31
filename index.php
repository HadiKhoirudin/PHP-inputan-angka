<?php
require 'layout_form.css';
?>
    <!doctype html>
    <html>
    	<head>
		<title>Oleh Hadi Khoirudin</title>
    		<script type="text/javascript" src="jquery.js"></script>
    		<script type="text/javascript" src="jquery.maskMoney.min.js"></script>
    		<script type="text/javascript" src="function.js"></script>
    	</head>
    	<body>
<div id="input_form">
<h3 align="center">Inputan Format Angka</h3>
<form action="#" method="post">
<table>
 <tr><td>Input angka (default): </td><td><input type="text" name="angka1" id="angka1" class="texbox"/>
 <tr><td>Input angka (US$): </td><td><input type="text" name="angka2" id="angka2" class="texbox"/>
 <tr><td>Input angka (Rp. ): </td><td><input type="text" name="angka3" id="angka3" class="texbox"/>
 <tr><td>Input angka (Rp. ) - HTML5: </td><td><input type="text" name="angka4" id="angka4" data-affixes-stay="true" data-prefix="Rp. " data-thousands="." data-decimal="," class="texbox"/> 
 <br>
 <br>
 <tr><td>Format dihilangkan untuk memasukan angka ke DB</td><td>
 <br>
 <tr><td>Input harga (Rp. ):
 </td><td><input type="text" name="input_harga" id="input_harga" class="texbox"/>
 <tr><td>Output Hasil Input harga tanpa format :
 </td><td><input type="text" name="output_harga_hidden" id="output_harga_hidden" class="texbox" disabled="true"/>
 </td><td><input type="text" name="output_harga_shown" id="output_harga_shown" class="texbox" hidden="true"/>
 <tr><td colspan="2" align="center"><input type="submit" name="submit" value="Submit"><input type="button" name="reset" value="Bersihkan" onclick="msg_refresh()"></td></tr>
 </table>
</form>
	
    	<?php
    	if(isset($_POST['submit'])) {
    		echo "<pre>";
    		print_r($_POST);
    		echo "</pre>";

 echo "<table border='1'>";
 echo "<tr><td>Keterangan Array</td><td>Hasil Array</td></tr>";
foreach($_POST as $ket=>$hasil){
  echo "<tr><td>$ket Array</td><td>$hasil</td></tr>";
  }
    	}
	echo "
	<script>
	function msg_refresh() {
		alert('Input & Output telah dibersihkan');
		location = 'index.php';
		}
</script>";
    	?>
</div>
    	</body>
    </html>