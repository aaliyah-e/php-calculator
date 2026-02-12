<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aaliyah Evans</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>Sum of two numbers</h1>
<h2>Aaliyah Evans</h2>
</header>

<?php
$first_number = $_POST["first_number"];
$second_number = $_POST["second_number"];
?>

The sum of your two numbers is <?php echo $first_number + $second_number;?>! 
</body>

</html>