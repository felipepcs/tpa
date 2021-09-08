<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Prova-TPA</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <style>
          body{
              background-color:	#00BFFF;
          }
          .container{
              background-color: #87CEFA;
          }
          .container-fluid{
              background-color: rgb(243, 108, 108);
          }
          
        p.normal {
            font-weight: normal;
        }

        p.light {
            font-weight: lighter;
        }

        p.thick {
            font-weight: bold;
        }

        p.thicker {
            font-weight: 900;
        }   
      </style>
    </head>    
<body> <br>
  <div class= "container"> 
    <div class="row">
     <div class="col-md-6"><br>
  <h2>Cadastro de médicos</h2>
  <form action="/action_page.php" class="was-validated">
    <div class="form-group"><br>
      <label for="nome">Nome:</label>
      <input value="<?=$medico->getNome()?>" type="text" class="form-control" id="nome" placeholder="Insira seu nome" name="nome" required>
      <div class="valid-feedback">Sucesso!</div>
      <div class="invalid-feedback">Favor preencher este campo.</div>
    </div>
    <div class="form-group">
      <label for="cpf">CPF:</label>
      <input value="<?=$medico->getCpf()?>" type="text" class="form-control" id="cpf" placeholder="Infome seu CPF" name="cpf" required>
      <div class="valid-feedback">Sucesso!</div>
      <div class="invalid-feedback">Favor preencher este campo.</div>
    </div>
      <div class="form-group">
      <label for="crm">CRM:</label>
      <input value="<?=$medico->getCrm()?>" type="text" class="form-control" id="crm" placeholder="Insira sua CRM" name="crm" required>
      <div class="valid-feedback">Sucesso!</div>
      <div class="invalid-feedback">Favor preencher este campo.</div>
    </div>
        <div class="form-group">
      <label for="especializacao">Especialização:</label>
      <input value="<?=$medico->getEspecializacao()?>" type="text" class="form-control" id="especializacao" placeholder="Informe sua especialização" name="especializacao" required>
      <div class="valid-feedback">Sucesso!</div>
      <div class="invalid-feedback">Favor preencher este campo.</div>
    </div>    
    <button type="submit" class="btn btn-primary">Salvar</button>
    <div class="form-group form-check">
      <label class="form-check-label">
      </label>
      </div>
  </form>
</div>
<div class="container">
  <h2>Médicos cadastrados</h2>
  <p>Listagem dos médicos cadastrados</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>CRM</th>
        <th>Especialização</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($medicos as $medico){ ?> 
      <tr>
        <td><?=$medico->nome?></td>
        <td><?=$medico->cpf?></td>
        <td><?=$medico->crm?></td>
        <td><?=$medico->especializacao?></td>
       </tr> 
    <?php } ?>      
    </tbody>
  </table>
</div>
</body>
</html>
