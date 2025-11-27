<?php
    switch ($_REQUEST["acao"]) {

        case 'cadastrar':
            $data = $_POST['data_partida'];
            $local = $_POST['local_partida'];
            $adversario = $_POST['time_adversario'];
            $placar = $_POST['placar'];
            $tecnico = $_POST['tecnico_id_tecnico'];

            $sql = "INSERT INTO partida (data_partida, local_partida, time_adversario, placar, tecnico_id_tecnico) 
                    VALUES ('{$data}', '{$local}', '{$adversario}', '{$placar}', '{$tecnico}')";

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Partida cadastrada!');</script>";
                print "<script>location.href='?page=listar-partida';</script>";
            } else {
                print "<script>alert('Erro ao cadastrar!');</script>";
                print "<script>location.href='?page=listar-partida';</script>";
            }
        break;

        case 'editar':
            $data = $_POST['data_partida'];
            $local = $_POST['local_partida'];
            $adversario = $_POST['time_adversario'];
            $placar = $_POST['placar'];
            $tecnico = $_POST['tecnico_id_tecnico'];

            $sql = "UPDATE partida SET data_partida='{$data}', local_partida='{$local}', time_adversario='{$adversario}', placar='{$placar}',tecnico_id_tecnico='{$tecnico}' WHERE id_partida=".$_POST['id_partida'];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar-partida';</script>";
            } else {
                print "<script>alert('Erro ao editar!');</script>";
                print "<script>location.href='?page=listar-partida';</script>";
            }
        break;

        case 'excluir':
            $sql = "DELETE FROM partida WHERE id_partida=".$_REQUEST['id'];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar-partida';</script>";
            } else {
                print "<script>alert('Erro ao excluir! Verifique se a partida está relacionada a outros dados.');</script>";
                print "<script>location.href='?page=listar-partida';</script>";
            }
        break;
    }
    ?>
