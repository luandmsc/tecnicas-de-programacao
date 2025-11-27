<h1>Editar Posição</h1>

<?php
    $sql = "SELECT * FROM posicao WHERE id_posicao=".$_REQUEST['id_posicao'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<form action="?page=salvar-posicao" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_posicao" value="<?php print $row->id_posicao; ?>">

    <div class="mb-3">
        <label>Nome da Posição
            <input type="text" name="nome_posicao" class="form-control" value="<?php print $row->nome_posicao; ?>" required>
        </label>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>
