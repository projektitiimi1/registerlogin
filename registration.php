<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>    
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./bootstrap-5.0.1-dist/css/bootstrap.min.css>">
    <link rel="stylesheet" href="./css/style.css">
    <title>Sign up</title>
</head>
<body>
<div>
	<?php
	
	?>	
</div>

<div class="d-flex align-items-center h-100">
		<div class="container h-100 my-5">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col col-lg-10">
                    <div class="card mx" style="border-radius: 15px;">
                        <h3 class="text-center fw-bold my-5">Create an account</h1>
                        <form action="registration.php" method="post">
                        <div class="form-outline mb-4 mx-4">
                            <label for="firstname">First Name</label>
                            <input class="form-control" id="firstname" type="text" name="firstname" required>
                        </div>
                        <div class="form-outline mb-4 mx-4">
                            <label for="lastname">Last Name</label>
                            <input class="form-control" id="lastname"  type="text" name="lastname" required>
                        </div>
                        
                        <div class="form-outline mb-4 mx-4">
                            <label for="email">Email Address</label>
                            <input class="form-control" id="email"  type="email" name="email" required>
                        </div>
                        
                        <div class="form-outline mb-4 mx-4">
                            <label for="phonenumber">Phone Number</label>
                            <input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>
                        </div>
                        
                        <div class="form-outline mb-4 mx-4">
                            <label for="password">Password</label>
                            <input class="form-control" id="password"  type="password" name="password" required>
                        </div>
                        <div class="d-flex justify-content-center mx-4">
                            <input class="btn btn-success btn-block btn-lg" type="submit" id="register" name="create" value="Sign Up">
                        </div>
                        <p class="text-center text-muted mt-5 mb-2">Have already an account? <a href="#" class="fw-bold text-body"><u>Login here</u></a></p>      
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});	
			}else{	
			}
		});			
	});
	
</script>
</body>
</html>






    <!--<section>
        <div class="d-flex align-items-center h-100">
            <div class="container h-100 my-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-10">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h3 class="text-center fw-bold mb-5">Create an account</h3>
                                <form action="registration.php" method="post">
                                    <div class="form-outline mb-4">
                                        <input type="text" name="firstname" required class="form-control form-control-lg" />
                                        <label class="form-label" for="firstname">First Name</label>
                                      </div>
                                      <div class="form-outline mb-4">
                                        <input type="text" name="lastname" required class="form-control form-control-lg" />
                                        <label class="form-label" for="lastname">Last Name</label>
                                      </div>
                                      <div class="form-outline mb-4">
                                        <input type="email" name="email" required class="form-control form-control-lg" />
                                        <label class="form-label" for="email">Email</label>
                                      </div>
                                      <div class="form-outline mb-4">
                                        <input type="phonenumber" name="phonenumber" required class="form-control form-control-lg" />
                                        <label class="form-label" for="phonenumber">Phone Number</label>
                                      </div>                   
                                      <div class="form-outline mb-4">
                                        <input type="password" name="password" required class="form-control form-control-lg">
                                        <label class="form-label" for="password">Password</label>
                                      </div>                     
                                      <div class="d-flex justify-content-center">
                                        <input class="btn btn-success btn-block btn-lg" type="submit" name="create" value="Sign Up">
                                      </div>
                                      <p class="text-center text-muted mt-5 mb-2">Have already an account? <a href="#" class="fw-bold text-body"><u>Login here</u></a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(function(){
       // alert('hello.');
       Swal.fire({
           'title': 'Hello World',
           'text': 'This is from sweetalert2',
           'type': 'success'
       })
    });
</script>-->
<!--<section>
        <div class="d-flex align-items-center h-100">
            <div class="container h-100 my-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-10">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h3 class="text-center fw-bold mb-5">Create an account</h3>
                                <form action="registration.php" method="post">
                                    <div class="form-outline mb-4">
                                        <input type="text" name="firstname" required class="form-control form-control-lg" id="firstname" />
                                        <label class="form-label" for="firstname">First Name</label>
                                      </div>
                                      <div class="form-outline mb-4">
                                        <input type="text" name="lastname" required class="form-control form-control-lg"  id="lastname" />
                                        <label class="form-label" for="lastname">Last Name</label>
                                      </div>
                                      <div class="form-outline mb-4">
                                        <input type="email" name="email" required class="form-control form-control-lg"  id="email" />
                                        <label class="form-label" for="email">Email</label>
                                      </div>                   
                                      <div class="form-outline mb-4">
                                        <input type="password" name="password" required class="form-control form-control-lg"  id="password">
                                        <label class="form-label" for="password">Password</label>
                                      </div>                     
                                      <div class="d-flex justify-content-center">
                                        <input class="btn btn-success btn-block btn-lg" type="submit" id="register" name="create" value="Sign Up">
                                      </div>
                                      <p class="text-center text-muted mt-5 mb-2">Have already an account? <a href="#" class="fw-bold text-body"><u>Login here</u></a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();
			if(valid){

			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

			}else{
				
			}
		});	
	});
    /*$(function(){
	    $('#register').click(function(){
		    
		    var valid = this.form.checkValidity();
		    if(valid){
			    
	        var firstname = $('#firstname').val();
		    var lastname = $('#lastname').val();
		    var email = $('#email').val();
		    var password = $('#password').val();
			    
			    e.preventDefault();
	
			    $.ajax({
				    type: 'POST',
				    url: 'process.php',
				    data: {firstname: firstname,lastname: lastname,email: email, password: password},
				    success: function(data) {
					Swal.fire({
                                'title': 'Successful',
                                'text': data,
                                'type': 'success'   
                                })
				    },
				    error: function(data){
					Swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors while saving the data',
                                'type': 'error'   
                                    })
				    }
			    });
			    
			   
		    }else {
		    }
		    
		
	    });
	    
  
    });*/

</script>
</body>
</html>-->