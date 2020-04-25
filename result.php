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

<nav class="navbar2 navbar-expand-lg  navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Шины 24</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
  </button>
	 <a class="navbar-link text-white" href="tire_center.php">Форма</a>
</nav>


<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
			<th scope="col">№</th>
			<th scope="col">Имя</th>
			<th scope="col">Фамилия</th>
			<th scope="col">Телефон</th>
			<th scope="col">Email</th>
		
		</tr>
	</thead>
	<tbody>
	    <?php
	
	$servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $bdname = "db_inf"; 

        $conn = new mysqli($servername, $username, $password, $bdname);
	
        $sql = "Select id, name, surname, tel, email FROM Inf ORDER BY ID DESC";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()){ ?>
			<tr id="<?php echo $row['id']; ?>">
			<td><?php echo htmlentities($row['id']); ?></td>
			<td><?php echo htmlentities($row['name']); ?></td>
			<td><?php echo htmlentities($row['surname']); ?></td>
			<td><?php echo htmlentities($row['tel']); ?></td>
			<td><?php echo htmlentities($row['email']); ?></td>
			</tr>
		<?php } ?>	
	</tbody>
	
</table>
</div>
</body>
</html>
