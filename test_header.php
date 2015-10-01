<html>
<head>
    <title>Custom header test</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">

        function test(method, args) {

            var headers = {'X-Authorization': 'authy'};
            $.ajax({
                type: method,
                url: 'http://example.dev/api/v1.0/records/7.json',
                processData: true,
                crossDomain: true,
                xhrFields: { withCredentials: false },
                dataType: 'json',
                data: args,
                headers: headers,
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
    Launch this from different domain as api and see the console.
</body>
</html>
