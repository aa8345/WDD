<!DOCTYPE html>
<html>
<head>
    <title>My Simple PHP Webpage</title>
</head>
<body>
    <?php
       
        $name = "John"; 
        $age = 25; 
    ?>
    <h1>Welcome to My Webpage</h1>
    <p>My name is <?php echo $name; ?> and I am <?php echo $age; ?> years old.</p>
    <p>Today's date is <?php echo date("F j, Y"); ?>.</p>
</body>
</html>