<div class="card shadow p-4" style="max-width: 500px; margin: auto;">
    <h2 class="text-center mb-4">Cadastrar Posição</h2>

    <form action="?page=salvar-posicao" method="POST">
        <input type="hidden" name="acao" value="cadastrar">

        <div class="mb-3">
            <label for="nome_posicao" class="form-label">Nome da Posição</label>
            <input 
                type="text" 
                name="nome_posicao" 
                id="nome_posicao" 
                class="form-control"
                placeholder="Ex: Atacante, Zagueiro..."
                required
            >
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-success px-4">Salvar</button>
        </div>
    </form>
</div>
