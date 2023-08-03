# HIS_hospital_system
patient details capture with database 
CREATE DATABASE test;
CREATE TABLE registration 
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    gender ENUM('Male', 'Female', 'Other'),
    email VARCHAR(100),
    password VARCHAR(100), -- Replace with appropriate data type and length for the password
    number VARCHAR(20), -- Replace with appropriate data type and length for the number
    telephone VARCHAR(20),
    dob DATE,
    idNumber VARCHAR(20),
    address VARCHAR(255),
    county VARCHAR(50),
    subCounty VARCHAR(50),
    patientEmail VARCHAR(100),
    maritalStatus ENUM('Single', 'Married', 'Divorced', 'Widowed', 'Other'),
    kinName VARCHAR(100),
    kinDob DATE,
    kinIdNumber VARCHAR(20),
    kinGender ENUM('Male', 'Female', 'Other'),
    relationship VARCHAR(50),
    patientRefNumber VARCHAR(100) UNIQUE

clone the program on vscode
go to index.html and run then select preffered web browser
ensure your folder is saved in xammp/htdocs 
