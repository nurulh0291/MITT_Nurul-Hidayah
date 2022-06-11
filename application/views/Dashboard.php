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

 </head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="display: flex; justify-content:flex-end">
      <form class="form-inline">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit" onclick="logout();">Logout</button>
      </form>
  	</nav>
	<div class="card" style="width: 18rem;">
	  <div class="card-body">
	    <button class="btn btn-primary btn-block">Home</button><br>
	    <button class="btn btn-primary btn-block">User Profile</button><br>
		    <div class="dropdown">
			  <button class="btn btn-primary dropdown-toggle" type="button" id="masterButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Master
			  </button>
			  <div class="dropdown-menu" aria-labelledby="masterButton">
			    <a class="dropdown-item" href="http://localhost/mitt-frontend/masterskill">Skill</a>
			    <a class="dropdown-item" href="http://localhost/mitt-frontend/masterskill/skill_level">Skill Level</a>
			  </div>
			</div>
	  </div>
	</div>

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
