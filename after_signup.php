<?php
    require("includes/common.php");
    if(isset($_SESSION['email'])){
        header('location:products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login | Crackers Store</title>
            <!--link to Bootstrap minified css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="crackerstore.css">
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Grandstander">
    </head>
    <body>
        <?php
            include "includes/header.php";
        ?>
        
        <div class="jumbotron">
        <center><h3>Please Log-In to continue.</h3></center>
            <p>Your account has been successfully created.</p>
        </div>
        <div class="container">
            <div class="row" style="padding:50px;margin-bottom: 63px">
                <div class="col-sm-10">
                    <h2 style="font-family:Grandstander">Log-In</h2>
                    <form action="login_submit.php"
                    method="post" style="padding-bottom:300px">
                        
                        
                    <div class="form-group col-sm-10">
                        <input class="form-control" type="email" placeholder="Enter Your Email" name="email" required>
                    </div>
                        
                    <div class="form-group col-sm-10">
                        `<input class="form-control" type="password" placeholder="Enter ypur password" name="password" required>
                    </div>
                        
                    <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>