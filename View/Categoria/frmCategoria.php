<!DOCTYPE html>
<html lang="pt-br">
<head></head>
<body>

<form class="form-horizontal" action="/categoria/form/save" method="post">
<fieldset>

<!-- Form Name -->
<legend>Cadastro de Produtos</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Categoria">Categoria:</label>  
  <div class="col-md-4">
  <input id="Categoria" name="Categoria" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Descricao">Descrição:</label>  
  <div class="col-md-4">
  <input id="Descricao" name="Descricao" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<button type="submit">Enviar</button>

</fieldset>
</form>

</body>
</html>