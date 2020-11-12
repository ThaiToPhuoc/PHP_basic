<!DoCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>XMLHttpRequest</title>

    </head>

    <body>
        
        <h2>XMLHttpRequest in AJAX</h2>

        <button type="button" onclick="loadDoc()">Doc file</button>

        <p id="demo"></p>

        <script>
        function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "demo_text.txt", false);
        xhttp.send();
        document.getElementById("demo").innerHTML = xhttp.responseText;
        }
        </script>
    </body>
</html>