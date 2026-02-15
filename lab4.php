<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aaliyah Evans</title>
<link rel="stylesheet" href="lab4style.css">
</head>

<body>

<header>
    <h1>Addition Calculator</h1>
    <h2>Aaliyah Evans</h2>
</header>



<section class="calculator">
<p>
    Enter two numbers in the spaces provided. Click the button to add them together.
</p>
<form action="lab4response.php" method="post" class="calculator-inputs">    
    <input type="text" name="first_number"><br>
    <b>+</b>
    <input type="text" name="second_number"><br>
<input type="submit" value="Calculate!">
</form>
</section>

<section class="reflection-section">
<p>
    Figuring out how to add the two number inputs together from the form was challenging to me. I kept thinking that it would be more complicated than it actually ended up being, and thought I would need to do some kind of conversion with the variables after obtaining them through the $_POST method to be able to add them together. But to my surprise, after just trying to add together the numbers normally first without doing anything else to them, that worked!
    <br>
    <br>
    Another aspect I found challenging was styling, but I always find it a little challenging, haha.
</p>
</body>

</html>