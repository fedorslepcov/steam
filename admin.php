<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style type="text/css">
		html, body{
			height: 100%;
		}
		.form-control::placeholder {
            color: grey;
            opacity: 1;
		}
	</style>
</head>
<body>
	<div class="col-12 pt-3 pb-3" style="background: #182224;">
		<div class="col-8 mx-auto d-flex">
			<img src="logo.png">
			<div class="col-9 pt-3" style="background: #182224;">
				<a href="" class="text-light text-uppercase ms-5">Магазин</a>
				<a href="" class="text-light text-uppercase ms-5">Сообщество</a>
				<a href="" class="text-light text-uppercase ms-5">О steam</a>
				<a href="" class="text-light text-uppercase ms-5">Поддержка</a>
			</div>
		</div>
	</div>
	<div class="col-12 " style="height: 1250px; background: #1b2838">
		<div class="col-7 mx-auto" style="height: 500px; background: #1b2838">
			<form action="insert.php" method="GET">
				<h2 class="text-light text-center pt-5">Добавить товар</h2>
			<input type="" name="img" class="form-control w-50 mx-auto" placeholder="Картинка">
			<input type="" name="title" class="form-control w-50 mx-auto mt-3" placeholder="Название">
			<input type="" name="price" class="form-control w-50 mx-auto mt-3" placeholder="Цена">
			<button class="btn text-light mt-3" style="background: #62971d; margin-left: 350px;">Добавить игру</button>
			</form>
		</div> 
	</div>