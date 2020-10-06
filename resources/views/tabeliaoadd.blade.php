<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add tabeliao</title>
</head>
<body>
    
    <form action="\salvartab" method="post">
    {{ csrf_field() }}
        <input type="text" placeholder="nome" name="nometabeliao">
        <input type="submit" value="Salvar">

    </form>

</body>
</html>