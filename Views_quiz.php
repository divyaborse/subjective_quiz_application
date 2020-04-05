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
<?php
if(isset($data)){
	?>
	<div class="table-responsive">
  <table class="table table-striped table-bordered">
		<tr>
		<th>Quiz_id</th>
		<th>Question</th>

		<th>Answer</th>
		
		<th>Score</th>
		<th>Save result</th>
	</tr>
	 <form action="<?= base_url('Teachersubquiz/display') ?>" method="post">
	<?php
		
		foreach($data->result() as $row){
			
			
				
				echo '
        <tr>
        <td>'.$row->q_id.'</td>
        <td>'.$row->question.'</td>
       
        <td>'.$row->answer.'</td>

       
        <td><input type="text" name="score"></td>
        <td><input type="submit" name="submit" value="submit" class="btn btn-primary"></td>
        </form>

        </tr>
        ';}
        ?>
    </table>
	<?php
}
?>
</body>
</html>