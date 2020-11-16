<?php
include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MANUFACTURERS</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/ajax.js"></script>
</head>
<body>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						          <h2>Manage <b>Manufacturers</b></h2>
					          </div>
                    <div class="col-sm-6">
                      <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add Manufacturer</span></a>
                      <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons"></i> <span>Delete Manufacturer</span></a>						
                    </div>
                  </div>
            </div>
            <table class="table table-striped table-hover">
            <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
            <th>MANUFACTURER ID</th>
            <th>MANUFACTURER NAME</th>
            <th>MANUFACTURER ADDRESS</th>
            <th>MANUFACTURER CITY</th>
            <th>MANUFACTURER COUNTRY</th>
            </tr>
          	</thead>
				<tbody>
				<?php
				$result = mysqli_query($link,"SELECT * FROM manufacturers");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["MANUFACTURER_ID"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["FEATURE_ID"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $row["MANUFACTURER_ID"]; ?></td>
          <td><?php echo $row["MANUFACTURER_NAME"]; ?></td>
          <td><?php echo $row["MANUFACTURER_ADDRESS"]; ?></td>
          <td><?php echo $row["CITY"]; ?></td>
          <td><?php echo $row["COUNTRY"]; ?></td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["MANUFACTURER_ID"]; ?>"
              data-name="<?php echo $row["MANUFACTURER_NAME"]; ?>"
              data-address="<?php echo $row["MANUFACTURER_ADDRESS"]; ?>"
              data-city="<?php echo $row["CITY"]; ?>"
              data-country="<?php echo $row["COUNTRY"]; ?>"
							title="Edit"></i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["MANUFACTURER_ID"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Delete"></i></a>
                    </td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Add Manufacturer</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>MANUFACTURER NAME</label>
							<input type="text" id="name" name="name" class="form-control" required>
            </div>			
            <div class="form-group">
							<label>MANUFACTURER ADDRESS</label>
							<input type="text" id="address" name="address" class="form-control" required>
						</div>			
            <div class="form-group">
							<label>CITY</label>
							<input type="text" id="city" name="city" class="form-control" required>
            </div>
            <div class="form-group">
							<label>COUNTRY</label>
							<input type="text" id="country" name="country" class="form-control" required>
            </div>
					</div>
					<div class="modal-footer">
					  <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Manufacturer</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id" class="form-control" required>					
						<div class="form-group">
							<label>MANUFACTURER NAME</label>
							<input type="text" id="name_u" name="name" class="form-control" required>
            </div>			
            <div class="form-group">
							<label>MANUFACTURER ADDRESS</label>
							<input type="text" id="address_u" name="address" class="form-control" required>
						</div>			
            <div class="form-group">
							<label>CITY</label>
							<input type="text" id="city_u" name="city" class="form-control" required>
            </div>
            <div class="form-group">
							<label>COUNTRY</label>
							<input type="text" id="country_u" name="country" class="form-control" required>
            </div>
					</div>
					<div class="modal-footer">
					<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="update">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Manufacturer</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>    
