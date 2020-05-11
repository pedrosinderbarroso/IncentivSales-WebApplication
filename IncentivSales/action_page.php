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
    
<?php
    
    require_once './php/db_connect.php';

$value = $_POST["first_name"];
$value2 = $_POST["last_name"];
$value3 = $_POST["email"];
$value4 = $_POST["country"];
$value5 = $_POST["state"];
$value6 = $_POST["subject"];

    
$sql = "INSERT INTO contact_us VALUES ('$value', '$value2' , '$value3' , '$value4' , '$value5' , '$value6')";

    
$query = mysqli_query($db, $sql);
if($query){
    header('Location: contact_us.php');
}
else{
    echo("Error! Please fill all fields." . mysqli_error($conection));
}

ob_end_flush();
    
?>
    
</body>
</html>
