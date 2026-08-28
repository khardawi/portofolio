<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    $query = "INSERT INTO messages (name, email, subject, message) 
              VALUES ('$name', '$email', '$subject', '$message')";
    
    if (mysqli_query($conn, $query)) {
        header("Location: contact.php?success=1");
    } else {
        header("Location: contact.php?error=1");
    }
}
?>
<?php include 'includes/navbar.php'; ?>