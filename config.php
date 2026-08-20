<?php
/* SK DIGITAL SERVICE 24 - Configuration
   IMPORTANT: Never share your Razorpay Secret publicly.
*/
$DB_HOST = "localhost";
$DB_NAME = "YOUR_DATABASE_NAME";
$DB_USER = "YOUR_DATABASE_USERNAME";
$DB_PASS = "YOUR_DATABASE_PASSWORD";

$RAZORPAY_KEY_ID = "rzp_test_REPLACE_ME";
$RAZORPAY_KEY_SECRET = "REPLACE_WITH_SECRET";
$RAZORPAY_WEBHOOK_SECRET = "REPLACE_WITH_WEBHOOK_SECRET";

$MERCHANT_UPI_ID = "skdigital7@axl";
$MERCHANT_NAME = "SK DIGITAL SERVICE 24";

$ADMIN_USERNAME = "admin";
$ADMIN_PASSWORD_HASH = ""; // Put a password_hash() value here.

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_error) {
    die("Database connection failed.");
}
$conn->set_charset("utf8mb4");

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>
