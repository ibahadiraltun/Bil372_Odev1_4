<?php
  include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products</title>
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
						          <h2>Manage <b>Products</b></h2>
					          </div>
                    <div class="col-sm-6">
                      <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add Product</span></a>
                      <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons"></i> <span>Delete</span></a>						
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
            <th>ID</th>
            <th>CODE</th>
            <th>NAME</th>
						<th>SHORTNAME</th>
            <th>ABSTRACT</th>
            <th>CATEGORY</th>
            <th>ACTIVE</th>
            </tr>
          </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($link,"SELECT * FROM product");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["m_syscode"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["m_syscode"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $row["m_syscode"]; ?></td>
					<td><?php echo $row["m_code"]; ?></td>
					<td><?php echo $row["m_name"]; ?></td>
					<td><?php echo $row["m_shortname"]; ?></td>
          <td><?php echo $row["m_abstract"]; ?></td>
          <td><?php echo $row["m_category"]; ?></td>
          <td><?php echo $row["is_active"]; ?></td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["m_syscode"]; ?>"
							data-code="<?php echo $row["m_code"]; ?>"
							data-name="<?php echo $row["m_name"]; ?>"
							data-shortname="<?php echo $row["m_shortname"]; ?>"
              data-abstract="<?php echo $row["m_abstract"]; ?>"
              data-category="<?php echo $row["m_category"]; ?>"
              data-active="<?php echo $row["is_active"]; ?>"
							title="Edit"></i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["m_syscode"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
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
						<h4 class="modal-title">Add Product</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">		
            <div class="form-group">
							<label>CODE</label>
							<input type="text" id="code" name="code" class="form-control" required>
						</div>		
						<div class="form-group">
							<label>NAME</label>
							<input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
							<label>SHORTNAME</label>
							<input type="text" id="shortname" name="shortname" class="form-control" required>
						</div>
						<div class="form-group">
							<label>ABSTRACT</label>
							<input type="text" id="abstract" name="abstract" class="form-control" required>
						</div>
						<div class="form-group">
							<label>CATEGORY</label>
							<input type="text" id="category" name="category" class="form-control" required>
						</div>
						<div class="form-group">
							<label>ACTIVE</label>
							<input type="text" id="active" name="active" class="form-control" required>
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
						<h4 class="modal-title">Edit Product</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id" class="form-control" required>					
						<div class="form-group">
							<label>CODE</label>
							<input type="text" id="code_u" name="code" class="form-control" required>
						</div>
						<div class="form-group">
							<label>NAME</label>
							<input type="text" id="name_u" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>SHORTNAME</label>
							<input type="text" id="shortname_u" name="shortname" class="form-control" required>
						</div>
						<div class="form-group">
							<label>ABSTRACT</label>
							<input type="text" id="abstract_u" name="abstract" class="form-control" required>
            </div>					
            <div class="form-group">
							<label>CATEGORY</label>
							<input type="text" id="category_u" name="category" class="form-control" required>
						</div>					
            <div class="form-group">
							<label>ACTIVE</label>
							<input type="text" id="active_u" name="active" class="form-control" required>
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
						<h4 class="modal-title">Delete Product</h4>
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
