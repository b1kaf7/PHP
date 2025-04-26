<?php
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$courses = isset($_POST['courses']) ? implode(", ", $_POST['courses']) : "None";
$comments = $_POST['comments'];
?>

<style>
    table {
        border-collapse: collapse;
        width: 50%;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #000;
        padding: 10px;
        text-align: left;
    }
</style>

<table>
    <tr>
        <th>Name</th>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <th>Gender</th>
        <td><?php echo $gender; ?></td>
    </tr>
    <tr>
        <th>Courses</th>
        <td><?php echo $courses; ?></td>
    </tr>
    <tr>
        <th>Comments</th>
        <td><?php echo nl2br($comments); ?></td>
    </tr>
</table>