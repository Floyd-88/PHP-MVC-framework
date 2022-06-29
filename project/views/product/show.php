<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Продукт "<?php echo $name ?>"" из категории "<?php echo $category ?>" </h1>
<p>
	Цена: <?php echo $price ?>$, количество: <?php echo $quantity ?>
</p>
<p>
	Стоимость (цена * количество): <?php echo $price * $quantity ?>$
</p>
</body>
</html>