<?php
    switch ($_REQUEST["acao"]) {

        case 'cadastrar':
            $nome = $_POST["nome_posicao"];

            $sql = "INSERT INTO posicao (nome_posicao) VALUES ('{$nome}')";

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Posição cadastrada com sucesso!');</script>";
                print "<script>location.href='?page=listar-posicao';</script>";
            } else {
                print "<script>alert('Erro ao cadastrar!');</script>";
                print "<script>location.href='?page=listar-posicao';</script>";
            }
        break;

        case 'editar':
            $nome = $_POST["nome_posicao"];

            $id = $_POST["id_posicao"];

            $sql = "UPDATE posicao SET nome_posicao='{$nome}' WHERE id_posicao={$id}";

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Posição editada com sucesso!');</script>";
                print "<script>location.href='?page=listar-posicao';</script>";
            } else {
                print "<script>alert('Erro ao editar!');</script>";
                print "<script>location.href='?page/listar-posicao';</script>";
            }
        break;

        case 'excluir':
            $id = $_REQUEST["id_posicao"];

            $sql = "DELETE FROM posicao WHERE id_posicao={$id}";

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Posição excluída com sucesso!');</script>";
                print "<script>location.href='?page=listar-posicao';</script>";
            } else {
                print "<script>alert('Erro ao excluir!');</script>";
                print "<script>location.href='?page/listar-posicao';</script>";
            }
        break;
    }
?>
