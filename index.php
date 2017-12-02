<?php 

require 'db_connect.php';

header('Content-Type: text/html; charset=utf8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">

	<div class="filter-wrap">
		<label for="From">Price from</label>
		<input type="number" onkeyup="Filter()" id="From" min="0" >
		<label for="To">Price To</label>
		<input type="number" onkeyup="Filter()" id="To" min="0">
	</div>


	<table id="table" class="table table-bordered">
    <thead>
      <tr>
        <th onclick="sortTable(0)">ID</th>
        <th onclick="sortTable(1)">Brand</th>
        <th onclick="sortTable(2)">Model</th>
        <th onclick="sortTable(3)">Category</th>
        <th onclick="sortTable(4)">Price</th>
      </tr>
    </thead>
    <tbody>
		<?php
			$select = mysql_query("select * from carslist");
			while ($result = mysql_fetch_array($select)) {
				echo  "<tr>
        					<td>$result[id]</td>
					        <td>$result[brend]</td>
					        <td>$result[model]</td>
					        <td>$result[category]</td>
					        <td>$result[price]</td>
      					</tr>";
			}
		?>      
    </tbody>
  </table>


	
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Car</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add a car</h4>
        </div>
        <div class="modal-body">
          
			<form action="add_car.php" method="post">
				

				<div class="form-group">
				  <label for="brand">Choose a Car brand</label>
				  <select class="form-control" name="brand" id="brand" required="required">
				  	<?php
				    		$result = mysql_query("select brend from carslist");
							while ($brend_result = mysql_fetch_array($result)) {
								echo "<option>$brend_result[brend]</option>";
							}
						?>    
				  </select>
				</div>
				<div class="form-group">
				  <label for="model">Choose a Car model</label>
				  <select class="form-control" name="model" id="model" required="required">
				  	<?php
				    		$result = mysql_query("select model from carslist");
							while ($model_result = mysql_fetch_array($result)) {
								echo "<option>$model_result[model]</option>";
							}
						?>    
				  </select>
				</div>

				<label for="Date">Date of Production</label>
				<input type="number" id="Date" name="date" min="1900" value="<?php echo date("Y")?>" max="<?php echo date("Y")?>" required="required"><br>
				<label for="Price">Price</label>
				<input type="number" id="Price" name="price" min="0" placeholder="How much money it cost" required="required">
				<br>
				<label for="Owner">Owner</label>
				<input type="text" id="Owner" name="owner" placeholder="Who are you?" required="required">
				<input type="submit" value="Send">
			</form>
        </div>
        
      </div>
      
    </div>
  </div>
  


<?php mysqli_close($conn);?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/custom-scripts.js"></script>
</body>
</html>