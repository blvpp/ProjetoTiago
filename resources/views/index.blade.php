<!DOCTYPE html>
<html>
<head> 
	<title></title>
</head>
<body>
	<h1>>COLETA DIGITAL<</h1>
	<div>
		<h2>Menu</h2>
		<ul>
			<li><a href="/"><b>Início</b></a></li>
			<li><a href="/cadastro">Cadastro</a></li>
			<li><a href="/sobre">Sobre</a></li>
			<li><a href="/coleta_seletiva">Coleta Seletiva</a></li>
			<li><a href="/lixeiras">Lixeiras</a></li>
			<li><a href="/reciclagem">Reciclagem</a></li>
			<li><a href="/desenvolvedores">Desenvolvedores</a></li>
			<li><a href="/adm"><b>Administração<i> - para ADM</i></b></a></li>
		</ul>

	</div>
	<h1>Notícias</h1>
	
	@foreach ($noticias as $noticia)
	<div>

		<h3>{{$noticia->tt_principal}}</h3>

		<h4>{{$noticia->tt_auxiliar}}</h4> 
		<p>{{$noticia->corpo}}</p>

		<p>Notícias Cadastradas irão ser exibidas nesse espaço</p>
		
	</div>
	@endforeach 

</body>
</html>



