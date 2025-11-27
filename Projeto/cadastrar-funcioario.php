<h1>Cadastrar Funcionario</h1>
<form action="?page=salvar-funcionario" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome_funcionario" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>E-mail
			<input type="email" placeholder="exemplo@gmail.com" name="email_funcionario" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<label>Telefone
			<input type="number" placeholder="(00) 00000-0000" name="telefone_funcionario" class="form-control">
		</label>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>