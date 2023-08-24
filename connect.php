
<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor\autoload.php'; // Adjust the path accordingly
use Dotenv\Dotenv;

// Load the .env file
$dotenv = Dotenv::createImmutable (__DIR__, '/.env');
$dotenv->load();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital"; 
 // Change this to your database name
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telephone = $_POST["telephone"];
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $idNumber = $_POST["idNumber"];
    $address = $_POST["address"];
    $county = $_POST["county"];
    $subCounty = $_POST["subCounty"];
    $patientEmail = $_POST["patientEmail"];
    $gender = $_POST["gender"];
    $maritalStatus = $_POST["maritalStatus"];
    $kinName = $_POST["kinName"];
    $kinDob = $_POST["kinDob"];
    $kinIdNumber = $_POST["kinIdNumber"];
    $kinGender = $_POST["kinGender"];
    $relationship = $_POST["relationship"];
    

    $sql = "INSERT INTO register (telephone, name, dob, idNumber, address, county, subCounty, patientEmail, gender, maritalStatus, kinName, kinDob, kinIdNumber, kinGender, relationship)
            VALUES ('$telephone', '$name', '$dob', '$idNumber', '$address', '$county', '$subCounty', '$patientEmail', '$gender', '$maritalStatus', '$kinName', '$kinDob', '$kinIdNumber', '$kinGender', '$relationship')";

    if ($conn->query($sql) === TRUE) {
        echo '
        <div class="alert alert-success mt-3">
        <strong>Congratulations!</strong> New record created successfully and an email has been sent to the patient.
        </div>
        ';

        $referenceNumber = "REF" . rand(1000, 9999);

        $mail = new PHPMailer;


        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = ' '; //replace with your email
        $mail->Password = ' '; //replace with your password
        $mail->SMTPSecure = 'tls';
        $mail->Port = ; // add port 
        



        $mail->setFrom('eroomdemo@gmail.com', ' HIS-Health strat');
        $mail->addAddress($patientEmail, $name);
        $mail->addAttachment('tmp\health-attachment.png', 'attachment');

        $mail->Subject = 'Thankyou for choosing us and we wish you quick recovery';
        $mail->Body = "Dear $name,\n\nYour patient reference number is: $referenceNumber\n\nThank you.";
        
        if (!$mail->send()) {
            echo "Email could not be sent. Mailer Error: " . $mail->ErrorInfo;
        }
        echo '
        <div class="container">
        <br>
        <a href="patient-data.php" class="btn btn-primary">View Database Users</a>
         </div>
        ';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
 <div class="container">
 <br>
 <a href="index.html" class="btn btn-primary">Go back to the form</a>
 </div>
</div>
</body>
</html>