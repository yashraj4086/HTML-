<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $surname = $_POST['surname'];
    $nic = $_POST['nic'];
    $education = $_POST['education'];
    $courses = $_POST['courses'];

    // Handle photo upload
    $photoName = $_FILES['photo']['name'];
    $photoTmp = $_FILES['photo']['tmp_name'];
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) mkdir($uploadDir);
    move_uploaded_file($photoTmp, $uploadDir . $photoName);

    // Save or process the data (e.g., save to database or send email)
    echo "<h2>Application Received</h2>";
    echo "<p>Thank you, <strong>$first $last $surname</strong>!</p>";
    echo "<p>You applied for: <strong>" . implode(", ", $courses) . "</strong></p>";
    echo "<p>NIC: $nic</p>";
    echo "<p>Education: $education</p>";
    echo "<p>Photo uploaded: $photoName</p>";
} else {
    echo "Invalid request.";
}
?>
