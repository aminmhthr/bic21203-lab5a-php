<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Lab 5A Q1</title>
</head>
<body>
    <?php
        $name = "Muhammad Amin Bin Mahathir";
        $matric_number = "AI240062"; 
        $course = "Bachelor of Computer Science (Information Security)";
        $year_of_study = "Year 3";
        $address = "Parit Raja, Batu Pahat, Johor";
        ?>

        <table>
            <tr>
                <td>Name:</td>
                <td><?php echo "$name"; ?></td>
            </tr>
            <tr>
                <td>Matric Number:</td>
                <td><?php echo "$matric_number"; ?></td>
            </tr>
            <tr>
                <td>Course:</td>
                <td><?php echo "$course"; ?></td>
            </tr>
            <tr>
                <td>Year of Study:</td>
                <td><?php echo "$year_of_study"; ?></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><?php echo "$address"; ?></td>
            </tr>
        </table>

</body>
</html>