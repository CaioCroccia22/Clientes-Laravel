<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
    <b>ID: {{$id}} <br> </b>
    <b> Nome: {{$usuario}} </b>

    <form method = "get">
    <b>Nome: </b> <input type="text" name="cliente"> <br>
    <b>Email: </b> <input type="email" name="email"> <br>

    <br>

    <input type="submit" value="Salvar">

</form>


</body>
</html>