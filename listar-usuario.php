<div class="container mt-5">
<h1>Listar Usuario</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>Nome</th>";
            print "<th>Email</th>";
            print "<th>Data Nascimento</th>";
            print "<th>Apagar ou Excluir</th>";
            print "</tr>";

        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id;
            print "<td>".$row->nome;
            print "<td>".$row->email;
            print "<td>".$row->data_nasc;
            print "<td>
            
            <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" 
            class='btn btn-danger'>Excluir</button>";
            print "</tr>";
        }

    }else{
        print "<p class='alert alert-danger'> Nao foi possivel achar resultados!</p>";
    }
    ?>
    </div>