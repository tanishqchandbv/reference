<?php
echo "Name: ". $_REQUEST['fname'] . "<br>";
echo "Age: " . $_REQUEST['age'] . "<br>";
echo "Gender: " . $_REQUEST['gender']. "<br>";
$course = $_REQUEST['course'];
echo "Course: " . implode($course). "<br>";
echo "Mobile: " . $_REQUEST['mob']. "<br>";
echo "Email: " . $_REQUEST['email']. "<br>";
?>