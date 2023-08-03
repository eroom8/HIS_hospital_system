<?php
    $telephone = $_POST['telephone'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $idNumber = $_POST['idNumber'];
    $address = $_POST['address'];
    $county = $_POST['county'];
    $subCounty = $_POST['subCounty'];
    $patientEmail = $_POST['patientEmail'];
    $gender = $_POST['gender'];
    $maritalStatus = $_POST['maritalStatus'];

    $kinName = $_POST['kinName'];
    $kinDob = $_POST['kinDob'];
    $kinIdNumber = $_POST['kinIdNumber'];
    $kinGender = $_POST['kinGender'];
    $relationship = $_POST['relationship'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed: " . $conn->connect_error);
    } else {
        // Generate a random patient reference number (you can use any method suitable for your system)
        $patientRefNumber = uniqid('PREF', true);

        $stmt = $conn->prepare("INSERT INTO registration (firstName, lastName, gender, email, password, number, telephone, dob, idNumber, address, county, subCounty, patientEmail, maritalStatus, kinName, kinDob, kinIdNumber, kinGender, relationship, patientRefNumber) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssissssssssssssss", $name, $dob, $gender, $patientEmail, $password, $number, $telephone, $dob, $idNumber, $address, $county, $subCounty, $patientEmail, $maritalStatus, $kinName, $kinDob, $kinIdNumber, $kinGender, $relationship, $patientRefNumber);
        $execval = $stmt->execute();
        if ($execval) {
            // Send an email to the patient with the patient reference number
            $to = $patientEmail;
            $subject = "Patient Registration - Reference Number";
            $message = "Dear " . $name . ",\n\nThank you for registering as a patient. Your patient reference number is: " . $patientRefNumber . ". Please keep this number for future reference.\n\nBest regards,\nYour Healthcare Provider";
            $headers = "From: your-email@example.com"; // Replace with the actual email address
            mail($to, $subject, $message, $headers);

            echo "Registration successfully. An email with the patient reference number has been sent to the patient.";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }
?>
