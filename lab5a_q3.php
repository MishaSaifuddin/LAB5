<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($width, $length) {
            return $width * $length;
        }

        // Variables for width and length
        $width = 4; // Replace with your chosen width
        $length = 2; // Replace with your chosen length

        // Calculate the area using the function
        $area = calculateArea($width, $length);

        // Display the result
        echo "The area of a rectangle with a width of $width and $length is $area";
    ?>
</body>
</html>
