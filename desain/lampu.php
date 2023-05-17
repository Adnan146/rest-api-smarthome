<html>
<head>
<title>SmartLight</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<!-- Save for Web Slices (Smarthome.psd) -->
<table id="Table_01" width="1081" height="1394" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="2">
			<img id="dapur" src="img1/dapur2.gif" width="368" height="291" alt=""></td>
		<td colspan="2">
			<img id="ruangbelakang" src="img1/belakang2.gif" width="712" height="167" alt=""></td>
		<td>
			<img src="img1/spacer1.gif" width="1" height="167" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="img1/belakang3.gif" width="351" height="124" alt=""></td>
		<td rowspan="2">
			<img id="kamar2" src="img1/kamar22.gif" width="361" height="328" alt=""></td>
		<td>
			<img src="img1/spacer1.gif" width="1" height="124" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="img1/dapur3.gif" width="368" height="204" alt=""></td>
		<td rowspan="4">
			<img id="ruangtengah" src="img1/ruangtengah2.gif" width="351" height="1027" alt=""></td>
		<td>
			<img src="img1/spacer1.gif" width="1" height="204" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img id="kamar1" src="img1/kamar12.gif" width="368" height="368" alt=""></td>
		<td>
			<img id="ruangtamu" src="img1/ruangtamu2.gif" width="361" height="361" alt=""></td>
		<td>
			<img src="img1/spacer1.gif" width="1" height="149" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img id="teras" src="img1/teras2.gif" width="361" height="462" alt=""></td>
		<td>
			<img src="img1/spacer1.gif" width="1" height="219" alt=""></td>
	</tr>
	<tr>
		<td>
			<img id="garasi" src="img1/garasi2.gif" width="368" height="455" alt=""></td>
		<td>
			<img src="img1/spacer1.gif" width="1" height="455" alt=""></td>
	</tr>
	
</table>
<!-- End Save for Web Slices -->


<script>
	setInterval(function () {

	  var data_sensor = "";
	  const xhttp = new XMLHttpRequest();
	  xhttp.onload = function() { 
	  data_sensor = this.responseText;

	  const txt    = data_sensor;
	  const obj  = JSON.parse(txt);

	  var garasi        = obj.garasi;
	  var teras         = obj.teras;
	  var ruangtamu     = obj.ruang_tamu;
	  var ruangtengah   = obj.ruang_tengah;
	  var ruangbelakang = obj.ruang_belakang;
	  var dapur         = obj.dapur;
	  var kamar1        = obj.kamar1;
	  var kamar2        = obj.kamar2;


	  if (garasi==1) {
	      document.getElementById('garasi').src='img1/garasi1.gif';
	  }else if (garasi==0) {
	      document.getElementById('garasi').src='img1/garasi2.gif';
	  }

	  if (teras==1) {
	      document.getElementById('teras').src='img1/teras1.gif';
	  }else if (teras==0) {
	      document.getElementById('teras').src='img1/teras2.gif';
	  }

	  if (ruangtamu==1) {
	      document.getElementById('ruangtamu').src='img1/ruangtamu1.gif';
	  }else if (ruangtamu==0) {
	      document.getElementById('ruangtamu').src='img1/ruangtamu2.gif';
	  }

	  if (ruangtengah==1) {
	      document.getElementById('ruangtengah').src='img1/ruangtengah1.gif';
	  }else if (ruangtengah==0) {
	      document.getElementById('ruangtengah').src='img1/ruangtengah2.gif';
	  }

	  if (ruangbelakang==1) {
	      document.getElementById('ruangbelakang').src='img1/belakang1.gif';
	  }else if (ruangbelakang==0) {
	      document.getElementById('ruangbelakang').src='img1/belakang2.gif';
	  }

	  if (dapur==1) {
	      document.getElementById('dapur').src='img1/dapur1.gif';
	  }else if (dapur==0) {
	      document.getElementById('dapur').src='img1/dapur2.gif';
	  }

	  if (kamar1==1) {
	      document.getElementById('kamar1').src='img1/kamar11.gif';
	  }else if (kamar1==0) {
	      document.getElementById('kamar1').src='img1/kamar12.gif';
	  }
      if (kamar2==1) {
	      document.getElementById('kamar2').src='img1/kamar21.gif';
	  }else if (kamar2==0) {
	      document.getElementById('kamar2').src='img1/kamar22.gif';
	  }




	  }
	    xhttp.open("GET", "https://localhost/smarthome/smarthome/iot/read_lampu.php?id=smart1");
	    xhttp.send();

	}, 1000);
</script>

</body>
</html>