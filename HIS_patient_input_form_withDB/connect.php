<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital"; // Change this to "test"

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
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

    // Prepare and execute SQL query
    $sql = "INSERT INTO register (telephone, name, dob, idNumber, address, county, subCounty, patientEmail, gender, maritalStatus, kinName, kinDob, kinIdNumber, kinGender, relationship)
            VALUES ('$telephone', '$name', '$dob', '$idNumber', '$address', '$county', '$subCounty', '$patientEmail', '$gender', '$maritalStatus', '$kinName', '$kinDob', '$kinIdNumber', '$kinGender', '$relationship')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>