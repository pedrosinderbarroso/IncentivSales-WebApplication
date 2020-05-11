<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Incentiv Sales</title>
	<link rel="shortcut icon" href="lamp.cse.fau.edu/~pbarroso2015/p4/icon_browser.png"/>
	
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!--Contact Form Css-->
	<link href="css/contact-form.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/mycss.css" rel="stylesheet">
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        var timestamp = '<?=time();?>';
        function updateTime(){
            $('#time').html(Date(timestamp));
            timestamp++;
        }
        $(function(){
            setInterval(updateTime, 120000);
        });
    </script>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
		<a href="index.html"> <img src="images/Incentivsales2.png" id="top_image"/> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="what_do_we_do.html">What do we do?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="areas_of_expertise.html">Areas of Expertise</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact_us.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <br>
<br>
      <div class="row">
          
          <div class="col-lg-9" style="display: block; margin-left: auto; margin-right: auto; margin-top: 2%; margin-bottom: 2%; height: 900px;">

          <div class="container-form">
			<form action="action_page.php" method="post">

				<label for="first_name">First Name</label>
				<input type="text" id="fname" name="first_name" placeholder="Enter your name..">

				<label for="last_name">Last Name</label>
				<input type="text" id="lname" name="last_name" placeholder="Enter your last name..">
                
                <label for="email">Email address</label>
				<input type="text" id="email" name="email" placeholder="Enter your email..">

				<label for="country">Country</label>
				<input type="text" id="country" name="country" placeholder="Enter you country..">
				
                <label for="state">State</label>
				<input type="text" id="state" name="state" placeholder="Enter your state..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>

    

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Pedro 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
