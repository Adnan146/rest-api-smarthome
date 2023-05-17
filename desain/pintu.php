<html>
<head>
<title>SmartLight</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<!-- Save for Web Slices (Smarthome.psd) -->
<table id="Table_01" width="1081" height="1394" border="3" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="2">
			<img id="samping" src="img2/samping2.gif" width="368" height="368" alt=""></td>
		<td colspan="2">
			<img id="belakang" src="img2/belakang2.gif" width="368" height="368" alt=""></td>
		
	</tr>
	<tr>
		
		<td rowspan="2">
			<img id="depan" src="img2/depan2.gif" width="368" height="368" alt=""></td>
		<td>
			<img src="img2/spacer2.gif" width="1" height="124" alt=""></td>
	</tr>
	
	<tr>
		<td rowspan="2">
			<img id="garasi" src="img2/garasi2.gif" width="368" height="368" alt=""></td>
		
		<td>
			<img src="img2/spacer2.gif" width="1" height="149" alt=""></td>
	</tr>
	
	<tr>
		<td colspan="3">
			<img id="pagar" src="img2/pagar2.gif" width="1080" height="76" alt=""></td>
		<td>
			<img src="img2/spacer2.gif.gif" width="1" height="76" alt=""></td>
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
	  const obj = JSON.parse(txt);

	  var depan         = obj.depan;
	  var garasi        = obj.garasi;
	  var belakang      = obj.belakang;
	  var samping       = obj.samping;
	  var pagar         = obj.pagar;
	  


	  if (depan==1) {
	      document.getElementById('depan').src='img2/depan1.gif';
	  }else if (depan==0) {
	      document.getElementById('depan').src='img2/depan2.gif';
	  }

	  if (garasi==1) {
	      document.getElementById('garasi').src='img2/garasi1.gif';
	  }else if (garasi==0) {
	      document.getElementById('garasi').src='img2/garasi2.gif';
	  }

	  if (belakang==1) {
	      document.getElementById('belakang').src='img2/belakang1.gif';
	  }else if (belakang==0) {
	      document.getElementById('belakang').src='img2/belakang2.gif';
	  }

	  if (samping==1) {
	      document.getElementById('samping').src='img2/samping1.gif';
	  }else if (samping==0) {
	      document.getElementById('samping').src='img2/samping2.gif';
	  }

	  if (pagar==1) {
	      document.getElementById('pagar').src='img2/pagar1.gif';
	  }else if (pagar==0) {
	      document.getElementById('pagar').src='img2/pagar2.gif';
	  }
    




	  }
	    xhttp.open("GET", "https://adnaniot.000webhostapp.com/iot/read_pintu.php?id=smart1");
	    xhttp.send();

	}, 1000);
</script>

</body>
</html>