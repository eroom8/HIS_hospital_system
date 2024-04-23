# HIS Hospital System
#SQL

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




![Screenshot (182)](https://github.com/eroom8/HIS_hospital_system/assets/89536199/84247ac0-e410-4e12-8fa3-a76e3081c01e)

![Screenshot (183)](https://github.com/eroom8/HIS_hospital_system/assets/89536199/02e376a4-8f7e-4f0f-9a39-298ca49a6c43)



![Screenshot (184)](https://github.com/eroom8/HIS_hospital_system/assets/89536199/c841e3d8-814a-44ae-802e-7d2401c6360a)
![Screenshot (187)](https://github.com/eroom8/HIS_hospital_system/assets/89536199/1290a869-1160-4778-b46d-1f5fc83a952e)

![Screenshot (188)](https://github.com/eroom8/HIS_hospital_system/assets/89536199/5c2d55ec-b26d-4bba-b2ff-c7e9b2c80ce7)


![Screenshot (189)](https://github.com/eroom8/HIS_hospital_system/assets/89536199/c576e4b9-3252-43d1-aec8-c2d43475c68e)


