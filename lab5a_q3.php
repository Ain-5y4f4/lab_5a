<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function calculateArea($length, $width) {
        return $length * $width;
    }
    
    $length = 10;
    $width = 5;
    $area = calculateArea($length, $width);
    ?>
    
    <h2>Rectangle Area Calculator</h2>
    <p>Length: <?php echo $length; ?> cm</p>
    <p>Width: <?php echo $width; ?> cm</p>
    <p><strong>Area: <?php echo $area; ?> cm²</strong></p>
</body>
</html>
