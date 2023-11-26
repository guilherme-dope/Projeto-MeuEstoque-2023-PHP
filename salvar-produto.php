<?php
    switch ($_REQUEST["acaoprod"]) {

//  -=-=-=-=-=-=-=-=-=-=-=-=-=-=       
        case 'cadastrarprod':
            $produto = $_POST["produto"];
            $tip_prod = $_POST["tip_prod"];
            $var_prod = $_POST["var_prod"];
          
            $sql = "INSERT INTO produtos (produto, tip_prod, var_prod) VALUES ('{$produto}', '{$tip_prod}', '{$var_prod}')";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro feito com Sucesso');</script>;";
                print "<script>location.href='?page=';</script>;";
            }else{
                {
                    print "<script>alert('Deu Ruim');</script>;";
                    print "<script>location.href='index.php';</script>;";
                }
            }
        break;
//  -=-=-=-=-=-=-=-=-=-=-=-=-=-=

        case 'editarprod':
            $produto = $_POST["produto"];
            $tip_prod = $_POST["tip_prod"];
            $var_prod = $_POST["var_prod"];
        

            $sql = "UPDATE produtos SET produto='{$produto}', tip_prod='{$tip_prod}', var_prod='{$var_prod}' WHERE id=".$_REQUEST["id"];
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Edicao feita com Sucesso');</script>;";
                print "<script>location.href='?page=liprod';</script>;";
            }else{
                {
                    print "<script>alert('Deu Ruim na edicao');</script>;";
                    print "<script>location.href='index.php';</script>;";
                }
            }
        break;

        break;

//  -=-=-=-=-=-=-=-=-=-=-=-=-=-=   
        case 'excluirprod':

            $sql = "DELETE FROM produtos WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);


            if($res==true){
                print "<script>alert('Excluido sem problemas');</script>;";
                print "<script>location.href='?page=liprod';</script>;";
            }else{
                {
                    print "<script>alert('ERRO! Nao foi excluido');</script>;";
                    print "<script>location.href='index.php';</script>;";
                }
            }

        break;




    }