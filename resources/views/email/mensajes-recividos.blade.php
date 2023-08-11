<!DOCTYPE html>
<html>
<head>
   
    <title>Mensaje recibido</title>
</head>
<body>
    
    <h2>Recibiste un mensaje de: </h2><br>
    <p>{{ $msg['email'] }} - {{$msg['telefono']}}</p> <br>
    <h2>El mensaje es el siguiente: </h2><br>
    <p>{{ $msg['comentario'] }}</p>
    
</body>
</html>
