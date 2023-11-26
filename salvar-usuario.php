<?php
    switch ($_REQUEST["acao"]) {

//  -=-=-=-=-=-=-=-=-=-=-=-=-=-=       
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro feito com Sucesso');</script>;";
                print "<script>location.href='?page=listar';</script>;";
            }else{
                {
                    print "<script>alert('Deu Ruim');</script>;";
                    print "<script>location.href='index.php';</script>;";
                }
            }
        break;
//  -=-=-=-=-=-=-=-=-=-=-=-=-=-=

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}', data_nasc='{$data_nasc}' WHERE id=".$_REQUEST["id"];
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Edicao feita com Sucesso');</script>;";
                print "<script>location.href='?page=listar';</script>;";
            }else{
                {
                    print "<script>alert('Deu Ruim na edicao');</script>;";
                    print "<script>location.href='index.php';</script>;";
                }
            }
        break;

        break;

//  -=-=-=-=-=-=-=-=-=-=-=-=-=-=   
        case 'excluir':

            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);


            if($res==true){
                print "<script>alert('Excluido sem problemas');</script>;";
                print "<script>location.href='?page=listar';</script>;";
            }else{
                {
                    print "<script>alert('ERRO! Nao foi excluido');</script>;";
                    print "<script>location.href='index.php';</script>;";
                }
            }

        break;




    }