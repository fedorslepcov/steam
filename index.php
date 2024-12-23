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
				<a href="admin.php" class="text-light text-uppercase ms-5">Админ панель</a>
			</div>
		</div>
	</div>
	<div class="col-12 " style=" background: #1b2838">
		<div class="col-8 mx-auto" style="height: 1250px; background: #1b2838">
			<div class="col-12 pt-2 d-flex" style="height: 100px; background: #1b2838">
				<div class="col-1">
					<img src="ava.webp" class="h-100">
				</div>
				<div class="col-11 mt-4">
					<h3 class="text-light">СПИСОК ЖЕЛАЕМОГО qawsedrf</h3>
				</div>
			</div>
			<div class="col-12 pt-2 d-flex justify-content-around" style="height: 50px;  background: #1b2838">
				<input name="" class="form-control w-50 bg-dark border-black" placeholder="Поиск по названию или метке"  style="color: white">
				<button class="btn btn-secondary dropdown-toggle">Настройки</button>
				<button class="btn btn-secondary dropdown-toggle"><span style="color: blue">Сортировать по:</span> вашему предпочтению</button>
			</div>
			<div class="col-12 pt-2" style="height: 800px;  background: #1b2838">
				<div class="col-12 d-flex" style="height: 325px;  background: #1b2838">
					<div class="col-1 " style="height: 100%; border-right: 1px solid black; background: #3d4d5d">
						<img src="handle.png" class="col-6 ms-2" style="margin-top: 135px; m">
					</div>
					<div class="col-11 d-flex" style="height: 100%;  background: #3d4d5d" >
						<div class="col-4  mt-4 ms-4" style="height: 168px; background: #1b2838">
							<img src="huge.webp" class="w-100">
						</div>

						<h3 class="mt-3 ms-3 text-light">Ash of Gods: Redemption</h3>
						<div class="col-3  d-flex" style="height: 30px; margin-top: 90px; background: #1b2838">
							<p class="ms-4 text-light">510,1 руб</p>
							<button class="ms-3 btn  text-light" style="background: #62971d">В корзину</button>
						</div>
					</div>
				</div>
				<div class="col-12  d-flex pt-2" style="height: 325px; background: #1b2838">
					<div class="col-1  " style="height: 100%; border-right: 1px solid black; background: #3d4d5d">
						<img src="handle.png" class="col-6 ms-2" style="margin-top: 135px; m">
					</div>
					<div class="col-11 d-flex" style="height: 100%; background: #3d4d5d">
						<div class="col-4 bg-info mt-4 ms-4" style="height: 168px;">
							<img src="Mundaun.webp" class="col-12">
						</div>
						<h3 class="mt-3 ms-3 text-light">Mundaun</h3>
						<div class="col-3 d-flex" style="height: 30px; margin-top: 90px; margin-left: 200px; background: #1b2838">
							<p class="ms-4 text-light">850 руб</p>
							<button class="ms-3 btn  text-light" style="background: #62971d">В корзину</button>
						</div>
					</div>
				</div>
				
				<div class="col-12  d-flex pt-2" style="height: 325px; background: #1b2838; opacity: <?php 
					if (empty($game['img'])) {
						echo 0;
					}else{
						echo 1;
					} 
				 ?>">
					<div class="col-1  " style="height: 100%; border-right: 1px solid black; background: #3d4d5d">
						<img src="handle.png" class="col-6 ms-2" style="margin-top: 135px; m">
					</div>
					<?php 
						$connect = mysqli_connect('MySQL-8.2', 'root', '', 'steam');
						$query = mysqli_query($connect, 'SELECT * FROM wishlist');
					 	$game = $query -> fetch_assoc();
					?>
					<div class="col-11 d-flex" style="height: 100%; background: #3d4d5d">
						<div class="col-4 bg-info mt-4 ms-4" style="height: 168px;">
							<img src="<?php echo $game['img'] ?>" class="col-12">
						</div>
						<h3 class="mt-3 ms-3 text-light"><?php echo $game['title'];?></h3>
						<div class="col-3 d-flex" style="height: 30px; margin-top: 90px; margin-left: 200px; background: #1b2838">
							<p class="ms-4 text-light"><?php echo $game['price']; ?></p>
							<button class="ms-3 btn  text-light" style="background: #62971d">В корзину</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>