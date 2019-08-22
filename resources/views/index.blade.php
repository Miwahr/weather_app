<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Weather</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="jumbotron">
    <form class="form-inline" id="city" method="GET" action="{{route('show')}}">
        <label class="sr-only" for="inlineFormInputName2">Enter city</label>
        <input class="form-control mb-2 mr-sm-2" type="text" placeholder="city" name="city">
        <button class="btn btn-primary mb-2" type="submit">Ok</button>
    </form>
    <br>
    <div id="main"></div>
    <script type="text/javascript">
        $(function () {
            $("#city").submit(function (evt) {
                evt.preventDefault();
                $.ajax({
                    url: $(this).attr('action') + "?city=" + $(":text[name='city']").val(),
                    type: "GET",
                    success: function (data) {
                        console.log(data);
                        $('#main').html(data);
                    },
                });
            });
        });
    </script>
</div>
</body>
</html>
