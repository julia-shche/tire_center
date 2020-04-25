<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Шины 24</title>
	<!-- jQuery library (served from Google) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="js/jquery.bxslider.js"></script>
	<!-- bxSlider CSS file -->
	<link href="css/jquery.bxslider.css" rel="stylesheet" />	
	<link href="css/style.css" rel="stylesheet" />	
	

	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Шины 24</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
  </button>
	 <a class="navbar-link text-white" href="result.php">Результаты</a>
</nav>

<div style="margin:0 auto; max-width: 750px;">
	<ul class="bxslider">
	  <li><img src="images/5.jpg" /></li>
	  <li><img src="images/6.jpg" /></li>
	  <li><img src="images/7.jpg" /></li>
	  <li><img src="images/8.jpg" /></li>
	</ul>
</div>

<script>
	$(document).ready(function(){
		$('.bxslider').bxSlider({
			auto: true
			
		});
	});
</script>


<div style="margin:0 auto; max-width: 600px; ">
<div class="heading">
	<h3>Заполните форму</h3>
	<h5>(все поля обязательны)<h5>
</div>
<form method="POST">
  <div class="form-group">
	<label for="name">Имя</label>
	<input type="text" minlength="2" class="form-control" name="name" placeholder="Иван" required>
  </div>
   <div class="form-group">
	<label for="surname">Фамилия</label>
	<input type="text" minlength="2" class="form-control" name="surname" placeholder="Иванов" required>
  </div>
  <div class="form-group">
	<label for="phone">Телефон</label>
	<input type="text" maxlength="12" class="form-control bfh-phone" data-format="+7 (ddd) ddd-dd-dd" placeholder="+79999999999" name="phone" required/>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="name@example.com" aria-describedby="emailHelp" required >
  </div>

  <button type="submit" class="btn btn-primary" id="submit">Отправить</button>
</form>
</div>

   <?php
		if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['phone']) && isset($_POST['email'])){
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			
			
			$servername = "localhost"; 
			$username = "root"; 
			$password = ""; 
			$bdname = "db_inf"; 

			$conn = new mysqli($servername, $username, $password, $bdname);
		
			$sql = $conn->query( "INSERT INTO Inf (name, surname, tel, email)
						VALUES ('$name', '$surname', '$phone', '$email')");
		}
					   
    ?>

</body>
</html>