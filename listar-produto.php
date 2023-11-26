<div class="container mt-5">
<h1>Listar Produtos</h1>
<?php
    $sql = "SELECT * FROM produtos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>Produto</th>";
            print "<th>Tipo de Produto</th>";
            print "<th>Variacao</th>";
            print "<th>Apagar ou Excluir</th>";
            print "</tr>";

        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id;
            print "<td>".$row->produto;
            print "<td>".$row->tip_prod;
            print "<td>".$row->var_prod;
            print "<td>
            
            <button onclick=\"location.href='?page=editarprod&id=".$row->id."';\" class='btn btn-success'>Editar</button>

            <button onclick=\"if(confirm('Tem certeza que deseja excluir o produto?')){location.href='?page=salvarprod&acaoprod=excluirprod&id=".$row->id."';}else{false;}\" 
            class='btn btn-danger'>Excluir</button>";
            print "</tr>";
        }

    }else{
        print "<p class='alert alert-danger'> Nao foi possivel achar resultados!</p>";
    }
    ?>
    </div>