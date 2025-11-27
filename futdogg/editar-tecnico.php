<?php
$sql = "SELECT * FROM tecnico WHERE id_tecnico=".$_REQUEST["id"];

$res = $conn->query($sql);

$row = $res->fetch_object();
?>

<h1>Editar Técnico</h1>

<form action="?page=salvar-tecnico" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_tecnico" value="<?php print $row->id_tecnico; ?>">

    <div class="mb-3">
        <label>Nome do Técnico</label>
        <input type="text" name="nome_tecnico" class="form-control" value="<?php print $row->nome_tecnico; ?>" required>
    </div>

    <div class="mb-3">
        <label>Idade</label>
        <input type="number" name="idade_tecnico" class="form-control" value="<?php print $row->idade_tecnico; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
</form>
