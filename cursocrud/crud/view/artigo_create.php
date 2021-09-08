<!DOCTYPE html>
<html lang="en">

<head>
    <title>Novo Artigo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container"><br>
        <h1>Adicionar artigo</h1><br>
        <form action="" method="post">
            <div class="form-group col-md-4">
                <label for="titulo">Titulo</label>
                <input class="form-control" type="titulo" name="titulo" />
            </div><br>
            <div class="form-group col-md-4">
                <label for="conteudo">Conteudo</label>
                <textarea id="artigo" name="conteudo"
          rows="20" cols="90"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>
</body>
</html>
