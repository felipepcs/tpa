<html>

<head>

</head>

<body>

    <form action="" method="post">
    
        Email : <input type="email" name="email" value="<?=$usuario->getEmail()?>" />
        Nome : <input type="text" name="nome" value="<?=$usuario->getNome()?>" />

        <button type="submit">Salvar</button>
    
    </form>

</body>

</html>