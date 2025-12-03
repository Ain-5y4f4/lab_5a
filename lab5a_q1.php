<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
    $name = "Your Name Here";
    $matric = "ABC123456";
    $course = "Computer Science";
    $year = "Year 3";
    $address = "123 University Street, Cyberjaya";
    ?>
    
    <table border="1" cellpadding="10">
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td><strong>Matric Number</strong></td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td><strong>Course</strong></td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td><strong>Year of Study</strong></td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
