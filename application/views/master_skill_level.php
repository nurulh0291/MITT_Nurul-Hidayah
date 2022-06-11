<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

 </head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="display: flex; justify-content:flex-end">
      <form class="form-inline">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit" onclick="logout();">Logout</button>
      </form>
  	</nav>
	<div class="container">
		<h4>Master Skill Level</h4><br><hr><br>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addNewModal">Add New</button>
		<br>
		<table class="table">
		  <thead>
		    <tr>
				<th scope="col">Skill Level ID</th>
				<th scope="col">Skill Level Name</th>
				<th scope="col">Action</th>
			</tr>
		  </thead>
	  	  <tbody>
			<tr>
				<td scope="row">1</td>
				<td>Skill Level 1</td>
				<td><i class="fa fa-edit" data-toggle="modal" data-target="#editModal"></i><i class="fa fa-trash" aria-hidden="true" data-toggle="modal" data-target="#deleteModal"></i></td>
			</tr>
			<tr>
				<td scope="row">1</td>
				<td>Skill Level 2</td>
				<td><i class="fa fa-edit" data-toggle="modal" data-target="#editModal"></i><i class="fa fa-trash" aria-hidden="true" data-toggle="modal" data-target="#deleteModal"></i></td>
			</tr>
		  </tbody>
		</table>
	</div>


<!-- Add New -->
<div class="modal" id="addNewModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Master Skill Level</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
		  <div class="form-group">
		    <label for="skillName">Skill Level Name</label>
		    <input type="text" class="form-control" id="skill_name" placeholder="Skill Level Name">
		  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Of Add New -->

<!-- Edit -->
<div class="modal" id="editModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Master Skill Level</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
		  <div class="form-group">
		    <label for="skillName">Skill Level Name</label>
		    <input type="text" class="form-control" id="skill_name" placeholder="Skill Level Name">
		  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Of Edit -->

<!-- Delete -->
<div class="modal" id="deleteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Skill Level</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
		  <p>You sure want to delete this skill level?</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Of Edit -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
 $(document).ready(function(){
    $('.dropdown-toggle').dropdown();
});
  function logout() {
          window.location.href = "http://localhost/mitt-frontend/auth/login";
        }
</script>
</body>


</html>
