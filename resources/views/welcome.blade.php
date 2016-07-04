<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Socket.io</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.6/socket.io.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>
    <script src="img/main.js" type="text/javascript"></script>
</head>
<body>
    <h1>My App</h1>
    <div id="messages"></div>
    <hr>
    <form onsubmit="return addMessage(this)">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" id="_token">
        <input type="text" id="userName">
        <input type="text" id="text">
        <input type="submit" value="enviar">
    </form>
</body>
</html>