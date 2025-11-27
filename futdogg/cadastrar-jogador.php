<div class="card shadow p-4" style="max-width: 650px; margin: auto;">
    <h2 class="text-center mb-4">Cadastrar Jogador</h2>

    <form action="?page=salvar-jogador" method="POST">
        <input type="hidden" name="acao" value="cadastrar">

        <div class="mb-3">
            <label for="nome_jogador" class="form-label">Nome do Jogador</label>
            <input 
                type="text" 
                name="nome_jogador" 
                id="nome_jogador" 
                class="form-control" 
                placeholder="Digite o nome" 
                required
            >
        </div>

        <div class="mb-3">
            <label for="numero_camisa" class="form-label">Número da Camisa</label>
            <input 
                type="number" 
                name="numero_camisa" 
                id="numero_camisa" 
                class="form-control" 
                placeholder="Ex: 10"
            >
        </div>

        <div class="mb-3">
            <label for="idade_jogador" class="form-label">Idade</label>
            <input 
                type="number" 
                name="idade_jogador" 
                id="idade_jogador" 
                class="form-control" 
                placeholder="Ex: 22"
            >
        </div>

        <div class="mb-3">
            <label for="posicao_id_posicao" class="form-label">Posição</label>
            <select 
                name="posicao_id_posicao" 
                id="posicao_id_posicao" 
                class="form-select" 
                required
            >
                <option value="">Selecione a posição</option>

                <?php
                    $sql = "SELECT * FROM posicao ORDER BY nome_posicao";
                    $res = $conn->query($sql);
                    while($row = $res->fetch_object()){
                        print "<option value='{$row->id_posicao}'>{$row->nome_posicao}</option>";
                    }
                ?>
            </select>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success px-4">Cadastrar Jogador</button>
        </div>

    </form>
</div>
