<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $courseName = $_POST['courseName'];
    $courseCode = $_POST['courseCode'];
    $credit = $_POST['credit'];

    // Save data (e.g., into a database)
    echo json_encode(["message" => "Course added successfully"]);
}
?>