 <!DOCTYPE html>
<html lang="en">
<head>
<title>uPH Level List v0</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="home/style/home.css" media="screen" />
  <style>
@import url('https://fonts.googleapis.com/css2?family=Lexend:wght@200;300;400;600&display=swap');
</style>
</head>
<body>
  <header>uPH Level List</header>
  <p>Barebones HTML Edition</p>
  <br.a>
  <a href="https://docs.google.com/document/d/1DTeOnbpHyyr9g77VtWj85cqB0Rv3GkhObA-HUDlV4MY/edit?usp=sharing" class="homenav">Google Docs (Much more updated)</a>
  </br>
  <br.a>
  <a href="home/placeholder.php" class="homenav">Top List</a>
    </br>
    <br.a>
  <a href="home/submission.php" class="homenav">Record Submission</a>
      </br>
    <br.a>
  <a href="home/about.php" class="homenav">About</a>
      </br>
      <br.a>
  <a href="home/sitechangelogs.php" class="homenav">Site Changelogs</a>
      </br>
        <p></p>
        <p>
<?php
date_default_timezone_set("Asia/Manila"); echo "Today is " . date("m/d/Y h:i A") . "<br>";
?>
<?php
$d=mktime(11, 00, 0, 4, 1, 2022); date_default_timezone_set("Asia/Manila");
echo "Last List Update: " . date("m/d/Y h:i A", $d);
?></p></br.a>
</body>
</html>

<!--iI doidn't know u know php -->