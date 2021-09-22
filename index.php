<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/849d82b643.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href=" <?= get_stylesheet_directory_uri(  );?>/reset.css ">
	<link rel="stylesheet" href=" <?= get_stylesheet_directory_uri(  );?>/style.css ">
	<title>Edu Siqueira</title>
</head>

<body>
	<!-- <header>
		<nav class="nav">
			<a class="nav__brand" href="#">edu siqueira</a>
			<ul class="nav__menu">
				<li class="nav__menuItem">inicio</li>
				<li class="nav__menuItem">serviços</li>
				<li class="nav__menuItem">contato</li>
				<li class="nav__menuItem">blog</li>
			</ul>
		</nav>
	</header> -->
	<section id="home">
		<div class="container">
			<article class="home__text">
				<h1 class="home__title">Olá, eu sou o Eduardo</h1>
				<p class="home__paragraph">Estou pronto para criar o seu novo site</p>
			</article>
			<div class="home__imageWrapper">
				<img src="<?= get_stylesheet_directory_uri(  );?>/img/developer_activity.svg" alt="Image Placeholder">
			</div>
			<a class="home__button" href="#servicos">
				<i class="fas fa-chevron-right"></i>
				<span>Conheça os meus
					serviços</span>
			</a>
		</div>
	</section>

	<section id="servicos">
		<h1>servicos</h1>
		<div>
			<div>
				<div>
					<img src="https://via.placeholder.com/330x180" alt="image placeholder" />
				</div>
				<div>
					<h2>criação de sites</h2>
					<p>Sites rápidos e dinâmicos que funcionam em qualquer tela</p>
				</div>
			</div>
			<div>
				<div>
					<img src="https://via.placeholder.com/330x180" alt="image placeholder" />
				</div>
				<div>
					<h2>wordpress</h2>
					<p>Tenha total controle sobre o seu conteúdo com o principal CMS do mercado</p>
				</div>
			</div>
			<div>
				<div>
					<img src="https://via.placeholder.com/330x180" alt="image placeholder" />
				</div>
				<div>
					<h2>loja online</h2>
					<p>Venda seu produto online. Com pagamento seguro, opções de entrega e muito mais</p>
				</div>
			</div>
		</div>
	</section>
	<section id="contato">
		<h1>contato</h1>
		<div>
			<div><img src="https://via.placeholder.com/520x270" alt="image placeholder" /></div>
			<div>
				<form>
					<div>
						<label for="email">
							email
						</label>
						<input type="email" name="email" id="email" />
					</div>
					<div>
						<label for="assunto">
							assunto
						</label>
						<input type="text" name="assunto" id="assunto" />
					</div>
					<div>
						<label for="mensagem">
							mensagem
						</label>
						<textarea name="mensagem" id="mensagem"></textarea>
					</div>
					<div>
						<button type="submit">enviar</button>
					</div>


				</form>
			</div>
		</div>
	</section>

</body>

</html>