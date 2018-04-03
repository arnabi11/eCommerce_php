<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
<div id="dom-target" style="display:none">
<?php

$conn = mysqli_connect("localhost","root","","ecom_store");

if($conn->connect_error){
	echo "Connection failed: ".$conn->connection_error;
	die("Connection failed: ".$conn->connection_error);
}
?>
</div>


<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p id="message"></p>

                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
	var textData = document.getElementById("dom-target");
	// alert(textData.textContent.length==1?"Connection successfull":textData.textContent);
	document.getElementById("message").innerHTML = (textData.textContent.length==1?"Connection successfull":textData.textContent);
</script>
</body>
</html>                            