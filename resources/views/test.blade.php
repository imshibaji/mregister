<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FiveOne Socket.io</title>
</head>
<body>
 <p id="power">0</p>

 <script
   src="https://code.jquery.com/jquery-3.2.1.min.js"
   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
   crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.1/socket.io.js"></script>
<script>
        //var socket = io('http://localhost:3000');
        var socket = io('http://localhost:3000');
        socket.on("test-channel:App\\Events\\EventName", function(message){
            // increase the power everytime we load test route
            $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
        });
    </script>
</body>
</html>
