<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
        <title>Place Autocomplete</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
    </head>

    <body>
        <input type="text" id="ucid"><br>

        <button onclick="post()">Click me</button><br>

        <label id="result"></label>

        <script>
            function post() {
                ucid=document.getElementById("ucid").value;
                //document.getElementById("result").innerHTML = ucid;
                $.post( "main.php",
                       {
                       ucid: ucid
                       },
                       function(data, status) {
                       //console.log(data);
                       //result = JSON.parse(data);
                       //alert("asd");
                       document.getElementById("result").innerHTML = data;
                       }
                );
            }
        </script>

        <?php include 'message.php'; ?>
    </body>
</html>
