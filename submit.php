<?php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "info@chpcebu.com";
    $subject = "TESDA Course Enrollment Registration";
    $body = "";

    foreach ($_POST as $key => $value) {
        $body .= "$key: $value\n";
    }

    $headers = "From: noreply@chpcebu.com\r\n";
    $headers .= "Reply-To: noreply@chpcebu.com\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Registration submitted successfully!'); window.location='Index.html';</script>";
    } else {
        echo "<script>alert('There was an error sending your registration.'); window.location='Index.html';</script>";
    }
} else {
    header("Location: Index.html");
    exit();
}
?>