<div class="card shadow p-4" style="max-width: 500px; margin: auto;">
    <h2 class="text-center mb-4">Cadastrar Técnico</h2>

    <form action="?page=salvar-tecnico" method="POST">
        <input type="hidden" name="acao" value="cadastrar">

        <div class="mb-3">
            <label for="nome_tecnico" class="form-label">Nome do Técnico</label>
            <input 
                type="text" 
                name="nome_tecnico" 
                id="nome_tecnico" 
                class="form-control"
                placeholder="Digite o nome do técnico"
                required
            >
        </div>

        <div class="mb-3">
            <label for="idade_tecnico" class="form-label">Idade</label>
            <input 
                type="number" 
                name="idade_tecnico" 
                id="idade_tecnico" 
                class="form-control"
                placeholder="Digite a idade"
                required
            >
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-success px-4">Cadastrar</button>
        </div>
    </form>
</div>
