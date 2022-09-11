<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
	<style>
		 @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	</style>
	
</head>
<!--body class=" text-center text-bg-dark"-->
<body class="text-center">
	
	<div class="cover-container  flex-column">
		<header>
			@include('app')
			@include('menu')
		</header>
	</div>
	<main class="">
		<!--<div class="container">-->
			<div class="col-auto p-5 text-center">
				
				<h1>Diseño Web III.</h1>
				<p class="lead">Bienvenido.</p>
				<p class="lead">
					<input type="button" class="btn btn-lg btn-secondary fw-bold border-black bg-gray" onclick="return alert('Hecho por Oscar Báez')" value="Info">
				</p>
			</div>
			
		</div>
		
	</main>
</body>
</html>