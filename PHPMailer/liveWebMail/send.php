<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

$.ajax({
        type: "POST",
        data: {to: 'rajvinderOld@app2mobile.com', name:'rajvindernew', email:'rajvindersingh9@gmil.com', message:' asdf as dfa sdfa sfdas fda sfa sf'},
        url: "http://dm.app2food.com/PHPMailer",
        success: function(data)
        {   
        	alert('Your Mail Have Been Send . ');   
        }
    });

</script>