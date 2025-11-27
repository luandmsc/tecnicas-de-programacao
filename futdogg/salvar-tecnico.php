<?php
    switch ($_REQUEST["acao"]) {

        case 'cadastrar':
            $nome = $_POST['nome_tecnico'];
            $idade = $_POST['idade_tecnico'];

            $sql = "INSERT INTO tecnico (nome_tecnico, idade_tecnico) VALUES ('{$nome}', '{$idade}')";

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Técnico cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=listar-tecnico';</script>";
            } else {
                print "<script>alert('Erro ao cadastrar!');</script>";
                print "<script>location.href='?page/listar-tecnico';</script>";
            }
        break;

        case 'editar':
            $nome = $_POST['nome_tecnico'];
            $idade = $_POST['idade_tecnico'];

            $sql = "UPDATE tecnico SET nome_tecnico='{$nome}', idade_tecnico='{$idade}' WHERE id_tecnico=".$_POST['id_tecnico'];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Técnico editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-tecnico';</script>";
            } else {
                print "<script>alert('Erro ao editar!');</script>";
                print "<script>location.href='?page=listar-tecnico';</script>";
            }
        break;

        case 'excluir':
            $sql = "DELETE FROM tecnico WHERE id_tecnico=".$_REQUEST['id_tecnico'];
            
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Técnico excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar-tecnico';</script>";
            } else {
                print "<script>alert('Erro ao excluir!');</script>";
                print "<script>location.href='?page/listar-tecnico';</script>";
            }
        break;
    }
?>
