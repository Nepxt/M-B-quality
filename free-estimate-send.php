<?php

// Define the API endpoint
$apiUrl = 'http://mailer.jasperitinc.com/api/v1/mail';
$hcaptchaSecret = 'ES_095b9c86e5e34dfa8a2c8b831a8edf20';

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("<p style='color: white; background: red; text-align: center;'>Invalid request.</p>");
}

// Honeypot field (Basic Spam Prevention)
if (!empty($_POST['hiddenField'])) {
    die("<p style='color: white; background: red; text-align: center;'>Error: Spam detected.</p>");
}

// Validate hCaptcha
if (empty($_POST['h-captcha-response'])) {
    die("<p style='color: white; background: red; text-align: center;'>Error: hCaptcha verification required.</p>");
}

$hcaptchaResponse = $_POST['h-captcha-response'];
$hcaptchaVerifyUrl = 'https://hcaptcha.com/siteverify';
$hcaptchaData = [
    'secret' => $hcaptchaSecret,
    'response' => $hcaptchaResponse
];

$ch = curl_init($hcaptchaVerifyUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $hcaptchaData);
$response = curl_exec($ch);
curl_close($ch);
$hcaptchaResult = json_decode($response, true);

if (!$hcaptchaResult['success']) {
    die("<p style='color: white; background: red; text-align: center;'>Error: hCaptcha verification failed.</p>");
}

// Required fields
$requiredFields = ['firstName', 'lastName', 'email', 'phone', 'cell', 'address', 'message'];
foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        echo "<p style='color: white; background: red; text-align: center;'>Error: {$field} is required.</p>";
        exit;
    }
}

// Validate Email
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "<p style='color: white; background: red; text-align: center;'>Error: Invalid email format.</p>";
    exit;
}

// Sanitize input
function cleanInput($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

$firstName = cleanInput($_POST['firstName']);
$lastName = cleanInput($_POST['lastName']);
$email = cleanInput($_POST['email']);
$phone = cleanInput($_POST['phone']);
$cell = cleanInput($_POST['cell']);
$address = cleanInput($_POST['address']);
$message = cleanInput($_POST['message']);

// Construct Email Content
$emailBody = '
    <table rules="all" style="border:1px solid #666; font-size:16px;" cellpadding="10" width="100%">
        <tr style="background: #eee;">
            <td colspan="4"><strong>PERSONAL INFORMATION</strong></td>
        </tr>
        <tr>
            <td><strong>First Name:</strong></td>
            <td>' . $firstName . '</td>
            <td><strong>Last Name:</strong></td>
            <td>' . $lastName . '</td>
        </tr>
        <tr>
            <td><strong>Phone:</strong></td>
            <td>' . $phone . '</td>
            <td><strong>Alternate Phone:</strong></td>
            <td>' . $cell . '</td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td>' . $email . '</td>
            <td><strong>Address:</strong></td>
            <td>' . $address . '</td>
        </tr>
        <tr style="background: #eee;">
            <td colspan="4"><strong>Message:</strong></td>
        </tr>
        <tr>
            <td colspan="4">' . $message . '</td>
        </tr>
    </table>';

// Prepare API Request Data
$postData = [
    'secret_id' => '5StarIronfabricationsllc@gmail.com',
    'secret_key' => '5cd6d9935146f7c2462d6d43457cc733',
    'subject' => 'New Message from Website || 5 Star Iron Fabrications LLC',
    'content' => $emailBody,
    'cc' => ["jasperitinc@gmail.com"] // Optional: No more than 2 CC emails
];

// Initialize cURL
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

// Execute cURL Request
$response = curl_exec($ch);

// Check for Errors
if ($response === false) {
    echo '<p style="color: #fff; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;">Error: ' . curl_error($ch) . '</p>';
} else {
    $responseData = json_decode($response, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        echo '<p style="color: #fff; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;">Error decoding JSON response: ' . json_last_error_msg() . '</p>';
    } else {
        // Success Message
        if (isset($responseData['message']) && $responseData['message'] === 'Email sent successfully.') {
            echo '<p style="color: #fff; padding: 20px 0; background: #27ae60; font-size: 25px; text-align: center;">Your message has been sent. Thank you!</p>';
        } else {
            // Error Message
            echo '<p style="color: #fff; padding: 20px 0; background: #d35400; font-size: 25px; text-align: center;">Error: ' . htmlspecialchars($responseData['message']) . '</p>';
        }
    }
}

// Close cURL
curl_close($ch);
?>