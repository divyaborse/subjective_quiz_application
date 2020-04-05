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

	<br><br><br>

	
<div class="container">
  <h1> Subjective Quiz</h1>
  <br><br>
 
			

<?php 
	if(isset($data)){
		foreach($data->result() as $row){
			echo ' <div class="card">
    <div class="card-header">
    <b>Quiz_id:'.$row->q_id.	'</b></div>
    <div class="card-body">
    	
	';
			echo '<b><b>'.$row->question.'</b></b>';
		}
		?>
		<form method="post" action="<?= base_url('Subquiz/view_result') ?> " >
	
<div class="form-group">
		<input type="text" name="response" class="form-control" placeholder="Enter answer">
	<!--<span class="text-danger"><?php echo form_error("answer");?></span>	-->
	</div>
	 

		
	


</div>
    </div> 
    <div class="card-footer"><div class="form-group"> 
		
		
	<input type="submit" name="Submit"  value="Submit" class="btn btn-info">
		
	</div></div></form>
<?php }?>
</body>
</html>