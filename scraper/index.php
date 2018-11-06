<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Scraper</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">
	  <div class="row">
		<div class="col-md-12">
			<p>&nbsp;</p>
			<h1>KMPDB Doctors Retention List</h1>
			<p>Data Scraper</p>
			<button type="button" id="button1"  class="btn btn-success btn-block">Click Here To Start Scraping Data</button>
		</div>
		<div class="col-md-12">
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<div id="progressbar" style="border:1px solid #ccc; border-radius: 5px; "></div>

			<!-- Progress information -->
			<br>
			<div id="information" ></div>
		</div>
	  </div>
	</div>

	<iframe id="loadarea" style="display:none;"></iframe><br />

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script>
		$("#button1").click(function(){
			document.getElementById('loadarea').src = 'progressbar.php';
		});
		$("#button2").click(function(){
			document.getElementById('loadarea').src = '';
		});
	</script>
	
</body>
</html>