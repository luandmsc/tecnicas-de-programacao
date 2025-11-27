<?php
    $sql = "SELECT j.*, p.nome_posicao 
            FROM jogador j
            INNER JOIN posicao p ON p.id_posicao = j.posicao_id_posicao
            WHERE j.id_jogador = " . $_REQUEST["id_jogador"];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>

<h1>Editar Jogador</h1>

<form action="?page=salvar-jogador" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_jogador" value="<?php print $row->id_jogador; ?>">

    <div class="mb-3">
        <label>Nome do Jogador</label>
        <input type="text" name="nome_jogador" class="form-control" 
               value="<?php print $row->nome_jogador; ?>" required>
    </div>

    <div class="mb-3">
        <label>Número da Camisa</label>
        <input type="number" name="numero_camisa" class="form-control"
               value="<?php print $row->numero_camisa; ?>">
    </div>

    <div class="mb-3">
        <label>Idade</label>
        <input type="number" name="idade_jogador" class="form-control" 
               value="<?php print $row->idade_jogador; ?>" required>
    </div>

    <div class="mb-3">
        <label>Posição</label>
        <select name="posicao_id_posicao" class="form-control" required>
            <option value="">Selecione</option>

            <?php
                $sql2 = "SELECT * FROM posicao ORDER BY nome_posicao";
                $res2 = $conn->query($sql2);

                while ($pos = $res2->fetch_object()) {
                    $selected = ($pos->id_posicao == $row->posicao_id_posicao) ? "selected" : "";
                    print "<option value='".$pos->id_posicao."' $selected>".$pos->nome_posicao."</option>";
                }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar Mudanças</button>
    </div>
</form>

