<div class="container mt-5">
<h1>Cadastrar Produtos</h1>

<form action="?page=salvarprod" method="POST" style="max-width: 450px">

    <input type="hidden" name="acaoprod" value="cadastrarprod">
    
    <div class="mb-3">
        <label for="">Produto</label>
        <input type="text" name="produto" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Tipo Produto</label>
        <input type="text" name="tip_prod" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Variacao do Produto</label>
        <input type="text" name="var_prod" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
</div>