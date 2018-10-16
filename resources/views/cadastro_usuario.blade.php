<div>
	<div>

		<h3>Cadastrar Usuário</h3>
		<form method="POST" action="{{route('usuarios.store')}}"> 
			{{csrf_field()}}
			<div>
				<label>Nome:</label>
				<div>
					<input type="text" name="nome" placeholder="Digite seu nome">
				</div>
			</div>	


			<input type="text" name="tipo" hidden="" value="usuario">


			<div>
				<label>Email:</label>
				<div>
					<input type="text" name="email" placeholder="Digite seu email">
				</div>
			</div>	

			<div>
				<label>Usuário:</label>
				<div>
					<input type="text" name="login" placeholder="Digite seu usuário">
				</div>
			</div>	

			<div>
				<label>Senha:</label>
				<div>
					<input type="password" name="senha" placeholder="Digite sua senha">
				</div>
			</div>	
			<br>
			<div>
				<div>
					<button>Cadastrar</button>
				</div>
			</div>	
		</form>

	</div>	

</div>