<!DOCTYPE html>
<html>
<head>
    <title>
        MySQL
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
</head>
<body>
    <div id="result1">
        text
    </div>
    <div id="result2">
        JSON
    </div>
    <div id="result3">
        XML
    </div>

    </br>

    <input type="button" name="click-me" id="click-text" value="get text here">
    <input type="button" name="click-me" id="click-json" value="get json here">
    <input type="button" name="click-me" id="click-xml" value="get xml here">

    <script language="javascript">
        $('#click-text').click(function () {
                $.ajax({
                    url: 'test.php',
                    type: 'get',
                    dataType: 'text',
                    success: function(result){
                        $('#result1').html(result);
                    }
                });
                
            }

        );
    </script>

</body>
</html>