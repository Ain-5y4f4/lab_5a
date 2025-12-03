<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    $students = array(
        array("id" => "001", "name" => "Nur Ariffin", "program" => "CS110"),
        array("id" => "002", "name" => "Ahmad Ali", "program" => "CS110"),
        array("id" => "003", "name" => "Siti Sarah", "program" => "CS111"),
        array("id" => "004", "name" => "John Doe", "program" => "CS110")
    );
    ?>
    
    <h2>Student List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Program</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['program']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
