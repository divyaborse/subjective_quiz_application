<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="jumbotron">
	<?php 
	if(isset($data)){ 
		foreach($data->result() as $row){
			echo '
		

  <h1 class="display-4">Quiz Summary</h1>
  <p class="lead">Quiz_id:<b>'.$row->q_id.'</p>
  <p class="lead">Score:<br><b>'.$row->score.'</p>'; }?>
  <hr class="my-4">
  <p>Attempeted at:</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Go to Dashboard</a>
  </p>
  <?php }?>
</div>
</body>
</html>