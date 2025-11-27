<?php
    $sql = "SELECT * FROM partida WHERE id_partida=".$_REQUEST["id"];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<h1>Editar Partida</h1>

<form action="?page=salvar-partida" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_partida" value="<?php print $row->id_partida; ?>">

    <div class="mb-3">
        <label>Data da Partida</label>
        <input type="date" name="data_partida" class="form-control" value="<?php print $row->data_partida; ?>" required>
    </div>

    <div class="mb-3">
        <label>Local</label>
        <input type="text" name="local_partida" class="form-control" value="<?php print $row->local_partida; ?>">
    </div>

    <div class="mb-3">
        <label>Time Adversário</label>
        <input type="text" name="time_adversario" class="form-control" value="<?php print $row->time_adversario; ?>">
    </div>

    <div class="mb-3">
        <label>Placar</label>
        <input type="text" name="placar" class="form-control" value="<?php print $row->placar; ?>">
    </div>

    <div class="mb-3">
        <label>Técnico</label>
        <select name="tecnico_id_tecnico" class="form-control">
            <?php
            $sql2 = "SELECT * FROM tecnico ORDER BY nome_tecnico";
            $res2 = $conn->query($sql2);

            while ($tec = $res2->fetch_object()) {
                $selected = ($tec->id_tecnico == $row->tecnico_id_tecnico) ? "selected" : "";
                print "<option $selected value='".$tec->id_tecnico."'>".$tec->nome_tecnico."</option>";
            }
            ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Salvar Mudanças</button>
</form>
