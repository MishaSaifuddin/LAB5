<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        // Variables to store your details
        $name = "Nurul Ummi Shahirah Binti Mohd Saifuddin"; // Replace with your name
        $matricNumber = "CI220099"; // Replace with your matric number
        $course = "Bachelor of Information Security"; // Replace with your course
        $yearOfStudy = "3rd Year"; // Replace with your year of study
        $address = "No 21, Saujan Impian, Kajang, Selangor"; // Replace with your address
    ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
