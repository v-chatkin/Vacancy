<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<button id="go" name="submit">Go</button>
	
<script>
	$(document).ready(function () {
		$('#go').click(function () {
            $.ajax({
                type: "POST",
                url: "/index.php",
                dataType: "multipart/form-data",
                data: {
                    'email' : "123",
                    'password' : "123",
					'submit':"123"
                },
                success: function(object){
                    console.log("***Success***");
                    console.log(object);
                },
                error: function(object){
                    console.log("***Error***");
                    //console.log(object.responseText);
                    console.log(object);
                }
            });
            return false;
        });
    });

</script>
</body>
</html>


