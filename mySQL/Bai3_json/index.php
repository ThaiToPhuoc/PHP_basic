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
           $('#click-json').click(function()
            {
                $.ajax({
                    url : 'test.php',
                    type : 'get',
                    dataType : 'json',
                    success : function (result){
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

                        $.each (result, function (key, item){
                            html +=  '<tr>';
                            
                                html +=  '<td>';
                                    html +=  item['id'];
                                html +=  '</td>';
                                html +=  '<td>';
                                    html +=  item['username'];
                                html +=  '</td>';
                                html +=  '<td>';
                                    html +=  item['email'];
                                html +=  '</td>';
                            html +=  '<tr>';
                        });
                         
                        html +=  '</table>';
                         
                        $('#result2').html(html);
                    }
                });
            }); 
        </script>

</body>
</html>