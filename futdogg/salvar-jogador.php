<?php
    switch ($_REQUEST["acao"]) {

        case 'cadastrar':
            $nome = $_POST['nome_jogador'];
            $nmrc = $_POST['numero_camisa'];
            $idade = $_POST['idade_jogador'];
            $posicao = $_POST['posicao_id_posicao'];
                
            $sql = "INSERT INTO jogador (nome_jogador, numero_camisa, idade_jogador, posicao_id_posicao) VALUES ('{$nome}','{$nmrc}','{$idade}','{$posicao}')";

            $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar-jogador';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar!');</script>";
            print "<script>location.href='?page=listar-jogador';</script>";
        }
        break;

        case 'editar':
            $nome = $_POST['nome_jogador'];
            $nmrc = $_POST['numero_camisa'];
            $idade = $_POST['idade_jogador'];
            $posicao = $_POST['posicao_id_posicao'];
                
            $sql = "UPDATE jogador SET nome_jogador='{$nome}', numero_camisa='{$nmrc}', idade_jogador='{$idade}', posicao_id_posicao='{$posicao}' WHERE id_jogador=".$_REQUEST['id_jogador'];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-jogador';</script>";
            } else {
                print "<script>alert('Erro ao editar!');</script>";
                print "<script>location.href='?page=listar-jogador';</script>";
            }
        break;

    case 'excluir':
        $sql = "DELETE FROM jogador WHERE id_jogador=".$_REQUEST['id_jogador'];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar-jogador';</script>";
        } else {
            print "<script>alert('Erro ao excluir!');</script>";
            print "<script>location.href='?page=listar-jogador';</script>";
        }
    break;
}
?>
