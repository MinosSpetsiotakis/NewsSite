<!DOCTYPE html>
<?php  
session_start();   // session starts with the help of this function 
if(isset($_SESSION['user'])) 
 {
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "web programming";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT uid FROM users WHERE username = '".$user."'" ;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $msg='Username already exists , please pick another one';
        }
    } else {
            $sql1 = "INSERT INTO `users`(`username`, `password`) VALUES ('".$_POST['username']."','".$_POST['password']."')" ;
            $result1 = $conn->query($sql1);
            echo "Created";    
    }
    $conn->close();
}
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="assets/css/Login.css" rel="stylesheet" />
</head>
<body>
         
    <section class="container-fluid login-page">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <img class="w-50" src="assets/images/logo2.png" />
            </div>
        </div>
        <div class="row main-content">
            <div class="offset-lg-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
                <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type = "text" class = "form-control" 
               name = "username" placeholder = "Username" 
               required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type = "password" class = "form-control"
               name = "password" placeholder = "Password" required>
                    </div>
                    <button class = "btn btn-lg btn-primary btn-block btn-login" type = "submit" name = "login">Login</button>
                    <br />
                    <?php echo $msg; ?>
                    <br />
                    <small>Already have an account?<a href="Login.php"> Sign Up!</a></small><br/><br/>
                    <small>Are you a writer?<a href="LoginWriter.php"> Log In Here!</a></small>
                </form>
            </div>
        </div>
    </section>
</body>
</html>