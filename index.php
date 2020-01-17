<?php
$name = "Leo Christen";
$photo = "<img src=https://scontent-ort2-1.xx.fbcdn.net/v/t1.0-9/20265083_1201159226656427_6477627136452027970_n.jpg?_nc_cat=103&_nc_ohc=2BqWeHiBgeAAX9I42UT&_nc_ht=scontent-ort2-1.xx&oh=68305e9ca539979e875b9fa6f9462ad5&oe=5EA5E6AC style='width:300px;height:300px;'/>";
$bio = "<p> I am a US Army Veteran and after obtaining my Associates Degree decided to return for my Bachelors. I enjoy gaming, coding in my off time, and taking trips with my wife. I also love anything Star Wars or NASA <p/>";
$yearMajor = "<p> I am currently a Junior and am obtaining my Bachelors of Science in Computer Science with a minor in Mathematics <p>";

$email = "<a href=\"christenl1@nku.edu\">christenl1@nku.edu</a>";

$whyEnrolled = "<p> I am enrolled in this class for a couple of reasons. The first being I am really interested in how the back-end works on a database and how we, as the client, can see such information. The second reason being that it does fullfill a CSC elective course over the 300 level </p>";
$addInfo = "<p> Additional info: I wanted to add this last semester I really enjoyed your class, you have been one of the best professors in my academic career (not sucking up I promise), and really enjoy your teaching style. I am hoping to get a lot out of this class like I did in Web Development!</p>";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Leo Christen</title>
  </head>

  <body style="background-color: lightgray;">

  <h1 style='text-align:center';><?php
  echo $name;
  ?></h1>

  <p style='text-align:center';>
  <a href="<?= $email ?>
  </p>
  <br />

  <div class='row'>
    <div class='col-1'></div>
    <div class='col-3 text-right'>
      <?php
      echo $photo;
      ?>
    </div>
    <div class='col-7 pr-5'>  
  
	  <?php
  	  echo $bio;
	  ?>

	  <?php
    	echo $yearMajor;
	  ?>



	  <?php
	  echo $whyEnrolled;
	  ?>

	  <?php
	  echo $addInfo;
    ?>
  </div>
</div>

	
	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
