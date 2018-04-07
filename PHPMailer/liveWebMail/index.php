<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>

<body>


<style type="text/css"></style>

<div class="container">
	<div class="row">
    	<div class="col-lg-6">
            	<div class="inputFormDiv"><input type="text" id="name" name="name">  </div>
            	<div class="inputFormDiv"><input type="email" id="email" name="email">  </div>
            	<div class="inputFormDiv"><textarea id="message" name="message"></textarea></div>
                <div class="inputFormDiv"><button onClick="contactForm();">Send Mail</button></div>
        </div>
    </div>
</div>






</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script type="text/javascript">

function contactForm(){
		
		var toMail = 'rajvindersingh9@gmail.com'; 
		var stroeName = 'StoreNameHere';
		var contactName = jQuery('#name').val(); 
		var contactEmail = jQuery('#email').val(); 
		var contactMessage = jQuery('#message').val();
		
		
		if(contactName != '' && contactEmail != '' && contactMessage != '' ){
			
			$.ajax({
			  type: "POST",
			  url: "http://dm.app2food.com/PHPMailer/index.php",
			  data: {to:toMail, name:contactName, email:contactEmail, message:contactMessage,  stroeName:stroeName },
			  dataType: "JSON",
			  success: function(data){
				  console.log(data);
			  }
});
			
			
			
			}
	
	}

</script>

</html>