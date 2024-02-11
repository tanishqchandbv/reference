<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY if else</title>
    <style>
        *{
            margin: auto;
        }
    </style>
</head>
<body>
    <center>
    <form action="testnew.php" method="POST">
        <label for="name" >Name:</label>
        <input type="text" id="fname" name="fname" placeholder="Enter your name here"><br>
        <label for="age">Age:</label>
        <input type="text" name="age" placeholder="Enter your age here"><br>
        <label for="gender ">Gender:</label>
        <input type="radio" name="gender" id="male">Male
        <input type="radio" name="gender" id="female">Female
        <input type="radio" name="gender" id="other">Other
        <br>
        <label for="course">Course:</label><br>
        <input type="checkbox" name="course[]" id="course" value="BCA"> BCA<br>
        <input type="checkbox" name="course[]" id="course" value="BBA"> BBA<br>
        <input type="checkbox" name="course[]" id="course" value="MBA"> MBA<br>
        <input type="checkbox" name="course[]" id="course" value="MMS"> MMS<br>
        <label for="mob">Phone:</label>
        <input type="tel" name="mob" id="mob"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>
        <input type="submit" value="Submit">

    </form>
</center>
</body>
</html>