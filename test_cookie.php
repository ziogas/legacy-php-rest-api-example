<html>
<head>
    <title>Cookie test</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">

        function test(method, args) {
            $.ajax({
                type: method,
                url: 'http://example.dev/api/v1.0/records/7.json',
                processData: true,
                crossDomain: false,
                xhrFields: { withCredentials: true },
                dataType: 'json',
                data: args,
                timeout: 60000,
                success: function (response, general_msg) {
                    console.log(arguments);
                },
                error: function (data, general_error) {
                    console.log(arguments);
                }
            });
        }

        window.setTimeout(function(){
            test('GET', {});
        }, 500);
    </script>
</head>
<body>
    Launch this from same domain as api and see the console.
</body>
</html>
