<!DOCTYPE html>
<html lang="en">

<head>
    <title>Curso</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container"><br>
        <h2>Artigo</h2>
        <p class="pb-2">Listagem de artigos
        
        <span style="float:right">
            <a href="?acao=create" class="btn btn-primary">Cadastrar novo artigo</a>
        </span>
    
        </p>


        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Usuário</th>
                    <th>Titulo</th>
                    <th>Conteudo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>

                <?php $i=1; foreach($artigos AS $artigo){ ?>
                    <tr>
                        <td><?=$artigo->nome?></td>
                        <td><?=$artigo->titulo?></td>                     
                        <td><?=$artigo->conteudo?></td>
                        <td>
                            <a href="?acao=update&id=<?=$artigo->id?>" class="btn btn-warning">Editar</a>

                            <button 
                                type="button" 
                                class="btn btn-danger btn-excluir" 
                                data-toggle="modal" 
                                data-target="#myModal" 
                                data-id="<?=$artigo->id?>"
                            >
                            Excluir
                            </button>

                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

</body>

</html>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Exclusão</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Tem certeza que deseja excluir o registro?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a id="modal-btn-excluir" href="" class="btn btn-primary">Sim</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
      </div>

    </div>
  </div>
</div>

<script>
$('#myModal').on('shown.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var id = button.data('id');
    $("#modal-btn-excluir").attr('href', './?acao=delete&id='+id);
});
</script>
