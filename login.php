<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./bootstrap-5.0.1-dist/css/bootstrap.min.css>">
    <link rel="stylesheet" href="./css/style.css">
    <title>Signin</title>
</head>
<body>
    <div>
    if(isset($_POST['create'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO users (firstname, lastname, email, password ) VALUES(?,?)";
            $stminsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$$email, $password]);
            if($result) {
                echo'Successfully saved.';
            }else {
                echo 'There were errors while saving the data';
            }

        }
    ?>
    </div>
    <section>
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-10">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-md-block">
                                <img class="img-fluid rounded-left" src="./img1/pexels-photo-6205580.jpeg">
                            </div>
                            <div class="col-lg-5 d-flex align-items-center">
                                <div class="card-body p-4 text-black">
                                    <form method="post" action="login.php">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <h1 class="fw-bold displ">Coffee N' Cakes</h1>
                                        </div>
                                        <h5 class="mb-3 pb-3 lead">Sign into your account</h5>
                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" class="form-control form-control-lg" name="email" required>
                                            <label class="form-label" for="email">Email address</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" class="form-control form-control-lg" name="password" required>
                                            <label class="form-label" for="password">Password</label>
                                          </div>
                                          <div class="pt-1 mb-5">
                                          <input class="btn btn-dark btn-lg btn-block" type="submit" name="create" value="Login">
                                            <!--<button class="btn btn-dark btn-lg btn-block" type="submit" name="create" value="Login">Login</button>-->
                                            <p class="small"><a class="text-muted" href="#">Forgot password?</a></p>
                                            <p class="pb-5">New customer? <a href="signup.html" style="color: #C4A53E;">Register here</a></p>
                                          </div>
                                          <hr class="divider mb-0">
                                    </form>
                                </div>
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
</script>
</html>