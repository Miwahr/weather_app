<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Weather</title>
<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<form id="city" method="GET" action="{{route('show')}}">
		<p>Enter city</p>
		<input type="text" placeholder="city" name="city">
		<button type="submit">Ok</button>
	</form><br>
	<div id="main"></div>
	<script type="text/javascript">
        $(function () {
            $("#city").submit(function(evt){
                evt.preventDefault();
                $.ajax({
                    url: $(this).attr('action') + "?city=" + $(":text[name='city']").val(),
                    type: "GET",
                    success: function (data){
                        console.log(data);
                    	$('#main').html(data);
                    },
                });
            });
        });
    </script>
</body>
</html>