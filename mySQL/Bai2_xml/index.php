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
            $('#click-xml').click(function()
            {
                $.ajax({
                    url : 'test.php',
                    type : 'get',
                    dataType : 'xml',
                    success : function (result)
                    {
                        var html = '';
                        html += '<table border="1" cellspacing="0" cellpadding="10">';
                        html += '<tr>';
                        html += '<td>';
                        html += 'id';
                        html += '</td>';
                        html += '<td>';
                        html += 'Username';
                        html += '</td>';
                        html += '<td>';
                        html += 'Email';
                        html += '</td>';
                        html += '<tr>';
                         
                        // giong vong lap for each
                        $(result).find('items').each (function (key, val){
                             html +=  '<tr>';
                                html +=  '<td>';
                                    html +=  $(val).find('id').text();
                                html +=  '</td>';
                                html +=  '<td>';
                                    html +=  $(val).find('username').text();
                                html +=  '</td>';
                                html +=  '<td>';
                                    html +=  $(val).find('email').text();
                                html +=  '</td>';
                            html +=  '<tr>';
                        });
                         
                        html +=  '</table>';
                         
                        $('#result3').html(html);
                    }
                });
            });    
        </script>

</body>
</html>