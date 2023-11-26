<div class="container mt-5">
<h1>Editar Produto</h1>

<?php
 $sql = "SELECT * FROM produtos WHERE id=".$_REQUEST["id"];
 $res = $conn->query($sql);
 $row = $res->fetch_object();
?>

<form action="?page=salvarprod" method="POST" style="max-width: 450px">

    <input type="hidden" name="acaoprod" value="editarprod">

    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    
    <div class="mb-3">
        <label for="">produto</label>
        <input type="text" name="produto" value="<?php print $row->produto; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">tip_prod</label>
        <input type="text" name="tip_prod" value="<?php print $row->tip_prod; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">var_prod</label>
        <input type="text" name="var_prod" value="<?php print $row->var_prod; ?>"  class="form-control">
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
</div>