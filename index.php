<!DOCTYPE html>
<html>
    <head>
        <script src="jquery-3.3.1.min.js">
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

        
        <br>
        <p>感谢所有为CSSA做出贡献的同学，本网页由Jonnyy，OtntO，SCW提供技术支持<br><br>隐私声明：本网站不使用数据库，不记录任何数据</p>
    </body>
</html>
