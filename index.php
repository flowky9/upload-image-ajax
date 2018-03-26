<html>
<head>
<title>Upload File dengan PHP & AJAX jQuery</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- insert file jquery -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- ajax -->
<script type="text/javascript">
$(document).ready(function (e) {
	// jika file telah dipilih
	$("#uploadForm").on('change',(function(e) {
		// block submit agar tidak bisa di refresh
		e.preventDefault();
		// perintah ajax
		$.ajax({
        	url: "upload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#targetPhoto").html(data);
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
</head>
<body>

<div class="container">
	<!-- form upload -->
	<form id="uploadForm">
		<div id="targetPhoto">No Image</div>
		<div id="uploadFormContent">
			<label>Upload Foto Anda:</label><br/>
			<!-- input type file harus berisi array -->
			<input name="userImage[]" type="file" class="inputFile" multiple="multiple" />
			<input type="submit" value="Submit" class="btnSubmit" />
		</div>
	</form>
</div>
</body>
</html>