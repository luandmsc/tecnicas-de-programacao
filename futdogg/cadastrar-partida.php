<div class="card shadow p-4" style="max-width: 600px; margin: auto;">
    <h2 class="text-center mb-4">Cadastrar Partida</h2>

    <form action="?page=salvar-partida" method="POST">
        <input type="hidden" name="acao" value="cadastrar">

        <div class="mb-3">
            <label for="data_partida" class="form-label">Data da Partida</label>
            <input 
                type="date" 
                name="data_partida" 
                id="data_partida" 
                class="form-control" 
                required
            >
        </div>

        <div class="mb-3">
            <label for="local_partida" class="form-label">Local</label>
            <input 
                type="text" 
                name="local_partida" 
                id="local_partida" 
                class="form-control"
                placeholder="Digite o local da partida"
            >
        </div>

        <div class="mb-3">
            <label for="time_adversario" class="form-label">Time Adversário</label>
            <input 
                type="text" 
                name="time_adversario" 
                id="time_adversario" 
                class="form-control"
                placeholder="Digite o time adversário"
            >
        </div>

        <div class="mb-3">
            <label for="placar" class="form-label">Placar</label>
            <input 
                type="text" 
                name="placar" 
                id="placar" 
                class="form-control"
                placeholder="Ex: 2x1"
            >
        </div>

        <div class="mb-3">
            <label for="tecnico_id_tecnico" class="form-label">Técnico Responsável</label>
            <select 
                name="tecnico_id_tecnico" 
                id="tecnico_id_tecnico" 
                class="form-control" 
                required
            >
                <option value="">Selecione</option>

                <?php
                $sql = "SELECT * FROM tecnico ORDER BY nome_tecnico";
                $res = $conn->query($sql);

                while ($row = $res->fetch_object()) {
                    print "<option value='".$row->id_tecnico."'>".$row->nome_tecnico."</option>";
                }
                ?>
            </select>
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary px-4">Cadastrar</button>
        </div>
    </form>
</div>
